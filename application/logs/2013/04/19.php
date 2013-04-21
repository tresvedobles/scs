<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-19 17:55:12 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /srv/www/htdocs/html/kohana/system/classes/Kohana/View.php:137
2013-04-19 17:55:12 --- DEBUG: #0 /srv/www/htdocs/html/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /srv/www/htdocs/html/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /srv/www/htdocs/html/kohana/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /srv/www/htdocs/html/kohana/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/htdocs/html/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Saludo))
#6 /srv/www/htdocs/html/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/htdocs/html/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/htdocs/html/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/htdocs/html/kohana/system/classes/Kohana/View.php:137
2013-04-19 18:23:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Grilla.php [ 9 ] in :
2013-04-19 18:23:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 18:23:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Grilla.php [ 6 ] in :
2013-04-19 18:23:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 18:26:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Grilla.php [ 7 ] in :
2013-04-19 18:26:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :