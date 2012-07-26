<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-25 08:23:21 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/planning/index.php [ 80 ]
2012-07-25 08:23:21 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/planning/index.php [ 80 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/application/views/planning/index.php(80): Kohana_Core::error_handler(2, 'Invalid argumen...', '/media/Data/tfe...', 80, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(61): include('/media/Data/tfe...')
#2 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/media/Data/tfe...', Array)
#3 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /media/Data/tfe anthony_avril/technician_planning/application/views/common/template.php(23): Kohana_View->__toString()
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(61): include('/media/Data/tfe...')
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/media/Data/tfe...', Array)
#7 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/planning.php(34): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Planning->action_index()
#11 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Planning))
#12 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-25 08:41:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/classes/model/shifts.php [ 82 ]
2012-07-25 08:41:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/classes/model/shifts.php [ 82 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-25 08:41:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/classes/model/shifts.php [ 82 ]
2012-07-25 08:41:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/classes/model/shifts.php [ 82 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-25 18:46:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/planning/planning.php [ 50 ]
2012-07-25 18:46:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/planning/planning.php [ 50 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-25 18:47:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/views/planning/planning.php [ 50 ]
2012-07-25 18:47:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/views/planning/planning.php [ 50 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-25 18:48:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/views/planning/planning.php [ 50 ]
2012-07-25 18:48:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/views/planning/planning.php [ 50 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-25 18:48:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/views/planning/planning.php [ 50 ]
2012-07-25 18:48:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/views/planning/planning.php [ 50 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-25 20:11:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL planning/week/1/4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-25 20:11:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL planning/week/1/4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-25 20:11:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL planning/week/2/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-25 20:11:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL planning/week/2/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#3 {main}