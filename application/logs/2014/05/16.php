<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-16 07:08:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Model\Image.php [ 14 ] in file:line
2014-05-16 07:08:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 07:08:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Model\Image.php [ 14 ] in file:line
2014-05-16 07:08:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 07:10:12 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::find_all() ~ APPPATH\classes\Model\Image.php [ 23 ] in file:line
2014-05-16 07:10:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 07:11:59 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::where() ~ APPPATH\classes\Model\Image.php [ 21 ] in file:line
2014-05-16 07:11:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 07:13:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::where() ~ APPPATH\classes\Model\Image.php [ 16 ] in file:line
2014-05-16 07:13:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 07:19:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Model\Image.php [ 14 ] in file:line
2014-05-16 07:19:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 07:19:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Model\Image.php [ 14 ] in file:line
2014-05-16 07:19:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 07:39:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pagination ~ APPPATH\classes\Controller\Gallery.php [ 37 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:37
2014-05-16 07:39:08 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 37, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:37
2014-05-16 07:42:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: has_logiin ~ APPPATH\classes\Controller\Application.php [ 27 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:27
2014-05-16 07:42:26 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Application.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller_Application->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:27
2014-05-16 08:36:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\Controller\Gallery.php [ 19 ] in file:line
2014-05-16 08:36:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 08:37:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\Controller\Gallery.php [ 52 ] in file:line
2014-05-16 08:37:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 08:37:39 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function factory() ~ APPPATH\classes\Controller\Gallery.php [ 19 ] in file:line
2014-05-16 08:37:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 08:38:00 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function factory() ~ APPPATH\classes\Controller\Gallery.php [ 19 ] in file:line
2014-05-16 08:38:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 08:38:34 --- CRITICAL: Database_Exception [ 1327 ]: Undeclared variable: landscape [ SELECT * FROM `images` ORDER BY `uploaded` DESC, `filename` ASC LIMIT landscape ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-16 08:38:34 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Model\Image.php(20): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(19): Model_Image->select_all('landscape')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-16 08:50:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pager_link ~ APPPATH\classes\Controller\Gallery.php [ 24 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:24
2014-05-16 08:50:25 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 24, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:24
2014-05-16 08:50:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pager_links ~ APPPATH\classes\Controller\Gallery.php [ 24 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:24
2014-05-16 08:50:44 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 24, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:24
2014-05-16 08:51:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Gallery.php [ 24 ] in file:line
2014-05-16 08:51:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 08:51:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pager_links ~ APPPATH\classes\Controller\Gallery.php [ 24 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:24
2014-05-16 08:51:42 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 24, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:24
2014-05-16 08:52:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pager_links ~ APPPATH\classes\Controller\Gallery.php [ 25 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:25
2014-05-16 08:52:16 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 25, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:25
2014-05-16 08:52:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pager_links ~ APPPATH\classes\Controller\Gallery.php [ 24 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:24
2014-05-16 08:52:41 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 24, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:24
2014-05-16 08:55:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pagination ~ APPPATH\classes\Controller\Gallery.php [ 24 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:24
2014-05-16 08:55:52 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 24, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:24
2014-05-16 08:58:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: picture_count ~ APPPATH\views\DeltaGallery\Gallery.php [ 10 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:10
2014-05-16 08:58:11 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 10, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:10
2014-05-16 08:58:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: picture_count ~ APPPATH\views\DeltaGallery\Gallery.php [ 10 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:10
2014-05-16 08:58:31 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 10, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:10
2014-05-16 08:58:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pager_links ~ APPPATH\views\DeltaGallery\Gallery.php [ 37 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:37
2014-05-16 08:58:43 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 37, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:37
2014-05-16 08:58:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pager_links ~ APPPATH\views\DeltaGallery\Gallery.php [ 37 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:37
2014-05-16 08:58:43 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 37, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:37
2014-05-16 08:58:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pager_links ~ APPPATH\views\DeltaGallery\Gallery.php [ 37 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:37
2014-05-16 08:58:48 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 37, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:37
2014-05-16 09:28:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'fucntion' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Controller\Gallery.php [ 18 ] in file:line
2014-05-16 09:28:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 09:28:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'fucntion' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Controller\Gallery.php [ 18 ] in file:line
2014-05-16 09:28:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 09:28:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH\classes\Controller\Gallery.php [ 25 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:25
2014-05-16 09:28:09 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 25, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(14): Controller_Gallery->_render(Object(View), 'guest', NULL)
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:25
2014-05-16 09:29:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH\classes\Controller\Gallery.php [ 31 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:31
2014-05-16 09:29:10 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 31, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(18): Controller_Gallery->_render(Object(View), 'guest')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:31
2014-05-16 09:30:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH\classes\Controller\Gallery.php [ 31 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:31
2014-05-16 09:30:02 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 31, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(18): Controller_Gallery->_render(Object(View), 'guest')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:31
2014-05-16 09:34:15 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Manage.php [ 17 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:17
2014-05-16 09:34:15 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(17): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\xampp\\htdocs...', 17, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:17
2014-05-16 09:35:09 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Manage.php [ 17 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:17
2014-05-16 09:35:09 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(17): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\xampp\\htdocs...', 17, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:17
2014-05-16 09:40:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\Gallery.php [ 33 ] in file:line
2014-05-16 09:40:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 09:40:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Gallery.php [ 62 ] in file:line
2014-05-16 09:40:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 09:40:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Gallery.php [ 62 ] in file:line
2014-05-16 09:40:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 09:40:57 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Manage.php [ 17 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:17
2014-05-16 09:40:57 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(17): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\xampp\\htdocs...', 17, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:17
2014-05-16 09:47:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '&' ~ APPPATH\classes\Controller\Gallery.php [ 32 ] in file:line
2014-05-16 09:47:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 09:47:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '&' ~ APPPATH\classes\Controller\Gallery.php [ 32 ] in file:line
2014-05-16 09:47:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 09:50:52 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\DeltaGallery\Gallery.php [ 19 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:19
2014-05-16 09:50:52 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(19): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\\xampp\\htdocs...', 19, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:19
2014-05-16 10:14:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: results ~ APPPATH\classes\Controller\Application.php [ 19 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:19
2014-05-16 10:14:53 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Application.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 19, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller_Application->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Application.php:19
2014-05-16 10:23:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Model\User.php [ 30 ] in C:\xampp\htdocs\kohana\application\classes\Model\User.php:30
2014-05-16 10:23:31 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\User.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 30, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Application.php(18): Model_User->select_specific('username')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller_Application->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\User.php:30
2014-05-16 10:24:26 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\Kohana\HTML.php [ 71 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\HTML.php:71
2014-05-16 10:24:26 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\HTML.php(71): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 71, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\HTML.php(338): Kohana_HTML::chars(Array)
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Form.php(340): Kohana_HTML::attributes(Array)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Application.php(22): Kohana_Form::select(Array)
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller_Application->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\HTML.php:71
2014-05-16 12:54:12 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2014-05-16 12:54:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\\xampp\\htdocs...', 33, Array)
#1 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #130, 'filename')
#2 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('filename')
#3 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Edit.php(4): Kohana_Database_Result->offsetGet('filename')
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 C:\xampp\htdocs\kohana\application\views\template.php(26): Kohana_View->__toString()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#14 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#17 {main} in file:line
2014-05-16 12:55:41 --- CRITICAL: ErrorException [ 8 ]: Undefined index: filename ~ APPPATH\views\DeltaGallery\Edit.php [ 4 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Edit.php:4
2014-05-16 12:55:41 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Edit.php(4): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(26): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Edit.php:4
2014-05-16 12:58:15 --- CRITICAL: ErrorException [ 2 ]: Illegal string offset 'filename' ~ APPPATH\views\DeltaGallery\Edit.php [ 4 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Edit.php:4
2014-05-16 12:58:15 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Edit.php(4): Kohana_Core::error_handler(2, 'Illegal string ...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(26): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Edit.php:4
2014-05-16 12:59:02 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Image::select_image(), called in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php on line 12 and defined ~ APPPATH\classes\Model\Image.php [ 34 ] in C:\xampp\htdocs\kohana\application\classes\Model\Image.php:34
2014-05-16 12:59:02 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Image.php(34): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 34, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Home.php(12): Model_Image->select_image()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Image.php:34
2014-05-16 12:59:32 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Image::select_image(), called in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php on line 12 and defined ~ APPPATH\classes\Model\Image.php [ 34 ] in C:\xampp\htdocs\kohana\application\classes\Model\Image.php:34
2014-05-16 12:59:32 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Image.php(34): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 34, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Home.php(12): Model_Image->select_image()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Image.php:34
2014-05-16 12:59:41 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Image::select_image(), called in C:\xampp\htdocs\kohana\application\classes\Controller\Home.php on line 12 and defined ~ APPPATH\classes\Model\Image.php [ 34 ] in C:\xampp\htdocs\kohana\application\classes\Model\Image.php:34
2014-05-16 12:59:41 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Image.php(34): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 34, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Home.php(12): Model_Image->select_image()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Image.php:34
2014-05-16 13:31:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Model\Image.php [ 57 ] in file:line
2014-05-16 13:31:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 13:31:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Model\Image.php [ 57 ] in file:line
2014-05-16 13:31:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 13:32:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Model\Image.php [ 57 ] in file:line
2014-05-16 13:32:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 13:33:17 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\Controller\Manage.php [ 95 ] in file:line
2014-05-16 13:33:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 13:34:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photograher ~ APPPATH\classes\Controller\Manage.php [ 96 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:96
2014-05-16 13:34:36 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(96): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 96, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(80): Controller_Manage->_update_database('Jellyfish.jpg')
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(52): Controller_Manage->_save_image(Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_upload()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:96
2014-05-16 13:35:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photograher ~ APPPATH\classes\Controller\Manage.php [ 96 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:96
2014-05-16 13:35:34 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(96): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 96, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(80): Controller_Manage->_update_database('Jellyfish.jpg')
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(52): Controller_Manage->_save_image(Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_upload()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:96
2014-05-16 13:36:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uploader ~ APPPATH\classes\Controller\Manage.php [ 96 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:96
2014-05-16 13:36:46 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(96): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 96, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(80): Controller_Manage->_update_database('Jellyfish.jpg')
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(52): Controller_Manage->_save_image(Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_upload()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:96
2014-05-16 13:37:36 --- CRITICAL: Database_Exception [ 1048 ]: Column 'photo_date' cannot be null [ INSERT INTO `images` (`filename`, `title`, `category`, `photographer`, `photo_date`, `uploader`) VALUES ('Jellyfish.jpg', 'jellyfish', 'landscape', 'krisha iquin', NULL, 'krisha') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-16 13:37:36 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `im...', false, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Model\Image.php(9): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(96): Model_Image->add_image('Jellyfish.jpg', 'jellyfish', 'landscape', 'krisha iquin', NULL, 'krisha')
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(80): Controller_Manage->_update_database('Jellyfish.jpg')
#4 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(52): Controller_Manage->_save_image(Array)
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_upload()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-16 13:37:57 --- CRITICAL: Database_Exception [ 1048 ]: Column 'photo_date' cannot be null [ INSERT INTO `images` (`filename`, `title`, `category`, `photographer`, `photo_date`, `uploader`) VALUES ('Jellyfish.jpg', 'jellyfish', 'landscape', 'krisha iquin', NULL, 'krisha') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-16 13:37:57 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `im...', false, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Model\Image.php(9): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(96): Model_Image->add_image('Jellyfish.jpg', 'jellyfish', 'landscape', 'krisha iquin', NULL, 'krisha')
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(80): Controller_Manage->_update_database('Jellyfish.jpg')
#4 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(52): Controller_Manage->_save_image(Array)
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_upload()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-16 13:39:08 --- CRITICAL: Database_Exception [ 1048 ]: Column 'photo_date' cannot be null [ INSERT INTO `images` (`filename`, `title`, `category`, `photographer`, `photo_date`, `uploader`) VALUES ('Jellyfish.jpg', 'jelly', 'landscape', 'krisha iquin', NULL, 'krisha') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-16 13:39:08 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `im...', false, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Model\Image.php(9): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(96): Model_Image->add_image('Jellyfish.jpg', 'jelly', 'landscape', 'krisha iquin', NULL, 'krisha')
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(80): Controller_Manage->_update_database('Jellyfish.jpg')
#4 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(52): Controller_Manage->_save_image(Array)
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_upload()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-16 13:42:42 --- CRITICAL: Database_Exception [ 1048 ]: Column 'photo_date' cannot be null [ INSERT INTO `images` (`filename`, `title`, `category`, `photographer`, `photo_date`, `uploaded`, `uploader`) VALUES ('Jellyfish.jpg', 'jelly', 'landscape', 'krisha iquin', NULL, '2014.05.16', 'krisha') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-16 13:42:42 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `im...', false, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Model\Image.php(9): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(96): Model_Image->add_image('Jellyfish.jpg', 'jelly', 'landscape', 'krisha iquin', NULL, '2014.05.16', 'krisha')
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(80): Controller_Manage->_update_database('Jellyfish.jpg')
#4 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(52): Controller_Manage->_save_image(Array)
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_upload()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-16 13:43:18 --- CRITICAL: Database_Exception [ 1048 ]: Column 'photo_date' cannot be null [ INSERT INTO `images` (`filename`, `title`, `category`, `photographer`, `photo_date`, `uploaded`, `uploader`) VALUES ('Koala.jpg', 'koala', 'landscape', '', NULL, '2014.05.16', 'krisha') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-16 13:43:18 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `im...', false, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Model\Image.php(9): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(96): Model_Image->add_image('Koala.jpg', 'koala', 'landscape', '', NULL, '2014.05.16', 'krisha')
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(80): Controller_Manage->_update_database('Koala.jpg')
#4 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(52): Controller_Manage->_save_image(Array)
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_upload()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-16 14:22:52 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Form::dropdown() ~ APPPATH\classes\Controller\Application.php [ 19 ] in file:line
2014-05-16 14:22:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 14:45:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Form::dropdown() ~ APPPATH\classes\Controller\Application.php [ 19 ] in file:line
2014-05-16 14:45:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 14:45:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\classes\Controller\Gallery.php [ 10 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:10
2014-05-16 14:45:56 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:10
2014-05-16 14:50:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\Controller\Gallery.php [ 13 ] in file:line
2014-05-16 14:50:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 14:51:10 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant selected - assumed 'selected' ~ APPPATH\classes\Controller\Gallery.php [ 13 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:13
2014-05-16 14:51:10 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(13): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\xampp\\htdocs...', 13, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:13
2014-05-16 15:12:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$view' (T_VARIABLE) ~ APPPATH\classes\Controller\Gallery.php [ 42 ] in file:line
2014-05-16 15:12:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 15:12:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Model\Image.php [ 56 ] in file:line
2014-05-16 15:12:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 15:12:51 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\DeltaGallery\Gallery.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:23
2014-05-16 15:12:51 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(23): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\\xampp\\htdocs...', 23, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:23
2014-05-16 15:13:47 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\DeltaGallery\Gallery.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:23
2014-05-16 15:13:47 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(23): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\\xampp\\htdocs...', 23, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:23
2014-05-16 15:17:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: columnname ~ APPPATH\classes\Model\Image.php [ 49 ] in C:\xampp\htdocs\kohana\application\classes\Model\Image.php:49
2014-05-16 15:17:31 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Image.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 49, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(49): Model_Image->filter('username', 'category', 12, 0)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(29): Controller_Gallery->_render(Object(View), 'category', 'username')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_filter()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Image.php:49
2014-05-16 15:18:14 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant category - assumed 'category' ~ APPPATH\classes\Model\Image.php [ 51 ] in C:\xampp\htdocs\kohana\application\classes\Model\Image.php:51
2014-05-16 15:18:14 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Image.php(51): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\xampp\\htdocs...', 51, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(49): Model_Image->filter('username', 'category', 12, 0)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(29): Controller_Gallery->_render(Object(View), 'category', 'username')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_filter()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Image.php:51
2014-05-16 15:18:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH\classes\Model\Image.php [ 51 ] in C:\xampp\htdocs\kohana\application\classes\Model\Image.php:51
2014-05-16 15:18:47 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Image.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 51, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(49): Model_Image->filter('username', 'category', 12, 0)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(29): Controller_Gallery->_render(Object(View), 'category', 'username')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_filter()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Image.php:51
2014-05-16 15:21:04 --- CRITICAL: ErrorException [ 2 ]: Illegal string offset 'filename' ~ APPPATH\views\DeltaGallery\Gallery.php [ 28 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:28
2014-05-16 15:21:04 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(28): Kohana_Core::error_handler(2, 'Illegal string ...', 'C:\\xampp\\htdocs...', 28, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:28
2014-05-16 15:21:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\Gallery.php [ 48 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:48
2014-05-16 15:21:55 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 48, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(13): Controller_Gallery->_render(Object(View))
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:48
2014-05-16 15:23:34 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\DeltaGallery\Gallery.php [ 24 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:24
2014-05-16 15:23:34 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(24): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\\xampp\\htdocs...', 24, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:24
2014-05-16 15:43:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pictures ~ APPPATH\classes\Model\Image.php [ 57 ] in C:\xampp\htdocs\kohana\application\classes\Model\Image.php:57
2014-05-16 15:43:52 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Image.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 57, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(46): Model_Image->filter('mickey', 'all', 12, 0)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(29): Controller_Gallery->_render('krisha', Object(View), 'all', 'mickey')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_filter()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Image.php:57
2014-05-16 18:11:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM) ~ APPPATH\classes\Controller\Gallery.php [ 43 ] in file:line
2014-05-16 18:11:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 18:11:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Gallery.php [ 43 ] in file:line
2014-05-16 18:11:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 18:29:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Gallery.php [ 42 ] in file:line
2014-05-16 18:29:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 18:30:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Image::select_image() ~ APPPATH\classes\Controller\Manage.php [ 124 ] in file:line
2014-05-16 18:30:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 18:34:48 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Image::select_image() ~ APPPATH\classes\Controller\Manage.php [ 125 ] in file:line
2014-05-16 18:34:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 18:45:53 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method DB::selectt() ~ APPPATH\classes\Model\Image.php [ 49 ] in file:line
2014-05-16 18:45:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 18:50:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$id' (T_VARIABLE) ~ APPPATH\classes\Controller\Manage.php [ 117 ] in file:line
2014-05-16 18:50:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 18:50:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: input ~ APPPATH\views\DeltaGallery\Login.php [ 4 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php:4
2014-05-16 18:50:11 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php:4
2014-05-16 18:50:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: input ~ APPPATH\views\DeltaGallery\Login.php [ 4 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php:4
2014-05-16 18:50:43 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php:4
2014-05-16 18:51:58 --- CRITICAL: ErrorException [ 8 ]: Undefined index: user ~ APPPATH\views\DeltaGallery\Login.php [ 4 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php:4
2014-05-16 18:51:58 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php(4): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php:4
2014-05-16 18:52:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\DeltaGallery\Login.php [ 4 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php:4
2014-05-16 18:52:43 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php:4
2014-05-16 18:55:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: input ~ APPPATH\views\DeltaGallery\Login.php [ 4 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php:4
2014-05-16 18:55:49 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php:4
2014-05-16 18:57:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\DeltaGallery\Login.php [ 4 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php:4
2014-05-16 18:57:28 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php:4
2014-05-16 19:03:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::binnd() ~ APPPATH\classes\Controller\Login.php [ 13 ] in file:line
2014-05-16 19:03:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 19:03:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\DeltaGallery\Login.php [ 4 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php:4
2014-05-16 19:03:52 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Login.php:4
2014-05-16 19:05:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\views\DeltaGallery\Register.php [ 11 ] in file:line
2014-05-16 19:05:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 19:08:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Image::select_specifc() ~ APPPATH\classes\Controller\Manage.php [ 117 ] in file:line
2014-05-16 19:08:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 19:10:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Image::select_specifc() ~ APPPATH\classes\Controller\Manage.php [ 117 ] in file:line
2014-05-16 19:10:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 19:16:47 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function redirect() ~ APPPATH\classes\Controller\Manage.php [ 137 ] in file:line
2014-05-16 19:16:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 19:21:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Manage.php [ 117 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:117
2014-05-16 19:21:39 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(117): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 117, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:117
2014-05-16 19:22:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Manage::_update() ~ APPPATH\classes\Controller\Manage.php [ 127 ] in file:line
2014-05-16 19:22:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 19:22:20 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Manage::action_update(), called in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Manage.php [ 130 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:130
2014-05-16 19:22:20 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(130): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 130, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:130
2014-05-16 19:52:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting '&' or variable (T_VARIABLE) ~ APPPATH\classes\Controller\Manage.php [ 28 ] in file:line
2014-05-16 19:52:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 19:53:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$error' (T_VARIABLE), expecting '{' ~ APPPATH\classes\Controller\Manage.php [ 134 ] in file:line
2014-05-16 19:53:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 19:53:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Manage.php [ 141 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:141
2014-05-16 19:53:49 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(141): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 141, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:141
2014-05-16 19:54:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\Controller\Manage.php [ 125 ] in file:line
2014-05-16 19:54:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 19:54:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$cat' (T_VARIABLE) ~ APPPATH\classes\Controller\Manage.php [ 126 ] in file:line
2014-05-16 19:54:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 19:59:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH\classes\Controller\Manage.php [ 70 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:70
2014-05-16 19:59:43 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 70, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Manage->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Manage.php:70
2014-05-16 20:06:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: input ~ APPPATH\views\DeltaGallery\Edit.php [ 12 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Edit.php:12
2014-05-16 20:06:12 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Edit.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 12, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Edit.php:12
2014-05-16 20:55:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::select_specific() ~ APPPATH\classes\Controller\Gallery.php [ 43 ] in file:line
2014-05-16 20:55:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 20:55:19 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::select_specific() ~ APPPATH\classes\Controller\Gallery.php [ 43 ] in file:line
2014-05-16 20:55:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line