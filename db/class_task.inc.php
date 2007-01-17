<?php if(!function_exists('startedIndexPhp')) { header("location:../index.php"); exit;}


/**
* cache some db-elements
*
* those assoc. arrays hold references to objects from database
*  like       $id => object
*
*/
global $g_cache_tasks;
$g_cache_tasks=array();



//====================================================================
// Task
//====================================================================
class Task extends DbProjectItem
{

    public $level;              # level if child of parent-tasks
    public $num_subtasks;       # temp cache for tree-lists


    /**
    * needs separate functions for translation fieldnames on runtime
    */
    public static function init()
    {
        #self::$type= ITEM_TASK;
        addProjectItemFields(&self::$fields_static);

        foreach(array(
            new FieldInternal(array(    'name'=>'id',
                'default'=>0,
                'in_db_object'=>1,
                'in_db_item'=>1,
        		'log_changes'=>false,
            )),
            new FieldString   (array('name'=>'name',
                'title'=>__('Name'),
                'view_in_forms'=>true,
                'required'=>true,
            )),
            new FieldString   (array('name'=>'short',
                'title'         =>__('Short'),
                'view_in_forms' =>true,
            )),
            new FieldDate     (array('name'=>'date_start',
                'title'         =>__('Date start'),
                'view_in_forms' =>true,
                'default'       =>FINIT_TODAY,
                'log_changes'   => false,
            )),
            new FieldDate     (array('name'=>'date_closed',
                'title'         =>__('Date closed'),
                'view_in_forms' =>true,
                'default'       =>FINIT_NEVER,
                'log_changes'   => false,
            )),
            new FieldOption   (array('name'=>'status',
                'title'=>__('Status'),
                'view_in_forms'=>true,
                'default'=>2,
            )),

            new FieldInt      (array('name'=>'prio',
                'title'=>__('Priority'),
                'view_in_forms'=>true,
                'default'=>3,
            )),
            new FieldInt      (array('name'=>'for_milestone',
                'title'=>__('For Milestone'),
                'view_in_forms'=>true,
                'default'=>0,
            )),
            new FieldInt      (array('name'=>'resolved_version',
                'title'=>__('resolved in version'),
                'view_in_forms'=>true,
                'default'=>0,
            )),
            new FieldInt      (array('name'=>'resolve_reason',
                'title'=>__('Resolve reason'),
                'view_in_forms'=>true,
                'default'=> RESOLVED_UNDEFINED,
            )),

            new FieldText     (array('name'=>'description',
                'title'=>__('Description'),
                'view_in_forms'=>true,
            )),

            /**
            * DEPRECIATED !
            */
            new FieldBool(  array('name'=>'is_folder',
                'title'=>__('show as folder (may contain other tasks)'),
                'view_in_forms'=>true,
                'default'   =>0,
            )),
            new FieldBool(  array('name'=>'is_milestone',
                'title'=>__('is a milestone'),
                'tooltip'=> __('milestones are shown in a different list'),
                'view_in_forms'=>false,
                'default'   =>0,
            )),

            new FieldInternal(  array('name'=>'is_released',
                'title'         =>__('released'),
                'view_in_forms' =>false,
                'default'       =>RELEASED_UNDEFINED,
                'log_changes'   => true,
            )),
            new FieldDatetime(  array('name'=>'time_released',
                'title'         =>__('release time'),
                'view_in_forms' =>true,
                'default'       =>FINIT_NEVER
            )),

            new FieldPercentage(array('name'=>'completion',
                'title'=>__('Completion'),
                'view_in_forms'=>true,
                'default'=>FINIT_NEVER,
            )),
            new FieldInternal(  array('name'=>'parent_task',
                'view_in_forms'=>true,
                'default'=>0,
                'log_changes'   => true,
            )),
            /**
            * estimated time in seconds
            *
            */
            new FieldInt(      array('name'=>'estimated',
                'title'=>__('Estimated time'),
                'view_in_forms'=>true,
            )),
            new FieldInt(      array('name'=>'estimated_max',
                'title'=>__('Estimated worst case'),
                'view_in_forms'=>true,
            )),

            new FieldHidden(  array('name'=>'issue_report',
        		'log_changes'=>false,
            )),
            new FieldOption    (array('name'=>'label',
                'title'=>__('Label'),
                'view_in_forms'=>true,
                'log_changes'=>true,
            )),
            new FieldDateTime      (array('name'=>'planned_start',
                'title'=>__('Planned Start'),
                'view_in_forms'=>true,
                'default'=>FINIT_NEVER,
            )),
            new FieldDateTime      (array('name'=>'planned_end',
                'title'=>__('Planned End'),
                'view_in_forms'=>true,
                'default'=>FINIT_NEVER,
            )),
            new FieldInternal      (array('name'=>'view_collapsed',
                'default'=>0,
        		'log_changes'=>false,
            )),
            new FieldInternal      (array('name'=>'category',
                'default'=>TCATEGORY_TASK,
                'log_changes'   => true,
            )),

            /**
            * additional int for defining position in lists
            */
            new FieldInt      (array('name'=>'order_id',
                'title'=>__('Order Id'),
                'default'       => 0,
                'log_changes'   => true,
            )),

        ) as $f) {
            self::$fields_static[$f->name] = $f;
        }
    }


