<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-11 09:11:54 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2014-05-11 09:11:54 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Login.php(35): Kohana_ORM->save()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2014-05-11 09:14:53 --- CRITICAL: ErrorException [ 2 ]: preg_match(): No ending delimiter '^' found ~ SYSPATH\classes\Kohana\Valid.php [ 39 ] in file:line
2014-05-11 09:14:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): N...', 'C:\\xampp\\htdocs...', 39, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Valid.php(39): preg_match('^[_a-z0-9-]+(\\....', 'asdfasdf')
#2 [internal function]: Kohana_Valid::regex('asdfasdf', '^[_a-z0-9-]+(\\....')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#5 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#6 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#7 C:\xampp\htdocs\kohana\application\classes\Controller\Login.php(36): Kohana_ORM->save()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_register()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2014-05-11 09:16:20 --- CRITICAL: ErrorException [ 2 ]: preg_match(): No ending delimiter '/' found ~ SYSPATH\classes\Kohana\Valid.php [ 39 ] in file:line
2014-05-11 09:16:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): N...', 'C:\\xampp\\htdocs...', 39, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Valid.php(39): preg_match('/^[_a-z0-9-]+(\\...', 'asdfasdf')
#2 [internal function]: Kohana_Valid::regex('asdfasdf', '/^[_a-z0-9-]+(\\...')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#5 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#6 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#7 C:\xampp\htdocs\kohana\application\classes\Controller\Login.php(36): Kohana_ORM->save()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_register()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2014-05-11 09:21:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'array' (T_ARRAY), expecting ')' ~ APPPATH\classes\Model\User.php [ 14 ] in file:line
2014-05-11 09:21:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-11 09:21:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'array' (T_ARRAY), expecting ')' ~ APPPATH\classes\Model\User.php [ 14 ] in file:line
2014-05-11 09:21:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-11 09:21:50 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login` FROM `users` AS `user` WHERE `user` IS NULL LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-11 09:21:50 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(2348): Kohana_ORM->find()
#4 [internal function]: Kohana_ORM->unique('user', NULL)
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#6 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#7 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#8 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#9 C:\xampp\htdocs\kohana\application\classes\Controller\Login.php(36): Kohana_ORM->save()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_register()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#13 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-05-11 09:31:36 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'hash_password' ~ MODPATH\orm\classes\Kohana\ORM.php [ 1210 ] in file:line
2014-05-11 09:31:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'C:\\xampp\\htdocs...', 1210, Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1210): call_user_func_array(Array, Array)
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(732): Kohana_ORM->run_filter('password', 'krishaiquin')
#3 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('password', 'krishaiquin')
#4 C:\xampp\htdocs\kohana\application\classes\Controller\Login.php(33): Kohana_ORM->__set('password', 'krishaiquin')
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_register()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in file:line