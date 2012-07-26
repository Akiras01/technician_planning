<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-07 10:40:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL customers/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-07 10:40:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL customers/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/technician_planning/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/technician_planning/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/technician_planning/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-07 10:40:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH/classes/controller/workplaces.php [ 154 ]
2012-07-07 10:40:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH/classes/controller/workplaces.php [ 154 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}