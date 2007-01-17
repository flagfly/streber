<?php

/**
* use this file for translating streber into new languages
*
* Some hints:
*
* - This file should be edited with a utf8 capable editor.
* - Insert the translation into the '' .
* - Avoid...
*   - quotes inside strings
*   - linebreaks inside strings
* - Characters behind the pipe ('|') are just for clarifying the context.
*   Do not translate them!
* - Rename this file into "??.inc" where as "??" being the apache-shortcut of the language (like "en").
* - Add the language definition to "conf/conf.inc" (search for $g_languages)
*
* - With each new version of streber, there will be a "??.inc.changes" file with new phrases that needs
*   to be translated. Copy and paste the contense of those files into the language-files.
* - run "perl scanLanguages.pl" from this directory to check for completeness.
*/

/**
* translation into:
*
*    translated by:
*
*             date:
*
*  streber version:
*
*         comments:
*/

global $g_lang_table;
$g_lang_table= array(

### ../conf/defines.inc.php   ###
'autodetect'                  =>'',  # line 304

### ../pages/company.inc.php   ###
'Summary'                     =>'',  # line 552

### ../pages/person.inc.php   ###
'Details'                     =>'',  # line 1061

### ../pages/search.inc.php   ###
'Name'                        =>'',  # line 898

### ../db/class_company.inc.php   ###
'Required. (e.g. pixtur ag)'  =>'',  # line 34
'Short|form field for company'=>'',  # line 39
'Optional: Short name shown in lists (eg. pixtur)'=>'',  # line 40
'Tag line|form field for company'=>'',  # line 45

### ../db/class_person.inc.php   ###
'Optional: Additional tagline (eg. multimedia concepts)'=>'',  # line 49

### ../db/class_company.inc.php   ###
'Phone|form field for company'=>'',  # line 51
'Optional: Phone (eg. +49-30-12345678)'=>'',  # line 52
'Fax|form field for company'  =>'',  # line 57
'Optional: Fax (eg. +49-30-12345678)'=>'',  # line 58
'Street'                      =>'',  # line 63
'Optional: (eg. Poststreet 28)'=>'',  # line 64
'Zipcode'                     =>'',  # line 69
'Optional: (eg. 12345 Berlin)'=>'',  # line 70
'Website'                     =>'',  # line 75
'Optional: (eg. http://www.pixtur.de)'=>'',  # line 76
'Intranet'                    =>'',  # line 81
'Optional: (eg. http://www.pixtur.de/login.php?name=someone)'=>'',  # line 88
'E-Mail'                      =>'',  # line 87
'Comments|form label for company'=>'',  # line 93

### ../db/db_itemperson.inc.php   ###
'Optional'                    =>'',  # line 46

### ../db/class_company.inc.php   ###
'more than expected'          =>'',  # line 623

### ../pages/effort.inc.php   ###
'not available'               =>'',  # line 361

### ../db/class_effort.inc.php   ###
'optional if tasks linked to this effort'=>'',  # line 37
'Time Start'                  =>'',  # line 44
'Time End'                    =>'',  # line 48

### ../pages/version.inc.php   ###
'Description'                 =>'',  # line 323

### ../db/class_issue.inc.php   ###
'Production build'            =>'',  # line 53
'Steps to reproduce'          =>'',  # line 57
'Expected result'             =>'',  # line 60
'Suggested Solution'          =>'',  # line 63

### ../db/class_person.inc.php   ###
'Full name'                   =>'',  # line 39
'Required. Full name like (e.g. Thomas Mann)'=>'',  # line 40
'Nickname'                    =>'',  # line 44
'only required if user can login (e.g. pixtur)'=>'',  # line 45

### ../lists/list_persons.inc.php   ###
'Tagline'                     =>'',  # line 68

### ../db/class_person.inc.php   ###
'Mobile Phone'                =>'',  # line 52
'Optional: Mobile phone (eg. +49-172-12345678)'=>'',  # line 53
'Office Phone'                =>'',  # line 58
'Optional: Office Phone (eg. +49-30-12345678)'=>'',  # line 59
'Office Fax'                  =>'',  # line 62
'Optional: Office Fax (eg. +49-30-12345678)'=>'',  # line 63
'Office Street'               =>'',  # line 66
'Optional: Official Street and Number (eg. Poststreet 28)'=>'',  # line 67
'Office Zipcode'              =>'',  # line 70
'Optional: Official Zip-Code and City (eg. 12345 Berlin)'=>'',  # line 71
'Office Page'                 =>'',  # line 74
'Optional: (eg. www.pixtur.de)'=>'',  # line 102
'Office E-Mail'               =>'',  # line 78
'Optional: (eg. thomas@pixtur.de)'=>'',  # line 106
'Personal Phone'              =>'',  # line 85
'Optional: Private Phone (eg. +49-30-12345678)'=>'',  # line 86
'Personal Fax'                =>'',  # line 89
'Optional: Private Fax (eg. +49-30-12345678)'=>'',  # line 90
'Personal Street'             =>'',  # line 93
'Optional:  Private (eg. Poststreet 28)'=>'',  # line 94
'Personal Zipcode'            =>'',  # line 97
'Optional: Private (eg. 12345 Berlin)'=>'',  # line 98
'Personal Page'               =>'',  # line 101
'Personal E-Mail'             =>'',  # line 105
'Birthdate'                   =>'',  # line 109

### ../db/class_project.inc.php   ###
'Color'                       =>'',  # line 43

### ../db/class_person.inc.php   ###
'Optional: Color for graphical overviews (e.g. #FFFF00)'=>'',  # line 115

### ../lists/list_comments.inc.php   ###
'Comments'                    =>'',  # line 29

### ../db/class_person.inc.php   ###
'Password'                    =>'',  # line 125
'Only required if user can login|tooltip'=>'',  # line 126

### ../render/render_page.inc.php   ###
'Profile'                     =>'',  # line 711

### ../db/class_person.inc.php   ###
'Theme|Formlabel'             =>'',  # line 160

### ../db/class_task.inc.php   ###
'Short'                       =>'',  # line 37

### ../db/class_project.inc.php   ###
'Status summary'              =>'',  # line 40

### ../db/class_task.inc.php   ###
'Date start'                  =>'',  # line 41
'Date closed'                 =>'',  # line 47

### ../pages/task_more.inc.php   ###
'Status'                      =>'',  # line 2321

### ../db/class_project.inc.php   ###
'Project page'                =>'',  # line 58
'Wiki page'                   =>'',  # line 61

### ../pages/home.inc.php   ###
'Priority'                    =>'',  # line 178

### ../std/constant_names.inc.php   ###
'Company'                     =>'',  # line 123

### ../db/class_project.inc.php   ###
'show tasks in home'          =>'',  # line 75
'only team members can create items'=>'',  # line 1225
'validating invalid item'     =>'',  # line 1302
'insuffient rights (not in project)'=>'',  # line 1314

### ../pages/task_more.inc.php   ###
'insuffient rights'           =>'',  # line 2862

### ../pages/project_view.inc.php   ###
'Project Template'            =>'',  # line 69
'Inactive Project'            =>'',  # line 72
'Project|Page Type'           =>'',  # line 75

### ../lists/list_project_team.inc.php   ###
'job'                         =>'',  # line 219

### ../db/class_projectperson.inc.php   ###
'role'                        =>'',  # line 57

### ../pages/task_view.inc.php   ###
'For Milestone'               =>'',  # line 745

### ../db/class_task.inc.php   ###
'resolved in version'         =>'',  # line 69

### ../pages/task_view.inc.php   ###
'Resolve reason'              =>'',  # line 751

### ../db/class_task.inc.php   ###
'show as folder (may contain other tasks)'=>'',  # line 88
'is a milestone'              =>'',  # line 93
'milestones are shown in a different list'=>'',  # line 94
'released'                    =>'',  # line 100
'release time'                =>'',  # line 106
'Completion'                  =>'',  # line 112

### ../pages/task_view.inc.php   ###
'Estimated time'              =>'',  # line 837
'Estimated worst case'        =>'',  # line 838

### ../pages/task_more.inc.php   ###
'Label'                       =>'',  # line 2350

### ../db/class_task.inc.php   ###
'Planned Start'               =>'',  # line 143
'Planned End'                 =>'',  # line 148

### ../pages/task_more.inc.php   ###
'task without project?'       =>'',  # line 1928

### ../pages/task_view.inc.php   ###
'Folder'                      =>'',  # line 108

### ../lists/list_versions.inc.php   ###
'Released Milestone'          =>'',  # line 180

### ../pages/project_more.inc.php   ###
'Milestone'                   =>'',  # line 908

### ../db/db.inc.php   ###
'Database exception. Please read %s next steps on database errors.%s'=>'',  # line 38

### ../db/db_item.inc.php   ###
'unnamed'                     =>'',  # line 559
'Unknown'                     =>'',  # line 1468
'Item has been modified during your editing by %s (%s minutes ago). Your changes can not be submitted.'=>'',  # line 1473

### ../db/db_itemperson.inc.php   ###
'Comment|form label for items'=>'',  # line 45

### ../lists/list_changes.inc.php   ###
'to|very short for assigned tasks TO...'=>'',  # line 406

### ../lists/list_tasks.inc.php   ###
'in|very short for IN folder...'=>'',  # line 1304

### ../lists/list_projectchanges.inc.php   ###
'new'                         =>'',  # line 215

### ../pages/project_more.inc.php   ###
'modified'                    =>'',  # line 690

### ../lists/list_comments.inc.php   ###
'New Comment'                 =>'',  # line 39

### ../lists/list_changes.inc.php   ###
'Last of %s comments:'        =>'',  # line 217
'comment:'                    =>'',  # line 220
'completed'                   =>'',  # line 242
'Approve Task'                =>'',  # line 243
'approved'                    =>'',  # line 247

### ../pages/project_more.inc.php   ###
'closed'                      =>'',  # line 770

### ../lists/list_changes.inc.php   ###
'reopened'                    =>'',  # line 255
'is blocked'                  =>'',  # line 262
'moved'                       =>'',  # line 268
'renamed'                     =>'',  # line 273
'edit wiki'                   =>'',  # line 276
'changed:'                    =>'',  # line 280
'commented'                   =>'',  # line 290
'assigned'                    =>'',  # line 329
'attached'                    =>'',  # line 348
'attached file to'            =>'',  # line 358

### ../lists/list_projectchanges.inc.php   ###
'restore'                     =>'',  # line 332

### ../pages/person.inc.php   ###
'deleted'                     =>'',  # line 425

### ../pages/search.inc.php   ###
'Changes'                     =>'',  # line 750
'Other team members changed nothing since last logout (%s)'=>'',  # line 752

### ../lists/list_changes.inc.php   ###
'Date'                        =>'',  # line 564

### ../pages/search.inc.php   ###
'Who changed what when...'    =>'',  # line 831

### ../lists/list_changes.inc.php   ###
'what|column header in change list'=>'',  # line 598

### ../std/constant_names.inc.php   ###
'Task'                        =>'',  # line 120

### ../lists/list_changes.inc.php   ###
'Date / by'                   =>'',  # line 695

### ../lists/list_comments.inc.php   ###
'Add Comment'                 =>'',  # line 41

### ../pages/_handles.inc.php   ###
'Mark as bookmark'            =>'',  # line 45

### ../lists/list_comments.inc.php   ###
'Shrink All Comments'         =>'',  # line 58
'Collapse All Comments'       =>'',  # line 60
'Expand All Comments'         =>'',  # line 67
'By|column header'            =>'',  # line 88
'version %s'                  =>'',  # line 140

### ../render/render_page.inc.php   ###
'Edit'                        =>'',  # line 624

### ../pages/task_view.inc.php   ###
'Delete'                      =>'',  # line 1003

### ../lists/list_comments.inc.php   ###
'Reply'                       =>'',  # line 170
'Publish'                     =>'',  # line 173
'1 sub comment'               =>'',  # line 230
'%s sub comments'             =>'',  # line 233

### ../lists/list_companies.inc.php   ###
'related companies'           =>'',  # line 28

### ../lists/list_persons.inc.php   ###
'Name Short'                  =>'',  # line 34
'Shortnames used in other lists'=>'',  # line 35

### ../pages/company.inc.php   ###
'Phone'                       =>'',  # line 566

### ../lists/list_companies.inc.php   ###
'Phone-Number'                =>'',  # line 42
'Proj'                        =>'',  # line 50
'Number of open Projects'     =>'',  # line 51

### ../render/render_page.inc.php   ###
'People'                      =>'',  # line 235

### ../lists/list_companies.inc.php   ###
'People working for this person'=>'',  # line 58
'Edit company'                =>'',  # line 91
'Delete company'              =>'',  # line 98
'Create new company'          =>'',  # line 104
'Company|Column header'       =>'',  # line 127

### ../lists/list_efforts.inc.php   ###
'no efforts booked yet'       =>'',  # line 25

### ../pages/person.inc.php   ###
'Efforts'                     =>'',  # line 33

### ../std/constant_names.inc.php   ###
'Project'                     =>'',  # line 119

### ../lists/list_efforts.inc.php   ###
'person'                      =>'',  # line 37
'Edit effort'                 =>'',  # line 50
'New effort'                  =>'',  # line 57
'View selected Efforts'       =>'',  # line 72
'%s effort(s) with %s hours'  =>'',  # line 129

### ../std/constant_names.inc.php   ###
'Effort'                      =>'',  # line 127

### ../lists/list_efforts.inc.php   ###
'Effort name. More Details as tooltips'=>'',  # line 143
'Task|column header'          =>'',  # line 167
'Start|column header'         =>'',  # line 192
'D, d.m.Y'                    =>'',  # line 203
'End|column header'           =>'',  # line 219
'len|column header of length of effort'=>'',  # line 243
'Daygraph|columnheader'       =>'',  # line 263

### ../pages/search.inc.php   ###
'Type'                        =>'',  # line 869

### ../lists/list_files.inc.php   ###
'Parent item'                 =>'',  # line 39

### ../pages/task_view.inc.php   ###
'Version'                     =>'',  # line 477

### ../pages/_handles.inc.php   ###
'Edit file'                   =>'',  # line 792

### ../lists/list_files.inc.php   ###
'Move files'                  =>'',  # line 121
'New file'                    =>'',  # line 134
'No files uploaded'           =>'',  # line 219
'Download|Column header'      =>'',  # line 262
'File|Column header'          =>'',  # line 304
'in|... folder'               =>'',  # line 341
'ID %s'                       =>'',  # line 457
'Show Details'                =>'',  # line 459
'Attached to|Column header'   =>'',  # line 383
'Summary|Column header'       =>'',  # line 414
'Thumbnail|Column header'     =>'',  # line 475

### ../lists/list_items.inc.php   ###
'Your bookmarks'              =>'',  # line 32
'You have no bookmarks'       =>'',  # line 33

### ../pages/item.inc.php   ###
'Edit bookmark'               =>'',  # line 399

### ../pages/_handles.inc.php   ###
'Remove bookmark'             =>'',  # line 52

### ../pages/item.inc.php   ###
'Notify on change'            =>'',  # line 421

### ../lists/list_projectchanges.inc.php   ###
'(on comment)'                =>'',  # line 376
'(on task)'                   =>'',  # line 381
'(on project)'                =>'',  # line 387

### ../std/constant_names.inc.php   ###
'Comment'                     =>'',  # line 128

### ../lists/list_items.inc.php   ###
'Remind'                      =>'',  # line 415
'in %s day(s)'                =>'',  # line 464
'since %s day(s)'             =>'',  # line 468

### ../render/render_list_column_special.inc.php   ###
'Modified'                    =>'',  # line 197

### ../lists/list_items.inc.php   ###
'State'                       =>'',  # line 711
'Modified by'                 =>'',  # line 744

### ../pages/project_more.inc.php   ###
'Milestones'                  =>'',  # line 1324

### ../pages/task_more.inc.php   ###
'New Folder'                  =>'',  # line 111

### ../pages/person.inc.php   ###
'or'                          =>'',  # line 660

### ../lists/list_milestones.inc.php   ###
'Planned for'                 =>'',  # line 309
'Due Today'                   =>'',  # line 333
'%s days late'                =>'',  # line 338
'%s days left'                =>'',  # line 342

### ../lists/list_versions.inc.php   ###
'%s required'                 =>'',  # line 262

### ../lists/list_milestones.inc.php   ###
'Tasks open|columnheader'     =>'',  # line 375

### ../pages/project_more.inc.php   ###
'open'                        =>'',  # line 599

### ../lists/list_project_team.inc.php   ###
'Your related persons'        =>'',  # line 26

### ../std/constant_names.inc.php   ###
'Person'                      =>'',  # line 121

### ../lists/list_versions.inc.php   ###
'Task name. More Details as tooltips'=>'',  # line 54

### ../lists/list_persons.inc.php   ###
'Private'                     =>'',  # line 53
'Mobil'                       =>'',  # line 58
'Office'                      =>'',  # line 63

### ../render/render_page.inc.php   ###
'Companies'                   =>'',  # line 241

### ../lists/list_persons.inc.php   ###
'last login'                  =>'',  # line 78
'Edit person'                 =>'',  # line 110

### ../pages/_handles.inc.php   ###
'Edit User Rights'            =>'',  # line 997

### ../lists/list_persons.inc.php   ###
'Delete person'               =>'',  # line 123
'Create new person'           =>'',  # line 129
'Nickname|column header'      =>'',  # line 215
'Name|column header'          =>'',  # line 236
'Profile|column header'       =>'',  # line 260
'Account settings for user (do not confuse with project rights)'=>'',  # line 262
'(adjusted)'                  =>'',  # line 277
'Active Projects|column header'=>'',  # line 299

### ../render/render_list_column_special.inc.php   ###
'Priority is %s'              =>'',  # line 255

### ../lists/list_persons.inc.php   ###
'recent changes|column header'=>'',  # line 344
'changes since YOUR last logout'=>'',  # line 346

### ../lists/list_project_team.inc.php   ###
'Rights'                      =>'',  # line 42
'Persons rights in this project'=>'',  # line 43
'Edit team member'            =>'',  # line 100
'Add team member'             =>'',  # line 107
'Remove person from team'     =>'',  # line 114

### ../pages/project_view.inc.php   ###
'Team members'                =>'',  # line 258

### ../lists/list_project_team.inc.php   ###
'Role'                        =>'',  # line 194
'last Login|column header'    =>'',  # line 234

### ../lists/list_projectchanges.inc.php   ###
'Nothing has changed.'        =>'',  # line 33

### ../render/render_list_column_special.inc.php   ###
'Created by'                  =>'',  # line 391

### ../lists/list_projectchanges.inc.php   ###
'Item was originally created by'=>'',  # line 46
'C'                           =>'',  # line 195
'Created,Modified or Deleted' =>'',  # line 196
'Deleted'                     =>'',  # line 209
'by Person'                   =>'',  # line 233
'Person who did the last change'=>'',  # line 234
'Type|Column header'          =>'',  # line 293
'item %s has undefined type'  =>'',  # line 301
'Del'                         =>'',  # line 319
'shows if item is deleted'    =>'',  # line 320

### ../lists/list_projects.inc.php   ###
'Project priority (the icons have tooltips, too)'=>'',  # line 64

### ../pages/home.inc.php   ###
'Task-Status'                 =>'',  # line 185

### ../lists/list_projects.inc.php   ###
'Status Summary'              =>'',  # line 99
'Short discription of the current status'=>'',  # line 100

### ../pages/project_view.inc.php   ###
'Tasks'                       =>'',  # line 224

### ../lists/list_projects.inc.php   ###
'Number of open Tasks'        =>'',  # line 110
'Opened'                      =>'',  # line 118
'Day the Project opened'      =>'',  # line 119

### ../render/render_misc.inc.php   ###
'Closed'                      =>'',  # line 463

### ../lists/list_projects.inc.php   ###
'Day the Project state changed to closed'=>'',  # line 125
'Edit project'                =>'',  # line 134
'Delete project'              =>'',  # line 141
'Log hours for a project'     =>'',  # line 148
'Open / Close'                =>'',  # line 156

### ../pages/company.inc.php   ###
'Create new project'          =>'',  # line 704

### ../pages/_handles.inc.php   ###
'Create Template'             =>'',  # line 239
'Project from Template'       =>'',  # line 247

### ../lists/list_projects.inc.php   ###
'... working in project'      =>'',  # line 307

### ../pages/project_view.inc.php   ###
'Folders'                     =>'',  # line 272

### ../lists/list_taskfolders.inc.php   ###
'Number of subtasks'          =>'',  # line 87
'New'                         =>'',  # line 105
'Create new folder under selected task'=>'',  # line 108
'Move selected to folder'     =>'',  # line 113

### ../lists/list_tasks.inc.php   ###
'Log hours for select tasks'  =>'',  # line 223
'Priority of task'            =>'',  # line 97
'Status|Columnheader'         =>'',  # line 108
'Started'                     =>'',  # line 129
'Modified|Column header'      =>'',  # line 133
'Est.'                        =>'',  # line 144

### ../pages/home.inc.php   ###
'Estimated time in hours'     =>'',  # line 224

### ../lists/list_tasks.inc.php   ###
'Add new Task'                =>'',  # line 166
'Report new Bug'              =>'',  # line 173

### ../pages/task_view.inc.php   ###
'Add comment'                 =>'',  # line 701

### ../lists/list_tasks.inc.php   ###
'Status->Completed'           =>'',  # line 194
'Status->Approved'            =>'',  # line 201
'Status->Closed'              =>'',  # line 208
'Move tasks'                  =>'',  # line 216
'List|List sort mode'         =>'',  # line 240
'Tree|List sort mode'         =>'',  # line 251
'Grouped|List sort mode'      =>'',  # line 262
'%s hidden'                   =>'',  # line 375
'Latest Comment'              =>'',  # line 502
'by'                          =>'',  # line 504

### ../pages/search.inc.php   ###
'for'                         =>'',  # line 282

### ../lists/list_tasks.inc.php   ###
'%s open tasks / %s h'        =>'',  # line 545
'Label|Columnheader'          =>'',  # line 890

### ../pages/task_view.inc.php   ###
'Assigned to'                 =>'',  # line 792

### ../lists/list_tasks.inc.php   ###
'Task name'                   =>'',  # line 1017
'has %s comments'             =>'',  # line 1047
'Task has %s attachments'     =>'',  # line 1060
'- no name -|in task lists'   =>'',  # line 1299
'number of subtasks'          =>'',  # line 1092
'Page name'                   =>'',  # line 1132
'Sum of all booked efforts (including subtasks)'=>'',  # line 1176
'Effort in hours'             =>'',  # line 1190
'Days until planned start'    =>'',  # line 1202
'Due|column header, days until planned start'=>'',  # line 1203
'planned for %s|a certain date'=>'',  # line 1232
'Est/Compl'                   =>'',  # line 1248
'Estimated time / completed'  =>'',  # line 1250

### ../lists/list_versions.inc.php   ###
'Release Date'                =>'',  # line 240

### ../pages/_handles.inc.php   ###
'Home'                        =>'',  # line 7
'Playground'                  =>'',  # line 17

### ../pages/item.inc.php   ###
'View item'                   =>'',  # line 578

### ../pages/_handles.inc.php   ###
'Set Public Level'            =>'',  # line 37
'Send notification'           =>'',  # line 59
'Remove notification'         =>'',  # line 65
'Edit monitored items'        =>'',  # line 71
'view changes'                =>'',  # line 85
'Active Projects'             =>'',  # line 117
'Closed Projects'             =>'',  # line 125

### ../pages/project_more.inc.php   ###
'Project Templates'           =>'',  # line 194

### ../pages/_handles.inc.php   ###
'View Project'                =>'',  # line 208

### ../pages/project_more.inc.php   ###
'Documentation'               =>'',  # line 1091

### ../pages/_handles.inc.php   ###
'Versions'                    =>'',  # line 178

### ../pages/project_more.inc.php   ###
'Uploaded Files'              =>'',  # line 1220
'New Project'                 =>'',  # line 1589
'Edit Project'                =>'',  # line 2014

### ../pages/_handles.inc.php   ###
'Delete Project'              =>'',  # line 274
'Change Project Status'       =>'',  # line 282
'Add Team member'             =>'',  # line 320
'Edit Team member'            =>'',  # line 329
'Remove from team'            =>'',  # line 341
'View Task'                   =>'',  # line 356
'View Task As Docu'           =>'',  # line 368
'Task Test'                   =>'',  # line 380

### ../pages/task_more.inc.php   ###
'Edit Task'                   =>'',  # line 316

### ../pages/_handles.inc.php   ###
'Edit multiple Tasks'         =>'',  # line 401
'View Task Efforts'           =>'',  # line 410
'Delete Task(s)'              =>'',  # line 423
'Restore Task(s)'             =>'',  # line 428
'Move tasks to folder'        =>'',  # line 436
'Mark tasks as Complete'      =>'',  # line 444
'Mark tasks as Approved'      =>'',  # line 452
'Mark tasks as Closed'        =>'',  # line 460
'Mark tasks as Open'          =>'',  # line 466
'New Task'                    =>'',  # line 508
'New Bug'                     =>'',  # line 492

### ../pages/task_more.inc.php   ###
'New Milestone'               =>'',  # line 37

### ../pages/_handles.inc.php   ###
'New Released Milestone'      =>'',  # line 535
'Toggle view collapsed'       =>'',  # line 750
'Add issue/bug report'        =>'',  # line 579
'Edit Description'            =>'',  # line 588
'Create Note'                 =>'',  # line 600
'Edit Note'                   =>'',  # line 614
'View effort'                 =>'',  # line 625
'View multiple efforts'       =>'',  # line 638
'Log hours'                   =>'',  # line 647
'Edit time effort'            =>'',  # line 654
'View comment'                =>'',  # line 673
'Create comment'              =>'',  # line 687
'Edit comment'                =>'',  # line 698
'Delete comment'              =>'',  # line 721
'View file'                   =>'',  # line 766
'Upload file'                 =>'',  # line 778
'Update file'                 =>'',  # line 784

### ../pages/file.inc.php   ###
'Download'                    =>'',  # line 179

### ../pages/_handles.inc.php   ###
'Show file scaled'            =>'',  # line 804
'Move files to folder'        =>'',  # line 817
'List Companies'              =>'',  # line 837
'List Clients'                =>'',  # line 845
'List Prospective Clients'    =>'',  # line 851
'List Suppliers'              =>'',  # line 858
'List Partners'               =>'',  # line 865
'View Company'                =>'',  # line 871

### ../pages/company.inc.php   ###
'New Company'                 =>'',  # line 758
'Edit Company'                =>'',  # line 966

### ../pages/_handles.inc.php   ###
'Delete Company'              =>'',  # line 901

### ../pages/company.inc.php   ###
'Link Persons'                =>'',  # line 619

### ../pages/_handles.inc.php   ###
'Remove persons from company' =>'',  # line 921
'List Persons'                =>'',  # line 954
'List Employees'              =>'',  # line 947
'List Deleted Persons'        =>'',  # line 960
'View Person'                 =>'',  # line 966

### ../pages/person.inc.php   ###
'New Person'                  =>'',  # line 840
'Edit Person'                 =>'',  # line 2029

### ../pages/_handles.inc.php   ###
'Delete Person'               =>'',  # line 1010
'View Efforts of Person'      =>'',  # line 1015
'Send Activation E-Mail'      =>'',  # line 1023
'Flush Notifications'         =>'',  # line 1083

### ../render/render_page.inc.php   ###
'Register'                    =>'',  # line 721

### ../pages/person.inc.php   ###
'Link Companies'              =>'',  # line 645
'Remove companies from person'=>'',  # line 651

### ../pages/_handles.inc.php   ###
'Marks all items viewed'      =>'',  # line 1069

### ../render/render_page.inc.php   ###
'Login'                       =>'',  # line 692

### ../pages/_handles.inc.php   ###
'Forgot your password?'       =>'',  # line 1129

### ../render/render_page.inc.php   ###
'Logout'                      =>'',  # line 713

### ../pages/_handles.inc.php   ###
'License'                     =>'',  # line 1156
'restore Item'                =>'',  # line 1195

### ../pages/error.inc.php   ###
'Error'                       =>'',  # line 39

### ../pages/_handles.inc.php   ###
'Activate an account'         =>'',  # line 1209
'System Information'          =>'',  # line 1222
'PhpInfo'                     =>'',  # line 1234
'Filter errors.log'           =>'',  # line 1246
'Delete errors.log'           =>'',  # line 1255
'Search'                      =>'',  # line 1262

### ../pages/comment.inc.php   ###
'Comment on task|page type'   =>'',  # line 65

### ../pages/version.inc.php   ###
'(deleted %s)|page title add on with date of deletion'=>'',  # line 302

### ../pages/comment.inc.php   ###
'Edit this comment'           =>'',  # line 86
'Delete this comment'         =>'',  # line 105
'Restore'                     =>'',  # line 97
'New Comment|Default name of new comment'=>'',  # line 172
'Reply to |prefix for name of new comment on another comment'=>'',  # line 236
'Edit Comment|Page title'     =>'',  # line 314
'New Comment|Page title'      =>'',  # line 317
'On task %s|page title add on'=>'',  # line 321

### ../pages/version.inc.php   ###
'On project %s|page title add on'=>'',  # line 94

### ../pages/comment.inc.php   ###
'Occasion|form label'         =>'',  # line 364
'Publish to|form label'       =>'',  # line 369
'Select some comments to delete'=>'',  # line 497
'Failed to delete %s comments'=>'',  # line 529
'Moved %s comments to trash'  =>'',  # line 532
'Select some comments to restore'=>'',  # line 552
'Failed to restore %s comments'=>'',  # line 578
'Restored %s comments'        =>'',  # line 581
'Select some comments to move'=>'',  # line 729

### ../pages/task_more.inc.php   ###
'insufficient rights'         =>'',  # line 1392

### ../pages/comment.inc.php   ###
'Can not edit comment %s'     =>'',  # line 770

### ../pages/task_more.inc.php   ###
'Edit tasks'                  =>'',  # line 1454

### ../pages/comment.inc.php   ###
'Select one folder to move comments into'=>'',  # line 803
'... or select nothing to move to project root'=>'',  # line 815
'No folders in this project...'=>'',  # line 843

### ../pages/task_more.inc.php   ###
'Move items'                  =>'',  # line 1508

### ../pages/company.inc.php   ###
'related projects of %s'      =>'',  # line 41

### ../pages/project_more.inc.php   ###
'admin view'                  =>'',  # line 199

### ../pages/person.inc.php   ###
'List'                        =>'',  # line 396

### ../pages/task_view.inc.php   ###
'new:'                        =>'',  # line 1019

### ../pages/company.inc.php   ###
'no companies'                =>'',  # line 423

### ../std/class_pagehandler.inc.php   ###
'Export as CSV'               =>'',  # line 829

### ../pages/company.inc.php   ###
'Clients'                     =>'',  # line 124
'related companies of %s'     =>'',  # line 386

### ../pages/project_more.inc.php   ###
'List|page type'              =>'',  # line 201

### ../pages/company.inc.php   ###
'Prospective Clients'         =>'',  # line 212
'Suppliers'                   =>'',  # line 298
'Partners'                    =>'',  # line 384

### ../pages/project_view.inc.php   ###
'Overview'                    =>'',  # line 66

### ../pages/task_view.inc.php   ###
'edit:'                       =>'',  # line 100

### ../pages/company.inc.php   ###
'Edit this company'           =>'',  # line 501
'Delete this company'         =>'',  # line 510
'Create new person for this company'=>'',  # line 523
'Create new project for this company'=>'',  # line 530
'Add existing persons to this company'=>'',  # line 537
'Persons'                     =>'',  # line 538
'Adress'                      =>'',  # line 560
'Fax'                         =>'',  # line 569
'Web'                         =>'',  # line 574
'Intra'                       =>'',  # line 577
'Mail'                        =>'',  # line 580
'related Persons'             =>'',  # line 595
'Remove person from company'  =>'',  # line 625
'link existing Person'        =>'',  # line 633

### ../pages/person.inc.php   ###
'create new'                  =>'',  # line 661

### ../pages/company.inc.php   ###
'no persons related'          =>'',  # line 638
'Active projects'             =>'',  # line 695
' Hint: for already existing projects please edit those and adjust company-setting.'=>'',  # line 705
'no projects yet'             =>'',  # line 708
'Closed projects'             =>'',  # line 725

### ../pages/person.inc.php   ###
'Category|form label'         =>'',  # line 1957

### ../pages/company.inc.php   ###
'Create another company after submit'=>'',  # line 840

### ../pages/person.inc.php   ###
'Edit %s'                     =>'',  # line 2030

### ../pages/company.inc.php   ###
'Add persons employed or related'=>'',  # line 968

### ../pages/project_more.inc.php   ###
'No persons selected...'      =>'',  # line 2095

### ../pages/company.inc.php   ###
'Person already related to company'=>'',  # line 1048
'Failed to remove %s contact person(s)'=>'',  # line 1112
'Removed %s contact person(s)'=>'',  # line 1115
'Select some companies to delete'=>'',  # line 1134
'Failed to delete %s companies'=>'',  # line 1154
'Moved %s companies to trash' =>'',  # line 1157

### ../pages/project_view.inc.php   ###
'invalid project-id'          =>'',  # line 44
'Edit this project'           =>'',  # line 86
'Delete this project'         =>'',  # line 96

### ../pages/custom_projView.inc.php   ###
'Wiki'                        =>'',  # line 102

### ../pages/project_view.inc.php   ###
'Add person as team-member to project'=>'',  # line 109
'Team member'                 =>'',  # line 110
'Create task'                 =>'',  # line 116
'Create task with issue-report'=>'',  # line 123

### ../pages/task_view.inc.php   ###
'Bug'                         =>'',  # line 175

### ../pages/project_view.inc.php   ###
'Details|block title'         =>'',  # line 144
'Client|label'                =>'',  # line 158
'Phone|label'                 =>'',  # line 160
'E-Mail|label'                =>'',  # line 163
'Status|Label in summary'     =>'',  # line 176
'Wikipage|Label in summary'   =>'',  # line 181
'Projectpage|Label in summary'=>'',  # line 185
'Opened|Label in summary'     =>'',  # line 190
'Closed|Label in summary'     =>'',  # line 195
'Created by|Label in summary' =>'',  # line 199
'Last modified by|Label in summary'=>'',  # line 204
'Logged effort'               =>'',  # line 211
'hours'                       =>'',  # line 213

### ../pages/task_view.inc.php   ###
'Completed'                   =>'',  # line 861

### ../pages/custom_projView.inc.php   ###
'News'                        =>'',  # line 373
'%s comments'                 =>'',  # line 397

### ../pages/custom_projViewFiles.inc.php   ###
'Downloads'                   =>'',  # line 62

### ../pages/effort.inc.php   ###
'Select one or more efforts'  =>'',  # line 200
'You do not have enough rights'=>'',  # line 239
'Effort of task|page type'    =>'',  # line 70
'Edit this effort'            =>'',  # line 88
'Project|label'               =>'',  # line 340
'Task|label'                  =>'',  # line 357
'No task related'             =>'',  # line 357
'Created by|label'            =>'',  # line 364
'Created at|label'            =>'',  # line 370
'Duration|label'              =>'',  # line 376
'Time start|label'            =>'',  # line 374
'Time end|label'              =>'',  # line 375
'No description available'    =>'',  # line 412
'Multiple Efforts|page type'  =>'',  # line 252
'Multiple Efforts'            =>'',  # line 273

### ../pages/item.inc.php   ###
'summary'                     =>'',  # line 742

### ../pages/effort.inc.php   ###
'Information'                 =>'',  # line 289
'Number of efforts|label'     =>'',  # line 298
'Sum of efforts|label'        =>'',  # line 302
'from|time label'             =>'',  # line 309
'to|time label'               =>'',  # line 310
'Time|label'                  =>'',  # line 314
'New Effort'                  =>'',  # line 434

### ../pages/file.inc.php   ###
'only expected one task. Used the first one.'=>'',  # line 356

### ../pages/effort.inc.php   ###
'Edit Effort|page type'       =>'',  # line 565
'Edit Effort|page title'      =>'',  # line 579
'New Effort|page title'       =>'',  # line 582
'Date / Duration|Field label when booking time-effort as duration'=>'',  # line 624

### ../pages/file.inc.php   ###
'For task'                    =>'',  # line 168

### ../pages/version.inc.php   ###
'Publish to'                  =>'',  # line 119

### ../pages/effort.inc.php   ###
'Could not get effort'        =>'',  # line 709
'Could not get project of effort'=>'',  # line 725
'Could not get person of effort'=>'',  # line 731

### ../pages/version.inc.php   ###
'Name required'               =>'',  # line 198

### ../pages/effort.inc.php   ###
'Cannot start before end.'    =>'',  # line 800
'Select some efforts to delete'=>'',  # line 834
'Failed to delete %s efforts' =>'',  # line 853
'Moved %s efforts to trash'   =>'',  # line 856

### ../pages/error.inc.php   ###
'Error|top navigation tab'    =>'',  # line 29
'Unknown Page'                =>'',  # line 32

### ../pages/file.inc.php   ###
'Could not access parent task Id:%s'=>'',  # line 52

### ../std/constant_names.inc.php   ###
'File'                        =>'',  # line 129

### ../pages/task_view.inc.php   ###
'Item-ID %d'                  =>'',  # line 974

### ../pages/file.inc.php   ###
'Edit this file'              =>'',  # line 116
'Move this file to another task'=>'',  # line 123
'Move'                        =>'',  # line 124
'Upload new version|block title'=>'',  # line 136

### ../pages/task_view.inc.php   ###
'Upload'                      =>'',  # line 1171

### ../pages/file.inc.php   ###
'Version #%s (current): %s'   =>'',  # line 153
'Filesize'                    =>'',  # line 229
'Uploaded'                    =>'',  # line 231
'Uploaded by'                 =>'',  # line 174
'Version #%s : %s'            =>'',  # line 212
'Could not edit task'         =>'',  # line 365
'Edit File|page type'         =>'',  # line 410
'Edit File|page title'        =>'',  # line 420
'New File|page title'         =>'',  # line 423
'Could not get file'          =>'',  # line 545
'Could not get project of file'=>'',  # line 552
'Please enter a proper filename'=>'',  # line 589
'Select some files to delete' =>'',  # line 645
'Failed to delete %s files'   =>'',  # line 664
'Moved %s files to trash'     =>'',  # line 667
'Select some file to display' =>'',  # line 705
'Select some files to move'   =>'',  # line 745
'Can not edit file %s'        =>'',  # line 799
'insufficient rights to edit any of the selected items'=>'',  # line 810
'Edit files'                  =>'',  # line 834
'Select folder to move files into'=>'',  # line 836
'No folders available'        =>'',  # line 870

### ../pages/task_more.inc.php   ###
'(or select nothing to move to project root)'=>'',  # line 1504

### ../render/render_misc.inc.php   ###
'Today'                       =>'',  # line 698

### ../pages/playground.inc.php   ###
'Personal Efforts'            =>'',  # line 123
'At Home'                     =>'',  # line 130
'F, jS'                       =>'',  # line 131

### ../pages/home.inc.php   ###
'Functions'                   =>'',  # line 65
'View your efforts'           =>'',  # line 76
'Edit your profile'           =>'',  # line 77
'Projects'                    =>'',  # line 110

### ../pages/project_more.inc.php   ###
'<b>NOTE</b>: Some projects are hidden from your view. Please ask an administrator to adjust you rights to avoid double-creation of projects'=>'',  # line 94
'create new project'          =>'',  # line 97
'not assigned to a project'   =>'',  # line 100

### ../pages/home.inc.php   ###
'You have no open tasks'      =>'',  # line 150
'Open tasks assigned to you'  =>'',  # line 155
'Open tasks (including unassigned)'=>'',  # line 158
'All open tasks'              =>'',  # line 161
'Select lines to use functions at end of list'=>'',  # line 173
'P|column header'             =>'',  # line 177
'S|column header'             =>'',  # line 184
'Project|column header'       =>'',  # line 192
'Folder|column header'        =>'',  # line 197
'Modified|column header'      =>'',  # line 215
'Est.|column header estimated time'=>'',  # line 223
'Edit|context menu function'  =>'',  # line 242
'status->Completed|context menu function'=>'',  # line 249
'status->Approved|context menu function'=>'',  # line 257
'status->Closed|context menu function'=>'',  # line 265
'Delete|context menu function'=>'',  # line 274
'Log hours for select tasks|context menu function'=>'',  # line 282
'%s tasks with estimated %s hours of work'=>'',  # line 310

### ../pages/item.inc.php   ###
'Select some items(s) to change pub level'=>'',  # line 60
'itemsSetPubLevel requires item_pub_level'=>'',  # line 67
'Made %s items public to %s'  =>'',  # line 85

### ../pages/task_more.inc.php   ###
'%s error(s) occured'         =>'',  # line 1899

### ../pages/item.inc.php   ###
'No item(s) selected.'        =>'',  # line 283
'Select one or more bookmark(s)'=>'',  # line 314
'Removed %s bookmark(s).'     =>'',  # line 183
'ERROR: Cannot remove %s bookmark(s). Please try again.'=>'',  # line 187
'An error occured'            =>'',  # line 318
'Edit bookmark "%s"',"Page title'=>'',  # line 401
'Bookmark "%s"'               =>'',  # line 402
'Notify if unchanged in'      =>'',  # line 423
'Could not get bookmark'      =>'',  # line 456
'changes'                     =>'',  # line 568
'date1 should be smaller than date2. Swapped'=>'',  # line 592
'item has not been edited history'=>'',  # line 600
'unknown'                     =>'',  # line 678
' -- '                        =>'',  # line 700
'prev change'                 =>'',  # line 712
'next'                        =>'',  # line 728
'Item did not exists at %s'   =>'',  # line 774
'no changes between %s and %s'=>'',  # line 777

### ../std/constant_names.inc.php   ###
'undefined'                   =>'',  # line 159

### ../pages/item.inc.php   ###
'ok'                          =>'',  # line 872

### ../pages/login.inc.php   ###
'Login|tab in top navigation' =>'',  # line 26

### ../render/render_page.inc.php   ###
'Go to your home. Alt-h / Option-h'=>'',  # line 224

### ../pages/login.inc.php   ###
'License|tab in top navigation'=>'',  # line 32

### ../render/render_page.inc.php   ###
'Your projects. Alt-P / Option-P'=>'',  # line 229

### ../pages/login.inc.php   ###
'Welcome to streber|Page title'=>'',  # line 73
'please login'                =>'',  # line 92
'Nickname|label in login form'=>'',  # line 339
'Password|label in login form'=>'',  # line 101
'I forgot my password'        =>'',  # line 340
'Continue anonymously'        =>'',  # line 106
'invalid login|message when login failed'=>'',  # line 232
'Password reminder|Page title'=>'',  # line 310
'Please enter your nickname'  =>'',  # line 322
'We will then sent you an E-mail with a link to adjust your password.'=>'',  # line 332
'If you do not know your nickname, please contact your administrator: %s.'=>'',  # line 334
'If you remember your name, please enter it and try again.'=>'',  # line 371
'A notification mail has been sent.'=>'',  # line 393
'Welcome %s. Please adjust your profile and insert a good password to activate your account.'=>'',  # line 414
'Sorry, but this activation code is no longer valid. If you already have an account, you could enter your name and use the <b>forgot password link</b> below.'=>'',  # line 420
'License|page title'          =>'',  # line 443

### ../pages/misc.inc.php   ###
'Could not find request page `%s`'=>'',  # line 47
'Select some items to restore'=>'',  # line 216
'Item %s does not need to be restored'=>'',  # line 228
'Failed to restore %s items'  =>'',  # line 241
'Restored %s items'           =>'',  # line 244
'Admin|top navigation tab'    =>'',  # line 269
'System information'          =>'',  # line 275
'Admin'                       =>'',  # line 276
'Database Type'               =>'',  # line 334
'Error-Log'                   =>'',  # line 345
'PHP Version'                 =>'',  # line 347
'extension directory'         =>'',  # line 350
'loaded extensions'           =>'',  # line 352
'include path'                =>'',  # line 354
'register globals'            =>'',  # line 356
'magic quotes gpc'            =>'',  # line 358
'magic quotes runtime'        =>'',  # line 360
'safe mode'                   =>'',  # line 362
'hide'                        =>'',  # line 478

### ../pages/person.inc.php   ###
'Active People'               =>'',  # line 55
'relating to %s|page title add on listing pages relating to current user'=>'',  # line 391
'People/Project Overview'     =>'',  # line 432
'no related persons'          =>'',  # line 443
'Persons|Pagetitle for person list'=>'',  # line 136
'relating to %s|Page title Person list title add on'=>'',  # line 307
'admin view|Page title add on if admin'=>'',  # line 310
'Employees|Pagetitle for person list'=>'',  # line 222
'Contact Persons|Pagetitle for person list'=>'',  # line 305
'Deleted People'              =>'',  # line 389
'Create Note|Tooltip for page function'=>'',  # line 512
'Note|Page function person'   =>'',  # line 513
'Add existing companies to this person'=>'',  # line 518
'Edit this person|Tooltip for page function'=>'',  # line 529
'Profile|Page function edit person'=>'',  # line 530
'Edit User Rights|Tooltip for page function'=>'',  # line 536
'User Rights|Page function for edit user rights'=>'',  # line 537
'notification:'               =>'',  # line 540

### ../pages/task_view.inc.php   ###
'Summary|Block title'         =>'',  # line 233

### ../pages/person.inc.php   ###
'Mobile|Label mobilephone of person'=>'',  # line 573
'Office|label for person'     =>'',  # line 576
'Private|label for person'    =>'',  # line 579
'Fax (office)|label for person'=>'',  # line 582
'Website|label for person'    =>'',  # line 587
'Personal|label for person'   =>'',  # line 590
'E-Mail|label for person office email'=>'',  # line 594
'E-Mail|label for person personal email'=>'',  # line 597
'Adress Personal|Label'       =>'',  # line 602
'Adress Office|Label'         =>'',  # line 609
'Birthdate|Label'             =>'',  # line 616
'works for|List title'        =>'',  # line 631
'link existing Company'       =>'',  # line 659
'no companies related'        =>'',  # line 664
'no company'                  =>'',  # line 666
'Person details'              =>'',  # line 676
'works in Projects|list title for person projects'=>'',  # line 712
'no active projects'          =>'',  # line 726
'Assigned tasks'              =>'',  # line 744
'No open tasks assigned'      =>'',  # line 745
'Efforts|Page title add on'   =>'',  # line 787
'no efforts yet'              =>'',  # line 815
'not allowed to edit'         =>'',  # line 1247
'Edit Person|Page type'       =>'',  # line 1876
'Person with account (can login)|form label'=>'',  # line 1928
'Account'                     =>'',  # line 958
'Password|form label'         =>'',  # line 1942
'confirm Password|form label' =>'',  # line 1946
'-- reset to...--'            =>'',  # line 1003
'Profile|form label'          =>'',  # line 1008
'daily'                       =>'',  # line 1962
'each 3 days'                 =>'',  # line 1963
'each 7 days'                 =>'',  # line 1964
'each 14 days'                =>'',  # line 1965
'each 30 days'                =>'',  # line 1966
'Never'                       =>'',  # line 1967
'Send notifications|form label'=>'',  # line 1973
'Send mail as html|form label'=>'',  # line 1974
'- no -'                      =>'',  # line 1039
'Assigne to project|form label'=>'',  # line 1048
'Options'                     =>'',  # line 1102
'Theme|form label'            =>'',  # line 1983
'Language|form label'         =>'',  # line 1987
'Time zone|form label'        =>'',  # line 1995

### ../pages/projectperson.inc.php   ###
'start times and end times'   =>'',  # line 133
'duration'                    =>'',  # line 134
'Log Efforts as'              =>'',  # line 137

### ../pages/person.inc.php   ###
'Create another person after submit'=>'',  # line 1150

### ../pages/task_more.inc.php   ###
'Invalid checksum for hidden form elements'=>'',  # line 780

### ../pages/person.inc.php   ###
'Could not get person'        =>'',  # line 1807
'The changed profile <b>does not affect existing project roles</b>! Those has to be adjusted inside the projects.'=>'',  # line 1288
'Sending notifactions requires an email-address.'=>'',  # line 1629
'Using auto detection of time zone requires this user to relogin.'=>'',  # line 1362
'Nickname has been converted to lowercase'=>'',  # line 1407
'Nickname has to be unique'   =>'',  # line 1413
'Passwords do not match'      =>'',  # line 1428
'Password is too weak (please add numbers, special chars or length)'=>'',  # line 1443
'Login-accounts require a unique nickname'=>'',  # line 1457
'A notification / activation  will be mailed to <b>%s</b> when you log out.'=>'',  # line 1483

### ../render/render_wiki.inc.php   ###
'Read more about %s.'         =>'',  # line 1043

### ../pages/person.inc.php   ###
'Person %s created'           =>'',  # line 1523
'Could not insert object'     =>'',  # line 1526
'Select some persons to delete'=>'',  # line 1573
'<b>%s</b> has been assigned to projects and can not be deleted. But you can deativate his right to login.'=>'',  # line 1590
'Failed to delete %s persons' =>'',  # line 1602
'Moved %s persons to trash'   =>'',  # line 1605
'Insufficient rights'         =>'',  # line 1623
'Since the user does not have the right to edit his own profile and therefore to adjust his password, sending an activation does not make sense.'=>'',  # line 1635
'Sending an activation mail does not make sense, until the user is allowed to login. Please adjust his profile.'=>'',  # line 1640
'Activation mail has been sent.'=>'',  # line 1651
'Sending notification e-mail failed.'=>'',  # line 1654
'Select some persons to notify'=>'',  # line 1675
'Failed to mail %s persons'   =>'',  # line 1700
'Sent notification to %s person(s)'=>'',  # line 1703
'Select some persons to edit' =>'',  # line 1729
'Could not get Person'        =>'',  # line 1733
'Edit Person|page type'       =>'',  # line 1749
'Adjust user-rights'          =>'',  # line 1751
'Please consider that activating login-accounts might trigger security-issues.'=>'',  # line 1761
'Person can login|form label' =>'',  # line 1767
'User rights changed'         =>'',  # line 1839
'Registering is not enabled'  =>'',  # line 1864
'Please provide information, why you want to register.'=>'',  # line 1869
'Register as a new user'      =>'',  # line 1877
'Add related companies'       =>'',  # line 2031
'No companies selected...'    =>'',  # line 2132
'Company already related to person'=>'',  # line 2108
'Failed to remove %s companies'=>'',  # line 2172
'Removed %s companies'        =>'',  # line 2175
'Marked all previous items as viewed.'=>'',  # line 2225

### ../pages/project_more.inc.php   ###
'Your Active Projects'        =>'',  # line 46
'relating to %s'              =>'',  # line 196
'Your Closed Projects'        =>'',  # line 130
'not assigned to a closed project'=>'',  # line 166
'no project templates'        =>'',  # line 230
'all'                         =>'',  # line 577
'modified by me'              =>'',  # line 284
'modified by others'          =>'',  # line 309
'last logout'                 =>'',  # line 334
'1 week'                      =>'',  # line 352
'2 weeks'                     =>'',  # line 371
'changed project-items'       =>'',  # line 531
'no changes yet'              =>'',  # line 532
'my open'                     =>'',  # line 621
'for milestone'               =>'',  # line 657
'needs approval'              =>'',  # line 716
'without milestone'           =>'',  # line 740
'Create a new folder for tasks and files'=>'',  # line 940

### ../pages/task_view.inc.php   ###
'new subtask for this folder' =>'',  # line 143

### ../render/render_page.inc.php   ###
'Filter-Preset:'              =>'',  # line 368

### ../pages/project_more.inc.php   ###
'No tasks'                    =>'',  # line 1170
'Create a new page'           =>'',  # line 1111

### ../pages/task_view.inc.php   ###
'Page'                        =>'',  # line 1052

### ../pages/task_more.inc.php   ###
'new Effort'                  =>'',  # line 2110

### ../pages/project_more.inc.php   ###
'Upload file|block title'     =>'',  # line 1246
'new Milestone'               =>'',  # line 1333
'View open milestones'        =>'',  # line 1359
'View closed milestones'      =>'',  # line 1365
'Project Efforts'             =>'',  # line 1407
'Released Versions'           =>'',  # line 1497
'New released Milestone'      =>'',  # line 1516
'Tasks resolved in upcomming version'=>'',  # line 1551
'Company|form label'          =>'',  # line 1668

### ../pages/task_more.inc.php   ###
'Display'                     =>'',  # line 684

### ../pages/project_more.inc.php   ###
'Create another project after submit'=>'',  # line 1728
'Select some projects to delete'=>'',  # line 1907
'Failed to delete %s projects'=>'',  # line 1927
'Moved %s projects to trash'  =>'',  # line 1930
'Select some projects...'     =>'',  # line 1950
'Invalid project-id!'         =>'',  # line 1960
'Y-m-d'                       =>'',  # line 1965
'Failed to change %s projects'=>'',  # line 1975
'Closed %s projects'          =>'',  # line 1979
'Reactivated %s projects'     =>'',  # line 1982
'Select new team members'     =>'',  # line 2016
'Found no persons to add. Go to `People` to create some.'=>'',  # line 2060
'Add'                         =>'',  # line 2072
'Could not access person by id'=>'',  # line 2104
'Reanimated person as team-member'=>'',  # line 2150
'Person already in project'   =>'',  # line 2154
'Template|as addon to project-templates'=>'',  # line 2237
'Failed to insert new project person. Data structure might have been corrupted'=>'',  # line 2350
'Failed to insert new issue. DB structure might have been corrupted.'=>'',  # line 2368
'Failed to update new task. DB structure might have been corrupted.'=>'',  # line 2423
'Failed to insert new comment. DB structure might have been corrupted.'=>'',  # line 2520
'Project duplicated (including %s items)'=>'',  # line 2541

### ../pages/project_view.inc.php   ###
'Book effort for this project'=>'',  # line 130
'Comments on project'         =>'',  # line 392

### ../pages/projectperson.inc.php   ###
'Edit Team Member'            =>'',  # line 46
'role of %s in %s|edit team-member title'=>'',  # line 47
'Role in this project'        =>'',  # line 115
'Changed role of <b>%s</b> to <b>%s</b>'=>'',  # line 222
'Failed to remove %s members from team'=>'',  # line 291
'Unassigned %s team member(s) from project'=>'',  # line 294

### ../pages/search.inc.php   ###
'in'                          =>'',  # line 350
'on'                          =>'',  # line 461
'cannot jump to this item type'=>'',  # line 606
'Due to the implementation of MySQL following words cannot be searched and have been ignored: %s'=>'',  # line 658
'Sorry, but there is nothing left to search.'=>'',  # line 663
'jumped to best of %s search results'=>'',  # line 678
'Add an ! to your search request to jump to the best result.'=>'',  # line 686
'%s search results for `%s`'  =>'',  # line 704
'No search results for `%s`'  =>'',  # line 707
'Searching'                   =>'',  # line 709
'Sorry. Could not find anything.'=>'',  # line 717
'Due to limitations of MySQL fulltext search, searching will not work for...<br>- words with 3 or less characters<br>- Lists with less than 3 entries<br>- words containing special charaters'=>'',  # line 718

### ../pages/task_more.inc.php   ###
'No project selected?'        =>'',  # line 85

### ../pages/version.inc.php   ###
'New Version'                 =>'',  # line 32

### ../pages/task_more.inc.php   ###
'Please select only one item as parent'=>'',  # line 138
'Insufficient rights for parent item.'=>'',  # line 142
'could not find project'      =>'',  # line 164
'Parent task not found.'      =>'',  # line 169
'Select some task(s) to edit' =>'',  # line 252
'You do not have enough rights to edit this task'=>'',  # line 260
'Edit %s|Page title'          =>'',  # line 285
'New milestone'               =>'',  # line 292
'New task'                    =>'',  # line 1315
'for %s|e.g. new task for something'=>'',  # line 297
'Display as'                  =>'',  # line 357
'This folder has %s subtasks. Changing category will ungroup them.'=>'',  # line 361
'-- next released version --' =>'',  # line 394

### ../pages/task_view.inc.php   ###
'Prio|Form label'             =>'',  # line 815
'- select person -'           =>'',  # line 774
'Assign to'                   =>'',  # line 795
'Assign to|Form label'        =>'',  # line 806
'Also assign to|Form label'   =>'',  # line 807
'Resolved in'                 =>'',  # line 748

### ../pages/task_more.inc.php   ###
'Bug Report'                  =>'',  # line 569
'Severity|Form label, attribute of issue-reports'=>'',  # line 615
'Reproducibility|Form label, attribute of issue-reports'=>'',  # line 616
'Timing'                      =>'',  # line 632

### ../pages/task_view.inc.php   ###
'30 min'                      =>'',  # line 824
'1 h'                         =>'',  # line 825
'2 h'                         =>'',  # line 826
'4 h'                         =>'',  # line 827
'1 Day'                       =>'',  # line 828
'2 Days'                      =>'',  # line 829
'3 Days'                      =>'',  # line 830
'4 Days'                      =>'',  # line 831
'1 Week'                      =>'',  # line 832
'1,5 Weeks'                   =>'',  # line 833
'2 Weeks'                     =>'',  # line 834
'3 Weeks'                     =>'',  # line 835

### ../pages/task_more.inc.php   ###
'Release as version|Form label, attribute of issue-reports'=>'',  # line 666
'Create another task after submit'=>'',  # line 740
'Comment has been rejected, because it looks like spam.'=>'',  # line 844
'Failed to add comment'       =>'',  # line 851
'Not enough rights to edit task'=>'',  # line 884
'unassigned to %s|task-assignment comment'=>'',  # line 996
'formerly assigned to %s|task-assigment comment'=>'',  # line 3291
'task was already assigned to %s'=>'',  # line 1020
'Failed to retrieve parent task'=>'',  # line 1085
'Task requires name'          =>'',  # line 2048
'Task called %s already exists'=>'',  # line 1122
'Milestones may not have sub tasks'=>'',  # line 1150
'Turned parent task into a folder. Note, that folders are only listed in tree'=>'',  # line 1156
'Failed, adding to parent-task'=>'',  # line 1160
'NOTICE: Ungrouped %s subtasks to <b>%s</b>'=>'',  # line 1181
'Created task %s with ID %s'  =>'',  # line 3386
'Changed task %s with ID %s'  =>'',  # line 1284
'Marked %s tasks to be resolved in this version.'=>'',  # line 1302
'Select some tasks to move'   =>'',  # line 2159
'Can not move task <b>%s</b> to own child.'=>'',  # line 1417
'Can not edit tasks %s'       =>'',  # line 1425
'Select folder to move tasks into'=>'',  # line 1456
'Failed to delete task %s'    =>'',  # line 1565
'Moved %s tasks to trash'     =>'',  # line 1571
' ungrouped %s subtasks to above parents.'=>'',  # line 1574
'No task(s) selected for deletion...'=>'',  # line 1583
'Could not find task'         =>'',  # line 1938
'Task <b>%s</b> does not need to be restored'=>'',  # line 1617
'Task <b>%s</b> restored'     =>'',  # line 1656
'Failed to restore Task <b>%s</b>'=>'',  # line 1659
'Task <b>%s</b> do not need to be restored'=>'',  # line 1651
'No task(s) selected for restoring...'=>'',  # line 1670
'Select some task(s) to mark as completed'=>'',  # line 1688
'Marked %s tasks (%s subtasks) as completed.'=>'',  # line 1729
'Select some task(s) to mark as approved'=>'',  # line 2497
'Marked %s tasks as approved and hidden from project-view.'=>'',  # line 1770
'Select some task(s) to mark as closed'=>'',  # line 1792
'Marked %s tasks as closed.'  =>'',  # line 1812
'Not enough rights to close %s tasks.'=>'',  # line 1814
'Select some task(s) to reopen'=>'',  # line 1830
'Reopened %s tasks.'          =>'',  # line 1848
'Select some task(s)'         =>'',  # line 1871
'Could not update task'       =>'',  # line 1887
'No task selected to add issue-report?'=>'',  # line 1918
'Task already has an issue-report'=>'',  # line 1922
'Adding issue-report to task' =>'',  # line 1932
'Select a task to edit description'=>'',  # line 1959
'Edit description'            =>'',  # line 1980
'Task Efforts'                =>'',  # line 2101
'For editing all tasks must be of same project.'=>'',  # line 2225
'Edit multiple tasks|Page title'=>'',  # line 2261
'Edit %s tasks|Page title'    =>'',  # line 2263
'keep different'              =>'',  # line 2450
'-- keep different --'        =>'',  # line 2317
'Category'                    =>'',  # line 2303
'Prio'                        =>'',  # line 2367
'none'                        =>'',  # line 2457

### ../pages/task_view.inc.php   ###
'next released version'       =>'',  # line 736

### ../pages/task_more.inc.php   ###
'resolved in Version'         =>'',  # line 2412
'Resolve Reason'              =>'',  # line 2431
'select person'               =>'',  # line 2463
'Also assigned to'            =>'',  # line 2464
'%s tasks could not be written'=>'',  # line 2765
'Updated %s tasks tasks'      =>'',  # line 2768
'ERROR: could not get Person' =>'',  # line 2915
'Select a note to edit'       =>'',  # line 2906
'Note'                        =>'',  # line 2933
'Create new note'             =>'',  # line 2936
'New Note on %s, %s'          =>'',  # line 2942
'Publish to|Form label'       =>'',  # line 2971
'ERROR: could not get project'=>'',  # line 3249
'Assigned Projects'           =>'',  # line 3004
'- no assigend projects'      =>'',  # line 3000
'Company Projects'            =>'',  # line 3026
'- no company projects'       =>'',  # line 3016
'All other Projects'          =>'',  # line 3044
'- no other projects'         =>'',  # line 3041
'For Project|form label'      =>'',  # line 3050
'New Project|form label'      =>'',  # line 3055
'Project name|form label'     =>'',  # line 3056
'ERROR: could not get assigned persons'=>'',  # line 3072
'Also assign to'              =>'',  # line 3108
'Book effort after submit'    =>'',  # line 3112
'ERROR: could not get task'   =>'',  # line 3150
'Note requires project'       =>'',  # line 3202
'Note requires assigned person(s)'=>'',  # line 3206

### ../pages/task_view.inc.php   ###
'Edit this task'              =>'',  # line 987
'Move|page function to move current task'=>'',  # line 994
'new bug for this folder'     =>'',  # line 174
'new task for this milestone' =>'',  # line 166
'Delete this task'            =>'',  # line 1002
'Restore this task'           =>'',  # line 1011
'Undelete'                    =>'',  # line 1012
'Released as|Label in Task summary'=>'',  # line 246
'Part of|Label in Task summary'=>'',  # line 257
'For Milestone|Label in Task summary'=>'',  # line 263
'Status|Label in Task summary'=>'',  # line 270
'Opened|Label in Task summary'=>'',  # line 274
'Estimated|Label in Task summary'=>'',  # line 277
'Completed|Label in Task summary'=>'',  # line 286
'Planned start|Label in Task summary'=>'',  # line 291
'Planned end|Label in Task summary'=>'',  # line 295
'Closed|Label in Task summary'=>'',  # line 300
'Created|Label in Task summary'=>'',  # line 1099
'Modified|Label in Task summary'=>'',  # line 1103
'View previous %s versions'   =>'',  # line 1112
'Logged effort|Label in task-summary'=>'',  # line 335
'Publish to|Label in Task summary'=>'',  # line 1123
'Set to Open'                 =>'',  # line 1126
'Attached files'              =>'',  # line 1165
'attach new'                  =>'',  # line 1167
'Severity|label in issue-reports'=>'',  # line 458
'Reproducibility|label in issue-reports'=>'',  # line 465
'Plattform'                   =>'',  # line 471
'OS'                          =>'',  # line 474
'Build'                       =>'',  # line 480
'Steps to reproduce|label in issue-reports'=>'',  # line 485
'Expected result|label in issue-reports'=>'',  # line 489
'Suggested Solution|label in issue-reports'=>'',  # line 493
'Issue report'                =>'',  # line 501
'Sub tasks'                   =>'',  # line 521
'Open tasks for milestone'    =>'',  # line 544
'No open tasks for this milestone'=>'',  # line 547
'1 Comment'                   =>'',  # line 1228
'%s Comments'                 =>'',  # line 1231
'Comment / Update'            =>'',  # line 647
'quick edit'                  =>'',  # line 678
'Update'                      =>'',  # line 719
'Public to'                   =>'',  # line 758

### ../pages/version.inc.php   ###
'Edit Version|page type'      =>'',  # line 79
'Edit Version|page title'     =>'',  # line 88
'New Version|page title'      =>'',  # line 91
'Could not get version'       =>'',  # line 148
'Could not get project of version'=>'',  # line 164
'Select some versions to delete'=>'',  # line 229
'Failed to delete %s versions'=>'',  # line 248
'Moved %s versions to dumpster'=>'',  # line 251
'Version|page type'           =>'',  # line 289
'Edit this version'           =>'',  # line 310

### ../render/render_fields.inc.php   ###
'<b>%s</b> is not a known format for date.'=>'',  # line 307

### ../render/render_form.inc.php   ###
'Please copy the text'        =>'',  # line 62
'Sorry. To reduce the efficiency of spam bots, guests have to copy the text'=>'',  # line 64
'Wiki format'                 =>'',  # line 417
'Submit'                      =>'',  # line 579
'Cancel'                      =>'',  # line 619
'Apply'                       =>'',  # line 629

### ../render/render_list.inc.php   ###
'for milestone %s'            =>'',  # line 186
'changed today'               =>'',  # line 430
'changed since yesterday'     =>'',  # line 433
'changed since <b>%d days</b>'=>'',  # line 436
'changed since <b>%d weeks</b>'=>'',  # line 439
'created by %s'               =>'',  # line 715
'created by unknown'          =>'',  # line 718
'modified by %s'              =>'',  # line 741
'modified by unknown'         =>'',  # line 744
'item #%s has undefined type' =>'',  # line 767
'do...'                       =>'',  # line 1016

### ../render/render_list_column_special.inc.php   ###
'Tasks|short column header'   =>'',  # line 226
'Number of open tasks is hilighted if shown home.'=>'',  # line 227
'Status|Short status column header'=>'',  # line 273
'Status is %s'                =>'',  # line 291
'Item is published to'        =>'',  # line 330
'Pub|column header for public level'=>'',  # line 331
'Publish to %s'               =>'',  # line 347
'Select / Deselect'           =>'',  # line 364

### ../render/render_misc.inc.php   ###
'With Account|page option'    =>'',  # line 401
'Other Persons|page option'   =>'',  # line 405
'Clients|page option'         =>'',  # line 432
'Prospective Clients|page option'=>'',  # line 436
'Suppliers|page option'       =>'',  # line 440
'Partners|page option'        =>'',  # line 444
'Companies|page option'       =>'',  # line 272
'Tasks|Project option'        =>'',  # line 345
'Docu|Project option'         =>'',  # line 351
'Milestones|Project option'   =>'',  # line 358
'Releases|Project option'     =>'',  # line 366
'Files|Project option'        =>'',  # line 375
'Efforts|Project option'      =>'',  # line 382
'History|Project option'      =>'',  # line 388
'Employees|page option'       =>'',  # line 409
'Contact Persons|page option' =>'',  # line 413
'Deleted|page option'         =>'',  # line 417
'All Companies|page option'   =>'',  # line 428
'Active'                      =>'',  # line 459
'Templates'                   =>'',  # line 467
'new since last logout'       =>'',  # line 752
'Yesterday'                   =>'',  # line 704
'%s hours'                    =>'',  # line 783
'%s days'                     =>'',  # line 787
'%s weeks'                    =>'',  # line 791
'estimated %s hours'          =>'',  # line 819
'%s hours max'                =>'',  # line 821
'estimated %s days'           =>'',  # line 828
'%s days max'                 =>'',  # line 831
'estimated %s weeks'          =>'',  # line 840
'%s weeks max'                =>'',  # line 842
'%2.0f%% completed'           =>'',  # line 846

### ../render/render_page.inc.php   ###
'<span class=accesskey>H</span>ome'=>'',  # line 221
'<span class=accesskey>P</span>rojects'=>'',  # line 228
'Your related People'         =>'',  # line 236
'Your related Companies'      =>'',  # line 242
'Calendar'                    =>'',  # line 247
'<span class=accesskey>S</span>earch:&nbsp;'=>'',  # line 252
'Click Tab for complex search or enter word* or Id and hit return. Use ALT-S as shortcut. Use `Search!` for `Good Luck`'=>'',  # line 255
'This page requires java-script to be enabled. Please adjust your browser-settings.'=>'',  # line 562
'Add Now'                     =>'',  # line 623
'you are'                     =>'',  # line 707
'Go to parent / alt-U'        =>'',  # line 986
'Documentation and Discussion about this page'=>'',  # line 957
'Help'                        =>'',  # line 959
'rendered in'                 =>'',  # line 1304
'memory used'                 =>'',  # line 1305
'querrying approx.'           =>'',  # line 1306
'db-fields'                   =>'',  # line 1306

### ../render/render_wiki.inc.php   ###
'from'                        =>'',  # line 318
'enlarge'                     =>'',  # line 953
'Unknown File-Id:'            =>'',  # line 965
'Unknown project-Id:'         =>'',  # line 975
'Cannot link to item of type %s'=>'',  # line 1030
'Wiki-format: <b>%s</b> is not a valid link-type'=>'',  # line 1042
'No task matches this name exactly'=>'',  # line 1112
'This task seems to be related'=>'',  # line 1113
'No item excactly matches this name.'=>'',  # line 1140
'List %s related tasks'       =>'',  # line 1141
'identical'                   =>'',  # line 1149
'No item matches this name. Create new task with this name?'=>'',  # line 1183
'No item matches this name.'  =>'',  # line 1159
'No item matches this name'   =>'',  # line 1210
'Unknown Item Id'             =>'',  # line 1305

### ../std/class_auth.inc.php   ###
'Cookie is no longer valid for this computer.'=>'',  # line 51
'Your IP-Address changed. Please relogin.'=>'',  # line 57
'Your account has been disabled. '=>'',  # line 63
'Invalid anonymous user'      =>'',  # line 94
'Anonymous account has been disabled. '=>'',  # line 100
'Unable to automatically detect client time zone'=>'',  # line 262
'Could not set cookie.'       =>'',  # line 304

### ../std/class_pagehandler.inc.php   ###
'Operation aborted (%s)'      =>'',  # line 754
'Operation aborted with an fatal error (%s).'=>'',  # line 757
'Operation aborted with an fatal error which was cause by an programming error (%s).'=>'',  # line 760
'Insuffient rights'           =>'',  # line 769
'Operation aborted with an fatal data-base structure error (%s). This may have happened do to an inconsistency in your database. We strongly suggest to rewind to a recent back-up.'=>'',  # line 773

### ../std/common.inc.php   ###
'Sorry, but the entered number did not match'=>'',  # line 236
'No element selected? (could not find id)|Message if a function started without items selected'=>'',  # line 374
'only one item expected.'     =>'',  # line 385

### ../std/constant_names.inc.php   ###
'template|status name'        =>'',  # line 18
'undefined|status_name'       =>'',  # line 19
'upcoming|status_name'        =>'',  # line 20
'new|status_name'             =>'',  # line 21
'open|status_name'            =>'',  # line 22
'blocked|status_name'         =>'',  # line 23
'done?|status_name'           =>'',  # line 24
'approved|status_name'        =>'',  # line 25
'closed|status_name'          =>'',  # line 26
'Member|profile name'         =>'',  # line 32
'Admin|profile name'          =>'',  # line 33
'Project manager|profile name'=>'',  # line 34
'Developer|profile name'      =>'',  # line 35
'Artist|profile name'         =>'',  # line 36
'Tester|profile name'         =>'',  # line 37
'Client|profile name'         =>'',  # line 38
'Client trusted|profile name' =>'',  # line 39
'Guest|profile name'          =>'',  # line 40
'undefined|pub_level_name'    =>'',  # line 47
'private|pub_level_name'      =>'',  # line 48
'suggested|pub_level_name'    =>'',  # line 49
'internal|pub_level_name'     =>'',  # line 50
'open|pub_level_name'         =>'',  # line 51
'client|pub_level_name'       =>'',  # line 52
'client_edit|pub_level_name'  =>'',  # line 53
'assigned|pub_level_name'     =>'',  # line 54
'owned|pub_level_name'        =>'',  # line 55
'priv|short for public level private'=>'',  # line 62
'int|short for public level internal'=>'',  # line 64
'pub|short for public level client'=>'',  # line 66
'PUB|short for public level client edit'=>'',  # line 67
'A|short for public level assigned'=>'',  # line 68
'O|short for public level owned'=>'',  # line 69
'Enable Efforts|Project setting'=>'',  # line 74
'Enable Milestones|Project setting'=>'',  # line 75
'Enable Versions|Project setting'=>'',  # line 76
'Only PM may close tasks|Project setting'=>'',  # line 77
'Create projects|a user right'=>'',  # line 83
'Edit projects|a user right'  =>'',  # line 84
'Delete projects|a user right'=>'',  # line 85
'Edit project teams|a user right'=>'',  # line 86
'View anything|a user right'  =>'',  # line 87
'Edit anything|a user right'  =>'',  # line 88
'Create Persons|a user right' =>'',  # line 90
'Create & Edit Persons|a user right'=>'',  # line 91
'Delete Persons|a user right' =>'',  # line 92
'View all Persons|a user right'=>'',  # line 93
'Edit User Rights|a user right'=>'',  # line 94
'Edit Own Profil|a user right'=>'',  # line 95
'Create Companies|a user right'=>'',  # line 97
'Edit Companies|a user right' =>'',  # line 98
'Delete Companies|a user right'=>'',  # line 99
'undefined|priority'          =>'',  # line 105
'urgent|priority'             =>'',  # line 106
'high|priority'               =>'',  # line 107
'normal|priority'             =>'',  # line 108
'lower|priority'              =>'',  # line 109
'lowest|priority'             =>'',  # line 110
'Team Member'                 =>'',  # line 122
'Employment'                  =>'',  # line 124
'Issue'                       =>'',  # line 125
'Task assignment'             =>'',  # line 130
'Nitpicky|severity'           =>'',  # line 137
'Feature|severity'            =>'',  # line 138
'Trivial|severity'            =>'',  # line 139
'Text|severity'               =>'',  # line 140
'Tweak|severity'              =>'',  # line 141
'Minor|severity'              =>'',  # line 142
'Major|severity'              =>'',  # line 143
'Crash|severity'              =>'',  # line 144
'Block|severity'              =>'',  # line 145
'Not available|reproducabilty'=>'',  # line 150
'Always|reproducabilty'       =>'',  # line 151
'Sometimes|reproducabilty'    =>'',  # line 152
'Have not tried|reproducabilty'=>'',  # line 153
'Unable to reproduce|reproducabilty'=>'',  # line 154
'done|Resolve reason'         =>'',  # line 160
'fixed|Resolve reason'        =>'',  # line 161
'works_for_me|Resolve reason' =>'',  # line 162
'duplicate|Resolve reason'    =>'',  # line 163
'bogus|Resolve reason'        =>'',  # line 164
'rejected|Resolve reason'     =>'',  # line 165
'deferred|Resolve reason'     =>'',  # line 166
'Not defined|release type'    =>'',  # line 172
'Not planned|release type'    =>'',  # line 173
'Upcomming|release type'      =>'',  # line 174
'Internal|release type'       =>'',  # line 175
'Public|release type'         =>'',  # line 176
'Without support|release type'=>'',  # line 177
'No longer supported|release type'=>'',  # line 178
'undefined|company category'  =>'',  # line 184
'client|company category'     =>'',  # line 185
'prospective client|company category'=>'',  # line 186
'supplier|company category'   =>'',  # line 187
'partner|company category'    =>'',  # line 188
'undefined|person category'   =>'',  # line 194
'- employee -|person category'=>'',  # line 195
'staff|person category'       =>'',  # line 196
'freelancer|person category'  =>'',  # line 197
'working student|person category'=>'',  # line 198
'apprentice|person category'  =>'',  # line 199
'intern|person category'      =>'',  # line 200
'ex-employee|person category' =>'',  # line 201
'- contact person -|person category'=>'',  # line 202
'client|person category'      =>'',  # line 203
'prospective client|person category'=>'',  # line 204
'supplier|person category'    =>'',  # line 205
'partner|person category'     =>'',  # line 206
'Task|Task Category'          =>'',  # line 213
'Bug|Task Category'           =>'',  # line 214
'Documentation|Task Category' =>'',  # line 215
'Event|Task Category'         =>'',  # line 216
'Folder|Task Category'        =>'',  # line 217
'Milestone|Task Category'     =>'',  # line 218
'Version|Task Category'       =>'',  # line 219
'never|notification period'   =>'',  # line 225
'one day|notification period' =>'',  # line 226
'two days|notification period'=>'',  # line 227
'three days|notification period'=>'',  # line 228
'four days|notification period'=>'',  # line 229
'five days|notification period'=>'',  # line 230
'one week|notification period'=>'',  # line 231
'two weeks|notification period'=>'',  # line 232
'three weeks|notification period'=>'',  # line 233
'one month|notification period'=>'',  # line 234
'two months|notification period'=>'',  # line 235

### ../std/mail.inc.php   ###
'Failure sending mail: %s'    =>'',  # line 51
'Streber Email Notification|notifcation mail from'=>'',  # line 443
'Updates at %s|notication mail subject'=>'',  # line 118
'Hello %s,|notification'      =>'',  # line 478
'with this automatically created e-mail we want to inform you that|notification'=>'',  # line 137
'since %s'                    =>'',  # line 142
'following happened at %s |notification'=>'',  # line 149
'Your account has been created.|notification'=>'',  # line 159
'Please set a password to activate it.|notification'=>'',  # line 161
'You have been assigned to projects:|notification'=>'',  # line 545
'Project Updates'             =>'',  # line 645
'If you do not want to get further notifications or you forgot your password feel free to|notification'=>'',  # line 322
'adjust your profile|notification'=>'',  # line 324
'Thanks for your time|notication'=>'',  # line 489
'the management|notication'   =>'',  # line 490
'No news for <b>%s</b>'       =>'',  # line 412
'Your account at|notification'=>'',  # line 464
'Your account at %s is still active.|notification'=>'',  # line 481
'Your login name is|notification'=>'',  # line 482
'Maybe you want to %s set your password|notification'=>'',  # line 483
'Unchanged item|notifcation mail from'=>'',  # line 805
'No emails sent.'             =>'',  # line 1069
'No changes on "%s" since %s (%s day(s))|notication mail subject'=>'',  # line 831
'The following item is unchanged:|notification'=>'',  # line 847
'Notification on changed item|notifcation mail from'=>'',  # line 1039
'Changes on "%s"|notication mail subject'=>'',  # line 1075
'The following item was changed:|notification'=>'',  # line 1091





);



?>