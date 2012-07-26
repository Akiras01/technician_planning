<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-19 08:31:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/classes/model/customers.php [ 118 ]
2012-07-19 08:31:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/classes/model/customers.php [ 118 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-19 08:32:07 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Model_Customers::get_names(), called in /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/workplaces.php on line 56 and defined ~ APPPATH/classes/model/customers.php [ 113 ]
2012-07-19 08:32:07 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Model_Customers::get_names(), called in /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/workplaces.php on line 56 and defined ~ APPPATH/classes/model/customers.php [ 113 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(113): Kohana_Core::error_handler(2, 'Missing argumen...', '/media/Data/tfe...', 113, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/workplaces.php(56): Model_Customers->get_names()
#2 [internal function]: Controller_Workplaces->action_index()
#3 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workplaces))
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-19 08:32:49 --- ERROR: ErrorException [ 8 ]: Undefined index: sname ~ APPPATH/views/workplaces/index.php [ 198 ]
2012-07-19 08:32:49 --- STRACE: ErrorException [ 8 ]: Undefined index: sname ~ APPPATH/views/workplaces/index.php [ 198 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/application/views/workplaces/index.php(198): Kohana_Core::error_handler(8, 'Undefined index...', '/media/Data/tfe...', 198, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(61): include('/media/Data/tfe...')
#2 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/media/Data/tfe...', Array)
#3 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /media/Data/tfe anthony_avril/technician_planning/application/views/common/template.php(17): Kohana_View->__toString()
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(61): include('/media/Data/tfe...')
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/media/Data/tfe...', Array)
#7 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/workplaces.php(61): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Workplaces->action_index()
#11 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workplaces))
#12 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-19 08:40:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/model/workplaces.php [ 427 ]
2012-07-19 08:40:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/model/workplaces.php [ 427 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-19 08:41:40 --- ERROR: ErrorException [ 8 ]: Undefined index: owner ~ APPPATH/classes/model/workplaces.php [ 390 ]
2012-07-19 08:41:40 --- STRACE: ErrorException [ 8 ]: Undefined index: owner ~ APPPATH/classes/model/workplaces.php [ 390 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/workplaces.php(390): Kohana_Core::error_handler(8, 'Undefined index...', '/media/Data/tfe...', 390, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/workplaces.php(187): Model_Workplaces->search(Array)
#2 [internal function]: Controller_Workplaces->action_search()
#3 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workplaces))
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#7 {main}