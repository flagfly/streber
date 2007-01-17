<?php if(!function_exists('startedIndexPhp')) { header("location:../index.php"); exit;}

# streber - a php based project management system
# Copyright (c) 2005 Thomas Mann - thomas@pixtur.de
# Distributed under the terms and conditions of the GPL as stated in docs/license.txt

/**
 * pages relating to viewing one project
 *
 * @author: Thomas Mann
 * @uses:
 * @usedby:
 *
 */

require_once(confGet('DIR_STREBER') . "db/class_task.inc.php");
require_once(confGet('DIR_STREBER') . "db/class_project.inc.php");
require_once(confGet('DIR_STREBER') . "db/class_projectperson.inc.php");
require_once(confGet('DIR_STREBER') . "db/db_itemperson.inc.php");
require_once(confGet('DIR_STREBER') . "render/render_list.inc.php");
require_once(confGet('DIR_STREBER') . "lists/list_taskfolders.inc.php");
require_once(confGet('DIR_STREBER') . "lists/list_comments.inc.php");
require_once(confGet('DIR_STREBER') . "lists/list_tasks.inc.php");
require_once(confGet('DIR_STREBER') . "lists/list_project_team.inc.php");





#---------------------------------------------------------------------------
# view Project
#---------------------------------------------------------------------------
function ProjView()
{
    global $PH;
    global $auth;
    require_once(confGet('DIR_STREBER') . "render/render_wiki.inc.php");


	### get current project ###
    $id=getOnePassedId('prj','projects_*');
    $project= Project::getVisibleById($id);
	if(!$project || !$project->id) {
        $PH->abortWarning(__("invalid project-id"));
		return;
	}

    ### define from-handle ###
    $PH->defineFromHandle(array('prj'=>$project->id));

	## is viewed by user ##
	$project->nowViewedByUser();

	## next milestone ##
    $next=$project->getNextMilestone();

    ### set up page ####
    {
        $page= new Page();

        $page->crumbs= build_project_crumbs($project);
        $page->options= build_projView_options($project);

    	$page->cur_tab='projects';
        $page->title=$project->name;
        $page->title_minor=__("Overview");

        if($project->status == STATUS_TEMPLATE) {
            $page->type=__("Project Template");
        }
        else if ($project->status >= STATUS_COMPLETED){
            $page->type=__("Inactive Project");
        }
        else {
            $page->type=__("Project","Page Type");
        }

        ### page functions ###
        $page->add_function(new PageFunctionGroup(array(
            'name'      => __('edit:')
        )));
        $page->add_function(new PageFunction(array(
            'target'    =>'projEdit',
            'params'    =>array('prj'=>$project->id),
            'icon'      =>'edit',
            'tooltip'   =>__('Edit this project'),
            'name'      => __('Project')

        )));
		
		$item = ItemPerson::getAll(array('person'=>$auth->cur_user->id,'item'=>$project->id));
		if((!$item) || ($item[0]->is_bookmark == 0)){
			$page->add_function(new PageFunction(array(
				'target'    =>'itemsAsBookmark',
				'params'    =>array('proj'=>$project->id),
				'tooltip'   =>__('Mark this project as bookmark'),
				'name'      =>__('Bookmark'),
			)));
		}
		else{
			$page->add_function(new PageFunction(array(
				'target'    =>'itemsRemoveBookmark',
				'params'    =>array('proj'=>$project->id),
				'tooltip'   =>__('Remove this bookmark'),
				'name'      =>__('Remove Bookmark'),
			)));
		} 
			
		if($project->state == 1) {
				$page->add_function(new PageFunction(array(
					'target'=>'projDelete',
					'params'=>array('prj'=>$project->id),
					'icon'=>'delete',
					'tooltip'=>__('Delete this project'),
					'name'=>__('Delete')
				)));
		}


        $page->add_function(new PageFunctionGroup(array(
            'name'      => __('new:')
        )));
        $page->add_function(new PageFunction(array(
            'target'    =>'projAddPerson',
            'params'    =>array('prj'=>$project->id),
            'icon'      =>'add',
            'tooltip'   =>__('Add person as team-member to project'),
            'name'      =>__('Team member')
        )));
        $page->add_function(new PageFunction(array(
            'target'    =>'taskNew',
            'params'    =>array('prj'=>$project->id),
            'icon'      =>'new',
            'tooltip'   =>__('Create task'),
            'name'      =>__('Task')
        )));
        $page->add_function(new PageFunction(array(
            'target'    =>'taskNewBug',
            'params'    =>array('prj'=>$project->id,'add_issue'=>1),
            'icon'      =>'new',
            'tooltip'   =>__('Create task with issue-report'),
            'name'      =>__('Bug'),
        )));
        $page->add_function(new PageFunction(array(
            'target'    =>'effortNew',
            'params'    =>array('prj'=>$project->id),
            'icon'      =>'loghours',
            'tooltip'   =>__('Book effort for this project'),
            'name'      =>__('Effort'),
        )));

    	### render title ###
        echo(new PageHeader);
    }
    echo (new PageContentOpen_Columns);

    measure_stop('init2');
    measure_start('info');

    #--- write info-block ------------
    {
        $block=new PageBlock(array('title'=>__('Details','block title'),'id'=>'summary'));
        $block->render_blockStart();
        echo "<div class=text>";
        /*
        if($project->description) {
        	$diz= wiki2html($project->description, $project);
            #$diz=preg_replace("/\n\r/","<br>#",$project->description);
            echo "$diz";
        }
        */

        if($project->company) {
            require_once(confGet('DIR_STREBER') . "db/class_company.inc.php");
            if( $company= Company::getVisibleById($project->company)) {
                echo "<p><label>".__('Client','label')."</label>". $project->getCompanyLink(true) ."</p>";
                if($company->phone) {
                    echo "<p><label>" . __('Phone','label') . "</label>". asHtml($company->phone)."</p>";
                }
                if($company->email) {
                    echo "<p><label>" . __('E-Mail','label') . "</label>". url2LinkMail($company->email)."</p>";
                }
            }
            echo "<br>";
        }


        global $g_status_names;
        if($status=$g_status_names[$project->status]) {
            $ssummary= $project->status_summary
                     ? ' ('. asHtml($project->status_summary).')'
                     : '';

            echo "<p><label>".__("Status","Label in summary").'</label>'. asHtml($status) . $ssummary. '</p>';
        }


        if($project->wikipage) {
	        echo "<p><label>".__("Wikipage","Label in summary")."</label>".url2linkExtern($project->wikipage)."</p>";
	    }

        if($project->projectpage) {
	        echo "<p><label>".__("Projectpage","Label in summary")."</label>".url2linkExtern($project->projectpage)."</p>";
	    }


        if($project->date_start !="0000-00-00") {
	        echo "<p><label>".__("Opened","Label in summary")."</label>".renderDateHtml($project->date_start)."</p>";
	    }


        if($project->date_closed !="0000-00-00") {
            echo "<p><label>".__("Closed","Label in summary")."</label>".renderDateHtml($project->date_closed)."</p>";
        }

        if($person_creator= Person::getVisibleById($project->created_by)) {
            echo "<p><label>".__("Created by","Label in summary")."</label>".$person_creator->getLink()."</p>" ;
        }

        if($project->modified_by != $project->created_by) {
            if($person_modify= Person::getVisibleById($project->modified_by)) {
                echo "<p><label>".__("Last modified by","Label in summary")."</label>".$person_modify->getLink()."</p>" ;
            }
        }


        $sum_efforts= $project->getEffortsSum();
        if($sum_efforts) {
            echo "<p><label>" . __("Logged effort") . "</label>"
                .$PH->getLink('projViewEfforts',round($sum_efforts/60/60,1),array('prj'=>$project->id))
                ." ".__("hours")."</p>" ;
        }

        $sum_progress= $project->getProgressSum();
        if($sum_progress) {
            echo "<p><label>" . __("Completed") . "</label><b>"
                .$PH->getLink('projViewTasks',number_format($sum_progress, 1, ',', ''),array('prj'=>$project->id))
                ."%</b></p>" ;
        }
        $num_tasks= $project->getNumTasks();
        if($num_tasks) {
            echo "<p><label>" . __("Tasks") . "</label>"
                .$PH->getLink('projViewTasks',$num_tasks,array('prj'=>$project->id))
                ."</p>" ;
        }




        echo "</div>";

        $block->render_blockEnd();
    }

    measure_stop('info');

    /**
    * list folders has become obsolete, since
    * moving tasks is done by separate dialog
    */
    /*
    measure_start('folders');

    #--- list folders -----------------------------------------------------------
    $list= new ListBlock_taskFolders($project);
    $list->render();

    measure_stop('folders');
    */
    measure_start('team');

    #--- list team -----------------------------------------------------------
    {

        $list= new ListBlock_projectTeam();
        $list->title= __('Team members');
        $list->show_icons=true;
		$list->active_block_function = 'list';
		$list->print_automatic($project);
    }



    ### write list of folders ###
    {
        $list= new ListBlock_tasks(array(
            'use_short_names'=>true,
            'show_summary'  =>false,
        ));
        $list->title=__('Folders');
        $list->query_options['show_folders']= true;
        $list->query_options['folders_only']= true;
        $list->query_options['project']= $project->id;
        $list->groupings= NULL;
        $list->block_functions= NULL;
        $list->id= 'folders';
        $list->show_functions=false;
        unset($list->columns['status']);
        unset($list->columns['date_start']);
        unset($list->columns['days_left']);
        unset($list->columns['created_by']);
        unset($list->columns['label']);
        unset($list->columns['project']);
        unset($list->columns['modified']);
        unset($list->columns['assigned_to']);
        unset($list->columns['planned_start']);
        unset($list->columns['pub_level']);
        unset($list->columns['prio']);
        unset($list->columns['for_milestone']);
        unset($list->columns['estimate_complete']);
        unset($list->columns['efforts']);

        unset($list->functions['tasksDelete']);
        unset($list->functions['tasksCompleted']);
        unset($list->functions['taskEdit']);

        #$list->functions= array();

        $list->active_block_function = 'tree';


        $list->print_automatic($project);
    }


    echo(new PageContentNextCol);
    measure_stop('team');


    #--- description ----------------------------------------------------------------
    if($project->description!="") {
        $block=new PageBlock(array(
            'title'=>__('Description'),
            'id'=>'description',
            #'reduced_header'=>true,

        ));
        $block->render_blockStart();

        #echo $str;


        echo "<div class=text>";

        echo wiki2html($project->description, $project);

        ### update task if relative links have been converted to ids ###
        global $g_wiki_auto_adjusted;
        if(isset($g_wiki_auto_adjusted) && $g_wiki_auto_adjusted) {
            $project->description= $g_wiki_auto_adjusted;
            $project->update(array('description'),false);
        }

        echo "</div>";

        $block->render_blockEnd();
    }

    #--- list changes (new) -----------------------------------------------------------
    measure_start('changes');
    {
        require_once(confGet('DIR_STREBER') . './lists/list_changes.inc.php');

        $list= new ListBlock_changes();
        $list->query_options['date_min']= $auth->cur_user->last_logout;
        $list->query_options['not_modified_by']= $auth->cur_user->id;
        $list->print_automatic($project);
    }
    measure_stop('changes');


    #--- list changes (old style-----------------------------------------------------------
    /*
    measure_start('changes');
    {
        require_once(confGet('DIR_STREBER') . './lists/list_projectchanges.inc.php');

        $list= new ListBlock_projectchanges();
        $list->query_options['date_min']= $auth->cur_user->last_logout;
        $list->query_options['not_modified_by']= $auth->cur_user->id;
        $list->print_automatic($project);
    }
    measure_stop('changes');
    */





    if(confGet("PROJECT_COMMENTS")) {
        $order_str=get("sort_".$PH->cur_page->id ."_comments");

		if($auth->cur_user->user_rights & RIGHT_VIEWALL) {
	        $comments= $project->getComments(array(
	            'order_by'=>$order_str,
	            'visible_only'=>false,
	        ));
		}
		else{
	        $comments= $project->getComments(array(
	            'order_by'=>$order_str,
	        ));
		}
		/**
		* hide project comments by default
		*/
		if(count($comments)) {

            $list_comments= new ListBlock_comments();
            $list_comments->title=__("Comments on project");
            $list_comments->title_append_hidden=
                count($comments)
                ? "(".count($comments).")"
                : '';
            $list_comments->no_items_html=$PH->getLink('commentNew','',array('prj'=>$project->id));
            $list_comments->render_list(&$comments);
        }
    }

    echo "<br><br>";                                        # @@@ hack for firefox overflow problems
    ### HACKING: 'add new task'-field ###
    $PH->go_submit='taskNew';
    echo '<input type="hidden" name="prj" value="'.$project->id.'">';


    ### rss link ###
    {
		#$rss_url = confGet('SELF_PROTOCOL').'://'.confGet('SELF_URL');
		#$rss_url = str_replace("index.php", "rss/", $rss_url);
		#$prj_id  = $this->page->options[0]->target_params['prj'];
		$url= $PH->getUrl('projViewAsRSS',array('prj'=> $project->id));
		echo  "<a style='margin:0px; border-width:0px;' href='{$url}' target='_blank'>"
		        ."<img style='margin:0px; border-width:0px;' src='" . getThemeFile("icons/rss_icon.gif") ."'>"
		        ."</a>";
	}
    echo (new PageContentClose);
   	echo (new PageHtmlEnd());
}








?>