	//=== constructor ================================================
	function __construct ($id_or_array=false)
    {
        $this->fields= &self::$fields_static;

        parent::__construct($id_or_array);
        if(!$this->type){
            $this->type= ITEM_TASK;
        }

   	}

/*
Task::query(array(
    Task::Filter('project','=',0),
    Task::Filter('name','matches','tom'),
))
-> url go=tasksQuery&filter_project_is=0&filter_name_matches=tom

$filters_str= get('filter_*');
$f= array();
foreach($filters_str as $fs=>$value) {
  preg_matches("/(.*)_(.*)/", $fs, $matches);
  list($count, $name, $type)= $matches;
  if($count == 2) {
    $f[]= new Filter($name, $type, $value);
  }
}

    public static function Filter($field_name, $type, $value)
    {
        if(isset(self::$fields_static[$field_name])) {
            $field= self::$fields_static[$field_name];
            switch($type) {
                case '=': return new FilterIs($field, $value);
                case '!=': return new FilterIsNot($field, $value);
                case '<=': return new FilterLessEqual($field, $value);
            }

        }
    }
*/

    /**
    * query from db
    *
    * - returns NULL if failed
    */
    static function getById($id)
    {
        if($id) {
            $t= new Task($id);
            if($t->type != ITEM_TASK) {
                return NULL;
            }
            if($t->id) {
                return $t;
            }
        }
        return NULL;
    }


    /**
    * query if visible for current user
    *
    * - returns NULL if failed
    */
    static function getVisibleById($id)
    {
        if($id && $t= Task::getById($id)) {
            if($p= Project::getById($t->project)) {
                if($p->validateViewItem($t)) {
                    return $t;
                }
            }
        }
        return NULL;
    }

    /**
    * query if editable for current user
    */
    static function getEditableById($id)
    {
        if($t= Task::getById($id)) {
            if($p= Project::getById($t->project)) {
                if($p->validateEditItem($t, false)) {
                    return $t;
                }
            }
        }
        return NULL;
    }



    function getProject()
    {
        require_once(confGet('DIR_STREBER') . 'db/class_project.inc.php');
        if(!$project= Project::getById($this->project)) {
            trigger_error("Task:getProject. project-id not set",E_USER_WARNING);
        }
        return $project;
    }



    function getProjectLink()
    {
        if($project= $this->getProject()) {
            return "<nobr>".$project->getLink().'</nobr>';
        }
        else {
            return '';
        }
    }


    function renderTypeAsBreadcrumbs()
    {
        global $g_status_names;
        $status=  $this->status != STATUS_OPEN && isset($g_status_names[$this->status])
               ?  $g_status_names[$this->status]
               :  '';

        $type=$this->getLabel();

        if($folder= $this->getFolderLinks()) {
            $buffer=  $folder ." &gt; " . $type . ' (' . $status . ')';
        }
        else {
            $buffer=  $status .' '. $type ;
        }
        return $buffer;
    }


    /**
    * NOTE: this is not recursive!
    */
    function getSubtasks($order_by=NULL)
    {

        if(!$project = Project::getById($this->project)) {
            $PH->abortWarning(__("task without project?"), ERROR_BUG);
        }


        return $project->getTasks(array(
            'order_by'      => $order_by,
            'sort_hierarchical'=>false,
            'parent_task'=> $this->id,
            'show_folders'=>true,
            'status_min'=> STATUS_UPCOMING,
            'status_max'=> STATUS_CLOSED,
        ));
    }

    function getSubtasksRecursive()
    {

        if(!$project = Project::getById($this->project)) {
            $PH->abortWarning(__("task without project?"), ERROR_BUG);
        }

        $tasks= array();

        foreach($project->getTasks(array(
            'sort_hierarchical'=>false,
            'parent_task'=> $this->id,
            'show_folders'=>true,
            'status_min'=> STATUS_UPCOMING,
            'status_max'=> STATUS_CLOSED,
        )) as $t) {
            $tasks[]= $t;
            if($t->category == TCATEGORY_FOLDER) {
                foreach($t->getSubtasksRecursive() as $st) {
                    $tasks[] = $st;
                }
            }
        }
        return $tasks;
    }



    function getMilestoneTasks($order_by=NULL)
    {

        if(!$project = Project::getById($this->project)) {
            $PH->abortWarning(__("task without project?"), ERROR_BUG);
        }

        return $project->getTasks(array(
            'order_by'      => $order_by,
            'sort_hierarchical'=>false,
            'for_milestone'=> $this->id,
            'show_folders'=>true,
        ));
    }

    /**
    * recursively count number of subtasks
    *
    * although this function uses cached objects it can getSubtasks
    * extremely slow on large project since all(!) sub-tasks are counted
    */
    function getNumSubtasks()
    {
        global $auth;

        if(!$project= Project::getById($this->project)) {
            $PH->abortWarning(__("task without project?"), ERROR_BUG);
        }
        $subtasks = Task::getAll(array(
            'folders_only'      =>false,
            'show_folders'      =>true,
            'sort_hierarchical' =>true,
            'use_collapsed'     =>false,
            'parent_task'       =>$this->id,

        ));
        $count= 0;
        foreach($subtasks as $t) {
            if(!$t->is_folder) {
                $count++;
            }
        }
        return $count;
    }



