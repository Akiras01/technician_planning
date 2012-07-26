<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-24 21:22:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_shifts' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2012-07-24 21:22:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_shifts' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-24 21:23:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL planning/week/1/3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-24 21:23:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL planning/week/1/3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-24 21:23:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL planning/week/2/5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-24 21:23:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL planning/week/2/5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-24 21:23:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL planning/week/3/4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-24 21:23:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL planning/week/3/4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-24 21:23:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL planning/week/4/3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-24 21:23:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL planning/week/4/3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-24 21:24:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_shifts' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2012-07-24 21:24:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_shifts' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-24 21:25:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/model/shifts.php [ 24 ]
2012-07-24 21:25:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/model/shifts.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-24 21:25:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ';' ~ APPPATH/classes/model/shifts.php [ 56 ]
2012-07-24 21:25:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ';' ~ APPPATH/classes/model/shifts.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-24 21:26:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/model/shifts.php [ 65 ]
2012-07-24 21:26:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/model/shifts.php [ 65 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-24 21:26:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: technicians/1 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-24 21:26:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: technicians/1 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 21:28:38 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''1' 
											  WHERE '1' = :'1'' at line 3 [ SELECT shi_begin,shi_end,tim_day FROM shift 
											   NATURAL JOIN timesheet
											   NATURAL JOIN '1' 
											  WHERE '1' = :'1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-24 21:28:38 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''1' 
											  WHERE '1' = :'1'' at line 3 [ SELECT shi_begin,shi_end,tim_day FROM shift 
											   NATURAL JOIN timesheet
											   NATURAL JOIN '1' 
											  WHERE '1' = :'1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT shi_begi...', false, Array)
#1 /var/www/technician_planning/application/classes/model/shifts.php(21): Kohana_Database_Query->execute()
#2 /var/www/technician_planning/application/classes/controller/planning.php(54): Model_Shifts->get_shifts('1')
#3 [internal function]: Controller_Planning->action_show()
#4 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Planning))
#5 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-24 21:31:55 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''1's 
											  WHERE tech_id = :'1'' at line 3 [ SELECT shi_begin,shi_end,tim_day FROM shift 
											   NATURAL JOIN timesheet
											   NATURAL JOIN '1's 
											  WHERE tech_id = :'1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-24 21:31:55 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''1's 
											  WHERE tech_id = :'1'' at line 3 [ SELECT shi_begin,shi_end,tim_day FROM shift 
											   NATURAL JOIN timesheet
											   NATURAL JOIN '1's 
											  WHERE tech_id = :'1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/technician_planning/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT shi_begi...', false, Array)
#1 /var/www/technician_planning/application/classes/model/shifts.php(21): Kohana_Database_Query->execute()
#2 /var/www/technician_planning/application/classes/controller/planning.php(54): Model_Shifts->get_shifts('1')
#3 [internal function]: Controller_Planning->action_show()
#4 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Planning))
#5 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-24 21:32:34 --- ERROR: ErrorException [ 8 ]: Undefined index: shi_begin ~ APPPATH/classes/model/shifts.php [ 63 ]
2012-07-24 21:32:34 --- STRACE: ErrorException [ 8 ]: Undefined index: shi_begin ~ APPPATH/classes/model/shifts.php [ 63 ]
--
#0 /var/www/technician_planning/application/classes/model/shifts.php(63): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/techni...', 63, Array)
#1 /var/www/technician_planning/application/classes/controller/planning.php(54): Model_Shifts->get_shifts('1')
#2 [internal function]: Controller_Planning->action_show()
#3 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Planning))
#4 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-24 22:13:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ')' ~ APPPATH/classes/model/shifts.php [ 66 ]
2012-07-24 22:13:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ')' ~ APPPATH/classes/model/shifts.php [ 66 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-24 22:27:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/model/shifts.php [ 61 ]
2012-07-24 22:27:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/model/shifts.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-24 22:27:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/model/shifts.php [ 61 ]
2012-07-24 22:27:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/model/shifts.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-24 22:28:24 --- ERROR: ErrorException [ 8 ]: Undefined index: 6 ~ APPPATH/classes/model/shifts.php [ 61 ]
2012-07-24 22:28:24 --- STRACE: ErrorException [ 8 ]: Undefined index: 6 ~ APPPATH/classes/model/shifts.php [ 61 ]
--
#0 /var/www/technician_planning/application/classes/model/shifts.php(61): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/techni...', 61, Array)
#1 /var/www/technician_planning/application/classes/controller/planning.php(54): Model_Shifts->get_shifts('1')
#2 [internal function]: Controller_Planning->action_show()
#3 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Planning))
#4 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-24 22:29:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: day_of_week ~ APPPATH/classes/model/shifts.php [ 58 ]
2012-07-24 22:29:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: day_of_week ~ APPPATH/classes/model/shifts.php [ 58 ]
--
#0 /var/www/technician_planning/application/classes/model/shifts.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/techni...', 58, Array)
#1 /var/www/technician_planning/application/classes/controller/planning.php(54): Model_Shifts->get_shifts('3')
#2 [internal function]: Controller_Planning->action_show()
#3 /var/www/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Planning))
#4 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#7 {main}