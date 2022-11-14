<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-13 12:21:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'add' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Model\Image.php [ 6 ] in file:line
2014-05-13 12:21:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 12:21:22 --- CRITICAL: ErrorException [ 2048 ]: Declaration of Model_Image::delete() should be compatible with Kohana_ORM::delete() ~ APPPATH\classes\Model\Image.php [ 37 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Core.php:511
2014-05-13 12:21:22 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Core.php(511): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\\xampp\\htdocs...', 37, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Core.php(511): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Model_Image')
#3 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): spl_autoload_call('Model_Image')
#4 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(6): Kohana_ORM::factory('Image')
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Core.php:511
2014-05-13 12:25:01 --- CRITICAL: ErrorException [ 2048 ]: Declaration of Model_Image::add() should be compatible with Kohana_ORM::add($alias, $far_keys) ~ APPPATH\classes\Model\Image.php [ 37 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Core.php:511
2014-05-13 12:25:01 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Core.php(511): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\\xampp\\htdocs...', 37, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Core.php(511): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Model_Image')
#3 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): spl_autoload_call('Model_Image')
#4 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(6): Kohana_ORM::factory('Image')
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Core.php:511
2014-05-13 12:25:18 --- CRITICAL: ErrorException [ 2048 ]: Declaration of Model_Image::select() should be compatible with Kohana_ORM::select($columns = NULL) ~ APPPATH\classes\Model\Image.php [ 37 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Core.php:511
2014-05-13 12:25:18 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Core.php(511): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\\xampp\\htdocs...', 37, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Core.php(511): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Model_Image')
#3 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): spl_autoload_call('Model_Image')
#4 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(6): Kohana_ORM::factory('Image')
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Core.php:511
2014-05-13 12:25:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pager_links ~ APPPATH\views\DeltaGallery\Gallery.php [ 30 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:30
2014-05-13 12:25:27 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 30, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:30
2014-05-13 12:36:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pager_links ~ APPPATH\views\DeltaGallery\Gallery.php [ 30 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:30
2014-05-13 12:36:38 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 30, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:30
2014-05-13 12:36:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pager_links ~ APPPATH\views\DeltaGallery\Gallery.php [ 30 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:30
2014-05-13 12:36:43 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 30, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:30
2014-05-13 12:38:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pager_links ~ APPPATH\views\DeltaGallery\Gallery.php [ 30 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:30
2014-05-13 12:38:59 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 30, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:30
2014-05-13 12:39:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pager_links ~ APPPATH\views\DeltaGallery\Gallery.php [ 30 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:30
2014-05-13 12:39:02 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 30, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:30
2014-05-13 12:46:23 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Temaplate' not found ~ APPPATH\classes\Controller\Profile.php [ 2 ] in file:line
2014-05-13 12:46:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 12:47:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Temaplate' not found ~ APPPATH\classes\Controller\Profile.php [ 2 ] in file:line
2014-05-13 12:47:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 12:47:11 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Temaplate' not found ~ APPPATH\classes\Controller\Profile.php [ 2 ] in file:line
2014-05-13 12:47:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 12:48:32 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Temaplate' not found ~ APPPATH\classes\Controller\Profile.php [ 2 ] in file:line
2014-05-13 12:48:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 12:49:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Temaplate' not found ~ APPPATH\classes\Controller\Profile.php [ 2 ] in file:line
2014-05-13 12:49:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 12:51:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''pictures'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Model\User.php [ 7 ] in file:line
2014-05-13 12:51:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 12:51:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''image'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Model\User.php [ 7 ] in file:line
2014-05-13 12:51:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 12:52:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pager_links ~ APPPATH\views\DeltaGallery\Gallery.php [ 30 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:30
2014-05-13 12:52:46 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 30, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:30
2014-05-13 13:02:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''images'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Model\User.php [ 7 ] in file:line
2014-05-13 13:02:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 13:36:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''images'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Model\User.php [ 7 ] in file:line
2014-05-13 13:36:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 13:53:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Application.php [ 17 ] in file:line
2014-05-13 13:53:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 13:53:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'actions' (T_STRING) ~ APPPATH\classes\Controller\Application.php [ 26 ] in file:line
2014-05-13 13:53:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 13:54:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Model\User.php [ 20 ] in file:line
2014-05-13 13:54:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 13:54:21 --- CRITICAL: Exception [ 0 ]: Not a valid user ~ APPPATH\classes\Controller\Profile.php [ 10 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:84
2014-05-13 13:54:21 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#6 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:84
2014-05-13 13:55:21 --- CRITICAL: Exception [ 0 ]: Not a valid user ~ APPPATH\classes\Controller\Profile.php [ 10 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:84
2014-05-13 13:55:21 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#6 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:84
2014-05-13 13:55:22 --- CRITICAL: Exception [ 0 ]: Not a valid user ~ APPPATH\classes\Controller\Profile.php [ 10 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:84
2014-05-13 13:55:22 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#6 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:84
2014-05-13 13:55:31 --- CRITICAL: Kohana_Exception [ 0 ]: The image property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-05-13 13:55:31 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('image')
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(19): Kohana_ORM->__get('image')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-05-13 13:56:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''images'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Model\User.php [ 7 ] in file:line
2014-05-13 13:56:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 13:57:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''images'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Model\User.php [ 7 ] in file:line
2014-05-13 13:57:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 13:57:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''image'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Model\User.php [ 7 ] in file:line
2014-05-13 13:57:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 13:58:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''images'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Model\User.php [ 7 ] in file:line
2014-05-13 13:58:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 14:02:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''images'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Model\User.php [ 7 ] in file:line
2014-05-13 14:02:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 14:02:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''images'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Model\User.php [ 7 ] in file:line
2014-05-13 14:02:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 14:02:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''images'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Model\User.php [ 7 ] in file:line
2014-05-13 14:02:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 14:02:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''images'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Model\User.php [ 7 ] in file:line
2014-05-13 14:02:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 14:06:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''images'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Model\User.php [ 7 ] in file:line
2014-05-13 14:06:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 14:06:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''images'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Model\User.php [ 7 ] in file:line
2014-05-13 14:06:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 14:08:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''images'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Model\User.php [ 7 ] in file:line
2014-05-13 14:08:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 14:08:29 --- CRITICAL: Kohana_Exception [ 0 ]: The image property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-05-13 14:08:29 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('image')
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(19): Kohana_ORM->__get('image')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-05-13 14:08:40 --- CRITICAL: Kohana_Exception [ 0 ]: The image property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-05-13 14:08:40 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('image')
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(19): Kohana_ORM->__get('image')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-05-13 14:08:58 --- CRITICAL: Kohana_Exception [ 0 ]: The image property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-05-13 14:08:58 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('image')
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(19): Kohana_ORM->__get('image')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-05-13 14:09:32 --- CRITICAL: Kohana_Exception [ 0 ]: The image property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-05-13 14:09:32 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('image')
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(25): Kohana_ORM->__get('image')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-05-13 14:09:34 --- CRITICAL: Kohana_Exception [ 0 ]: The image property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-05-13 14:09:34 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('image')
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(25): Kohana_ORM->__get('image')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-05-13 14:09:36 --- CRITICAL: Kohana_Exception [ 0 ]: The image property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-05-13 14:09:36 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('image')
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(25): Kohana_ORM->__get('image')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-05-13 14:09:51 --- CRITICAL: Kohana_Exception [ 0 ]: The image property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-05-13 14:09:51 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('image')
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(25): Kohana_ORM->__get('image')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-05-13 14:10:42 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'image.user_id' in 'where clause' [ SELECT `image`.`id` AS `id`, `image`.`filename` AS `filename`, `image`.`category` AS `category`, `image`.`title` AS `title`, `image`.`photographer` AS `photographer`, `image`.`photo_date` AS `photo_date`, `image`.`origin` AS `origin`, `image`.`uploaded` AS `uploaded`, `image`.`uploader` AS `uploader` FROM `images` AS `image` WHERE `image`.`user_id` IS NULL LIMIT 3 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:10:42 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `image`....', 'Model_Image', Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(25): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:12:51 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'image.user_id' in 'where clause' [ SELECT `image`.`id` AS `id`, `image`.`filename` AS `filename`, `image`.`category` AS `category`, `image`.`title` AS `title`, `image`.`photographer` AS `photographer`, `image`.`photo_date` AS `photo_date`, `image`.`origin` AS `origin`, `image`.`uploaded` AS `uploaded`, `image`.`uploader` AS `uploader` FROM `images` AS `image` WHERE `image`.`user_id` IS NULL LIMIT 3 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:12:51 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `image`....', 'Model_Image', Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(25): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:12:55 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'image.user_id' in 'where clause' [ SELECT `image`.`id` AS `id`, `image`.`filename` AS `filename`, `image`.`category` AS `category`, `image`.`title` AS `title`, `image`.`photographer` AS `photographer`, `image`.`photo_date` AS `photo_date`, `image`.`origin` AS `origin`, `image`.`uploaded` AS `uploaded`, `image`.`uploader` AS `uploader` FROM `images` AS `image` WHERE `image`.`user_id` IS NULL LIMIT 3 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:12:55 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `image`....', 'Model_Image', Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(25): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:16:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\classes\Controller\Profile.php [ 7 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php:7
2014-05-13 14:16:24 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 7, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php:7
2014-05-13 14:16:57 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'image.user_id' in 'where clause' [ SELECT `image`.`id` AS `id`, `image`.`filename` AS `filename`, `image`.`category` AS `category`, `image`.`title` AS `title`, `image`.`photographer` AS `photographer`, `image`.`photo_date` AS `photo_date`, `image`.`origin` AS `origin`, `image`.`uploaded` AS `uploaded`, `image`.`uploader` AS `uploader` FROM `images` AS `image` WHERE `image`.`user_id` IS NULL LIMIT 3 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:16:57 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `image`....', 'Model_Image', Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(25): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:17:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\classes\Controller\Profile.php [ 7 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php:7
2014-05-13 14:17:23 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 7, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php:7
2014-05-13 14:17:32 --- CRITICAL: Exception [ 0 ]: Not a valid user ~ APPPATH\classes\Controller\Profile.php [ 10 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:84
2014-05-13 14:17:32 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#6 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:84
2014-05-13 14:21:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\Profile.php [ 14 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php:14
2014-05-13 14:21:42 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php:14
2014-05-13 14:21:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\Profile.php [ 19 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php:19
2014-05-13 14:21:54 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 19, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php:19
2014-05-13 14:22:51 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'image.user_id' in 'where clause' [ SELECT `image`.`id` AS `id`, `image`.`filename` AS `filename`, `image`.`category` AS `category`, `image`.`title` AS `title`, `image`.`photographer` AS `photographer`, `image`.`photo_date` AS `photo_date`, `image`.`origin` AS `origin`, `image`.`uploaded` AS `uploaded`, `image`.`uploader` AS `uploader` FROM `images` AS `image` WHERE `image`.`user_id` = '3' LIMIT 3 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:22:51 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `image`....', 'Model_Image', Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(25): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:23:00 --- CRITICAL: Exception [ 0 ]: Not a valid user ~ APPPATH\classes\Controller\Profile.php [ 10 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:84
2014-05-13 14:23:00 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#6 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:84
2014-05-13 14:23:04 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'image.user_id' in 'where clause' [ SELECT `image`.`id` AS `id`, `image`.`filename` AS `filename`, `image`.`category` AS `category`, `image`.`title` AS `title`, `image`.`photographer` AS `photographer`, `image`.`photo_date` AS `photo_date`, `image`.`origin` AS `origin`, `image`.`uploaded` AS `uploaded`, `image`.`uploader` AS `uploader` FROM `images` AS `image` WHERE `image`.`user_id` = '3' LIMIT 3 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:23:04 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `image`....', 'Model_Image', Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(25): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:28:57 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'image.user_id' in 'where clause' [ SELECT `image`.`id` AS `id`, `image`.`filename` AS `filename`, `image`.`category` AS `category`, `image`.`title` AS `title`, `image`.`photographer` AS `photographer`, `image`.`photo_date` AS `photo_date`, `image`.`origin` AS `origin`, `image`.`uploaded` AS `uploaded`, `image`.`uploader` AS `uploader` FROM `images` AS `image` WHERE `image`.`user_id` = '3' LIMIT 3 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:28:57 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `image`....', 'Model_Image', Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(25): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:28:59 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'image.user_id' in 'where clause' [ SELECT `image`.`id` AS `id`, `image`.`filename` AS `filename`, `image`.`category` AS `category`, `image`.`title` AS `title`, `image`.`photographer` AS `photographer`, `image`.`photo_date` AS `photo_date`, `image`.`origin` AS `origin`, `image`.`uploaded` AS `uploaded`, `image`.`uploader` AS `uploader` FROM `images` AS `image` WHERE `image`.`user_id` = '3' LIMIT 3 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:28:59 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `image`....', 'Model_Image', Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(25): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:29:03 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'image.user_id' in 'where clause' [ SELECT `image`.`id` AS `id`, `image`.`filename` AS `filename`, `image`.`category` AS `category`, `image`.`title` AS `title`, `image`.`photographer` AS `photographer`, `image`.`photo_date` AS `photo_date`, `image`.`origin` AS `origin`, `image`.`uploaded` AS `uploaded`, `image`.`uploader` AS `uploader` FROM `images` AS `image` WHERE `image`.`user_id` = '3' LIMIT 3 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:29:03 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `image`....', 'Model_Image', Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(25): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:29:14 --- CRITICAL: Kohana_Exception [ 0 ]: The images property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-05-13 14:29:14 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('images')
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(19): Kohana_ORM->__get('images')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-05-13 14:29:26 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'image.user_id' in 'where clause' [ SELECT `image`.`id` AS `id`, `image`.`filename` AS `filename`, `image`.`category` AS `category`, `image`.`title` AS `title`, `image`.`photographer` AS `photographer`, `image`.`photo_date` AS `photo_date`, `image`.`origin` AS `origin`, `image`.`uploaded` AS `uploaded`, `image`.`uploader` AS `uploader` FROM `images` AS `image` WHERE `image`.`user_id` = '3' LIMIT 3 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:29:26 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `image`....', 'Model_Image', Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(25): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:29:55 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'image.user_id' in 'where clause' [ SELECT `image`.`id` AS `id`, `image`.`filename` AS `filename`, `image`.`category` AS `category`, `image`.`title` AS `title`, `image`.`photographer` AS `photographer`, `image`.`photo_date` AS `photo_date`, `image`.`origin` AS `origin`, `image`.`uploaded` AS `uploaded`, `image`.`uploader` AS `uploader` FROM `images` AS `image` WHERE `image`.`user_id` = '3' LIMIT 3 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:29:55 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `image`....', 'Model_Image', Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(25): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:29:56 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'image.user_id' in 'where clause' [ SELECT `image`.`id` AS `id`, `image`.`filename` AS `filename`, `image`.`category` AS `category`, `image`.`title` AS `title`, `image`.`photographer` AS `photographer`, `image`.`photo_date` AS `photo_date`, `image`.`origin` AS `origin`, `image`.`uploaded` AS `uploaded`, `image`.`uploader` AS `uploader` FROM `images` AS `image` WHERE `image`.`user_id` = '3' LIMIT 3 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:29:56 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `image`....', 'Model_Image', Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(25): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:29:57 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'image.user_id' in 'where clause' [ SELECT `image`.`id` AS `id`, `image`.`filename` AS `filename`, `image`.`category` AS `category`, `image`.`title` AS `title`, `image`.`photographer` AS `photographer`, `image`.`photo_date` AS `photo_date`, `image`.`origin` AS `origin`, `image`.`uploaded` AS `uploaded`, `image`.`uploader` AS `uploader` FROM `images` AS `image` WHERE `image`.`user_id` = '3' LIMIT 3 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:29:57 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `image`....', 'Model_Image', Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(25): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:29:59 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'image.user_id' in 'where clause' [ SELECT `image`.`id` AS `id`, `image`.`filename` AS `filename`, `image`.`category` AS `category`, `image`.`title` AS `title`, `image`.`photographer` AS `photographer`, `image`.`photo_date` AS `photo_date`, `image`.`origin` AS `origin`, `image`.`uploaded` AS `uploaded`, `image`.`uploader` AS `uploader` FROM `images` AS `image` WHERE `image`.`user_id` = '3' LIMIT 3 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:29:59 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `image`....', 'Model_Image', Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(25): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:30:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_images' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-05-13 14:30:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 14:30:21 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'image.user_id' in 'where clause' [ SELECT `image`.`id` AS `id`, `image`.`filename` AS `filename`, `image`.`category` AS `category`, `image`.`title` AS `title`, `image`.`photographer` AS `photographer`, `image`.`photo_date` AS `photo_date`, `image`.`origin` AS `origin`, `image`.`uploaded` AS `uploaded`, `image`.`uploader` AS `uploader` FROM `images` AS `image` WHERE `image`.`user_id` = '3' LIMIT 3 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:30:21 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `image`....', 'Model_Image', Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(25): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:30:55 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'image.user_id' in 'where clause' [ SELECT `image`.`id` AS `id`, `image`.`filename` AS `filename`, `image`.`category` AS `category`, `image`.`title` AS `title`, `image`.`photographer` AS `photographer`, `image`.`photo_date` AS `photo_date`, `image`.`origin` AS `origin`, `image`.`uploaded` AS `uploaded`, `image`.`uploader` AS `uploader` FROM `images` AS `image` WHERE `image`.`user_id` = '3' LIMIT 3 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:30:55 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `image`....', 'Model_Image', Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(25): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:31:00 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'image.user_id' in 'where clause' [ SELECT `image`.`id` AS `id`, `image`.`filename` AS `filename`, `image`.`category` AS `category`, `image`.`title` AS `title`, `image`.`photographer` AS `photographer`, `image`.`photo_date` AS `photo_date`, `image`.`origin` AS `origin`, `image`.`uploaded` AS `uploaded`, `image`.`uploader` AS `uploader` FROM `images` AS `image` WHERE `image`.`user_id` = '3' LIMIT 3 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:31:00 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `image`....', 'Model_Image', Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(25): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:31:33 --- CRITICAL: Exception [ 0 ]: Not a valid user ~ APPPATH\classes\Controller\Profile.php [ 10 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:84
2014-05-13 14:31:33 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#6 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:84
2014-05-13 14:31:38 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'image.user_id' in 'where clause' [ SELECT `image`.`id` AS `id`, `image`.`filename` AS `filename`, `image`.`category` AS `category`, `image`.`title` AS `title`, `image`.`photographer` AS `photographer`, `image`.`photo_date` AS `photo_date`, `image`.`origin` AS `origin`, `image`.`uploaded` AS `uploaded`, `image`.`uploader` AS `uploader` FROM `images` AS `image` WHERE `image`.`user_id` = '3' LIMIT 3 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:31:38 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `image`....', 'Model_Image', Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Profile.php(25): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 14:35:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pager_links ~ APPPATH\views\DeltaGallery\Gallery.php [ 30 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:30
2014-05-13 14:35:55 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 30, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:30
2014-05-13 14:36:38 --- CRITICAL: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\Kohana\Auth.php [ 155 ] in file:line
2014-05-13 14:36:38 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('mouse')
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1210): call_user_func_array(Array, Array)
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(732): Kohana_ORM->run_filter('password', 'mouse')
#3 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('password', 'mouse')
#4 C:\xampp\htdocs\kohana\application\classes\Controller\Login.php(31): Kohana_ORM->__set('password', 'mouse')
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_register()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-05-13 14:51:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?>', expecting function (T_FUNCTION) ~ APPPATH\classes\Model\User.php [ 77 ] in file:line
2014-05-13 14:51:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 14:52:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH\classes\Model\User.php [ 75 ] in file:line
2014-05-13 14:52:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 14:56:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pager_links ~ APPPATH\views\DeltaGallery\Gallery.php [ 30 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:30
2014-05-13 14:56:35 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 30, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:30
2014-05-13 14:57:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pager_links ~ APPPATH\views\DeltaGallery\Gallery.php [ 30 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:30
2014-05-13 14:57:03 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 30, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:30
2014-05-13 14:58:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pager_links ~ APPPATH\views\DeltaGallery\Gallery.php [ 30 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:30
2014-05-13 14:58:22 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 30, Array)
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
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:30
2014-05-13 15:16:38 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 15:16:38 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Login.php(35): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-13 21:36:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: this_table ~ APPPATH\classes\Model\Image.php [ 13 ] in C:\xampp\htdocs\kohana\application\classes\Model\Image.php:13
2014-05-13 21:36:32 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Image.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 13, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(6): Model_Image->select_all(3, 0)
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Image.php:13
2014-05-13 22:19:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: limit ~ APPPATH\classes\Model\Image.php [ 17 ] in C:\xampp\htdocs\kohana\application\classes\Model\Image.php:17
2014-05-13 22:19:28 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Image.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 17, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(6): Model_Image->select_all('krisha')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Image.php:17
2014-05-13 22:20:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''krisha'' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH\classes\Controller\Gallery.php [ 6 ] in file:line
2014-05-13 22:20:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 23:24:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\DeltaGallery\home.php [ 6 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php:6
2014-05-13 23:24:09 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\home.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 6, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(25): Kohana_View->__toString()
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
2014-05-13 23:42:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Image.php [ 3 ] in file:line
2014-05-13 23:42:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 23:46:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Image.php [ 3 ] in file:line
2014-05-13 23:46:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 23:53:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\template.php [ 31 ] in file:line
2014-05-13 23:53:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 23:55:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\template.php [ 31 ] in file:line
2014-05-13 23:55:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line