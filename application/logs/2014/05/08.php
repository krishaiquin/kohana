<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-08 03:32:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: javaScript ~ APPPATH\views\template.php [ 9 ] in C:\xampp\htdocs\kohana\application\views\template.php:9
2014-05-08 03:32:46 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\template.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 9, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_About))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\template.php:9
2014-05-08 03:46:02 --- CRITICAL: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\DeltaGallery\Gallery.php [ 16 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:16
2014-05-08 03:46:02 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 16, Array)
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
2014-05-08 03:51:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\DeltaGallery\Gallery.php [ 16 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:16
2014-05-08 03:51:15 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 16, Array)
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
2014-05-08 04:03:26 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'DESC' in 'order clause' [ SELECT `filename`, `title` FROM `images` ORDER BY `DESC` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-08 04:03:26 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `filenam...', false, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(6): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-08 04:03:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::orderby() ~ APPPATH\classes\Controller\Gallery.php [ 6 ] in file:line
2014-05-08 04:03:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 04:18:03 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ SYSPATH\classes\Kohana\HTML.php [ 87 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\HTML.php:87
2014-05-08 04:18:03 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\HTML.php(87): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\\xampp\\htdocs...', 87, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(6): Kohana_HTML::entities(Object(Database_MySQL_Result))
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\HTML.php:87
2014-05-08 04:30:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Gallery.php [ 6 ] in file:line
2014-05-08 04:30:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 06:08:40 --- CRITICAL: ErrorException [ 1 ]: Class Model_Image contains 9 abstract methods and must therefore be declared abstract or implement the remaining methods (Kohana_Database::connect, Kohana_Database::set_charset, Kohana_Database::query, ...) ~ APPPATH\classes\Model\Image.php [ 2 ] in file:line
2014-05-08 06:08:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 06:08:49 --- CRITICAL: ErrorException [ 1 ]: Class Model_Image contains 9 abstract methods and must therefore be declared abstract or implement the remaining methods (Kohana_Database::connect, Kohana_Database::set_charset, Kohana_Database::query, ...) ~ APPPATH\classes\Model\Image.php [ 2 ] in file:line
2014-05-08 06:08:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 06:11:23 --- CRITICAL: ErrorException [ 1 ]: Cannot instantiate abstract class Model_Image ~ APPPATH\classes\Controller\Gallery.php [ 8 ] in file:line
2014-05-08 06:11:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 06:11:39 --- CRITICAL: ErrorException [ 1 ]: Class Model_Image contains 9 abstract methods and must therefore be declared abstract or implement the remaining methods (Kohana_Database::connect, Kohana_Database::set_charset, Kohana_Database::query, ...) ~ APPPATH\classes\Model\Image.php [ 2 ] in file:line
2014-05-08 06:11:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 06:14:07 --- CRITICAL: ErrorException [ 1 ]: Class Model_Image contains 9 abstract methods and must therefore be declared abstract or implement the remaining methods (Kohana_Database::connect, Kohana_Database::set_charset, Kohana_Database::query, ...) ~ APPPATH\classes\Model\Image.php [ 2 ] in file:line
2014-05-08 06:14:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 06:14:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: image ~ APPPATH\classes\Controller\Gallery.php [ 9 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:9
2014-05-08 06:14:43 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 9, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php:9
2014-05-08 06:15:00 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Image::select_images(), called in C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php on line 9 and defined ~ APPPATH\classes\Model\Image.php [ 5 ] in C:\xampp\htdocs\kohana\application\classes\Model\Image.php:5
2014-05-08 06:15:00 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Image.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 5, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Gallery.php(9): Model_Image->select_images()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Gallery->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Image.php:5
2014-05-08 06:18:08 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_images' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-05-08 06:18:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 06:19:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH\views\DeltaGallery\Gallery.php [ 11 ] in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:11
2014-05-08 06:19:45 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\template.php(26): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\application\views\DeltaGallery\Gallery.php:11
2014-05-08 15:49:59 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'bcitx762_delta'@'142.232.142.133' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-05-08 15:49:59 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `title`,...', false, Array)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Home.php(7): Kohana_Database_Query->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171