<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-02 08:44:26 --- ERROR: Database_Exception [ 1146 ]: Table 'technician_planning.town_ships' doesn't exist [ SELECT adress.*,prov_label,town_label,count_name FROM customers 
                 natural join cust_have_adress 
                 natural join adress
                 natural join towns
                 natural join town_ships
                 natural join provinces
                 natural join country
              WHERE cust_id = 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-02 08:44:26 --- STRACE: Database_Exception [ 1146 ]: Table 'technician_planning.town_ships' doesn't exist [ SELECT adress.*,prov_label,town_label,count_name FROM customers 
                 natural join cust_have_adress 
                 natural join adress
                 natural join towns
                 natural join town_ships
                 natural join provinces
                 natural join country
              WHERE cust_id = 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT adress.*...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(63): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(119): Model_Customers->get_adress(0)
#3 [internal function]: Controller_Customers->action_get_adress()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-02 08:44:55 --- ERROR: Database_Exception [ 1146 ]: Table 'technician_planning.town_ships' doesn't exist [ SELECT adress.*,prov_label,town_label,count_name FROM customers 
                 natural join cust_have_adress 
                 natural join adress
                 natural join towns
                 natural join town_ships
                 natural join provinces
                 natural join country
              WHERE cust_id = 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-02 08:44:55 --- STRACE: Database_Exception [ 1146 ]: Table 'technician_planning.town_ships' doesn't exist [ SELECT adress.*,prov_label,town_label,count_name FROM customers 
                 natural join cust_have_adress 
                 natural join adress
                 natural join towns
                 natural join town_ships
                 natural join provinces
                 natural join country
              WHERE cust_id = 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT adress.*...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(63): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(119): Model_Customers->get_adress(0)
#3 [internal function]: Controller_Customers->action_get_adress()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-02 18:38:06 --- ERROR: Database_Exception [ 1146 ]: Table 'technician_planning.town_ships' doesn't exist [ SELECT adress.*,prov_label,town_label,count_name FROM customers 
                 natural join cust_have_adress 
                 natural join adress
                 natural join towns
                 natural join town_ships
                 natural join provinces
                 natural join country
              WHERE cust_id = 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-02 18:38:06 --- ERROR: Database_Exception [ 1146 ]: Table 'technician_planning.town_ships' doesn't exist [ SELECT adress.*,prov_label,town_label,count_name FROM customers 
                 natural join cust_have_adress 
                 natural join adress
                 natural join towns
                 natural join town_ships
                 natural join provinces
                 natural join country
              WHERE cust_id = 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-02 18:38:06 --- STRACE: Database_Exception [ 1146 ]: Table 'technician_planning.town_ships' doesn't exist [ SELECT adress.*,prov_label,town_label,count_name FROM customers 
                 natural join cust_have_adress 
                 natural join adress
                 natural join towns
                 natural join town_ships
                 natural join provinces
                 natural join country
              WHERE cust_id = 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT adress.*...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(63): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(119): Model_Customers->get_adress(0)
#3 [internal function]: Controller_Customers->action_get_adress()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-02 18:38:06 --- STRACE: Database_Exception [ 1146 ]: Table 'technician_planning.town_ships' doesn't exist [ SELECT adress.*,prov_label,town_label,count_name FROM customers 
                 natural join cust_have_adress 
                 natural join adress
                 natural join towns
                 natural join town_ships
                 natural join provinces
                 natural join country
              WHERE cust_id = 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT adress.*...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(63): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(119): Model_Customers->get_adress(0)
#3 [internal function]: Controller_Customers->action_get_adress()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-02 18:39:15 --- ERROR: Database_Exception [ 1146 ]: Table 'technician_planning.town_ships' doesn't exist [ SELECT adress.*,prov_label,town_label,count_name FROM customers 
                 natural join cust_have_adress 
                 natural join adress
                 natural join towns
                 natural join town_ships
                 natural join provinces
                 natural join country
              WHERE cust_id = 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-02 18:39:15 --- STRACE: Database_Exception [ 1146 ]: Table 'technician_planning.town_ships' doesn't exist [ SELECT adress.*,prov_label,town_label,count_name FROM customers 
                 natural join cust_have_adress 
                 natural join adress
                 natural join towns
                 natural join town_ships
                 natural join provinces
                 natural join country
              WHERE cust_id = 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT adress.*...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(63): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(119): Model_Customers->get_adress(0)
#3 [internal function]: Controller_Customers->action_get_adress()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-02 18:46:49 --- ERROR: Database_Exception [ 1146 ]: Table 'technician_planning.town_ships' doesn't exist [ SELECT adress.*,prov_label,town_label,count_name FROM customers 
                 natural join cust_have_adress 
                 natural join adress
                 natural join towns
                 natural join town_ships
                 natural join provinces
                 natural join country
              WHERE cust_id = 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-02 18:46:49 --- STRACE: Database_Exception [ 1146 ]: Table 'technician_planning.town_ships' doesn't exist [ SELECT adress.*,prov_label,town_label,count_name FROM customers 
                 natural join cust_have_adress 
                 natural join adress
                 natural join towns
                 natural join town_ships
                 natural join provinces
                 natural join country
              WHERE cust_id = 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT adress.*...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(63): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(119): Model_Customers->get_adress(0)
