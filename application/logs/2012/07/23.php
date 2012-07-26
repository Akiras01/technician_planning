<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-23 13:43:10 --- ERROR: ReflectionException [ 0 ]: Trying to invoke private method Controller_Planning::action_show() from scope ReflectionMethod ~ SYSPATH/classes/kohana/request/client/internal.php [ 118 ]
2012-07-23 13:43:10 --- STRACE: ReflectionException [ 0 ]: Trying to invoke private method Controller_Planning::action_show() from scope ReflectionMethod ~ SYSPATH/classes/kohana/request/client/internal.php [ 118 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Planning))
#1 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#2 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#3 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#4 {main}
2012-07-23 13:43:49 --- ERROR: ReflectionException [ 0 ]: Trying to invoke private method Controller_Planning::action_show() from scope ReflectionMethod ~ SYSPATH/classes/kohana/request/client/internal.php [ 118 ]
2012-07-23 13:43:49 --- STRACE: ReflectionException [ 0 ]: Trying to invoke private method Controller_Planning::action_show() from scope ReflectionMethod ~ SYSPATH/classes/kohana/request/client/internal.php [ 118 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Planning))
#1 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#2 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#3 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#4 {main}
2012-07-23 13:44:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: days ~ APPPATH/classes/controller/planning.php [ 54 ]
2012-07-23 13:44:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: days ~ APPPATH/classes/controller/planning.php [ 54 ]
--
#0 /media/Data/tfe anthony_avril/technician_planning/application/classes/controller/planning.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/Data/tfe...', 54, Array)
#1 [internal function]: Controller_Planning->action_show()
#2 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Planning))
#3 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /media/Data/tfe anthony_avril/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /media/Data/tfe anthony_avril/technician_planning/index.php(109): Kohana_Request->execute()
#6 {main}