<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-14 00:02:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\template.php [ 5 ] in C:\xampp\htdocs\kohana\application\views\template.php:5
2014-05-14 00:02:16 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 5, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:5
2014-05-14 00:04:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\template.php [ 5 ] in C:\xampp\htdocs\kohana\application\views\template.php:5
2014-05-14 00:04:46 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 5, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:5
2014-05-14 00:14:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: head ~ APPPATH\views\DeltaGallery\home.php [ 6 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php:6
2014-05-14 00:14:41 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 6, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(24): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php:6
2014-05-14 00:17:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$view' (T_VARIABLE) ~ APPPATH\classes\Controller\Home.php [ 8 ] in file:line
2014-05-14 00:17:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 00:17:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: head ~ APPPATH\views\DeltaGallery\home.php [ 6 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php:6
2014-05-14 00:17:55 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 6, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(24): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php:6
2014-05-14 00:19:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\DeltaGallery\home.php [ 6 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php:6
2014-05-14 00:19:21 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 6, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(24): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php:6
2014-05-14 00:42:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\DeltaGallery\home.php [ 7 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php:7
2014-05-14 00:42:00 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 7, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(24): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php:7
2014-05-14 00:42:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\DeltaGallery\home.php [ 7 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php:7
2014-05-14 00:42:49 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 7, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(24): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php:7
2014-05-14 00:43:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\DeltaGallery\head.php [ 1 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\head.php:1
2014-05-14 00:43:47 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\head.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 1, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php(6): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\application\views\template.php(24): Kohana_View->__toString()
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#13 [internal function]: Kohana_Controller->execute()
#14 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#15 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#18 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\head.php:1
2014-05-14 00:44:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$view' (T_VARIABLE) ~ APPPATH\classes\Controller\Gallery.php [ 8 ] in file:line
2014-05-14 00:44:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 00:44:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$view' (T_VARIABLE) ~ APPPATH\classes\Controller\Gallery.php [ 8 ] in file:line
2014-05-14 00:44:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 00:44:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$view' (T_VARIABLE) ~ APPPATH\classes\Controller\Gallery.php [ 8 ] in file:line
2014-05-14 00:44:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 00:45:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$view' (T_VARIABLE) ~ APPPATH\classes\Controller\Gallery.php [ 8 ] in file:line
2014-05-14 00:45:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 00:45:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$view' (T_VARIABLE) ~ APPPATH\classes\Controller\Gallery.php [ 8 ] in file:line
2014-05-14 00:45:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 07:42:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: head ~ APPPATH\views\DeltaGallery\Gallery.php [ 6 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:6
2014-05-14 07:42:22 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 6, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(24): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:6
2014-05-14 08:09:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: head ~ APPPATH\views\DeltaGallery\Gallery.php [ 6 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:6
2014-05-14 08:09:44 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 6, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(24): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:6
2014-05-14 08:09:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\Account.php [ 8 ] in file:line
2014-05-14 08:09:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 08:11:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Account.php [ 17 ] in file:line
2014-05-14 08:11:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 08:12:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Account.php [ 17 ] in file:line
2014-05-14 08:12:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 08:12:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Account.php [ 17 ] in file:line
2014-05-14 08:12:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 08:14:53 --- CRITICAL: View_Exception [ 0 ]: The requested view /kohana//Login could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-05-14 08:14:53 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/kohana//Login')
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('/kohana//Login', NULL)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Account.php(11): Kohana_View::factory('/kohana//Login')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Account->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-05-14 08:15:52 --- CRITICAL: View_Exception [ 0 ]: The requested view /kohana//Login could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-05-14 08:15:52 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/kohana//Login')
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('/kohana//Login', NULL)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Account.php(11): Kohana_View::factory('/kohana//Login')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Account->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-05-14 08:15:56 --- CRITICAL: View_Exception [ 0 ]: The requested view /kohana//Login could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-05-14 08:15:56 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/kohana//Login')
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('/kohana//Login', NULL)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Account.php(11): Kohana_View::factory('/kohana//Login')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Account->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-05-14 08:16:26 --- CRITICAL: View_Exception [ 0 ]: The requested view /kohana//login could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-05-14 08:16:26 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/kohana//login')
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('/kohana//login', NULL)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Account.php(11): Kohana_View::factory('/kohana//login')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Account->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-05-14 08:16:40 --- CRITICAL: View_Exception [ 0 ]: The requested view /kohana/login could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-05-14 08:16:40 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/kohana/login')
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('/kohana/login', NULL)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Account.php(11): Kohana_View::factory('/kohana/login')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Account->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-05-14 08:16:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Login.php [ 12 ] in file:line
2014-05-14 08:16:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 08:18:43 --- CRITICAL: View_Exception [ 0 ]: The requested view /kohana/login could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-05-14 08:18:43 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/kohana/login')
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('/kohana/login', NULL)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Account.php(11): Kohana_View::factory('/kohana/login')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Account->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-05-14 08:19:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function array_key_exist() ~ APPPATH\classes\Controller\Account.php [ 16 ] in file:line
2014-05-14 08:19:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 08:21:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: successful ~ APPPATH\classes\Controller\Account.php [ 20 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Account.php:20
2014-05-14 08:21:36 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Account.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 20, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Account->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Account.php:20
2014-05-14 08:23:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: head ~ APPPATH\views\DeltaGallery\Gallery.php [ 6 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:6
2014-05-14 08:23:29 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 6, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(24): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:6
2014-05-14 08:29:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\DeltaGallery\Login.php [ 16 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php:16
2014-05-14 08:29:28 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 16, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(24): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php:16
2014-05-14 08:29:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\DeltaGallery\Login.php [ 16 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php:16
2014-05-14 08:29:29 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 16, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(24): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php:16
2014-05-14 08:30:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\DeltaGallery\Login.php [ 16 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php:16
2014-05-14 08:30:40 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 16, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(24): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php:16
2014-05-14 13:13:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\DeltaGallery\home.php [ 7 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php:7
2014-05-14 13:13:41 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 7, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(24): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php:7
2014-05-14 13:15:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\DeltaGallery\home.php [ 7 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php:7
2014-05-14 13:15:46 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 7, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(24): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php:7
2014-05-14 13:15:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: head ~ APPPATH\views\DeltaGallery\Gallery.php [ 6 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:6
2014-05-14 13:15:49 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 6, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(24): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:6
2014-05-14 13:15:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: head ~ APPPATH\views\DeltaGallery\Gallery.php [ 6 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:6
2014-05-14 13:15:52 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 6, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(24): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:6
2014-05-14 13:16:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\DeltaGallery\home.php [ 7 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php:7
2014-05-14 13:16:51 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 7, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(24): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php:7
2014-05-14 13:17:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\DeltaGallery\home.php [ 7 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php:7
2014-05-14 13:17:57 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 7, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(24): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php:7
2014-05-14 13:18:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\DeltaGallery\home.php [ 7 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php:7
2014-05-14 13:18:00 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 7, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(24): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php:7
2014-05-14 13:40:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: head ~ APPPATH\views\DeltaGallery\Gallery.php [ 6 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:6
2014-05-14 13:40:12 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 6, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(24): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:6
2014-05-14 14:00:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: head ~ APPPATH\views\DeltaGallery\Gallery.php [ 6 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:6
2014-05-14 14:00:31 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 6, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:6
2014-05-14 14:00:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\template.php [ 5 ] in C:\xampp\htdocs\kohana\application\views\template.php:5
2014-05-14 14:00:33 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 5, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_About))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:5
2014-05-14 14:04:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\template.php [ 5 ] in C:\xampp\htdocs\kohana\application\views\template.php:5
2014-05-14 14:04:15 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 5, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_About))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:5
2014-05-14 15:41:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\template.php [ 5 ] in C:\xampp\htdocs\kohana\application\views\template.php:5
2014-05-14 15:41:26 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 5, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Upload))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:5
2014-05-14 17:46:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\Controller\Manage.php [ 8 ] in file:line
2014-05-14 17:46:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 17:56:55 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'OFFSET 3' at line 1 [ SELECT * FROM `images` ORDER BY `uploaded` DESC, `filename` ASC OFFSET 3 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-14 17:56:55 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Model\Image.php(43): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(6): Model_Image->select_image(NULL, 3)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-14 17:57:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pathPic ~ APPPATH\views\DeltaGallery\Manage.php [ 12 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Manage.php:12
2014-05-14 17:57:58 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Manage.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Manage.php:12
2014-05-14 17:59:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH\views\DeltaGallery\Manage.php [ 16 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Manage.php:16
2014-05-14 17:59:25 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Manage.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 16, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Manage.php:16
2014-05-14 17:59:34 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant javaScript - assumed 'javaScript' ~ APPPATH\views\DeltaGallery\Manage.php [ 22 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Manage.php:22
2014-05-14 17:59:34 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Manage.php(22): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\xampp\\htdocs...', 22, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Manage.php:22
2014-05-14 18:17:00 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Image::select_image(), called in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php on line 10 and defined ~ APPPATH\classes\Model\Image.php [ 37 ] in C:\xampp\htdocs\kohana\application\classes\Model\Image.php:37
2014-05-14 18:17:00 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Image.php(37): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 37, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Home.php(10): Model_Image->select_image()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Image.php:37
2014-05-14 18:27:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'URL' (T_STRING), expecting ',' or ';' ~ APPPATH\views\DeltaGallery\Manage.php [ 19 ] in file:line
2014-05-14 18:27:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 18:29:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\template.php [ 5 ] in C:\xampp\htdocs\kohana\application\views\template.php:5
2014-05-14 18:29:42 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 5, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Upload))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:5
2014-05-14 18:36:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\DeltaGallery\Upload.php [ 11 ] in file:line
2014-05-14 18:36:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 18:57:49 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Auth_ORM::$get_user ~ APPPATH\classes\Controller\Manage.php [ 69 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:69
2014-05-14 18:57:49 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(69): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 69, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(57): Controller_Manage->_add_database('Koala.jpg')
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(29): Controller_Manage->_save_image(Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_upload()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:69
2014-05-14 20:04:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\Application.php [ 44 ] in file:line
2014-05-14 20:04:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 20:05:10 --- DEBUG: Getting annotations on Controller_Home=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:05:10 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:05:10 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:05:10 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: login ~ SYSPATH\classes\Kohana\Route.php [ 109 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:58
2014-05-14 20:05:10 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Application.php(58): Kohana_Route::get('login')
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller_Application->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:58
2014-05-14 20:06:46 --- DEBUG: Getting annotations on Controller_Home=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:46 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:46 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:06:46 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:46 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:46 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:06:46 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:46 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:46 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:06:47 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:47 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:47 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:06:47 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:47 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:47 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:06:47 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:47 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:47 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:06:47 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:47 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:47 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:06:47 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:47 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:47 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:06:47 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:47 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:47 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:06:47 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:47 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:47 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:06:48 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:48 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:48 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:06:48 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:48 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:48 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:06:48 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:48 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:48 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:06:48 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:48 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:48 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:06:48 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:48 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:48 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:06:48 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:48 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:48 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:06:48 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:48 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:48 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:06:49 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:49 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:49 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:06:49 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:49 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:49 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:06:49 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:49 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:49 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:06:49 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:49 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:06:49 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:02 --- DEBUG: Getting annotations on Controller_Home=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:02 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:02 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:02 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:02 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:02 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:02 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:02 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:02 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:02 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:02 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:02 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:02 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:02 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:02 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:02 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:02 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:02 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:02 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:02 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:02 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:03 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:03 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:03 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:03 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:03 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:03 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:03 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:03 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:03 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:03 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:03 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:03 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:03 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:03 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:03 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:03 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:03 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:03 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:03 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:03 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:03 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:04 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:04 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:04 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:04 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:04 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:04 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:04 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:04 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:04 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:04 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:04 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:04 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:04 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:04 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:04 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:04 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:04 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:04 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:04 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:04 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:05 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:46 --- DEBUG: Getting annotations on Controller_Home=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:46 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:46 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:46 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:46 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:46 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:46 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:46 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:46 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:46 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:46 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:46 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:46 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:46 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:46 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:46 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:46 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:46 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:47 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:47 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:47 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:47 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:47 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:47 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:47 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:47 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:47 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:47 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:47 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:47 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:47 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:47 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:47 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:47 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:47 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:47 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:47 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:47 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:47 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:48 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:48 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:48 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:48 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:48 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:48 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:48 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:48 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:48 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:48 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:48 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:48 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:48 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:48 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:48 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:48 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:48 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:48 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:48 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:48 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:48 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:07:49 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:49 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:07:49 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:08:41 --- DEBUG: Getting annotations on Controller_Home=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:41 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:41 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:08:41 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:41 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:41 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:08:41 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:41 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:41 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:08:41 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:41 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:41 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:08:41 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:41 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:41 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:08:42 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:42 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:42 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:08:42 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:42 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:42 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:08:42 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:42 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:42 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:08:42 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:42 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:42 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:08:42 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:42 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:42 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:08:42 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:42 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:42 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:08:42 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:42 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:42 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:08:43 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:43 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:43 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:08:43 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:43 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:43 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:08:43 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:43 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:43 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:08:43 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:43 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:43 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:08:43 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:43 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:43 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:08:43 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:43 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:43 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:08:43 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:43 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:43 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:08:44 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:44 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:44 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:08:44 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:44 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:08:44 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:16 --- DEBUG: Getting annotations on Controller_Gallery=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:16 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:16 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:16 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:16 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:16 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:16 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:16 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:16 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:16 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:16 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:16 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:16 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:16 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:16 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:16 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:16 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:16 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:17 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:17 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:17 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:17 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:17 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:17 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:17 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:17 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:17 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:17 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:17 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:17 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:17 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:17 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:17 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:17 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:17 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:17 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:17 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:17 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:17 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:18 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:18 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:18 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:18 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:18 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:18 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:18 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:18 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:18 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:18 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:18 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:18 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:18 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:18 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:18 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:18 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:18 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:18 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:18 --- DEBUG: Getting annotations on Controller_Home=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:18 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:19 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:19 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:19 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:19 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:19 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:19 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:19 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:19 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:19 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:19 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:19 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:19 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:19 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:19 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:19 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:19 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:19 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:19 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:19 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:19 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:19 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:19 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:20 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:20 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:20 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:20 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:20 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:20 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:20 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:20 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:20 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:20 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:20 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:20 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:20 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:20 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:20 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:20 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:20 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:20 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:20 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:20 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:20 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:20 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:20 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:20 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:21 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:21 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:21 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:21 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:21 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:21 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:21 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:21 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:21 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:21 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:21 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:21 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:21 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:21 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:21 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:21 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:21 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:21 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:21 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:21 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:21 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:57 --- DEBUG: Getting annotations on Controller_Home=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:57 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:57 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:57 --- DEBUG: Getting annotations on Controller_Home=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:57 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:57 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:57 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:57 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:57 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:57 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:57 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:57 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:57 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:57 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:57 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:57 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:57 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:57 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:57 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:57 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:57 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:57 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:57 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:57 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:57 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:57 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:57 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:58 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:58 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:58 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:58 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:58 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:58 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:58 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:58 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:58 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:58 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:58 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:58 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:58 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:58 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:58 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:58 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:58 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:58 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:58 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:58 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:58 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:59 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:59 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:59 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:59 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:59 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:59 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:59 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:59 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:59 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:59 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:59 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:59 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:59 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:59 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:59 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:09:59 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:59 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:09:59 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:10:14 --- DEBUG: Getting annotations on Controller_Home=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:14 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:14 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:10:14 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:14 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:14 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:10:14 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:14 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:14 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:10:15 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:15 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:15 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:10:15 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:15 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:15 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:10:15 --- DEBUG: Getting annotations on Controller_Home=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:15 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:15 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:10:15 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:15 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:15 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:10:15 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:15 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:15 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:10:15 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:15 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:15 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:10:15 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:15 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:15 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:10:16 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:16 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:16 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:10:16 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:16 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:16 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:10:16 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:16 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:16 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:10:16 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:16 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:16 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:10:16 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:16 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:16 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:10:16 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:16 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:16 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:10:16 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:16 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:16 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:10:17 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:17 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:17 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:10:17 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:17 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:17 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:10:17 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:17 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:17 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:10:17 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:17 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:17 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:10:17 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:17 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:17 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:10:17 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:17 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:17 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:10:17 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:17 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:17 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:10:17 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:17 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:17 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:10:18 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:18 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:10:18 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:30 --- DEBUG: Getting annotations on Controller_Gallery=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:30 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:30 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:30 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:30 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:30 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:30 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:30 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:30 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:30 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:30 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:30 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:30 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:30 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:30 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:30 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:30 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:30 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:31 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:31 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:31 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:31 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:31 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:31 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:31 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:31 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:31 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:31 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:31 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:31 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:31 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:31 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:31 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:31 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:31 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:31 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:31 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:31 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:31 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:32 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:32 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:32 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:32 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:32 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:32 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:32 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:32 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:32 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:32 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:32 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:32 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:32 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:32 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:32 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:32 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:32 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:32 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:32 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:32 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:32 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:33 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:33 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:33 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:34 --- DEBUG: Getting annotations on Controller_Home=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:34 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:34 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:34 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:34 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:34 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:34 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:34 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:34 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:34 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:34 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:34 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:34 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:34 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:34 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:35 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:35 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:35 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:35 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:35 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:35 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:35 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:35 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:35 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:35 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:35 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:35 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:35 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:35 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:35 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:35 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:35 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:35 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:35 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:35 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:35 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:36 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:36 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:36 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:36 --- DEBUG: Getting annotations on Controller_Home=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:36 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:36 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:36 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:36 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:36 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:36 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:36 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:36 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:36 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:36 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:36 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:36 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:36 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:36 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:37 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:37 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:37 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:37 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:37 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:37 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:37 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:37 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:37 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:37 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:37 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:37 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:37 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:37 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:37 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:37 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:37 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:37 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:37 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:37 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:37 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:38 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:38 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:38 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:38 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:38 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:38 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:38 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:38 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:38 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:38 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:38 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:38 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:38 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:38 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:38 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:38 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:38 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:38 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:38 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:38 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:38 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:38 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:38 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:38 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:17:39 --- DEBUG: Getting annotations on Controller_Login=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:39 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:44
2014-05-14 20:17:39 --- DEBUG: Redirecting for authentication in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:69
2014-05-14 20:47:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Application.php [ 25 ] in file:line
2014-05-14 20:47:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 20:47:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Application.php [ 25 ] in file:line
2014-05-14 20:47:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 20:57:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'protected' (T_PROTECTED) ~ APPPATH\classes\Controller\Home.php [ 30 ] in file:line
2014-05-14 20:57:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 21:10:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'protected' (T_PROTECTED) ~ APPPATH\classes\Controller\Home.php [ 31 ] in file:line
2014-05-14 21:10:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 21:10:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Home.php [ 46 ] in file:line
2014-05-14 21:10:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 21:10:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pictures ~ APPPATH\classes\Controller\Home.php [ 8 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:8
2014-05-14 21:10:30 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Home.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 8, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:8
2014-05-14 21:26:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'protected' (T_PROTECTED) ~ APPPATH\classes\Controller\Home.php [ 33 ] in file:line
2014-05-14 21:26:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 21:27:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\Controller\Home.php [ 37 ] in file:line
2014-05-14 21:27:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 21:27:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Home.php [ 49 ] in file:line
2014-05-14 21:27:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 21:28:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH\classes\Controller\Home.php [ 35 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:35
2014-05-14 21:28:03 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Home.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 35, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Home.php(8): Controller_Home->_who(Object(Model_Role), Object(Model_User))
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:35
2014-05-14 21:28:16 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant guest - assumed 'guest' ~ APPPATH\classes\Controller\Home.php [ 37 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:37
2014-05-14 21:28:16 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Home.php(37): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\xampp\\htdocs...', 37, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Home.php(8): Controller_Home->_who(Object(Model_Role), Object(Model_User))
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:37
2014-05-14 21:28:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: role ~ APPPATH\classes\Controller\Home.php [ 37 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:37
2014-05-14 21:28:33 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Home.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 37, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Home.php(8): Controller_Home->_who(Object(Model_Role), Object(Model_User))
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:37
2014-05-14 21:28:58 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Home::_who(), called in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php on line 23 and defined ~ APPPATH\classes\Controller\Home.php [ 34 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:34
2014-05-14 21:28:58 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Home.php(34): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 34, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Home.php(23): Controller_Home->_who()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_user()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:34
2014-05-14 21:31:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Home.php [ 10 ] in file:line
2014-05-14 21:31:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 21:39:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\DeltaGallery\head.php [ 1 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\head.php:1
2014-05-14 21:39:58 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\head.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 1, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php(6): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_View->__toString()
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#13 [internal function]: Kohana_Controller->execute()
#14 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#15 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#18 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\head.php:1
2014-05-14 21:49:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\DeltaGallery\home.php [ 8 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php:8
2014-05-14 21:49:50 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 8, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php:8
2014-05-14 21:49:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\DeltaGallery\home.php [ 8 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php:8
2014-05-14 21:49:57 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 8, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php:8
2014-05-14 21:53:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'are' (T_STRING) ~ APPPATH\classes\Controller\Home.php [ 13 ] in file:line
2014-05-14 21:53:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 22:24:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH\classes\Controller\Home.php [ 19 ] in file:line
2014-05-14 22:24:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 22:25:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'protected' (T_PROTECTED) ~ APPPATH\classes\Controller\Home.php [ 42 ] in file:line
2014-05-14 22:25:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 22:26:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\DeltaGallery\head.php [ 1 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\head.php:1
2014-05-14 22:26:14 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\head.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 1, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php(6): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_View->__toString()
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#13 [internal function]: Kohana_Controller->execute()
#14 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#15 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#18 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\head.php:1
2014-05-14 22:28:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\DeltaGallery\head.php [ 1 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\head.php:1
2014-05-14 22:28:22 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\head.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 1, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php(6): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_View->__toString()
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#13 [internal function]: Kohana_Controller->execute()
#14 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#15 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#18 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\head.php:1
2014-05-14 22:34:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\Controller\Gallery.php [ 27 ] in file:line
2014-05-14 22:34:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 23:05:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\Manage.php [ 8 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:8
2014-05-14 23:05:03 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 8, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:8
2014-05-14 23:06:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_user() on a non-object ~ APPPATH\classes\Controller\Manage.php [ 11 ] in file:line
2014-05-14 23:06:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 23:06:48 --- CRITICAL: Kohana_Exception [ 0 ]: The user property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-05-14 23:06:48 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('user')
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(11): Kohana_ORM->__get('user')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-05-14 23:08:16 --- CRITICAL: ErrorException [ 1 ]: Call to a member function has() on a non-object ~ APPPATH\classes\Controller\Manage.php [ 11 ] in file:line
2014-05-14 23:08:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 23:08:32 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant has_admin - assumed 'has_admin' ~ APPPATH\classes\Controller\Manage.php [ 13 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:13
2014-05-14 23:08:32 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(13): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\xampp\\htdocs...', 13, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:13
2014-05-14 23:08:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\Manage.php [ 13 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:13
2014-05-14 23:08:59 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 13, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:13
2014-05-14 23:09:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '0' (T_LNUMBER) ~ APPPATH\classes\Controller\Manage.php [ 11 ] in file:line
2014-05-14 23:09:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 23:14:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\template.php [ 5 ] in C:\xampp\htdocs\kohana\application\views\template.php:5
2014-05-14 23:14:08 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 5, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_About))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:5
2014-05-14 23:46:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\Manage.php [ 97 ] in file:line
2014-05-14 23:46:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 23:47:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ',' or ';' ~ APPPATH\views\DeltaGallery\Manage.php [ 20 ] in file:line
2014-05-14 23:47:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 23:47:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ',' or ';' ~ APPPATH\views\DeltaGallery\Manage.php [ 20 ] in file:line
2014-05-14 23:47:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 23:48:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ',' or ';' ~ APPPATH\views\DeltaGallery\Manage.php [ 20 ] in file:line
2014-05-14 23:48:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 23:49:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ',' or ';' ~ APPPATH\views\DeltaGallery\Manage.php [ 20 ] in file:line
2014-05-14 23:49:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 23:50:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ',' or ';' ~ APPPATH\views\DeltaGallery\Manage.php [ 20 ] in file:line
2014-05-14 23:50:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 23:52:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ',' or ';' ~ APPPATH\views\DeltaGallery\Manage.php [ 20 ] in file:line
2014-05-14 23:52:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 23:55:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ',' or ';' ~ APPPATH\views\DeltaGallery\Manage.php [ 20 ] in file:line
2014-05-14 23:55:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-14 23:55:37 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Manage::action_delete(), called in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Manage.php [ 99 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:99
2014-05-14 23:55:37 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(99): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 99, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:99
2014-05-14 23:56:51 --- CRITICAL: ErrorException [ 2 ]: unlink(./imagegallery/data/thumb/SELECT `filename` FROM `images` WHERE `id` = '21'): No such file or directory ~ APPPATH\classes\Controller\Manage.php [ 104 ] in file:line
2014-05-14 23:56:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(./imageg...', 'C:\\xampp\\htdocs...', 104, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(104): unlink('./imagegallery/...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in file:line