    #----------------------------
    # get folder
    #----------------------------
    # returns array of tasks
    function getFolder()
    {
        $folder=array();
        $folder_ids=array();  #hash to detect cycle-lock

        $cur_task=$this;
        while($cur_task && intval($cur_task->parent_task)) {
            if(isset($folder_ids[$cur_task->parent_task])) {
                trigger_error('Cycle lock for task '.$cur_task->parent_task.'! Possibly invalid database structure', E_USER_WARNING);
                break;

            }
            else if($cur_task=Task::getVisibleById(intval($cur_task->parent_task))) {
                $folder_ids[$cur_task->id]= true;
            	$folder[]=$cur_task;
            }
        }
        return array_reverse($folder);
    }

    #----------------------------
    # get folder as Links
    #----------------------------
    # returns array of tasks
    function getFolderLinks($shortnames=true) {
        measure_start('col_TaskFolderlinks');
        global $PH;
        $folder=$this->getFolder();
        $buffer="";
        $delimiter='';
        foreach($folder as $f) {
            $buffer.=$delimiter;
            if($shortnames) {
                $buffer.=$PH->getLink('taskView',$f->getShort(),array('tsk'=>$f->id));
            }
            else {
                $buffer.=$PH->getLink('taskView',$f->name,array('tsk'=>$f->id));
            }

            $delimiter='<em> &gt; </em>';
        }
        measure_stop('col_TaskFolderlinks');
        if($buffer) {
            # return "<nobr>$buffer</nobr>";  ### madlyr - removed <nobr> for folders - try to see task list with folders on 3rd level
            return $buffer;
        }
        else {
            return NULL;
        }
    }

    #------------------------------------------------------------------------------------------------
    # ungroup subtasks
    # - when deleting a folder (or changing it into a normal task) we need to ungroup the subtasks
    # - returns number of ungrouped tasks
    #------------------------------------------------------------------------------------------------
    public function ungroupSubtasks()
    {
        $tasks=$this->getSubtasks();
        foreach($tasks as $t) {
            $t->parent_task= $this->parent_task;
            $t->update();
        }

        if($this->is_milestone) {
            $tasks= $this->getMilestoneTasks();
            foreach($tasks as $t) {
                $t->for_milestone= 0;
                $t->update();
            }
        }
        return count($tasks);
    }

    /**
    * sort task as intended list
    *
    * NOTE: this function is really slow (in long is may take more than 50%
    * of complete computation time!) Sooner or later this should be optimized.
    */
/*    public static function &sortHierarchical(&$taskfolders) {

        # sort taskfolders #
        $tmp_folder_list=array();
        foreach($taskfolders as $f) {
            if(!$f->parent_task) {
                $tmp_folder_list[]=$f;
                self::sort_folders(&$taskfolders, &$f, 1,&$tmp_folder_list);
            }
            else {
                $dummy=true;;
            }
        }
        return $tmp_folder_list;
    }*/


    /*private static function sort_folders(&$taskfolders, Task &$task,$level,&$tmp_folder_list) {
        for($i=0; $i< count($taskfolders); $i++) {
            $f2= $taskfolders[$i];
            if($f2->parent_task == $task->id) {
                $f2->level= $level;
                $tmp_folder_list[]=$f2;
                self::sort_folders(&$taskfolders, $f2,$level+1, &$tmp_folder_list);
            }
            else {
                $dummy=true;
            }
        }
    }*/

    #----------------------------------------------------
    # getComments()
    #----------------------------------------------------
    function &getComments($args=array())
    {
      	if($project= Project::getVisibleById($this->project)) {
    		$args['on_task']= $this->id;

    		$comments= $project->getComments($args);
    		return $comments;
       	}
    }


    function &getLatestComment($args=array())
    {
      	if($project= Project::getVisibleById($this->project)) {
    		$args['on_task']= $this->id;
    		$args['order_by']= 'created ASC';
    		#$args['limit']=    1;

    		$comments= $project->getComments($args);
    		return $comments[0];
       	}
    }

	/**
	* @@@ todo: this should by mapped to Project::getNumComments()
	*/
    function &getNumComments()
    {
        global $auth;
		$prefix= confGet('DB_TABLE_PREFIX');
        require_once(confGet('DIR_STREBER') . 'db/class_comment.inc.php');
        $dbh = new DB_Mysql;
        $sth= $dbh->prepare(
            "SELECT COUNT(*) from {$prefix}item i, {$prefix}comment c, {$prefix}projectperson upp
            WHERE
                    upp.person = {$auth->cur_user->id}
                AND upp.project = $this->project
                AND upp.state = 1

                AND i.type = '".ITEM_COMMENT."'
                AND i.project = $this->project
                AND i.state = 1
                AND ( i.pub_level >= upp.level_view
                      OR
                      i.created_by = {$auth->cur_user->id}
                )

                AND c.id = i.id
                AND c.task=$this->id    /* only  task-comments*/
             "
        );
    	$sth->execute("",1);
    	$tmp=$sth->fetchall_assoc();
        return $tmp[0]['COUNT(*)'];
    }


