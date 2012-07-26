<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-08 18:55:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/model/customers.php [ 74 ]
2012-07-08 18:55:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/model/customers.php [ 74 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 18:56:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/model/customers.php [ 74 ]
2012-07-08 18:56:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/model/customers.php [ 74 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 19:02:34 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/views/workplaces/workplaceGeneralData.php [ 10 ]
2012-07-08 19:02:34 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/views/workplaces/workplaceGeneralData.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 19:02:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: results ~ APPPATH/classes/model/workplaces.php [ 76 ]
2012-07-08 19:02:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: results ~ APPPATH/classes/model/workplaces.php [ 76 ]
--
#0 /var/www/technician_planning/application/classes/model/workplaces.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/techni...', 76, Array)
#1 /var/www/technician_planning/application/classes/controller/workplaces.php(26): Model_Workplaces->get_contacts_for_workplace(0)
#2 [internal function]: Controller_Workplaces->action_contact_person()
#3 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workplaces))
#4 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-08 19:03:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: surname ~ APPPATH/views/workplaces/workplaceGeneralData.php [ 48 ]
2012-07-08 19:03:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: results ~ APPPATH/classes/model/workplaces.php [ 76 ]
2012-07-08 19:03:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: results ~ APPPATH/classes/model/workplaces.php [ 76 ]
--
#0 /var/www/technician_planning/application/classes/model/workplaces.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/techni...', 76, Array)
#1 /var/www/technician_planning/application/classes/controller/workplaces.php(26): Model_Workplaces->get_contacts_for_workplace(0)
#2 [internal function]: Controller_Workplaces->action_contact_person()
#3 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workplaces))
#4 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-08 19:03:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: surname ~ APPPATH/views/workplaces/workplaceGeneralData.php [ 48 ]
--
#0 /var/www/technician_planning/application/views/workplaces/workplaceGeneralData.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/techni...', 48, Array)
#1 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#2 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#3 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/technician_planning/application/views/common/template.php(15): Kohana_View->__toString()
#5 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#6 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#7 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/technician_planning/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/technician_planning/application/classes/controller/workplaces.php(102): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Workplaces->action_general_data()
#11 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workplaces))
#12 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-08 19:04:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: results ~ APPPATH/classes/model/workplaces.php [ 76 ]
2012-07-08 19:04:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: results ~ APPPATH/classes/model/workplaces.php [ 76 ]
--
#0 /var/www/technician_planning/application/classes/model/workplaces.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/techni...', 76, Array)
#1 /var/www/technician_planning/application/classes/controller/workplaces.php(26): Model_Workplaces->get_contacts_for_workplace(0)
#2 [internal function]: Controller_Workplaces->action_contact_person()
#3 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workplaces))
#4 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#7 {main}