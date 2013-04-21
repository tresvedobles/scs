<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-20 19:00:05 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ')' ~ APPPATH/classes/Controller/Grilla.php [ 7 ] in :
2013-04-20 19:00:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 19:01:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH/views/vistagrilla.php [ 9 ] in :
2013-04-20 19:01:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 19:02:56 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH/views/vistagrilla.php [ 9 ] in :
2013-04-20 19:02:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 19:02:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH/views/vistagrilla.php [ 9 ] in :
2013-04-20 19:02:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 19:03:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH/classes/Controller/Grilla.php [ 7 ] in :
2013-04-20 19:03:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 19:03:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH/views/vistagrilla.php [ 9 ] in :
2013-04-20 19:03:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 21:07:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH/classes/Controller/Principal.php [ 18 ] in :
2013-04-20 21:07:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 21:08:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Controller/Principal.php [ 20 ] in :
2013-04-20 21:08:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 21:08:46 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Controller/Principal.php [ 20 ] in :
2013-04-20 21:08:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 21:09:10 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /srv/www/htdocs/html/kohana/system/classes/Kohana/View.php:137
2013-04-20 21:09:10 --- DEBUG: #0 /srv/www/htdocs/html/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /srv/www/htdocs/html/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /srv/www/htdocs/html/kohana/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /srv/www/htdocs/html/kohana/application/classes/Controller/Principal.php(7): Kohana_Controller_Template->before()
#4 /srv/www/htdocs/html/kohana/system/classes/Kohana/Controller.php(69): Controller_Principal->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /srv/www/htdocs/html/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pagina))
#7 /srv/www/htdocs/html/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /srv/www/htdocs/html/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /srv/www/htdocs/html/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /srv/www/htdocs/html/kohana/system/classes/Kohana/View.php:137
2013-04-20 21:17:32 --- EMERGENCY: View_Exception [ 0 ]: The requested view p/template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /srv/www/htdocs/html/kohana/system/classes/Kohana/View.php:137
2013-04-20 21:17:32 --- DEBUG: #0 /srv/www/htdocs/html/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('p/template')
#1 /srv/www/htdocs/html/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('p/template', NULL)
#2 /srv/www/htdocs/html/kohana/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('p/template')
#3 /srv/www/htdocs/html/kohana/application/classes/Controller/Principal.php(7): Kohana_Controller_Template->before()
#4 /srv/www/htdocs/html/kohana/system/classes/Kohana/Controller.php(69): Controller_Principal->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /srv/www/htdocs/html/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pagina))
#7 /srv/www/htdocs/html/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /srv/www/htdocs/html/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /srv/www/htdocs/html/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /srv/www/htdocs/html/kohana/system/classes/Kohana/View.php:137
2013-04-20 21:18:49 --- EMERGENCY: View_Exception [ 0 ]: The requested view pagina/inicio could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /srv/www/htdocs/html/kohana/system/classes/Kohana/View.php:137
2013-04-20 21:18:49 --- DEBUG: #0 /srv/www/htdocs/html/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('pagina/inicio')
#1 /srv/www/htdocs/html/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('pagina/inicio', NULL)
#2 /srv/www/htdocs/html/kohana/application/classes/Controller/Pagina.php(8): Kohana_View::factory('pagina/inicio')
#3 /srv/www/htdocs/html/kohana/system/classes/Kohana/Controller.php(84): Controller_Pagina->action_inicio()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/htdocs/html/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pagina))
#6 /srv/www/htdocs/html/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/htdocs/html/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/htdocs/html/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/htdocs/html/kohana/system/classes/Kohana/View.php:137
2013-04-20 21:19:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/p/plantilla.php [ 5 ] in /srv/www/htdocs/html/kohana/application/views/p/plantilla.php:5
2013-04-20 21:19:36 --- DEBUG: #0 /srv/www/htdocs/html/kohana/application/views/p/plantilla.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/htdocs...', 5, Array)
#1 /srv/www/htdocs/html/kohana/system/classes/Kohana/View.php(61): include('/srv/www/htdocs...')
#2 /srv/www/htdocs/html/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/srv/www/htdocs...', Array)
#3 /srv/www/htdocs/html/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /srv/www/htdocs/html/kohana/application/classes/Controller/Principal.php(36): Kohana_Controller_Template->after()
#5 /srv/www/htdocs/html/kohana/system/classes/Kohana/Controller.php(87): Controller_Principal->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/htdocs/html/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pagina))
#8 /srv/www/htdocs/html/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/htdocs/html/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/htdocs/html/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in /srv/www/htdocs/html/kohana/application/views/p/plantilla.php:5
2013-04-20 21:20:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/p/plantilla.php [ 10 ] in /srv/www/htdocs/html/kohana/application/views/p/plantilla.php:10
2013-04-20 21:20:02 --- DEBUG: #0 /srv/www/htdocs/html/kohana/application/views/p/plantilla.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/htdocs...', 10, Array)
#1 /srv/www/htdocs/html/kohana/system/classes/Kohana/View.php(61): include('/srv/www/htdocs...')
#2 /srv/www/htdocs/html/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/srv/www/htdocs...', Array)
#3 /srv/www/htdocs/html/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /srv/www/htdocs/html/kohana/application/classes/Controller/Principal.php(36): Kohana_Controller_Template->after()
#5 /srv/www/htdocs/html/kohana/system/classes/Kohana/Controller.php(87): Controller_Principal->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /srv/www/htdocs/html/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pagina))
#8 /srv/www/htdocs/html/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /srv/www/htdocs/html/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /srv/www/htdocs/html/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in /srv/www/htdocs/html/kohana/application/views/p/plantilla.php:10
2013-04-20 21:20:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/views/p/plantilla.php [ 6 ] in :
2013-04-20 21:20:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :