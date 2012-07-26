<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-14 16:41:10 --- ERROR: ErrorException [ 8 ]: Undefined index: login ~ APPPATH/classes/controller/login.php [ 42 ]
2012-07-14 16:41:10 --- STRACE: ErrorException [ 8 ]: Undefined index: login ~ APPPATH/classes/controller/login.php [ 42 ]
--
#0 /var/www/technician_planning/application/classes/controller/login.php(42): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/techni...', 42, Array)
#1 [internal function]: Controller_Login->action_log()
#2 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#3 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-14 16:54:28 --- ERROR: ErrorException [ 2 ]: preg_match(): Compilation failed: syntax error in subpattern name (missing terminator) at offset 108 ~ SYSPATH/classes/kohana/route.php [ 392 ]
2012-07-14 16:54:28 --- STRACE: ErrorException [ 2 ]: preg_match(): Compilation failed: syntax error in subpattern name (missing terminator) at offset 108 ~ SYSPATH/classes/kohana/route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/techni...', 392, Array)
#1 /var/www/technician_planning/system/classes/kohana/route.php(392): preg_match('#^planning(?:/(...', 'planning', NULL)
#2 /var/www/technician_planning/system/classes/kohana/request.php(567): Kohana_Route->matches('planning')
#3 /var/www/technician_planning/system/classes/kohana/request.php(785): Kohana_Request::process_uri('planning', Array)
#4 /var/www/technician_planning/system/classes/kohana/request.php(198): Kohana_Request->__construct('/planning', NULL)
#5 /var/www/technician_planning/index.php(108): Kohana_Request::factory()
#6 {main}
2012-07-14 16:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL planning/day was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-14 16:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL planning/day was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-14 17:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL planning/aa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-14 17:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL planning/aa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-14 17:39:25 --- ERROR: ErrorException [ 2 ]: preg_match(): Compilation failed: syntax error in subpattern name (missing terminator) at offset 101 ~ SYSPATH/classes/kohana/route.php [ 392 ]
2012-07-14 17:39:25 --- STRACE: ErrorException [ 2 ]: preg_match(): Compilation failed: syntax error in subpattern name (missing terminator) at offset 101 ~ SYSPATH/classes/kohana/route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/techni...', 392, Array)
#1 /var/www/technician_planning/system/classes/kohana/route.php(392): preg_match('#^planning(?:/(...', 'planning/month', NULL)
#2 /var/www/technician_planning/system/classes/kohana/request.php(567): Kohana_Route->matches('planning/month')
#3 /var/www/technician_planning/system/classes/kohana/request.php(785): Kohana_Request::process_uri('planning/month', Array)
#4 /var/www/technician_planning/system/classes/kohana/request.php(198): Kohana_Request->__construct('/planning/month', NULL)
#5 /var/www/technician_planning/index.php(108): Kohana_Request::factory()
#6 {main}
2012-07-14 17:39:44 --- ERROR: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 128 ~ SYSPATH/classes/kohana/route.php [ 392 ]
2012-07-14 17:39:44 --- STRACE: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 128 ~ SYSPATH/classes/kohana/route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/techni...', 392, Array)
#1 /var/www/technician_planning/system/classes/kohana/route.php(392): preg_match('#^planning(?:/(...', 'planning/month', NULL)
#2 /var/www/technician_planning/system/classes/kohana/request.php(567): Kohana_Route->matches('planning/month')
#3 /var/www/technician_planning/system/classes/kohana/request.php(785): Kohana_Request::process_uri('planning/month', Array)
#4 /var/www/technician_planning/system/classes/kohana/request.php(198): Kohana_Request->__construct('/planning/month', NULL)
#5 /var/www/technician_planning/index.php(108): Kohana_Request::factory()
#6 {main}
2012-07-14 17:40:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: technician ~ APPPATH/views/planning/index.php [ 100 ]
2012-07-14 17:40:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: technician ~ APPPATH/views/planning/index.php [ 100 ]
--
#0 /var/www/technician_planning/application/views/planning/index.php(100): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/techni...', 100, Array)
#1 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#2 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#3 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/technician_planning/application/views/common/template.php(17): Kohana_View->__toString()
#5 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#6 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#7 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/technician_planning/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/technician_planning/application/classes/controller/planning.php(63): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Planning->action_month()
#11 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Planning))
#12 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-14 17:40:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: technician ~ APPPATH/views/planning/index.php [ 100 ]
2012-07-14 17:40:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: technician ~ APPPATH/views/planning/index.php [ 100 ]
--
#0 /var/www/technician_planning/application/views/planning/index.php(100): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/techni...', 100, Array)
#1 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#2 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#3 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/technician_planning/application/views/common/template.php(17): Kohana_View->__toString()
#5 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#6 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#7 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/technician_planning/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/technician_planning/application/classes/controller/planning.php(63): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Planning->action_month()
#11 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Planning))
#12 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-14 17:40:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: technician ~ APPPATH/views/planning/index.php [ 100 ]
2012-07-14 17:40:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: technician ~ APPPATH/views/planning/index.php [ 100 ]
--
#0 /var/www/technician_planning/application/views/planning/index.php(100): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/techni...', 100, Array)
#1 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#2 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#3 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/technician_planning/application/views/common/template.php(17): Kohana_View->__toString()
#5 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#6 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#7 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/technician_planning/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/technician_planning/application/classes/controller/planning.php(34): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Planning->action_index()
#11 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Planning))
#12 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-14 17:40:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: technician ~ APPPATH/views/planning/index.php [ 100 ]
2012-07-14 17:40:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: technician ~ APPPATH/views/planning/index.php [ 100 ]
--
#0 /var/www/technician_planning/application/views/planning/index.php(100): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/techni...', 100, Array)
#1 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#2 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#3 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/technician_planning/application/views/common/template.php(17): Kohana_View->__toString()
#5 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#6 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#7 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/technician_planning/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/technician_planning/application/classes/controller/planning.php(34): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Planning->action_index()
#11 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Planning))
#12 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-14 18:28:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL planning/week/1/5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-14 18:28:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL planning/week/1/5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-14 18:48:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH/views/planning/planning.php [ 22 ]
2012-07-14 18:48:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH/views/planning/planning.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 18:48:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH/views/planning/planning.php [ 22 ]
2012-07-14 18:48:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH/views/planning/planning.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 18:48:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH/views/planning/planning.php [ 22 ]
2012-07-14 18:48:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH/views/planning/planning.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 22:01:52 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'act_type_id' in 'field list' [ SELECT cust_id,cust_name,cust_surname,act_type_id FROM customers  WHERE  cust_name LIKE '%verte%'  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-14 22:01:52 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'act_type_id' in 'field list' [ SELECT cust_id,cust_name,cust_surname,act_type_id FROM customers  WHERE  cust_name LIKE '%verte%'  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT cust_id,...', false, Array)
#1 /var/www/technician_planning/application/classes/model/customers.php(670): Kohana_Database_Query->execute()
#2 /var/www/technician_planning/application/classes/controller/customers.php(171): Model_Customers->search(Array)
#3 [internal function]: Controller_Customers->action_search()
#4 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-14 22:21:04 --- ERROR: ErrorException [ 8 ]: Undefined variable:  ~ APPPATH/views/customers/customerGeneralData.php [ 104 ]
2012-07-14 22:21:04 --- STRACE: ErrorException [ 8 ]: Undefined variable:  ~ APPPATH/views/customers/customerGeneralData.php [ 104 ]
--
#0 /var/www/technician_planning/application/views/customers/customerGeneralData.php(104): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/techni...', 104, Array)
#1 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#2 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#3 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/technician_planning/application/views/common/template.php(17): Kohana_View->__toString()
#5 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#6 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#7 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/technician_planning/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/technician_planning/application/classes/controller/customers.php(113): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Customers->action_general_data()
#11 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#12 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-14 22:34:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: create_workorder/2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-14 22:34:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: create_workorder/2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-14 22:38:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_workorders' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2012-07-14 22:38:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_workorders' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}