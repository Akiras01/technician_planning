<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-20 13:49:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: vat_codes ~ APPPATH/classes/controller/workorders.php [ 156 ]
2012-07-20 13:49:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: vat_codes ~ APPPATH/classes/controller/workorders.php [ 156 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/workorders.php(156): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/Data/tfe...', 156, Array)
#1 [internal function]: Controller_Workorders->action_workplaces()
#2 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workorders))
#3 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-20 13:49:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: vat_codes ~ APPPATH/classes/controller/workorders.php [ 156 ]
2012-07-20 13:49:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: vat_codes ~ APPPATH/classes/controller/workorders.php [ 156 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/workorders.php(156): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/Data/tfe...', 156, Array)
#1 [internal function]: Controller_Workorders->action_workplaces()
#2 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workorders))
#3 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-20 18:45:21 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-20 18:45:21 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  VALUES  )' at line 1 [ INSERT INTO customers  )  VALUES  )  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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