<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-21 14:35:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE ~ APPPATH/views/common/template.php [ 19 ]
2012-07-21 14:35:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE ~ APPPATH/views/common/template.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-21 14:36:37 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-21 14:36:37 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO cus...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(585): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(75): Model_Customers->create_customers(Array)
#3 [internal function]: Controller_Customers->action_create()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-21 14:53:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/Person/common.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-21 14:53:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/Person/common.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-21 19:32:39 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-21 19:32:39 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO cus...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(585): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(75): Model_Customers->create_customers(Array)
#3 [internal function]: Controller_Customers->action_create()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-21 19:34:37 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-21 19:34:37 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO cus...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(585): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(75): Model_Customers->create_customers(Array)
#3 [internal function]: Controller_Customers->action_create()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-21 19:41:02 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-21 19:41:02 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO cus...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(585): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(75): Model_Customers->create_customers(Array)
#3 [internal function]: Controller_Customers->action_create()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-21 19:43:24 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-21 19:43:24 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO cus...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(585): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(75): Model_Customers->create_customers(Array)
#3 [internal function]: Controller_Customers->action_create()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-21 20:10:08 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-21 20:10:08 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO cus...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(585): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(75): Model_Customers->create_customers(Array)
#3 [internal function]: Controller_Customers->action_create()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-21 20:16:59 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-21 20:16:59 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO cus...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(585): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(75): Model_Customers->create_customers(Array)
#3 [internal function]: Controller_Customers->action_create()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-21 20:17:47 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-21 20:17:47 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO cus...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(585): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(75): Model_Customers->create_customers(Array)
#3 [internal function]: Controller_Customers->action_create()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-21 20:20:53 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-21 20:20:53 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO cus...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(585): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(75): Model_Customers->create_customers(Array)
#3 [internal function]: Controller_Customers->action_create()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-21 20:28:18 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-21 20:28:18 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO cus...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(585): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(75): Model_Customers->create_customers(Array)
#3 [internal function]: Controller_Customers->action_create()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-21 20:29:10 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-21 20:29:10 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO cus...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(585): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(75): Model_Customers->create_customers(Array)
#3 [internal function]: Controller_Customers->action_create()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-21 20:31:56 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-21 20:31:56 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO cus...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(585): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(75): Model_Customers->create_customers(Array)
#3 [internal function]: Controller_Customers->action_create()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-21 20:32:47 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-21 20:32:47 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO cus...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(585): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(75): Model_Customers->create_customers(Array)
#3 [internal function]: Controller_Customers->action_create()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-21 20:36:05 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-21 20:36:05 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO cus...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(585): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(75): Model_Customers->create_customers(Array)
#3 [internal function]: Controller_Customers->action_create()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-21 20:41:03 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-21 20:41:03 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO cus...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(585): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(75): Model_Customers->create_customers(Array)
#3 [internal function]: Controller_Customers->action_create()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-21 21:00:08 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-21 21:00:08 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO cus...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(585): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(75): Model_Customers->create_customers(Array)
#3 [internal function]: Controller_Customers->action_create()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-21 21:01:51 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-21 21:01:51 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO cus...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(585): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(75): Model_Customers->create_customers(Array)
#3 [internal function]: Controller_Customers->action_create()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-21 23:33:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: vat_codes ~ APPPATH/classes/controller/workorders.php [ 156 ]
2012-07-21 23:33:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: vat_codes ~ APPPATH/classes/controller/workorders.php [ 156 ]
2012-07-21 23:33:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: vat_codes ~ APPPATH/classes/controller/workorders.php [ 156 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/workorders.php(156): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/Data/tfe...', 156, Array)
#1 [internal function]: Controller_Workorders->action_workplaces()
#2 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workorders))
#3 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-21 23:33:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: vat_codes ~ APPPATH/classes/controller/workorders.php [ 156 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/workorders.php(156): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/Data/tfe...', 156, Array)
#1 [internal function]: Controller_Workorders->action_workplaces()
#2 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workorders))
#3 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-21 23:33:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: vat_codes ~ APPPATH/classes/controller/workorders.php [ 156 ]
2012-07-21 23:33:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: vat_codes ~ APPPATH/classes/controller/workorders.php [ 156 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/workorders.php(156): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/Data/tfe...', 156, Array)
#1 [internal function]: Controller_Workorders->action_workplaces()
#2 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workorders))
#3 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-21 23:33:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: vat_codes ~ APPPATH/classes/controller/workorders.php [ 156 ]
2012-07-21 23:33:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: vat_codes ~ APPPATH/classes/controller/workorders.php [ 156 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/workorders.php(156): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/Data/tfe...', 156, Array)
#1 [internal function]: Controller_Workorders->action_workplaces()
#2 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workorders))
#3 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#6 {main}