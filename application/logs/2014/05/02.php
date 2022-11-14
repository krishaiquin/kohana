<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-02 08:40:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\Blog.php [ 26 ] in file:line
2014-05-02 08:40:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 08:43:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\Blog.php [ 26 ] in file:line
2014-05-02 08:43:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 08:43:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\Blog.php [ 26 ] in file:line
2014-05-02 08:43:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 08:56:50 --- CRITICAL: Database_Exception [ 1146 ]: Table 'demo.galleries' doesn't exist [ SHOW FULL COLUMNS FROM `galleries` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2014-05-02 08:56:50 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('galleries')
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php(6): Kohana_ORM::factory('Gallery')
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_ImageGallery->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2014-05-02 08:58:51 --- CRITICAL: Database_Exception [ 1146 ]: Table 'demo.gallerieses' doesn't exist [ SHOW FULL COLUMNS FROM `gallerieses` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2014-05-02 08:58:51 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('gallerieses')
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php(6): Kohana_ORM::factory('Galleries')
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_ImageGallery->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2014-05-02 09:22:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\ImageGallery.php [ 7 ] in file:line
2014-05-02 09:22:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 09:24:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\imagegallery\home.php [ 12 ] in file:line
2014-05-02 09:24:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 09:24:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\imagegallery\home.php [ 12 ] in file:line
2014-05-02 09:24:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 09:24:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\imagegallery\home.php [ 12 ] in file:line
2014-05-02 09:24:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 09:46:04 --- CRITICAL: ErrorException [ 1 ]: Class 'Image' not found ~ APPPATH\views\imagegallery\home.php [ 11 ] in file:line
2014-05-02 09:46:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 09:52:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '/', expecting ',' or ';' ~ APPPATH\views\imagegallery\home.php [ 8 ] in file:line
2014-05-02 09:52:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 09:53:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '/', expecting ',' or ';' ~ APPPATH\views\imagegallery\home.php [ 8 ] in file:line
2014-05-02 09:53:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 09:57:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '/', expecting ',' or ';' ~ APPPATH\classes\Controller\ImageGallery.php [ 3 ] in file:line
2014-05-02 09:57:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 09:57:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '/', expecting ',' or ';' ~ APPPATH\classes\Controller\ImageGallery.php [ 3 ] in file:line
2014-05-02 09:57:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 09:57:58 --- CRITICAL: ErrorException [ 1 ]: Class 'Image' not found ~ APPPATH\classes\Controller\ImageGallery.php [ 7 ] in file:line
2014-05-02 09:57:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 09:58:47 --- CRITICAL: ErrorException [ 1 ]: Class 'Image' not found ~ APPPATH\views\imagegallery\home.php [ 11 ] in file:line
2014-05-02 09:58:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 10:01:15 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-05-02 10:01:15 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('/simplegallery/...')
#1 C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('/simplegallery/...')
#2 C:\xampp\htdocs\kohana\application\views\imagegallery\home.php(11): Kohana_Image::factory('/simplegallery/...')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#7 C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php(9): Kohana_Response->body(Object(View))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_ImageGallery->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-05-02 10:02:17 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-05-02 10:02:17 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('/simplegallery/...')
#1 C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('/simplegallery/...')
#2 C:\xampp\htdocs\kohana\application\views\imagegallery\home.php(11): Kohana_Image::factory('/simplegallery/...')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#7 C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php(9): Kohana_Response->body(Object(View))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_ImageGallery->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-05-02 10:04:38 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-05-02 10:04:38 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('/simplegallery/...')
#1 C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('/simplegallery/...')
#2 C:\xampp\htdocs\kohana\application\views\imagegallery\home.php(11): Kohana_Image::factory('/simplegallery/...')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#7 C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php(9): Kohana_Response->body(Object(View))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_ImageGallery->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-05-02 10:08:28 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-05-02 10:08:28 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('/simplegallery/...')
#1 C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('/simplegallery/...')
#2 C:\xampp\htdocs\kohana\application\views\imagegallery\home.php(11): Kohana_Image::factory('/simplegallery/...')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#7 C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php(9): Kohana_Response->body(Object(View))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_ImageGallery->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-05-02 10:10:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photo ~ APPPATH\views\imagegallery\home.php [ 17 ] in C:\xampp\htdocs\kohana\application\views\imagegallery\home.php:17
2014-05-02 10:10:45 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\imagegallery\home.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 17, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php(9): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_ImageGallery->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\imagegallery\home.php:17
2014-05-02 10:11:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photo ~ APPPATH\views\imagegallery\home.php [ 18 ] in C:\xampp\htdocs\kohana\application\views\imagegallery\home.php:18
2014-05-02 10:11:14 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\imagegallery\home.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 18, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php(9): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_ImageGallery->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\imagegallery\home.php:18
2014-05-02 10:11:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photo ~ APPPATH\views\imagegallery\home.php [ 18 ] in C:\xampp\htdocs\kohana\application\views\imagegallery\home.php:18
2014-05-02 10:11:17 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\imagegallery\home.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 18, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php(9): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_ImageGallery->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\imagegallery\home.php:18
2014-05-02 10:11:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photo ~ APPPATH\views\imagegallery\home.php [ 16 ] in C:\xampp\htdocs\kohana\application\views\imagegallery\home.php:16
2014-05-02 10:11:50 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\imagegallery\home.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 16, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php(9): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_ImageGallery->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\imagegallery\home.php:16
2014-05-02 10:46:19 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-05-02 10:46:19 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('/simplegallery/...')
#1 C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('/simplegallery/...')
#2 C:\xampp\htdocs\kohana\application\views\imagegallery\home.php(11): Kohana_Image::factory('/simplegallery/...')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#7 C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php(9): Kohana_Response->body(Object(View))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_ImageGallery->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-05-02 10:50:23 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Image_GD::toString() ~ APPPATH\views\imagegallery\home.php [ 12 ] in file:line
2014-05-02 10:50:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 11:15:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$count' (T_VARIABLE) ~ APPPATH\views\imagegallery\home.php [ 14 ] in file:line
2014-05-02 11:15:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 14:10:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Image::factor() ~ APPPATH\classes\Controller\ImageGallery.php [ 11 ] in file:line
2014-05-02 14:10:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 14:11:03 --- CRITICAL: Kohana_Exception [ 0 ]: The filename property does not exist in the Model_Gallery class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-05-02 14:11:03 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('filename')
#1 C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php(11): Kohana_ORM->__get('filename')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_ImageGallery->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-05-02 14:12:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photo ~ APPPATH\classes\Controller\ImageGallery.php [ 9 ] in C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php:9
2014-05-02 14:12:45 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 9, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_ImageGallery->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php:9
2014-05-02 14:12:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photo ~ APPPATH\classes\Controller\ImageGallery.php [ 9 ] in C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php:9
2014-05-02 14:12:58 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 9, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_ImageGallery->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php:9
2014-05-02 14:13:04 --- CRITICAL: Kohana_Exception [ 0 ]: The filename property does not exist in the Model_Gallery class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-05-02 14:13:04 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('filename')
#1 C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php(9): Kohana_ORM->__get('filename')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_ImageGallery->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-05-02 14:13:47 --- CRITICAL: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Gallery class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-05-02 14:13:47 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('title')
#1 C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php(13): Kohana_ORM->__get('title')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_ImageGallery->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-05-02 14:24:08 --- CRITICAL: ErrorException [ 2 ]: file_get_contents() expects parameter 1 to be a valid path, string given ~ APPPATH\classes\Controller\ImageGallery.php [ 14 ] in file:line
2014-05-02 14:24:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php(14): file_get_contents('\xFF\xD8\xFF\xE0\x00\x10JFIF\x00\x01\x01\x00\x00...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_ImageGallery->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-05-02 14:26:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$image' (T_VARIABLE), expecting ',' or ';' ~ APPPATH\classes\Controller\ImageGallery.php [ 13 ] in file:line
2014-05-02 14:26:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 14:26:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\ImageGallery.php [ 15 ] in file:line
2014-05-02 14:26:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 14:31:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\ImageGallery.php [ 16 ] in file:line
2014-05-02 14:31:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 14:31:33 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_ImageGallery::$reponse ~ APPPATH\classes\Controller\ImageGallery.php [ 13 ] in C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php:13
2014-05-02 14:31:33 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 13, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_ImageGallery->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php:13
2014-05-02 14:37:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Image_GD::header() ~ APPPATH\views\imagegallery\home.php [ 12 ] in file:line
2014-05-02 14:37:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 14:40:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Image_GD::header() ~ APPPATH\views\imagegallery\home.php [ 12 ] in file:line
2014-05-02 14:40:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 14:41:53 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::header() ~ APPPATH\classes\Controller\ImageGallery.php [ 10 ] in file:line
2014-05-02 14:41:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 14:50:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function headers() ~ APPPATH\views\imagegallery\home.php [ 12 ] in file:line
2014-05-02 14:50:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 14:53:12 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function headers() ~ APPPATH\views\imagegallery\home.php [ 12 ] in file:line
2014-05-02 14:53:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 14:55:03 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-05-02 14:55:03 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('/simplegallery/...')
#1 C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('/simplegallery/...')
#2 C:\xampp\htdocs\kohana\application\views\imagegallery\home.php(11): Kohana_Image::factory('/simplegallery/...')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#7 C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php(10): Kohana_Response->body(Object(View))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_ImageGallery->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-05-02 14:55:51 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-05-02 14:55:51 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('/simplegallery/...')
#1 C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('/simplegallery/...')
#2 C:\xampp\htdocs\kohana\application\views\imagegallery\home.php(11): Kohana_Image::factory('/simplegallery/...')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#7 C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php(10): Kohana_Response->body(Object(View))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_ImageGallery->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-05-02 14:56:02 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-05-02 14:56:02 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('/simplegallery/...')
#1 C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('/simplegallery/...')
#2 C:\xampp\htdocs\kohana\application\views\imagegallery\home.php(11): Kohana_Image::factory('/simplegallery/...')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#7 C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php(10): Kohana_Response->body(Object(View))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_ImageGallery->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-05-02 14:57:00 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-05-02 14:57:00 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('/simplegallery/...')
#1 C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('/simplegallery/...')
#2 C:\xampp\htdocs\kohana\application\views\imagegallery\home.php(11): Kohana_Image::factory('/simplegallery/...')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#7 C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php(10): Kohana_Response->body(Object(View))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_ImageGallery->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-05-02 14:57:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function headers() ~ APPPATH\views\imagegallery\home.php [ 12 ] in file:line
2014-05-02 14:57:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 15:23:12 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH\views\imagegallery\home.php [ 8 ] in file:line
2014-05-02 15:23:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 15:24:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'as' (T_AS), expecting ';' ~ APPPATH\views\imagegallery\home.php [ 8 ] in file:line
2014-05-02 15:24:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 15:41:16 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$Filename ~ APPPATH\views\imagegallery\home.php [ 10 ] in C:\xampp\htdocs\kohana\application\views\imagegallery\home.php:10
2014-05-02 15:41:16 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\imagegallery\home.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php(10): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_ImageGallery->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\imagegallery\home.php:10
2014-05-02 15:44:26 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_ImageGallery::$reponse ~ APPPATH\classes\Controller\ImageGallery.php [ 22 ] in C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php:22
2014-05-02 15:44:26 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 22, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_ImageGallery->action_render()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php:22
2014-05-02 15:45:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH\classes\Controller\ImageGallery.php [ 10 ] in file:line
2014-05-02 15:45:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 15:52:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\Controller\ImageGallery.php [ 21 ] in file:line
2014-05-02 15:52:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 15:52:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\ImageGallery.php [ 21 ] in file:line
2014-05-02 15:52:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 15:52:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\ImageGallery.php [ 19 ] in file:line
2014-05-02 15:52:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 15:54:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '++' (T_INC), expecting ')' ~ APPPATH\views\imagegallery\home.php [ 8 ] in file:line
2014-05-02 15:54:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 15:56:48 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-05-02 15:56:48 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('simplegallery/i...')
#1 C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('simplegallery/i...')
#2 C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php(17): Kohana_Image::factory('simplegallery/i...')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_ImageGallery->action_render()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-05-02 15:56:48 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-05-02 15:56:48 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('simplegallery/i...')
#1 C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('simplegallery/i...')
#2 C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php(17): Kohana_Image::factory('simplegallery/i...')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_ImageGallery->action_render()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-05-02 15:56:48 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-05-02 15:56:48 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('simplegallery/i...')
#1 C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('simplegallery/i...')
#2 C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php(17): Kohana_Image::factory('simplegallery/i...')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_ImageGallery->action_render()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-05-02 15:56:48 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-05-02 15:56:48 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('simplegallery/i...')
#1 C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('simplegallery/i...')
#2 C:\xampp\htdocs\kohana\application\classes\Controller\ImageGallery.php(17): Kohana_Image::factory('simplegallery/i...')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_ImageGallery->action_render()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-05-02 16:04:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\ImageGallery.php [ 10 ] in file:line
2014-05-02 16:04:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 16:06:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) ~ APPPATH\views\imagegallery\home.php [ 25 ] in file:line
2014-05-02 16:06:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:22:51 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-05-02 19:22:51 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-05-02 19:23:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::content() ~ APPPATH\classes\Controller\ImageGallery.php [ 9 ] in file:line
2014-05-02 19:23:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:25:07 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::after() ~ APPPATH\classes\Controller\ImageGallery.php [ 9 ] in file:line
2014-05-02 19:25:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:29:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::headers() ~ APPPATH\classes\Controller\ImageGallery.php [ 15 ] in file:line
2014-05-02 19:29:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:29:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::headers() ~ APPPATH\classes\Controller\ImageGallery.php [ 15 ] in file:line
2014-05-02 19:29:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:29:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::headers() ~ APPPATH\classes\Controller\ImageGallery.php [ 15 ] in file:line
2014-05-02 19:29:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:29:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::headers() ~ APPPATH\classes\Controller\ImageGallery.php [ 15 ] in file:line
2014-05-02 19:29:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:30:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:30:10 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:30:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:30:52 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:31:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:31:01 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:31:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:31:50 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:32:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:32:15 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:32:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:32:59 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:33:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:33:10 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:33:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::headers() ~ APPPATH\classes\Controller\ImageGallery.php [ 15 ] in file:line
2014-05-02 19:33:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:33:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::headers() ~ APPPATH\classes\Controller\ImageGallery.php [ 15 ] in file:line
2014-05-02 19:33:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:33:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::headers() ~ APPPATH\classes\Controller\ImageGallery.php [ 15 ] in file:line
2014-05-02 19:33:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:33:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::headers() ~ APPPATH\classes\Controller\ImageGallery.php [ 15 ] in file:line
2014-05-02 19:33:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:36:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:36:14 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:36:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:36:14 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:36:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:36:15 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:36:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:36:15 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:40:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::headers() ~ APPPATH\classes\Controller\ImageGallery.php [ 15 ] in file:line
2014-05-02 19:40:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:40:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::headers() ~ APPPATH\classes\Controller\ImageGallery.php [ 15 ] in file:line
2014-05-02 19:40:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:40:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::headers() ~ APPPATH\classes\Controller\ImageGallery.php [ 15 ] in file:line
2014-05-02 19:40:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:40:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::headers() ~ APPPATH\classes\Controller\ImageGallery.php [ 15 ] in file:line
2014-05-02 19:40:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:43:09 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::headers() ~ APPPATH\classes\Controller\ImageGallery.php [ 15 ] in file:line
2014-05-02 19:43:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:43:09 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::headers() ~ APPPATH\classes\Controller\ImageGallery.php [ 15 ] in file:line
2014-05-02 19:43:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:43:09 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::headers() ~ APPPATH\classes\Controller\ImageGallery.php [ 15 ] in file:line
2014-05-02 19:43:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:43:09 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::headers() ~ APPPATH\classes\Controller\ImageGallery.php [ 15 ] in file:line
2014-05-02 19:43:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:43:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:43:18 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:43:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:43:18 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:43:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:43:18 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:43:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:43:18 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:43:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:43:21 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:43:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:43:21 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:43:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:43:21 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:43:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:43:21 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:43:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:43:33 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:43:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:43:33 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:43:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:43:33 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:43:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:43:33 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:49:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::headers() ~ APPPATH\classes\Controller\ImageGallery.php [ 16 ] in file:line
2014-05-02 19:49:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:49:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::headers() ~ APPPATH\classes\Controller\ImageGallery.php [ 16 ] in file:line
2014-05-02 19:49:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:49:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::headers() ~ APPPATH\classes\Controller\ImageGallery.php [ 16 ] in file:line
2014-05-02 19:49:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:49:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::headers() ~ APPPATH\classes\Controller\ImageGallery.php [ 16 ] in file:line
2014-05-02 19:49:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:52:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::headers() ~ APPPATH\classes\Controller\ImageGallery.php [ 15 ] in file:line
2014-05-02 19:52:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:52:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::headers() ~ APPPATH\classes\Controller\ImageGallery.php [ 15 ] in file:line
2014-05-02 19:52:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:52:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::headers() ~ APPPATH\classes\Controller\ImageGallery.php [ 15 ] in file:line
2014-05-02 19:52:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:52:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::headers() ~ APPPATH\classes\Controller\ImageGallery.php [ 15 ] in file:line
2014-05-02 19:52:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:52:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::headers() ~ APPPATH\classes\Controller\ImageGallery.php [ 15 ] in file:line
2014-05-02 19:52:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:52:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::headers() ~ APPPATH\classes\Controller\ImageGallery.php [ 15 ] in file:line
2014-05-02 19:52:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:52:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::headers() ~ APPPATH\classes\Controller\ImageGallery.php [ 15 ] in file:line
2014-05-02 19:52:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:52:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::headers() ~ APPPATH\classes\Controller\ImageGallery.php [ 15 ] in file:line
2014-05-02 19:52:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 19:53:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:53:25 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:53:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:53:25 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:53:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:53:25 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:53:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:53:25 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:53:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:53:49 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:53:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:53:49 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:53:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:53:49 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:53:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:53:49 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:56:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:56:06 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:56:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:56:06 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:56:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:56:06 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:56:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 23 ] in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:56:06 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:23
2014-05-02 19:58:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 25 ] in C:\xampp\htdocs\kohana\application\views\template.php:25
2014-05-02 19:58:57 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 25, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:25
2014-05-02 19:58:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 25 ] in C:\xampp\htdocs\kohana\application\views\template.php:25
2014-05-02 19:58:57 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 25, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:25
2014-05-02 19:58:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 25 ] in C:\xampp\htdocs\kohana\application\views\template.php:25
2014-05-02 19:58:57 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 25, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:25
2014-05-02 19:58:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 25 ] in C:\xampp\htdocs\kohana\application\views\template.php:25
2014-05-02 19:58:57 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 25, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ImageGallery))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:25