    /**
    * sum up visible(!) efforts for tasks (including sub-tasks)
    *
    * since this functions obeys pub_level the sum might be less than expected
    *
    * it also checks efforts of deleted subtasks!
    */
    function &getSumEfforts()
    {
        global $auth;
        $sum=0;

		$prefix= confGet('DB_TABLE_PREFIX');
        require_once(confGet('DIR_STREBER') . 'db/class_effort.inc.php');
        $dbh = new DB_Mysql;
        $query_str=

            "SELECT SUM(unix_timestamp(e.time_end) - unix_timestamp(e.time_start)) from {$prefix}item i, {$prefix}effort e, {$prefix}projectperson upp
            WHERE
                    upp.person = {$auth->cur_user->id}
                AND upp.project = $this->project
                AND upp.state = 1

                AND i.type = '".ITEM_EFFORT."'
                AND i.state=1
                AND i.project = $this->project
                AND ( i.pub_level >= upp.level_view
                      OR
                      i.created_by = {$auth->cur_user->id}
                )

                AND e.id = i.id
                AND e.task=$this->id    /* only  task-efforts*/
            ";
        
        $sth= $dbh->prepare($query_str);
    	$sth->execute("",1);
    	$tmp= $sth->fetch_row();
    	if($tmp) {
    	    $sum+= $tmp[0];
    	}

        ### recursively go through sub-tasks ###
        if($subtasks=$this->getSubtasks()) {
            foreach($subtasks as $st){
                $sum+= $st->getSumEfforts();
            }
        }
        return $sum;
    }



    /**
    * getHomeTasks($project=false)
    */
    public static function &getHomeTasks($order_by=" is_folder DESC,  parent_task, prio ASC, project, name")
    {
        global $auth;
		$prefix= confGet('DB_TABLE_PREFIX');
        $dbh = new DB_Mysql;

        #--- select all visible tasks in home ---
        switch($auth->cur_user->show_tasks_at_home) {
        case SHOW_ASSIGNED_ONLY:

            $query_str= "
            SELECT  i.*, t.* from {$prefix}item i, {$prefix}task t, {$prefix}project p, {$prefix}projectperson upp, {$prefix}taskperson tp, {$prefix}item itp
            WHERE
                    upp.person = {$auth->cur_user->id}
                AND upp.state = 1
                AND upp.project = p.id   /* all user projectpersons */

                AND p.state = 1
                AND p.status >=1
                AND p.status <= ".STATUS_OPEN."

                AND p.id = i.project

                AND i.type = '".ITEM_TASK."'
                AND t.is_folder = 0
                AND i.pub_level >= upp.level_view
                AND i.state = 1
                AND i.project = p.id

                AND t.id= i.id
                AND t.status <= ". STATUS_COMPLETED."

                /* filter assigned */
                AND t.id = tp.task
                       AND tp.person = {$auth->cur_user->id}
                       AND tp.id = itp.id
                               AND itp.state = 1
                               AND (itp.pub_level >= upp.level_view
                                    OR
                                   itp.created_by = {$auth->cur_user->id}
                               )



            ". getOrderByString($order_by);
            break;



        case SHOW_ALSO_UNASSIGNED:
            trigger_error("filtering unassigned tasks has not been implemented yet",E_USER_NOTICE);
        case SHOW_ALL_OPEN:

            $query_str= "SELECT  i.*, t.* from {$prefix}item i, {$prefix}task t, {$prefix}project p, {$prefix}projectperson upp
            WHERE
                    upp.person = {$auth->cur_user->id}
                AND upp.state = 1
                AND upp.project = p.id   /* all user projectpersons */

                AND p.state = 1
                AND p.status >=1
                AND p.status <= ".STATUS_OPEN."

                AND p.id = i.project

                AND i.type = '".ITEM_TASK."'
                AND t.is_folder = 0
                AND i.pub_level >= upp.level_view   /* @@@ add created_by support */
                AND i.state = 1
                AND i.project = p.id

                AND t.id= i.id
                AND t.status <= ".STATUS_BLOCKED."

            ". getOrderByString($order_by);
            break;
        default:
            trigger_error("Unknown setting for home task-list",E_USER_NOTICE);
        }

    	$sth= $dbh->prepare($query_str);
    	$sth->execute("",1);
    	$tmp=$sth->fetchall_assoc();

    	$tasks=array();
        foreach($tmp as $t) {

            unset($t['due_sort']);                          # remove temporary sql-variable
            $task=new Task($t);

            $tasks[]=$task;
        }
        return $tasks;
    }


