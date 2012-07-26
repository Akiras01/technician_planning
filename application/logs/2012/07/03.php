<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-03 08:08:57 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`technician_planning`.`customers`, CONSTRAINT `FK_customers_vat_id` FOREIGN KEY (`vat_id`) REFERENCES `vat_code` (`vat_id`) ON DELETE NO ACTION ON UPDATE CASCADE) [ INSERT INTO customers (cust_name,cust_surname,act_typ_id,vat_id )  VALUES ('toto','toto',0,0 )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-03 08:08:57 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`technician_planning`.`customers`, CONSTRAINT `FK_customers_vat_id` FOREIGN KEY (`vat_id`) REFERENCES `vat_code` (`vat_id`) ON DELETE NO ACTION ON UPDATE CASCADE) [ INSERT INTO customers (cust_name,cust_surname,act_typ_id,vat_id )  VALUES ('toto','toto',0,0 )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO cus...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(556): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(69): Model_Customers->create_customers(Array)
#3 [internal function]: Controller_Customers->action_create()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-03 08:19:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH/classes/model/customers.php [ 587 ]
2012-07-03 08:19:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH/classes/model/customers.php [ 587 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 08:24:14 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`technician_planning`.`customers`, CONSTRAINT `FK_customers_vat_id` FOREIGN KEY (`vat_id`) REFERENCES `vat_code` (`vat_id`) ON DELETE NO ACTION ON UPDATE CASCADE) [ INSERT INTO customers (cust_name )  VALUES ('toto' )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-03 08:24:14 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`technician_planning`.`customers`, CONSTRAINT `FK_customers_vat_id` FOREIGN KEY (`vat_id`) REFERENCES `vat_code` (`vat_id`) ON DELETE NO ACTION ON UPDATE CASCADE) [ INSERT INTO customers (cust_name )  VALUES ('toto' )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO cus...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(570): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(69): Model_Customers->create_customers(Array)
#3 [internal function]: Controller_Customers->action_create()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-03 08:25:15 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`technician_planning`.`customers`, CONSTRAINT `FK_customers_vat_id` FOREIGN KEY (`vat_id`) REFERENCES `vat_code` (`vat_id`) ON DELETE NO ACTION ON UPDATE CASCADE) [ INSERT INTO customers (cust_name )  VALUES ('toto' )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-03 08:25:15 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`technician_planning`.`customers`, CONSTRAINT `FK_customers_vat_id` FOREIGN KEY (`vat_id`) REFERENCES `vat_code` (`vat_id`) ON DELETE NO ACTION ON UPDATE CASCADE) [ INSERT INTO customers (cust_name )  VALUES ('toto' )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO cus...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(570): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(69): Model_Customers->create_customers(Array)
#3 [internal function]: Controller_Customers->action_create()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-03 08:25:22 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`technician_planning`.`customers`, CONSTRAINT `FK_customers_vat_id` FOREIGN KEY (`vat_id`) REFERENCES `vat_code` (`vat_id`) ON DELETE NO ACTION ON UPDATE CASCADE) [ INSERT INTO customers (cust_name )  VALUES ('toto' )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-03 08:25:22 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`technician_planning`.`customers`, CONSTRAINT `FK_customers_vat_id` FOREIGN KEY (`vat_id`) REFERENCES `vat_code` (`vat_id`) ON DELETE NO ACTION ON UPDATE CASCADE) [ INSERT INTO customers (cust_name )  VALUES ('toto' )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO cus...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(570): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(69): Model_Customers->create_customers(Array)
#3 [internal function]: Controller_Customers->action_create()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-03 08:26:31 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`technician_planning`.`customers`, CONSTRAINT `FK_customers_vat_id` FOREIGN KEY (`vat_id`) REFERENCES `vat_code` (`vat_id`) ON DELETE NO ACTION ON UPDATE CASCADE) [ INSERT INTO customers (cust_name )  VALUES ('tata' )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-03 08:26:31 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`technician_planning`.`customers`, CONSTRAINT `FK_customers_vat_id` FOREIGN KEY (`vat_id`) REFERENCES `vat_code` (`vat_id`) ON DELETE NO ACTION ON UPDATE CASCADE) [ INSERT INTO customers (cust_name )  VALUES ('tata' )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO cus...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(570): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(69): Model_Customers->create_customers(Array)
#3 [internal function]: Controller_Customers->action_create()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-03 08:28:41 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`technician_planning`.`customers`, CONSTRAINT `FK_customers_vat_id` FOREIGN KEY (`vat_id`) REFERENCES `vat_code` (`vat_id`) ON DELETE NO ACTION ON UPDATE CASCADE) [ INSERT INTO customers (cust_name )  VALUES ('tata' )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-03 08:28:41 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`technician_planning`.`customers`, CONSTRAINT `FK_customers_vat_id` FOREIGN KEY (`vat_id`) REFERENCES `vat_code` (`vat_id`) ON DELETE NO ACTION ON UPDATE CASCADE) [ INSERT INTO customers (cust_name )  VALUES ('tata' )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO cus...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(570): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(69): Model_Customers->create_customers(Array)
#3 [internal function]: Controller_Customers->action_create()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-03 18:48:34 --- ERROR: ErrorException [ 8 ]: Undefined index: cust_id ~ APPPATH/views/customers/customerGeneralData.php [ 11 ]
2012-07-03 18:48:34 --- STRACE: ErrorException [ 8 ]: Undefined index: cust_id ~ APPPATH/views/customers/customerGeneralData.php [ 11 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/application/views/customers/customerGeneralData.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/media/Data/tfe...', 11, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(61): include('/media/Data/tfe...')
#2 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/media/Data/tfe...', Array)
#3 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /media/Data/tfe anthony_avril/technician_planning/application/views/common/template.php(15): Kohana_View->__toString()
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(61): include('/media/Data/tfe...')
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/media/Data/tfe...', Array)
#7 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(102): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Customers->action_general_data()
#11 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#12 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-03 18:52:12 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/customers/customerGeneralData.php [ 12 ]
2012-07-03 18:52:12 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/customers/customerGeneralData.php [ 12 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/media/Data/tfe...', 12, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/views/customers/customerGeneralData.php(12): implode(',', Array)
#2 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(61): include('/media/Data/tfe...')
#3 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/media/Data/tfe...', Array)
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /media/Data/tfe anthony_avril/technician_planning/application/views/common/template.php(15): Kohana_View->__toString()
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(61): include('/media/Data/tfe...')
#7 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/media/Data/tfe...', Array)
#8 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#9 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/response.php(160): Kohana_View->__toString()
#10 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(102): Kohana_Response->body(Object(View))
#11 [internal function]: Controller_Customers->action_general_data()
#12 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#13 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#16 {main}
2012-07-03 18:54:34 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/model/customers.php [ 45 ]
2012-07-03 18:54:34 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/model/customers.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 18:56:15 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/customers.php [ 97 ]
2012-07-03 18:56:15 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/customers.php [ 97 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(97): Kohana_Core::error_handler(8, 'Undefined offse...', '/media/Data/tfe...', 97, Array)
#1 [internal function]: Controller_Customers->action_general_data()
#2 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#3 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-03 18:56:58 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/customers.php [ 97 ]
2012-07-03 18:56:58 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/customers.php [ 97 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(97): Kohana_Core::error_handler(8, 'Undefined offse...', '/media/Data/tfe...', 97, Array)
#1 [internal function]: Controller_Customers->action_general_data()
#2 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#3 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-03 18:57:19 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/customers.php [ 97 ]
2012-07-03 18:57:19 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/customers.php [ 97 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(97): Kohana_Core::error_handler(8, 'Undefined offse...', '/media/Data/tfe...', 97, Array)
#1 [internal function]: Controller_Customers->action_general_data()
#2 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#3 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-03 18:57:48 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/customers.php [ 97 ]
2012-07-03 18:57:48 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/customers.php [ 97 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(97): Kohana_Core::error_handler(8, 'Undefined offse...', '/media/Data/tfe...', 97, Array)
#1 [internal function]: Controller_Customers->action_general_data()
#2 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#3 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-03 19:00:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: activities ~ APPPATH/views/customers/customerGeneralData.php [ 80 ]
2012-07-03 19:00:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: activities ~ APPPATH/views/customers/customerGeneralData.php [ 80 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/application/views/customers/customerGeneralData.php(80): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/Data/tfe...', 80, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(61): include('/media/Data/tfe...')
#2 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/media/Data/tfe...', Array)
#3 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /media/Data/tfe anthony_avril/technician_planning/application/views/common/template.php(15): Kohana_View->__toString()
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(61): include('/media/Data/tfe...')
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/media/Data/tfe...', Array)
#7 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(108): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Customers->action_general_data()
#11 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#12 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#15 {main}