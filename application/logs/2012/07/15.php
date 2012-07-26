<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-15 12:37:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL workorder/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-15 12:37:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL workorder/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 12:38:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: activities ~ APPPATH/views/workorders/index.php [ 152 ]
2012-07-15 12:38:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: activities ~ APPPATH/views/workorders/index.php [ 152 ]
--
#0 /var/www/technician_planning/application/views/workorders/index.php(152): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/techni...', 152, Array)
#1 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#2 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#3 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/technician_planning/application/views/common/template.php(17): Kohana_View->__toString()
#5 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#6 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#7 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/technician_planning/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/technician_planning/application/classes/controller/workorders.php(34): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Workorders->action_index()
#11 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workorders))
#12 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-15 12:40:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: activities ~ APPPATH/views/workorders/index.php [ 152 ]
2012-07-15 12:40:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: activities ~ APPPATH/views/workorders/index.php [ 152 ]
--
#0 /var/www/technician_planning/application/views/workorders/index.php(152): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/techni...', 152, Array)
#1 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#2 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#3 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/technician_planning/application/views/common/template.php(17): Kohana_View->__toString()
#5 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#6 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#7 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/technician_planning/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/technician_planning/application/classes/controller/workorders.php(34): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Workorders->action_index()
#11 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workorders))
#12 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-15 12:41:32 --- ERROR: ErrorException [ 2 ]: preg_match(): Compilation failed: syntax error in subpattern name (missing terminator) at offset 42 ~ SYSPATH/classes/kohana/route.php [ 392 ]
2012-07-15 12:41:32 --- STRACE: ErrorException [ 2 ]: preg_match(): Compilation failed: syntax error in subpattern name (missing terminator) at offset 42 ~ SYSPATH/classes/kohana/route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/techni...', 392, Array)
#1 /var/www/technician_planning/system/classes/kohana/route.php(392): preg_match('#^workorder(?:/...', 'planning', NULL)
#2 /var/www/technician_planning/system/classes/kohana/request.php(567): Kohana_Route->matches('planning')
#3 /var/www/technician_planning/system/classes/kohana/request.php(785): Kohana_Request::process_uri('planning', Array)
#4 /var/www/technician_planning/system/classes/kohana/request.php(198): Kohana_Request->__construct('/planning', NULL)
#5 /var/www/technician_planning/index.php(108): Kohana_Request::factory()
#6 {main}
2012-07-15 12:41:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: activities ~ APPPATH/views/workorders/index.php [ 152 ]
2012-07-15 12:41:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: activities ~ APPPATH/views/workorders/index.php [ 152 ]
--
#0 /var/www/technician_planning/application/views/workorders/index.php(152): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/techni...', 152, Array)
#1 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#2 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#3 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/technician_planning/application/views/common/template.php(17): Kohana_View->__toString()
#5 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#6 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#7 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/technician_planning/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/technician_planning/application/classes/controller/workorders.php(34): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Workorders->action_index()
#11 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workorders))
#12 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-15 13:17:45 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/model/customers.php [ 147 ]
2012-07-15 13:17:45 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/model/customers.php [ 147 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-15 13:22:41 --- ERROR: ErrorException [ 1 ]: Class 'Model_activityType' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2012-07-15 13:22:41 --- STRACE: ErrorException [ 1 ]: Class 'Model_activityType' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-15 13:24:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_activity_type' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2012-07-15 13:24:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_activity_type' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-15 13:25:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_activitytype' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2012-07-15 13:25:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_activitytype' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-15 13:26:23 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Activitytype::get_activity() ~ APPPATH/classes/controller/customers.php [ 54 ]
2012-07-15 13:26:23 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Activitytype::get_activity() ~ APPPATH/classes/controller/customers.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-15 13:30:38 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/views/customers/customerGeneralData.php [ 104 ]
2012-07-15 13:30:38 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/views/customers/customerGeneralData.php [ 104 ]
--
#0 /var/www/technician_planning/application/views/customers/customerGeneralData.php(104): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/techni...', 104, Array)
#1 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#2 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#3 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/technician_planning/application/views/common/template.php(17): Kohana_View->__toString()
#5 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#6 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#7 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/technician_planning/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/technician_planning/application/classes/controller/customers.php(119): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Customers->action_general_data()
#11 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#12 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-15 13:44:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: vat ~ APPPATH/views/customers/customerGeneralData.php [ 118 ]
2012-07-15 13:44:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: vat ~ APPPATH/views/customers/customerGeneralData.php [ 118 ]
--
#0 /var/www/technician_planning/application/views/customers/customerGeneralData.php(118): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/techni...', 118, Array)
#1 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#2 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#3 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/technician_planning/application/views/common/template.php(17): Kohana_View->__toString()
#5 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#6 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#7 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/technician_planning/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/technician_planning/application/classes/controller/customers.php(118): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Customers->action_general_data()
#11 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#12 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-15 13:52:34 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Model::factory(), called in /var/www/technician_planning/application/classes/controller/workplaces.php on line 124 and defined ~ SYSPATH/classes/kohana/model.php [ 21 ]
2012-07-15 13:52:34 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Model::factory(), called in /var/www/technician_planning/application/classes/controller/workplaces.php on line 124 and defined ~ SYSPATH/classes/kohana/model.php [ 21 ]
--
#0 /var/www/technician_planning/system/classes/kohana/model.php(21): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/techni...', 21, Array)
#1 /var/www/technician_planning/application/classes/controller/workplaces.php(124): Kohana_Model::factory()
#2 [internal function]: Controller_Workplaces->action_general_data()
#3 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workplaces))
#4 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-15 13:54:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: vat_codes ~ APPPATH/classes/controller/workplaces.php [ 126 ]
2012-07-15 13:54:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: vat_codes ~ APPPATH/classes/controller/workplaces.php [ 126 ]
--
#0 /var/www/technician_planning/application/classes/controller/workplaces.php(126): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/techni...', 126, Array)
#1 [internal function]: Controller_Workplaces->action_general_data()
#2 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workplaces))
#3 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-15 13:55:13 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH/classes/controller/workplaces.php [ 126 ]
2012-07-15 13:55:13 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH/classes/controller/workplaces.php [ 126 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-15 13:55:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: vat_code ~ APPPATH/views/workplaces/workplaceGeneralData.php [ 82 ]
2012-07-15 13:55:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: vat_code ~ APPPATH/views/workplaces/workplaceGeneralData.php [ 82 ]
--
#0 /var/www/technician_planning/application/views/workplaces/workplaceGeneralData.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/techni...', 82, Array)
#1 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#2 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#3 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/technician_planning/application/views/common/template.php(17): Kohana_View->__toString()
#5 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#6 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#7 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/technician_planning/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/technician_planning/application/classes/controller/workplaces.php(129): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Workplaces->action_general_data()
#11 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workplaces))
#12 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-15 21:23:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: activities ~ APPPATH/views/workorders/index.php [ 161 ]
2012-07-15 21:23:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: activities ~ APPPATH/views/workorders/index.php [ 161 ]
--
#0 /var/www/technician_planning/application/views/workorders/index.php(161): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/techni...', 161, Array)
#1 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#2 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#3 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/technician_planning/application/views/common/template.php(17): Kohana_View->__toString()
#5 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#6 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#7 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/technician_planning/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/technician_planning/application/classes/controller/workorders.php(34): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Workorders->action_index()
#11 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workorders))
#12 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-15 21:27:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_workordertypes' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2012-07-15 21:27:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_workordertypes' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-15 21:28:31 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Workordertypes::get_workorders_type() ~ APPPATH/classes/controller/workorders.php [ 34 ]
2012-07-15 21:28:31 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Workordertypes::get_workorders_type() ~ APPPATH/classes/controller/workorders.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-15 21:34:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL workorder/tasks/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-15 21:34:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL workorder/generalData/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-15 21:34:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL workorder/parts/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-15 21:34:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL workorder/workplaces/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-15 21:34:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL workorder/customers/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-15 21:34:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL workorder/customers/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 21:34:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL workorder/equipments/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-15 21:34:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL workorder/equipments/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 21:34:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL workorder/tasks/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 21:34:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL workorder/parts/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 21:34:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL workorder/generalData/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 21:34:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL workorder/workplaces/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 21:34:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL workorder/customers/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-15 21:34:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL workorder/customers/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 21:34:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL workorder/workplaces/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-15 21:34:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL workorder/workplaces/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 21:34:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL workorder/equipments/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-15 21:34:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL workorder/equipments/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 21:34:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL workorder/parts/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-15 21:34:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL workorder/parts/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 21:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL workorder/generalData/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-15 21:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL workorder/generalData/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 21:38:12 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/model/workorders.php [ 19 ]
2012-07-15 21:38:12 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/model/workorders.php [ 19 ]
--
#0 /var/www/technician_planning/application/classes/model/workorders.php(19): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/techni...', 19, Array)
#1 /var/www/technician_planning/application/classes/controller/workorders.php(65): Model_Workorders->get_workorder(0)
#2 [internal function]: Controller_Workorders->action_generalData()
#3 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workorders))
#4 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-15 21:38:42 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/model/workorders.php [ 19 ]
2012-07-15 21:38:42 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/model/workorders.php [ 19 ]
--
#0 /var/www/technician_planning/application/classes/model/workorders.php(19): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/techni...', 19, Array)
#1 /var/www/technician_planning/application/classes/controller/workorders.php(65): Model_Workorders->get_workorder(0)
#2 [internal function]: Controller_Workorders->action_generalData()
#3 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workorders))
#4 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-15 21:39:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH/views/workorders/workorderGeneralData.php [ 77 ]
2012-07-15 21:39:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH/views/workorders/workorderGeneralData.php [ 77 ]
--
#0 /var/www/technician_planning/application/views/workorders/workorderGeneralData.php(77): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/techni...', 77, Array)
#1 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#2 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#3 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/technician_planning/application/views/common/template.php(17): Kohana_View->__toString()
#5 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#6 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#7 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/technician_planning/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/technician_planning/application/classes/controller/workorders.php(78): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Workorders->action_generalData()
#11 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workorders))
#12 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#15 {main}