    /**
    * return tasks of project
    *
    *
    *
    * @params
    *   show_folders=true,
    *   order_by=NULL,
    *   status_min=2,
    *   status_max=4,
    *   visible_only=true,
    *   alive_only=true,
    *   parent_task=NULL)  # if NULL parent-task is ignored
    */
    static function &getAll( $args=NULL)
    {
        global $auth;
		$prefix = confGet('DB_TABLE_PREFIX');

        ### default params ###
        $project        = NULL;
        $show_folders   = true;
        $order_by       = "is_folder DESC, parent_task, prio ASC,project,name";
        $status_min     = STATUS_NEW;
        $status_max     = STATUS_BLOCKED;
        $visible_only   = NULL;       # use project rights settings
        $alive_only     = true;       # ignore deleted
        $parent_task    = NULL;       #
        $sort_hierarchical= false;
        $use_collapsed  = false;      # by default ignore collapsed folders
        $issues_only    = false;
        $folders_only   = false;
        $level          = 0;         # hierarchical depth in trees
        $assigned_to_person=0;      # skip by default
        $search         = NULL;
        $name           = NULL;
        $is_milestone   = 0;
        $for_milestone  = NULL;
        $resolved_version = NULL;
        $is_released_min= NULL;
        $is_released_max= NULL;
		$id             = NULL;
		$modified_by    = NULL;
		$not_modified_by    = NULL;
		$resolve_reason_min= NULL;
		$category       = NULL;
		$category_in    = NULL;
		$label          = NULL;

        ### filter params ###
        if($args) {
            foreach($args as $key=>$value) {
                if(!isset($$key) && !is_null($$key) && !$$key==="") {
                    trigger_error("unknown parameter",E_USER_NOTICE);
                }
                else {
                    $$key= $value;
                }
            }
        }

        if($sort_hierarchical && is_null($parent_task)) {
            $parent_task=0;
        }
        $str_project= $project
            ? 'AND upp.project='.intval($project)
            : '';
        $str_project2= $project
            ? 'AND i.project='.intval($project)
            : '';

        $str_is_alive= $alive_only
            ? 'AND i.state='. ITEM_STATE_OK
            : '';

        $str_is_issue= $issues_only
            ? 'AND t.issue_report!=0'
            : '';

        $str_is_folder= $show_folders
            ? ''
            : 'AND t.is_folder=0';


        $str_modified_by= $modified_by
            ? 'AND i.modified_by ='. intval($modified_by)
            : '';

        $str_not_modified_by= $not_modified_by
            ? 'AND i.modified_by !='. intval($not_modified_by)
            : '';


	    $str_id= $id
	       ? 'AND t.id='.intval($id)
	       : '';


        if(!is_null($label)) {
            $str_label= 'AND t.label=' . intval($label);
        }
        else {
            $str_label= '';
        }


        if(!is_null($is_milestone)) {
            $str_is_milestone= $is_milestone
                ? 'AND t.is_milestone=1'
                : 'AND t.is_milestone=0';
        }
        else {
            $str_is_milestone='';
        }

        if(!is_null($category)) {
            $str_category='AND t.category='. intval($category);
        }
        else {
            $str_category='';
        }
        if(!is_null($category_in)) {
            $str_category_in='AND t.category IN('. join(",",$category_in) .')';
        }
        else {
            $str_category_in='';
        }

        $str_is_released_min= $is_released_min
            ? 'AND t.is_released >= '. intval($is_released_min)
            : '';


        if($resolve_reason_min !== NULL) {
            $str_resolve_reason_min= $resolve_reason_min
                ? 'AND t.resovle_reason >= '. intval($resolve_reason_min)
                : '';
        }
        else {
            $str_reasolve_reason_min= '';
        }


        $str_is_released_max= $is_released_max
            ? 'AND t.is_released <= '. intval($is_released_max)
            : '';

        $str_has_name= $name
            ? "AND (t.name='".asSecureString($name)."' or t.short='".asSecureString($name)."')"
            : "";

        if(!is_null($for_milestone)) {
            $str_for_milestone=  'AND t.for_milestone='. intval($for_milestone);
        }
        else {
            $str_for_milestone= '';
        }


        if(!is_null($resolved_version)) {
            $str_resolved_version=  'AND t.resolved_version='.intval($resolved_version);
        }
        else {
            $str_resolved_version= '';
        }


        if($folders_only) {
            $str_is_folder= 'AND t.is_folder=1';
        }

        $str_parent_task= !is_null($parent_task)
            ? 'AND t.parent_task='.intval($parent_task)
            : '';

        $str_match= $search
            ? "AND MATCH (t.name,t.short,t.description) AGAINST ('". asCleanString($search) ."*' IN BOOLEAN MODE)"
        : '';

        if(is_null($visible_only)) {

            $visible_only   = $auth->cur_user && $auth->cur_user->user_rights & RIGHT_VIEWALL
                            ? false
                            : true                            ;
        }
        if($visible_only) {

            ### only filter assigned to person ###
            if($assigned_to_person) {
                $str_query=
                "SELECT i.*, t.* from {$prefix}item i, {$prefix}task t, {$prefix}taskperson tp, {$prefix}projectperson upp, {$prefix}item itp
                WHERE
                        upp.person = {$auth->cur_user->id}
                    $str_project
                    AND i.type = '".ITEM_TASK."'
                    AND i.project=upp.project
                    $str_is_alive
                    $str_project2
                    $str_modified_by
                    $str_not_modified_by

                    $str_is_issue

                    AND ( i.pub_level >= upp.level_view
                          OR
                          i.created_by = {$auth->cur_user->id}
                    )

                    AND t.id = i.id
					$str_id
                    $str_is_folder
                    $str_is_issue
                    $str_label
                    $str_parent_task
                    $str_has_name
                    $str_is_milestone
                    $str_is_released_min
                    $str_is_released_max
                    $str_for_milestone
                    $str_resolved_version
                    $str_category
                    $str_category_in
                    AND t.status >= ". intval($status_min)."
                    AND t.status <= ". intval($status_max)."

                    AND i.id = tp.task
                           AND tp.person = $assigned_to_person
                           AND itp.id = tp.id
                           AND itp.state = 1
                           ".
                           #        AND (itp.pub_level >= upp.level_view
                           #            OR
                           #            itp.created_by = {$auth->cur_user->id}
                           #        )
                           "
                    $str_match

                " . getOrderByString($order_by);
            }
            else {
                $str_query=
                "SELECT i.*, t.* from {$prefix}item i, {$prefix}task t, {$prefix}projectperson upp
                WHERE
                        upp.person = {$auth->cur_user->id}
                    $str_project
                    AND i.type = '".ITEM_TASK."'
                    AND i.project = upp.project
                    $str_is_alive
                    $str_project2
                    $str_modified_by
                    $str_not_modified_by
                    $str_is_issue
                    $str_is_milestone
                    $str_is_released_min
                    $str_is_released_max
                    $str_for_milestone
                    $str_label
                    $str_resolved_version
                    $str_category
                    $str_category_in
                    AND ( i.pub_level >= upp.level_view
                          OR
                          i.created_by = {$auth->cur_user->id}
                    )

                    AND t.id = i.id
                    $str_is_folder
                    $str_is_issue
                    $str_parent_task
                    $str_has_name
					$str_id
                    AND t.status >= ".intval($status_min)."
                    AND t.status <= ".intval($status_max)."
                    $str_match

                " . getOrderByString($order_by);
            }
        }
        ### show all ###
        else {
            if($assigned_to_person) {
                $str_query=
            	"SELECT i.*, t.* from {$prefix}item i, {$prefix}task t, {$prefix}taskperson tp ,{$prefix}item itp
                WHERE
                    i.type = '".ITEM_TASK."'
                $str_project2
                $str_is_alive
                $str_modified_by
                $str_not_modified_by

                AND t.id = i.id
				$str_id
                $str_is_folder
                $str_is_issue
                $str_parent_task
                $str_has_name
                $str_label
                $str_is_milestone
                $str_is_released_min
                $str_is_released_max
                $str_for_milestone
                $str_resolved_version
                $str_category
                $str_category_in

                AND t.status >= ".intval($status_min)."
                AND t.status <= ".intval($status_max)."
                $str_match
                AND i.id = tp.task
                AND tp.person = $assigned_to_person
                       AND tp.id = itp.id
                       AND itp.state = 1
                " . getOrderByString($order_by);
            }
            else {
                $str_query=
            	"SELECT i.*, t.* from {$prefix}item i, {$prefix}task t
                WHERE
                    i.type = '".ITEM_TASK."'
                $str_project2
                $str_is_alive
                $str_modified_by
                $str_not_modified_by

                AND t.id = i.id
				$str_id
                $str_is_folder
                $str_is_issue
                $str_is_milestone
                $str_for_milestone
                $str_label
                $str_resolved_version
                $str_category
                $str_category_in

                $str_is_released_min
                $str_is_released_max
                $str_parent_task
                $str_has_name
                AND t.status >= ".intval($status_min)."
                AND t.status <= ".intval($status_max)."
                $str_match

                " . getOrderByString($order_by);
            }
        }
        
        $dbh = new DB_Mysql;
        $sth= $dbh->prepare($str_query);

    	$sth->execute("",1);
    	$tmp=$sth->fetchall_assoc();

    	$tasks=array();
        foreach($tmp as $t) {
            $task=new Task($t);
            $task->level= $level;
            $tasks[]=$task;

            ### hierarchical / recursive sorting ###
            if($sort_hierarchical && $task->is_folder && (!$use_collapsed || !$task->view_collapsed)) {
                if($sub_tasks=Task::getAll(array(
                    'sort_hierarchical' =>true,

                    'use_collapsed'=> $use_collapsed,
                    'parent_task'   => $task->id,
                    'order_by'      => $order_by,
                    'visible_only'  => $visible_only,
                    'alive_only'    => $alive_only,
                    'issues_only'   => $issues_only,
                    'status_min'    => $status_min,
                    'status_max'    => $status_max,
                    'level'         => $level+1,
                    'folders_only'  => $folders_only,
                    'project'       => $project,
                ))) {
                    foreach($sub_tasks as &$st) {
                        $tasks[]= $st;
                    }
                }
            }
        }
        return $tasks;
    }

