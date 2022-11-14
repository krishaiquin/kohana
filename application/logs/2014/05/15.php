<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-15 00:01:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Manage.php [ 115 ] in file:line
2014-05-15 00:01:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-15 00:01:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Manage.php [ 115 ] in file:line
2014-05-15 00:01:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-15 00:01:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Manage.php [ 102 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:102
2014-05-15 00:01:56 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(102): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 102, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:102
2014-05-15 00:02:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: var_dump ~ APPPATH\classes\Controller\Manage.php [ 103 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:103
2014-05-15 00:02:23 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(103): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 103, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:103
2014-05-15 00:04:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\Controller\Manage.php [ 105 ] in file:line
2014-05-15 00:04:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-15 00:04:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pictures ~ APPPATH\views\DeltaGallery\Manage.php [ 10 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Manage.php:10
2014-05-15 00:04:26 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Manage.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 10, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Manage.php:10
2014-05-15 00:06:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH\classes\Controller\Manage.php [ 102 ] in file:line
2014-05-15 00:06:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-15 00:07:03 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Select::$as ~ APPPATH\classes\Controller\Manage.php [ 104 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:104
2014-05-15 00:07:03 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(104): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 104, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:104
2014-05-15 00:07:13 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH\classes\Controller\Manage.php [ 104 ] in file:line
2014-05-15 00:07:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-15 00:08:23 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH\classes\Controller\Manage.php [ 104 ] in file:line
2014-05-15 00:08:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-15 00:09:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH\views\DeltaGallery\random.php [ 1 ] in file:line
2014-05-15 00:09:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-15 00:10:50 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\DeltaGallery\random.php [ 1 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\random.php:1
2014-05-15 00:10:50 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\random.php(1): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 1, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\random.php:1
2014-05-15 00:11:01 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\DeltaGallery\random.php [ 1 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\random.php:1
2014-05-15 00:11:01 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\random.php(1): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\\xampp\\htdocs...', 1, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\random.php:1
2014-05-15 00:11:38 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\DeltaGallery\random.php [ 1 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\random.php:1
2014-05-15 00:11:38 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\random.php(1): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\\xampp\\htdocs...', 1, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\random.php:1
2014-05-15 00:11:48 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\DeltaGallery\random.php [ 1 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\random.php:1
2014-05-15 00:11:48 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\random.php(1): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\\xampp\\htdocs...', 1, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\random.php:1
2014-05-15 00:12:21 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\Controller\Manage.php [ 104 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:104
2014-05-15 00:12:21 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(104): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\\xampp\\htdocs...', 104, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:104
2014-05-15 00:12:39 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\DeltaGallery\random.php [ 1 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\random.php:1
2014-05-15 00:12:39 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\random.php(1): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 1, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\random.php:1
2014-05-15 00:13:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: var_dump ~ APPPATH\views\DeltaGallery\random.php [ 1 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\random.php:1
2014-05-15 00:13:11 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\random.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 1, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\random.php:1
2014-05-15 00:13:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\Manage.php [ 102 ] in file:line
2014-05-15 00:13:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-15 00:15:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '*' ~ APPPATH\classes\Controller\Manage.php [ 112 ] in file:line
2014-05-15 00:15:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-15 00:16:13 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Controller\Manage.php [ 104 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:104
2014-05-15 00:16:13 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(104): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\\xampp\\htdocs...', 104, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:104
2014-05-15 00:17:10 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Manage.php [ 104 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:104
2014-05-15 00:17:10 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(104): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 104, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:104
2014-05-15 00:18:46 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Manage.php [ 105 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:105
2014-05-15 00:18:46 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(105): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 105, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:105
2014-05-15 00:19:32 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Manage.php [ 105 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:105
2014-05-15 00:19:32 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(105): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 105, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:105
2014-05-15 00:19:36 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Manage.php [ 105 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:105
2014-05-15 00:19:36 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(105): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 105, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:105
2014-05-15 00:19:53 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Manage.php [ 105 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:105
2014-05-15 00:19:53 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(105): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 105, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:105
2014-05-15 00:23:15 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2014-05-15 00:23:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\\xampp\\htdocs...', 33, Array)
#1 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #101, 'filename')
#2 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('filename')
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(104): Kohana_Database_Result->offsetGet('filename')
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_delete()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-05-15 00:24:09 --- CRITICAL: ErrorException [ 2 ]: unlink(./imagegallery/data/thumb/): Permission denied ~ APPPATH\classes\Controller\Manage.php [ 104 ] in file:line
2014-05-15 00:24:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(./imageg...', 'C:\\xampp\\htdocs...', 104, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(104): unlink('./imagegallery/...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-05-15 00:24:26 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2014-05-15 00:24:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\\xampp\\htdocs...', 33, Array)
#1 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #101, 'filename')
#2 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('filename')
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(104): Kohana_Database_Result->offsetGet('filename')
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_delete()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-05-15 00:26:56 --- CRITICAL: ErrorException [ 8 ]: Undefined index: filename ~ APPPATH\classes\Controller\Manage.php [ 104 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:104
2014-05-15 00:26:56 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(104): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 104, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:104
2014-05-15 00:28:04 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2014-05-15 00:28:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\\xampp\\htdocs...', 33, Array)
#1 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #101, 'filename')
#2 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('filename')
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(104): Kohana_Database_Result->offsetGet('filename')
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_delete()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-05-15 00:29:24 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2014-05-15 00:29:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\\xampp\\htdocs...', 33, Array)
#1 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #101, 'filename')
#2 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('filename')
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(104): Kohana_Database_Result->offsetGet('filename')
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_delete()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-05-15 00:29:31 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2014-05-15 00:29:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\\xampp\\htdocs...', 33, Array)
#1 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #101, 'filename')
#2 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('filename')
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(104): Kohana_Database_Result->offsetGet('filename')
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_delete()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-05-15 06:50:26 --- CRITICAL: ErrorException [ 8 ]: Undefined index: HTTP_REFERER ~ APPPATH\classes\Controller\Manage.php [ 32 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:32
2014-05-15 06:50:26 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(32): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 32, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:32
2014-05-15 06:51:11 --- CRITICAL: ErrorException [ 8 ]: Undefined index: HTTP_REFERER ~ APPPATH\classes\Controller\Manage.php [ 32 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:32
2014-05-15 06:51:11 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(32): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 32, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:32
2014-05-15 06:51:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index: HTTP_REFERER ~ APPPATH\classes\Controller\Manage.php [ 32 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:32
2014-05-15 06:51:22 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(32): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 32, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:32
2014-05-15 07:59:08 --- DEBUG: Getting annotations on Controller_Home=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:21
2014-05-15 07:59:08 --- ERROR: preg_match(): Compilation failed: invalid range in character class at offset 24 in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:21
2014-05-15 08:13:16 --- DEBUG: Getting annotations on Controller_Home=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:21
2014-05-15 08:13:17 --- DEBUG: Getting annotations on Controller_Home=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:21
2014-05-15 08:14:39 --- DEBUG: Getting annotations on Controller_Home=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:21
2014-05-15 08:14:41 --- DEBUG: Getting annotations on Controller_Home=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:21
2014-05-15 08:14:46 --- DEBUG: Getting annotations on Controller_Home=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:21
2014-05-15 08:15:18 --- DEBUG: Getting annotations on Controller_Home=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:21
2014-05-15 08:15:18 --- ERROR: preg_match(): Unknown modifier '(' in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:21
2014-05-15 08:15:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\template.php [ 5 ] in C:\xampp\htdocs\kohana\application\views\template.php:5
2014-05-15 08:15:18 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 5, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:5
2014-05-15 08:15:37 --- DEBUG: Getting annotations on Controller_Home=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:21
2014-05-15 08:15:37 --- ERROR: preg_match(): Unknown modifier '(' in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:21
2014-05-15 08:15:39 --- DEBUG: Getting annotations on Controller_Home=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:21
2014-05-15 08:15:39 --- ERROR: preg_match(): Unknown modifier '(' in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:21
2014-05-15 08:15:40 --- DEBUG: Getting annotations on Controller_Home=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:21
2014-05-15 08:15:40 --- ERROR: preg_match(): Unknown modifier '(' in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:21
2014-05-15 08:15:40 --- DEBUG: Getting annotations on Controller_Home=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:21
2014-05-15 08:15:40 --- ERROR: preg_match(): Unknown modifier '(' in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:21
2014-05-15 08:16:46 --- DEBUG: Getting annotations on Controller_Home=>action_index in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:39
2014-05-15 08:16:46 --- ERROR: preg_match(): Unknown modifier '(' in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:39
2014-05-15 08:22:24 --- CRITICAL: ErrorException [ 1 ]: Call to a member function can() on a non-object ~ APPPATH\classes\Controller\Home.php [ 22 ] in file:line
2014-05-15 08:22:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-15 08:22:43 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Home.php [ 22 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:22
2014-05-15 08:22:43 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Home.php(22): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\xampp\\htdocs...', 22, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php:22
2014-05-15 08:22:53 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_user() on a non-object ~ APPPATH\classes\Controller\Home.php [ 22 ] in file:line
2014-05-15 08:22:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-15 08:23:11 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_user() on a non-object ~ APPPATH\classes\Controller\Home.php [ 22 ] in file:line
2014-05-15 08:23:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-15 12:20:48 --- CRITICAL: ErrorException [ 1 ]: Call to a member function has() on a non-object ~ APPPATH\classes\Controller\Application.php [ 20 ] in file:line
2014-05-15 12:20:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-15 12:20:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Home.php [ 35 ] in file:line
2014-05-15 12:20:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-15 12:20:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Home.php [ 35 ] in file:line
2014-05-15 12:20:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-15 12:21:13 --- CRITICAL: ErrorException [ 1 ]: Call to a member function has() on a non-object ~ APPPATH\classes\Controller\Application.php [ 20 ] in file:line
2014-05-15 12:21:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-15 12:27:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Application.php [ 22 ] in file:line
2014-05-15 12:27:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-15 12:47:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\Manage.php [ 19 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:19
2014-05-15 12:47:26 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 19, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:19
2014-05-15 12:55:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: has_user ~ APPPATH\classes\Controller\Application.php [ 27 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:27
2014-05-15 12:55:27 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Application.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller_Application->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:27
2014-05-15 13:24:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\Login.php [ 67 ] in file:line
2014-05-15 13:24:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-15 13:24:48 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-15 13:24:48 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Login.php(68): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_registeradmin()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-15 13:54:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH\classes\Model\Image.php [ 19 ] in file:line
2014-05-15 13:54:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-15 13:54:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH\classes\Model\Image.php [ 19 ] in file:line
2014-05-15 13:54:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-15 13:54:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Image.php [ 21 ] in file:line
2014-05-15 13:54:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-15 14:09:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: picture ~ APPPATH\classes\Controller\Gallery.php [ 13 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:13
2014-05-15 14:09:50 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 13, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:13
2014-05-15 14:13:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH\classes\Controller\Gallery.php [ 13 ] in file:line
2014-05-15 14:13:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-15 14:20:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pager_links ~ APPPATH\views\DeltaGallery\Gallery.php [ 10 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:10
2014-05-15 14:20:28 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 10, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:10
2014-05-15 15:47:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: role_login ~ APPPATH\classes\Controller\Application.php [ 24 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:24
2014-05-15 15:47:42 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Application.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 24, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller_Application->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:24