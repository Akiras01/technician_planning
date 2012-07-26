<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-12 08:31:51 --- ERROR: ErrorException [ 8 ]: Use of undefined constant cust_is_liable - assumed 'cust_is_liable' ~ APPPATH/classes/model/workplaces.php [ 44 ]
2012-07-12 08:31:51 --- STRACE: ErrorException [ 8 ]: Use of undefined constant cust_is_liable - assumed 'cust_is_liable' ~ APPPATH/classes/model/workplaces.php [ 44 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/workplaces.php(44): Kohana_Core::error_handler(8, 'Use of undefine...', '/media/Data/tfe...', 44, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/workplaces.php(74): Model_Workplaces->get_owners(NULL)
#2 [internal function]: Controller_Workplaces->action_get_customers()
#3 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workplaces))
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-12 08:31:58 --- ERROR: ErrorException [ 8 ]: Use of undefined constant cust_is_liable - assumed 'cust_is_liable' ~ APPPATH/classes/model/workplaces.php [ 44 ]
2012-07-12 08:31:58 --- STRACE: ErrorException [ 8 ]: Use of undefined constant cust_is_liable - assumed 'cust_is_liable' ~ APPPATH/classes/model/workplaces.php [ 44 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/workplaces.php(44): Kohana_Core::error_handler(8, 'Use of undefine...', '/media/Data/tfe...', 44, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/workplaces.php(74): Model_Workplaces->get_owners(NULL)
#2 [internal function]: Controller_Workplaces->action_get_customers()
#3 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workplaces))
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-12 08:42:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_contact' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2012-07-12 08:42:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_contact' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 08:42:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_contact' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2012-07-12 08:42:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_contact' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 08:43:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_contact' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2012-07-12 08:43:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_contact' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 08:43:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_contact' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2012-07-12 08:43:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_contact' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 08:43:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_contact' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2012-07-12 08:43:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_contact' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 21:12:46 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/planning/index.php [ 63 ]
2012-07-12 21:12:46 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/planning/index.php [ 63 ]
--
#0 /var/www/technician_planning/application/views/planning/index.php(63): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/techni...', 63, Array)
#1 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#2 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#3 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/technician_planning/application/views/common/template.php(17): Kohana_View->__toString()
#5 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#6 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#7 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/technician_planning/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/technician_planning/application/classes/controller/planning.php(25): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Planning->action_index()
#11 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Planning))
#12 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-12 21:13:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_townShips' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2012-07-12 21:13:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_townShips' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 21:13:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_townShips' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2012-07-12 21:13:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_townShips' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 22:00:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: adresses ~ APPPATH/classes/controller/workplaces.php [ 147 ]
2012-07-12 22:00:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: adresses ~ APPPATH/classes/controller/workplaces.php [ 147 ]
--
#0 /var/www/technician_planning/application/classes/controller/workplaces.php(147): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/techni...', 147, Array)
#1 [internal function]: Controller_Workplaces->action_get_adress()
#2 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workplaces))
#3 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#6 {main}