    /**
    * getAssignments
    */
    function getAssignments() {
		$prefix = confGet('DB_TABLE_PREFIX');
        require_once(confGet('DIR_STREBER') . 'db/class_taskperson.inc.php');
        $dbh = new DB_Mysql;

        $order_by="pers.name";

        ### all projects ###
        #
        # TODO @@@ CHECK projeckt-assigment / visible persons...
        # if( $auth->cur_user->user_rights & RIGHT_PROJECT_ASSIGN) {
        $query_str=
            "SELECT itp.*, tp.* from {$prefix}item itp, {$prefix}person pers, {$prefix}taskperson tp
            WHERE
                pers.state = 1

            AND pers.id = tp.person
                      AND tp.task= $this->id
                      AND tp.id = itp.id
                              AND itp.state = 1

            ORDER BY $order_by";

        $sth= $dbh->prepare($query_str);
    	$sth->execute("",1);
    	$tmp=$sth->fetchall_assoc();
        $tps=array();
        foreach($tmp as $tp) {
            $tps[]=new TaskPerson($tp);
        }
        return $tps;
    }


    /**
    * getAssignments
    */
    function isAssignedToPerson($person)
    {

        if($person instanceof Person) {
            $person_id= $person->id;
        }
        else {
            $person_id= intval($person);
        }

		$prefix = confGet('DB_TABLE_PREFIX');
        $dbh = new DB_Mysql;

        ### all projects ###
        $query_str=
            "SELECT COUNT(*) from {$prefix}item itp, {$prefix}taskperson tp
            WHERE
                itp.state= 1
            AND itp.id = tp.id
            AND             tp.person= $person_id
            AND             tp.task= $this->id";


        $sth= $dbh->prepare($query_str);
    	$sth->execute("",1);

    	$tmp=$sth->fetchall_assoc();
    	return $tmp[0]['COUNT(*)'];
    }



