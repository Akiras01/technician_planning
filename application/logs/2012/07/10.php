<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-10 08:19:53 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'to'%'' at line 1 [ SELECT cust_id,cust_name,cust_surname FROM customers  WHERE  cust_name LIKE '%'to'%'  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-10 08:19:53 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'to'%'' at line 1 [ SELECT cust_id,cust_name,cust_surname FROM customers  WHERE  cust_name LIKE '%'to'%'  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT cust_id,...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(648): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(155): Model_Customers->search(Array)
#3 [internal function]: Controller_Customers->action_search()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-10 08:21:32 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%'to'%' at line 1 [ SELECT cust_id,cust_name,cust_surname FROM customers  WHERE  cust_name LIKE %'to'%  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-10 08:21:32 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%'to'%' at line 1 [ SELECT cust_id,cust_name,cust_surname FROM customers  WHERE  cust_name LIKE %'to'%  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT cust_id,...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(648): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(155): Model_Customers->search(Array)
#3 [internal function]: Controller_Customers->action_search()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-10 08:24:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/classes/model/customers.php [ 663 ]
2012-07-10 08:24:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/classes/model/customers.php [ 663 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}