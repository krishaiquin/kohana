<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-10 14:49:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function close() ~ APPPATH\views\DeltaGallery\Register.php [ 14 ] in file:line
2014-05-10 14:49:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-10 15:26:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: javaScript ~ APPPATH\views\template.php [ 9 ] in C:\xampp\htdocs\kohana\application\views\template.php:9
2014-05-10 15:26:13 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 9, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:9
2014-05-10 15:34:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: javaScript ~ APPPATH\views\DeltaGallery\Gallery.php [ 4 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:4
2014-05-10 15:34:05 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 4, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:4
2014-05-10 15:52:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\Login.php [ 17 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Login.php:17
2014-05-10 15:52:55 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Login.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 17, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Login.php:17
2014-05-10 15:53:29 --- CRITICAL: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\Kohana\Auth.php [ 155 ] in file:line
2014-05-10 15:53:29 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('krisha')
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1210): call_user_func_array(Array, Array)
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(732): Kohana_ORM->run_filter('password', 'krisha')
#3 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('password', 'krisha')
#4 C:\xampp\htdocs\kohana\application\classes\Controller\Login.php(17): Kohana_ORM->__set('password', 'krisha')
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_register()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-05-10 15:57:06 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2014-05-10 15:57:06 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Login.php(20): Kohana_ORM->save()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2014-05-10 15:57:28 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2014-05-10 15:57:28 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Login.php(20): Kohana_ORM->save()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2014-05-10 15:58:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$POST' (T_VARIABLE) ~ APPPATH\classes\Controller\Login.php [ 15 ] in file:line
2014-05-10 15:58:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-10 16:22:39 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Login::$body ~ APPPATH\classes\Controller\Login.php [ 29 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Login.php:29
2014-05-10 16:22:39 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Login.php(29): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 29, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Login.php:29
2014-05-10 16:22:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 24 ] in C:\xampp\htdocs\kohana\application\views\template.php:24
2014-05-10 16:22:59 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 24, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:24
2014-05-10 16:30:41 --- CRITICAL: View_Exception [ 0 ]: The requested view DeltaGallery/Login could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-05-10 16:30:41 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('DeltaGallery/Lo...')
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('DeltaGallery/Lo...', NULL)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Login.php(6): Kohana_View::factory('DeltaGallery/Lo...')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-05-10 16:32:25 --- CRITICAL: ErrorException [ 8 ]: Undefined index: user ~ APPPATH\classes\Controller\Login.php [ 9 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Login.php:9
2014-05-10 16:32:25 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Login.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 9, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Login.php:9
2014-05-10 16:32:56 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Controller\Login.php [ 9 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Login.php:9
2014-05-10 16:32:56 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Login.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 9, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Login.php:9
2014-05-10 16:35:41 --- CRITICAL: ErrorException [ 8 ]: Undefined index: password ~ APPPATH\classes\Controller\Login.php [ 11 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Login.php:11
2014-05-10 16:35:41 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Login.php(11): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Login.php:11
2014-05-10 16:36:18 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Login.php [ 14 ] in file:line
2014-05-10 16:36:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-10 16:36:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: request ~ APPPATH\classes\Controller\Login.php [ 14 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Login.php:14
2014-05-10 16:36:59 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Login.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Login.php:14
2014-05-10 16:53:13 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant bad - assumed 'bad' ~ APPPATH\classes\Controller\Login.php [ 17 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Login.php:17
2014-05-10 16:53:13 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Login.php(17): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\xampp\\htdocs...', 17, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Login.php:17