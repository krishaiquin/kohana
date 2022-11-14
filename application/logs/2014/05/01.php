<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-01 09:43:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Welcome.php [ 13 ] in file:line
2014-05-01 09:43:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 14:03:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting ']' ~ APPPATH\classes\Controller\Blog.php [ 8 ] in file:line
2014-05-01 14:03:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 14:03:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ']' ~ APPPATH\classes\Controller\Blog.php [ 8 ] in file:line
2014-05-01 14:03:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 14:04:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ']' ~ APPPATH\classes\Controller\Blog.php [ 8 ] in file:line
2014-05-01 14:04:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 14:06:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ']' ~ APPPATH\classes\Controller\Blog.php [ 8 ] in file:line
2014-05-01 14:06:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 14:11:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ']' ~ APPPATH\classes\Controller\Blog.php [ 8 ] in file:line
2014-05-01 14:11:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 14:14:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ']' ~ APPPATH\classes\Controller\Blog.php [ 8 ] in file:line
2014-05-01 14:14:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 14:14:56 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-05-01 14:14:56 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('posts')
#3 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(7): Kohana_ORM::factory('Post')
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-05-01 14:21:29 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-05-01 14:21:29 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('posts')
#3 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(7): Kohana_ORM::factory('Post')
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-05-01 14:21:32 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-05-01 14:21:32 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('posts')
#3 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(7): Kohana_ORM::factory('Post')
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-05-01 14:23:30 --- CRITICAL: ErrorException [ 1 ]: Class 'Kohana_Database_MySQL' not found ~ MODPATH\database\classes\Database\MySQL.php [ 3 ] in file:line
2014-05-01 14:23:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 14:24:55 --- CRITICAL: ErrorException [ 1 ]: Class 'Kohana_Database_MySQL' not found ~ MODPATH\database\classes\Database\MySQL.php [ 3 ] in file:line
2014-05-01 14:24:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 14:26:51 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-05-01 14:26:51 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('posts')
#3 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(7): Kohana_ORM::factory('Post')
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-05-01 14:28:46 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-05-01 14:28:46 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('posts')
#3 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(7): Kohana_ORM::factory('Post')
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-05-01 14:29:18 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-05-01 14:29:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 14:29:58 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-05-01 14:29:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 14:30:01 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-05-01 14:30:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 14:33:11 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-05-01 14:33:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 14:35:30 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-05-01 14:35:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 14:35:32 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-05-01 14:35:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 14:36:37 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-05-01 14:36:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 14:36:39 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-05-01 14:36:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 14:38:25 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-05-01 14:38:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 14:44:22 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-05-01 14:44:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 14:44:36 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'krishaiquin'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-05-01 14:44:36 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('posts')
#3 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(7): Kohana_ORM::factory('Post')
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-05-01 14:45:21 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'krishaiquin'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-05-01 14:45:21 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('posts')
#3 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(7): Kohana_ORM::factory('Post')
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-05-01 15:13:29 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'krishaiquin'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-05-01 15:13:29 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('posts')
#3 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(7): Kohana_ORM::factory('Post')
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-05-01 15:14:43 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'krishaiquin'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-05-01 15:14:43 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('posts')
#3 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(7): Kohana_ORM::factory('post')
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-05-01 15:15:10 --- CRITICAL: Database_Exception [ 1146 ]: Table 'demo.posts' doesn't exist [ SHOW FULL COLUMNS FROM `posts` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2014-05-01 15:15:10 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('posts')
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(7): Kohana_ORM::factory('post')
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2014-05-01 15:16:14 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Blog.php [ 8 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php:8
2014-05-01 15:16:14 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\xampp\\htdocs...', 8, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php:8
2014-05-01 15:16:38 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Blog.php [ 8 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php:8
2014-05-01 15:16:38 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\xampp\\htdocs...', 8, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php:8
2014-05-01 15:17:12 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Blog.php [ 8 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php:8
2014-05-01 15:17:12 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\xampp\\htdocs...', 8, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php:8
2014-05-01 15:17:51 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Blog.php [ 8 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php:8
2014-05-01 15:17:51 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\xampp\\htdocs...', 8, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php:8
2014-05-01 15:30:21 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Kohana_Post' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-05-01 15:30:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 15:30:58 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Kohana_Post' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-05-01 15:30:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 15:31:39 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Kohana_Post' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-05-01 15:31:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 15:32:16 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Kohana_Post' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-05-01 15:32:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 15:33:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Kohana_Post' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-05-01 15:33:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 15:33:40 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Kohana_Post' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-05-01 15:33:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 15:33:42 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Kohana_Post' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-05-01 15:33:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 15:33:50 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Kohana_Post' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-05-01 15:33:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 19:23:59 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$author ~ APPPATH\views\blog\index.php [ 4 ] in C:\xampp\htdocs\kohana\application\views\blog\index.php:4
2014-05-01 19:23:59 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\blog\index.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(9): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\blog\index.php:4
2014-05-01 19:24:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\blog\index.php [ 4 ] in C:\xampp\htdocs\kohana\application\views\blog\index.php:4
2014-05-01 19:24:59 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\blog\index.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(9): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\blog\index.php:4
2014-05-01 19:28:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\index.php [ 4 ] in C:\xampp\htdocs\kohana\application\views\index.php:4
2014-05-01 19:28:11 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\index.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(9): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\index.php:4
2014-05-01 19:32:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH\views\index.php [ 2 ] in C:\xampp\htdocs\kohana\application\views\index.php:2
2014-05-01 19:32:00 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\index.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 2, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(9): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\index.php:2
2014-05-01 19:32:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH\views\index.php [ 2 ] in C:\xampp\htdocs\kohana\application\views\index.php:2
2014-05-01 19:32:05 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\index.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 2, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(9): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\index.php:2
2014-05-01 19:33:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\index.php [ 4 ] in C:\xampp\htdocs\kohana\application\views\index.php:4
2014-05-01 19:33:08 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\index.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(9): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\index.php:4
2014-05-01 19:33:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\index.php [ 4 ] in C:\xampp\htdocs\kohana\application\views\index.php:4
2014-05-01 19:33:49 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\index.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(9): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\index.php:4
2014-05-01 19:35:14 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$author ~ APPPATH\views\index.php [ 4 ] in C:\xampp\htdocs\kohana\application\views\index.php:4
2014-05-01 19:35:14 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\index.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(9): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\index.php:4
2014-05-01 19:35:47 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$body ~ APPPATH\views\index.php [ 5 ] in C:\xampp\htdocs\kohana\application\views\index.php:5
2014-05-01 19:35:47 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\index.php(5): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 5, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(9): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\index.php:5
2014-05-01 19:35:59 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$author ~ APPPATH\views\index.php [ 4 ] in C:\xampp\htdocs\kohana\application\views\index.php:4
2014-05-01 19:35:59 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\index.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(9): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\index.php:4
2014-05-01 19:40:44 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$author ~ APPPATH\views\index.php [ 4 ] in C:\xampp\htdocs\kohana\application\views\index.php:4
2014-05-01 19:40:44 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\index.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(9): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\index.php:4
2014-05-01 19:42:00 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\index.php [ 14 ] in C:\xampp\htdocs\kohana\application\views\index.php:14
2014-05-01 19:42:00 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\index.php(14): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(9): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\index.php:14
2014-05-01 19:43:48 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$author ~ APPPATH\views\index.php [ 4 ] in C:\xampp\htdocs\kohana\application\views\index.php:4
2014-05-01 19:43:48 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\index.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(9): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\index.php:4
2014-05-01 19:47:39 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\index.php [ 14 ] in C:\xampp\htdocs\kohana\application\views\index.php:14
2014-05-01 19:47:39 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\index.php(14): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(9): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\index.php:14
2014-05-01 19:49:51 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$author ~ APPPATH\views\index.php [ 4 ] in C:\xampp\htdocs\kohana\application\views\index.php:4
2014-05-01 19:49:51 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\index.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(9): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\index.php:4
2014-05-01 19:52:14 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$body ~ APPPATH\views\index.php [ 5 ] in C:\xampp\htdocs\kohana\application\views\index.php:5
2014-05-01 19:52:14 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\index.php(5): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 5, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(9): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\index.php:5
2014-05-01 19:53:13 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$author ~ APPPATH\views\index.php [ 14 ] in C:\xampp\htdocs\kohana\application\views\index.php:14
2014-05-01 19:53:13 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\index.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(9): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\index.php:14
2014-05-01 19:53:30 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$author ~ APPPATH\views\index.php [ 14 ] in C:\xampp\htdocs\kohana\application\views\index.php:14
2014-05-01 19:53:30 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\index.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(9): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\index.php:14
2014-05-01 19:54:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\index.php [ 4 ] in C:\xampp\htdocs\kohana\application\views\index.php:4
2014-05-01 19:54:43 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\index.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(9): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\index.php:4
2014-05-01 19:56:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\index.php [ 10 ] in C:\xampp\htdocs\kohana\application\views\index.php:10
2014-05-01 19:56:18 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\Blog.php(9): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\index.php:10
2014-05-01 20:04:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) ~ APPPATH\views\index.php [ 16 ] in file:line
2014-05-01 20:04:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 20:23:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ',' or ';' ~ APPPATH\views\blog\new.php [ 13 ] in file:line
2014-05-01 20:23:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 20:48:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\views\blog\new.php [ 16 ] in file:line
2014-05-01 20:48:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 20:49:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Post.php [ 9 ] in file:line
2014-05-01 20:49:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-01 20:49:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Post.php [ 12 ] in file:line
2014-05-01 20:49:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line