#3 [internal function]: Controller_Customers->action_get_adress()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-02 18:55:32 --- ERROR: Database_Exception [ 1146 ]: Table 'technician_planning.town_ships' doesn't exist [ SELECT adress.*,prov_label,town_label,count_name FROM customers 
                 natural join cust_have_adress 
                 natural join adress
                 natural join towns
                 natural join town_ships
                 natural join provinces
                 natural join country
              WHERE cust_id = 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-02 18:55:32 --- STRACE: Database_Exception [ 1146 ]: Table 'technician_planning.town_ships' doesn't exist [ SELECT adress.*,prov_label,town_label,count_name FROM customers 
                 natural join cust_have_adress 
                 natural join adress
                 natural join towns
                 natural join town_ships
                 natural join provinces
                 natural join country
              WHERE cust_id = 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT adress.*...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(63): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(119): Model_Customers->get_adress(0)
#3 [internal function]: Controller_Customers->action_get_adress()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-02 18:55:43 --- ERROR: Database_Exception [ 1146 ]: Table 'technician_planning.town_ships' doesn't exist [ SELECT adress.*,prov_label,town_label,count_name FROM customers 
                 natural join cust_have_adress 
                 natural join adress
                 natural join towns
                 natural join town_ships
                 natural join provinces
                 natural join country
              WHERE cust_id = 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-02 18:55:43 --- STRACE: Database_Exception [ 1146 ]: Table 'technician_planning.town_ships' doesn't exist [ SELECT adress.*,prov_label,town_label,count_name FROM customers 
                 natural join cust_have_adress 
                 natural join adress
                 natural join towns
                 natural join town_ships
                 natural join provinces
                 natural join country
              WHERE cust_id = 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT adress.*...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(63): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(119): Model_Customers->get_adress(0)
#3 [internal function]: Controller_Customers->action_get_adress()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-02 18:55:47 --- ERROR: Database_Exception [ 1146 ]: Table 'technician_planning.town_ships' doesn't exist [ SELECT adress.*,prov_label,town_label,count_name FROM customers 
                 natural join cust_have_adress 
                 natural join adress
                 natural join towns
                 natural join town_ships
                 natural join provinces
                 natural join country
              WHERE cust_id = 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-02 18:55:47 --- STRACE: Database_Exception [ 1146 ]: Table 'technician_planning.town_ships' doesn't exist [ SELECT adress.*,prov_label,town_label,count_name FROM customers 
                 natural join cust_have_adress 
                 natural join adress
                 natural join towns
                 natural join town_ships
                 natural join provinces
                 natural join country
              WHERE cust_id = 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT adress.*...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(63): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(119): Model_Customers->get_adress(0)
#3 [internal function]: Controller_Customers->action_get_adress()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-02 18:56:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: activities ~ APPPATH/views/customers/index.php [ 202 ]
2012-07-02 18:56:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: activities ~ APPPATH/views/customers/index.php [ 202 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/application/views/customers/index.php(202): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/Data/tfe...', 202, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(61): include('/media/Data/tfe...')
#2 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/media/Data/tfe...', Array)
#3 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /media/Data/tfe anthony_avril/technician_planning/application/views/common/template.php(15): Kohana_View->__toString()
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(61): include('/media/Data/tfe...')
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(343): Kohana_View::capture('/media/Data/tfe...', Array)
#7 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/workplaces.php(24): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Workplaces->action_index()
#11 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Workplaces))
#12 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-02 18:57:00 --- ERROR: Database_Exception [ 1146 ]: Table 'technician_planning.town_ships' doesn't exist [ SELECT adress.*,prov_label,town_label,count_name FROM customers 
                 natural join cust_have_adress 
                 natural join adress
                 natural join towns
                 natural join town_ships
                 natural join provinces
                 natural join country
              WHERE cust_id = 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-02 18:57:00 --- STRACE: Database_Exception [ 1146 ]: Table 'technician_planning.town_ships' doesn't exist [ SELECT adress.*,prov_label,town_label,count_name FROM customers 
                 natural join cust_have_adress 
                 natural join adress
                 natural join towns
                 natural join town_ships
                 natural join provinces
                 natural join country
              WHERE cust_id = 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT adress.*...', false, Array)
#1 /media/Data/tfe anthony_avril/technician_planning/application/classes/model/customers.php(63): Kohana_Database_Query->execute()
#2 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/customers.php(119): Model_Customers->get_adress(0)
#3 [internal function]: Controller_Customers->action_get_adress()
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Customers))
#5 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}