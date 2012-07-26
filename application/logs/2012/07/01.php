<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-01 12:45:14 --- ERROR: ErrorException [ 8 ]: Undefined index: cust_id ~ APPPATH/classes/model/customers.php [ 289 ]
2012-07-01 12:45:14 --- STRACE: ErrorException [ 8 ]: Undefined index: cust_id ~ APPPATH/classes/model/customers.php [ 289 ]
--
#0 /var/www/technician_planning/application/classes/model/customers.php(289): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/techni...', 289, Array)
#1 /var/www/technician_planning/application/classes/model/customers.php(565): Model_Customers->update_customers(Array)
#2 /var/www/technician_planning/application/classes/controller/customers.php(69): Model_Customers->create_customers(Array)
#3 [internal function]: Controller_Customers->action_create()
#4 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-01 12:47:18 --- ERROR: ErrorException [ 8 ]: Undefined index: cust_id ~ APPPATH/classes/model/customers.php [ 311 ]
2012-07-01 12:47:18 --- STRACE: ErrorException [ 8 ]: Undefined index: cust_id ~ APPPATH/classes/model/customers.php [ 311 ]
--
#0 /var/www/technician_planning/application/classes/model/customers.php(311): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/techni...', 311, Array)
#1 /var/www/technician_planning/application/classes/model/customers.php(565): Model_Customers->update_customers(Array)
#2 /var/www/technician_planning/application/classes/controller/customers.php(69): Model_Customers->create_customers(Array)
#3 [internal function]: Controller_Customers->action_create()
#4 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-01 18:33:22 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/planning/index.php [ 63 ]
2012-07-01 18:33:22 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/planning/index.php [ 63 ]
--
#0 /var/www/technician_planning/application/views/planning/index.php(63): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/techni...', 63, Array)
#1 /var/www/technician_planning/system/classes/kohana/view.php(61): include('/var/www/techni...')
#2 /var/www/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/techni...', Array)
#3 /var/www/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/technician_planning/application/views/common/template.php(15): Kohana_View->__toString()
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
2012-07-01 19:01:32 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= 'aaaaa' AND cust_surname = 'aaaaa'' at line 1 [ SELECT * FROM customers  cust_name = 'aaaaa' AND cust_surname = 'aaaaa'  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-01 19:01:32 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= 'aaaaa' AND cust_surname = 'aaaaa'' at line 1 [ SELECT * FROM customers  cust_name = 'aaaaa' AND cust_surname = 'aaaaa'  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM c...', false, Array)
#1 /var/www/technician_planning/application/classes/model/customers.php(607): Kohana_Database_Query->execute()
#2 /var/www/technician_planning/application/classes/controller/customers.php(138): Model_Customers->search(Array)
#3 [internal function]: Controller_Customers->action_search()
#4 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-01 19:03:04 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM customers  WHERE  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-01 19:03:04 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM customers  WHERE  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM c...', false, Array)
#1 /var/www/technician_planning/application/classes/model/customers.php(607): Kohana_Database_Query->execute()
#2 /var/www/technician_planning/application/classes/controller/customers.php(138): Model_Customers->search(Array)
#3 [internal function]: Controller_Customers->action_search()
#4 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-01 19:04:50 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM customers  WHERE  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-01 19:04:50 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM customers  WHERE  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM c...', false, Array)
#1 /var/www/technician_planning/application/classes/model/customers.php(607): Kohana_Database_Query->execute()
#2 /var/www/technician_planning/application/classes/controller/customers.php(138): Model_Customers->search(Array)
#3 [internal function]: Controller_Customers->action_search()
#4 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-01 19:05:30 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM customers  WHERE  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-01 19:05:30 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM customers  WHERE  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM c...', false, Array)
#1 /var/www/technician_planning/application/classes/model/customers.php(607): Kohana_Database_Query->execute()
#2 /var/www/technician_planning/application/classes/controller/customers.php(138): Model_Customers->search(Array)
#3 [internal function]: Controller_Customers->action_search()
#4 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}