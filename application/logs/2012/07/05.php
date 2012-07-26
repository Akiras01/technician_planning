<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-05 08:29:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: activities ~ APPPATH/views/customers/index.php [ 211 ]
2012-07-05 08:29:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: activities ~ APPPATH/views/customers/index.php [ 211 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/application/views/customers/index.php(211): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/Data/tfe...', 211, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(61): include('/media/Data/tfe...')
#2 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/media/Data/tfe...', Array)
#3 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /media/Data/tfe anthony_avril/technician_planning/application/views/common/template.php(15): Kohana_View->__toString()
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(61): include('/media/Data/tfe...')
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/media/Data/tfe...', Array)
#7 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/workplaces.php(24): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Workplaces->action_index()
#11 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workplaces))
#12 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-05 21:22:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH/classes/controller/workplaces.php [ 154 ]
2012-07-05 21:22:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH/classes/controller/workplaces.php [ 154 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-05 21:28:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH/classes/controller/workplaces.php [ 154 ]
2012-07-05 21:28:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH/classes/controller/workplaces.php [ 154 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-05 21:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL workplaces/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-05 21:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL workplaces/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-05 21:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL customers/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-05 21:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL customers/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-05 21:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL workplaces/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-05 21:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL workplaces/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-05 21:44:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL customers/3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-05 21:44:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL customers/3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-05 21:46:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: activities ~ APPPATH/views/customers/index.php [ 211 ]
2012-07-05 21:46:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: activities ~ APPPATH/views/customers/index.php [ 211 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/application/views/customers/index.php(211): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/Data/tfe...', 211, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(61): include('/media/Data/tfe...')
#2 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/media/Data/tfe...', Array)
#3 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /media/Data/tfe anthony_avril/technician_planning/application/views/common/template.php(15): Kohana_View->__toString()
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(61): include('/media/Data/tfe...')
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/media/Data/tfe...', Array)
#7 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(56): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_customers->action_index()
#11 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_customers))
#12 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-05 21:49:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL workplaces/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-05 21:49:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL workplaces/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-05 21:57:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_workplaces' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2012-07-05 21:57:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_workplaces' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-05 21:59:05 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Workplaces::get_activity_for_workplaces() ~ APPPATH/classes/controller/workplaces.php [ 50 ]
2012-07-05 21:59:05 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Workplaces::get_activity_for_workplaces() ~ APPPATH/classes/controller/workplaces.php [ 50 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-05 22:00:07 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Workplaces::get_activity_for_workplaces() ~ APPPATH/classes/controller/workplaces.php [ 50 ]
2012-07-05 22:00:07 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Workplaces::get_activity_for_workplaces() ~ APPPATH/classes/controller/workplaces.php [ 50 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-05 22:00:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: activities ~ APPPATH/views/workplaces/index.php [ 211 ]
2012-07-05 22:00:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: activities ~ APPPATH/views/workplaces/index.php [ 211 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/application/views/workplaces/index.php(211): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/Data/tfe...', 211, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(61): include('/media/Data/tfe...')
#2 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/media/Data/tfe...', Array)
#3 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /media/Data/tfe anthony_avril/technician_planning/application/views/common/template.php(15): Kohana_View->__toString()
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(61): include('/media/Data/tfe...')
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/media/Data/tfe...', Array)
#7 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/workplaces.php(56): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Workplaces->action_index()
#11 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workplaces))
#12 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-05 22:03:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Workplace/contactPerson/1 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-05 22:03:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Workplace/generalData/1 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-05 22:03:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Workplace/generalData/1 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-05 22:03:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Workplace/contactPerson/1 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-05 22:03:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Workplace/adress/1 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-05 22:03:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Workplace/adress/1 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-05 22:06:34 --- ERROR: View_Exception [ 0 ]: The requested view workplaces/workplace/ContactPerson could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-05 22:06:34 --- STRACE: View_Exception [ 0 ]: The requested view workplaces/workplace/ContactPerson could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(137): Kohana_View->set_filename('workplaces/work...')
#1 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(30): Kohana_View->__construct('workplaces/work...', NULL)
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/workplaces.php(23): Kohana_View::factory('workplaces/work...')
#3 [internal function]: Controller_Workplaces->action_contact_person()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workplaces))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-05 22:06:41 --- ERROR: View_Exception [ 0 ]: The requested view workplaces/workplace/ContactPerson could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-05 22:06:41 --- STRACE: View_Exception [ 0 ]: The requested view workplaces/workplace/ContactPerson could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(137): Kohana_View->set_filename('workplaces/work...')
#1 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(30): Kohana_View->__construct('workplaces/work...', NULL)
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/workplaces.php(23): Kohana_View::factory('workplaces/work...')
#3 [internal function]: Controller_Workplaces->action_contact_person()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workplaces))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-05 22:06:44 --- ERROR: View_Exception [ 0 ]: The requested view workplaces/workplace/ContactPerson could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-05 22:06:44 --- STRACE: View_Exception [ 0 ]: The requested view workplaces/workplace/ContactPerson could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(137): Kohana_View->set_filename('workplaces/work...')
#1 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(30): Kohana_View->__construct('workplaces/work...', NULL)
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/workplaces.php(23): Kohana_View::factory('workplaces/work...')
#3 [internal function]: Controller_Workplaces->action_contact_person()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workplaces))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}