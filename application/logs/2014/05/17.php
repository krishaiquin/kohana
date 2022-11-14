<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-17 13:16:42 --- CRITICAL: ErrorException [ 1 ]: Call to a member function has() on a non-object ~ APPPATH\classes\Controller\Application.php [ 21 ] in file:line
2014-05-17 13:16:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-17 13:21:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\template.php [ 21 ] in C:\xampp\htdocs\kohana\application\views\template.php:21
2014-05-17 13:21:28 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 21, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:21
2014-05-17 13:22:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\DeltaGallery\head.php [ 1 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\head.php:1
2014-05-17 13:22:48 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\head.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 1, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(21): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\head.php:1
2014-05-17 13:24:06 --- CRITICAL: ErrorException [ 2 ]: Attempt to modify property of non-object ~ APPPATH\classes\Controller\Application.php [ 29 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:29
2014-05-17 13:24:06 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Application.php(29): Kohana_Core::error_handler(2, 'Attempt to modi...', 'C:\\xampp\\htdocs...', 29, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller_Application->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:29
2014-05-17 13:24:20 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_user() on a non-object ~ APPPATH\classes\Controller\Application.php [ 29 ] in file:line
2014-05-17 13:24:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-17 13:24:50 --- CRITICAL: ErrorException [ 8 ]: Indirect modification of overloaded property Model_User::$username has no effect ~ APPPATH\classes\Controller\Application.php [ 29 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:29
2014-05-17 13:24:50 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Application.php(29): Kohana_Core::error_handler(8, 'Indirect modifi...', 'C:\\xampp\\htdocs...', 29, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller_Application->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:29
2014-05-17 13:25:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\Controller\Application.php [ 28 ] in file:line
2014-05-17 13:25:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-17 13:26:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\Controller\Application.php [ 38 ] in file:line
2014-05-17 13:26:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-17 13:31:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: head ~ APPPATH\views\DeltaGallery\Gallery.php [ 1 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:1
2014-05-17 13:31:29 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 1, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:1
2014-05-17 14:01:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH\classes\Controller\Gallery.php [ 59 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:59
2014-05-17 14:01:24 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 59, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(35): Controller_Gallery->_more_picture('all', 'landmark', 12, 0)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(19): Controller_Gallery->_render('landmark', 'all')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_filter()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:59
2014-05-17 14:02:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: items_count ~ APPPATH\classes\Controller\Gallery.php [ 60 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:60
2014-05-17 14:02:49 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 60, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(35): Controller_Gallery->_more_picture('mickey', 'all', 12, 0)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(19): Controller_Gallery->_render('all', 'mickey')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_filter()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:60
2014-05-17 14:03:29 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\DeltaGallery\Gallery.php [ 30 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:30
2014-05-17 14:03:29 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(30): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\\xampp\\htdocs...', 30, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:30