    /**
    * getAssignedPersons
    */
    function getAssignedPersons($visible_only=true) {
        global $auth;

		$prefix = confGet('DB_TABLE_PREFIX');
        $dbh = new DB_Mysql;

        $order_by="pers.name";

        $query_str=
            "SELECT i.*, pers.* from {$prefix}item i, {$prefix}person pers, {$prefix}taskperson tp, {$prefix}item itp
            WHERE
                pers.state = 1

            AND pers.id = i.id
            AND pers.id = tp.person
                      AND tp.task= $this->id
                      AND tp.id = itp.id
                              AND itp.state = 1

            ORDER BY $order_by";

        $sth= $dbh->prepare($query_str);
    	$sth->execute("",1);
    	$tmp=$sth->fetchall_assoc();

        $persons=array();


        #--- return all ---
        if(!$visible_only || $auth->cur_user->user_rights & RIGHT_PROJECT_ASSIGN) {
            foreach($tmp as $t) {
                $persons[]=new Person($t);
            }

            return $persons;
        }
        else {
            $project= Project::getById($this->project);
            foreach($tmp as $t) {

                $p=new Person($t);
                if($project->isPersonVisibleTeamMember($p)) {
                    $persons[]= $p;
                }
            }
            return $persons;
        }
    }

    public function getLink($short_name= true)
    {

        $style_isdone= $this->status >= STATUS_COMPLETED
                    ? 'isDone'
                    : '';

        global $PH;
        if($short_name) {
            return '<span  title="'.asHtml($this->name).'" class="item task">'.$PH->getLink('taskView',$this->getShort(),array('tsk'=>$this->id),$style_isdone).'</span>';
        }
        else {
            return '<span  class="item task">'.$PH->getLink('taskView',$this->name,array('tsk'=>$this->id),$style_isdone).'</span>';
        }
    }


    public function getLabel()
    {
        if($this->is_folder) {
            return __('Folder');
        }
        else if($this->is_milestone) {
            if($this->is_released >= RELEASED_UPCOMMING) {
                return __('Released Milestone');
            }
            else {
                return __('Milestone');
            }
        }
        else if($this->label) {
            if(!$project= Project::getById($this->project)) {
                trigger_error("task without project?", E_USER_WARNING);
            }
            $labels=split(",",$project->labels);
            $value= $labels[$this->label-1];
            return $value;
        }
        else {
            return '';
        }
    }

