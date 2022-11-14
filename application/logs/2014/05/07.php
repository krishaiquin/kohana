<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-07 16:59:11 --- CRITICAL: View_Exception [ 0 ]: The requested view DeltaGallery/Home could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-05-07 16:59:11 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('DeltaGallery/Ho...')
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('DeltaGallery/Ho...', NULL)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(7): Kohana_View::factory('DeltaGallery/Ho...')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-05-07 17:27:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '"'/>"' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH\views\DeltaGallery\Gallery.php [ 16 ] in file:line
2014-05-07 17:27:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-07 17:28:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photo ~ APPPATH\views\DeltaGallery\Gallery.php [ 16 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:16
2014-05-07 17:28:00 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 16, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(25): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:16