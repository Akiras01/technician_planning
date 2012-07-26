<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-11 08:05:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: results ~ APPPATH/classes/model/workplaces.php [ 77 ]
2012-07-11 08:05:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: results ~ APPPATH/classes/model/workplaces.php [ 77 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/workplaces.php(77): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/Data/tfe...', 77, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/workplaces.php(26): Model_Workplaces->get_contacts_for_workplace(0)
#2 [internal function]: Controller_Workplaces->action_contact_person()
#3 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workplaces))
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-11 08:39:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: results ~ APPPATH/classes/model/workplaces.php [ 95 ]
2012-07-11 08:39:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: results ~ APPPATH/classes/model/workplaces.php [ 95 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/workplaces.php(95): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/Data/tfe...', 95, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/workplaces.php(26): Model_Workplaces->get_contacts_for_workplace(0)
#2 [internal function]: Controller_Workplaces->action_contact_person()
#3 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workplaces))
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-11 08:40:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: results ~ APPPATH/classes/model/workplaces.php [ 95 ]
2012-07-11 08:40:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: results ~ APPPATH/classes/model/workplaces.php [ 95 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/workplaces.php(95): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/Data/tfe...', 95, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/workplaces.php(26): Model_Workplaces->get_contacts_for_workplace(0)
#2 [internal function]: Controller_Workplaces->action_contact_person()
#3 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workplaces))
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-11 19:04:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/model/customers.php [ 634 ]
2012-07-11 19:04:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/model/customers.php [ 634 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 19:05:01 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'customers.act_typ_id' in 'where clause' [ SELECT cust_id,cust_name,cust_surname FROM customers activity_type WHERE  customers.act_typ_id = '1'  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-11 19:05:01 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'customers.act_typ_id' in 'where clause' [ SELECT cust_id,cust_name,cust_surname FROM customers activity_type WHERE  customers.act_typ_id = '1'  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT cust_id,...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(666): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(155): Model_Customers->search(Array)
#3 [internal function]: Controller_Customers->action_search()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}