    /**
    *	Tino Beirau
	*
 	*	return tasks of search-query
    *
    * @params
    *   id
	*	show_folders=true,
    *   order_by=NULL,
    *   status_min=2,
    *   status_max=4,
    *   visible_only=true,
    *   alive_only=true,
    *   parent_task=NULL)  # if NULL parent-task is ignored
    */
    static function &getTaskById( $args=NULL)
    {
        global $auth;
		$prefix = confGet('DB_TABLE_PREFIX');

        ### default params ###
        $id             = NULL;
		$project        = NULL;
        $show_folders   = true;
        $order_by       = "is_folder DESC, parent_task, prio ASC,project,name";
        $status_min     = STATUS_NEW;
        $status_max     = STATUS_BLOCKED;
        $visible_only   = true;       # use project rights settings
        $alive_only     = true;       # ignore deleted
        $parent_task    = NULL;       #
        $sort_hierarchical= false;
        $use_collapsed  = false;      # by default ignore collapsed folders
        $issues_only    = false;
        $folders_only   = false;
        $level          = 0;         # hierarchical depth in trees
        $assigned_to_person=0;      # skip by default
        $search         = NULL;
        $name           = NULL;
        $is_milestone   = 0;
        $for_milestone  = NULL;

        ### filter params ###
        if($args) {
            foreach($args as $key=>$value) {
                if(!isset($$key) && !is_null($$key) && !$$key==="") {
                    trigger_error("unknown parameter",E_USER_NOTICE);
                }
                else {
                    $$key= $value;
                }
            }
        }

        if($sort_hierarchical && is_null($parent_task)) {
            $parent_task=0;
        }
        $str_project= $project
            ? 'AND upp.project='.intval($project)
            : '';
        $str_project2= $project
            ? 'AND i.project='.intval($project)
            : '';

        $str_is_alive= $alive_only
            ? 'AND i.state='. ITEM_STATE_OK
            : '';

        $str_is_issue= $issues_only
            ? 'AND t.issue_report!=0'
            : '';

        $str_is_folder= $show_folders
            ? ''
            : 'AND t.is_folder=0';


	    $str_id = "AND i.id='" . intval($id) ."'";


        if(!is_null($is_milestone)) {
            $str_is_milestone= $is_milestone
                ? 'AND t.is_milestone=1'
                : 'AND t.is_milestone=0';
        }
        else {
            $str_is_milestone='';
        }

        $str_has_name= $name
            ? "AND (t.name='".asSecureString($name)."' or t.short='".asSecureString($name)."')"
            : "";

        if(!is_null($for_milestone)) {
            $str_for_milestone= $for_milestone
                ? 'AND t.for_milestone='.intval($for_milestone)
                : '';
        }
        else {
            $str_for_milestone= '';
        }


        if($folders_only) {
            $str_is_folder= 'AND t.is_folder=1';
        }

        $str_parent_task= !is_null($parent_task)
            ? 'AND t.parent_task='.intval($parent_task)
            : '';

        $str_match= $search
        ? "AND MATCH (t.name,t.short,t.description) AGAINST ('". asCleanString($search) ."*' IN BOOLEAN MODE)"
        : '';

        if($visible_only) {
            if($assigned_to_person) {
				$str_query=
                "SELECT i.*, t.* from {$prefix}item i, {$prefix}task t, {$prefix}taskperson tp, {$prefix}projectperson upp, {$prefix}item itp
                WHERE
                        upp.person = {$auth->cur_user->id}
                    $str_project
                    AND i.type = '".ITEM_TASK."'
                    AND i.project=upp.project
					$str_id

                    $str_is_alive
                    $str_project2

                    $str_is_issue
                    AND ( i.pub_level >= upp.level_view
                          OR
                          i.created_by = {$auth->cur_user->id}
                    )

                    AND t.id = i.id

                    $str_is_folder
                    $str_is_issue
                    $str_parent_task
                    $str_has_name
                    $str_is_milestone
                    $str_for_milestone
                    AND t.status >= ". intval($status_min)."
                    AND t.status <= ". intval($status_max)."

                    AND i.id = tp.task
                           AND tp.person = $assigned_to_person
                           AND itp.id = tp.id
                           AND itp.state = 1
                                   AND (itp.pub_level >= upp.level_view
                                       OR
                                       itp.created_by = {$auth->cur_user->id}
                                   )
                    $str_match

                " . getOrderByString($order_by);
            }
            else {
                $str_query=
                "SELECT i.*, t.* from {$prefix}item i, {$prefix}task t, {$prefix}projectperson upp
                WHERE

					upp.person = {$auth->cur_user->id}
                    $str_project
                    AND i.type = '".ITEM_TASK."'
                    AND i.project = upp.project
					$str_id
                    $str_is_alive
                    $str_project2
                    $str_is_issue
                    $str_is_milestone
                    $str_for_milestone
                    AND ( i.pub_level >= upp.level_view
                          OR
                          i.created_by = {$auth->cur_user->id}
                    )
					AND t.id = i.id
                    $str_is_folder
                    $str_is_issue
                    $str_parent_task
                    $str_has_name

                    AND t.status >= ".intval($status_min)."
                    AND t.status <= ".intval($status_max)."
                    $str_match

                " . getOrderByString($order_by);

            }
        }
        ### show all ###
        else {
            if($assigned_to_person) {
                $str_query=
            	"SELECT i.*, t.* from {$prefix}item i, {$prefix}task t, {$prefix}taskperson tp ,{$prefix}item itp
                WHERE
                    i.type = '".ITEM_TASK."'
				$str_id

                $str_project2
                $str_is_alive

                #AND t.id = i.id
                $str_id
				$str_is_folder
                $str_is_issue
                $str_parent_task
                $str_has_name
                $str_is_milestone
                $str_for_milestone

                AND t.status >= ".intval($status_min)."
                AND t.status <= ".intval($status_max)."
                $str_match
                AND i.id = tp.task
                AND tp.person = $assigned_to_person
                       AND tp.id = itp.id
                       AND itp.state = 1
                " . getOrderByString($order_by);
            }
            else {
                $str_query=
            	"SELECT i.*, t.* from {$prefix}item i, {$prefix}task t
                WHERE
                    i.type = '".ITEM_TASK."'
				$str_id

                $str_project2
                $str_is_alive

                #AND t.id = i.id
                $str_id
				$str_is_folder
                $str_is_issue
                $str_is_milestone
                $str_for_milestone
                $str_parent_task
                $str_has_name
                AND t.status >= ".intval($status_min)."
                AND t.status <= ".intval($status_max)."
                $str_match

                " . getOrderByString($order_by);
            }
        }

        $dbh = new DB_Mysql;
        $sth= $dbh->prepare($str_query);

    	$sth->execute("",1);
    	$tmp=$sth->fetchall_assoc();
    	$tasks=array();
        foreach($tmp as $t) {
            $task=new Task($t);
            $task->level= $level;
            $tasks[]=$task;

            ### hierarchical / recursive sorting ###
            if(  $sort_hierarchical
              && $task->category == TCATEGORY_FOLDER
              && (!$use_collapsed || !$task->view_collapsed)
            ) {
                if($sub_tasks=Task::getAll(array(
                    'sort_hierarchical' =>true,

                    'use_collapsed'=> $use_collapsed,
                    'parent_task'   => $task->id,
                    'order_by'      => $order_by,
                    'visible_only'  => $visible_only,
                    'alive_only'    => $alive_only,
                    'issues_only'   => $issues_only,
                    'status_min'    => $status_min,
                    'status_max'    => $status_max,
                    'level'         => $level+1,
                    'folders_only'  => $folders_only,
                    'project'       => $project,
                ))) {
                    foreach($sub_tasks as &$st) {
                        $tasks[]= $st;
                    }
                }
            }
        }
        return $tasks;
    }

}

Task::init();


?>
