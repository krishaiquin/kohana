<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-30 17:04:28 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in C:\xampp\htdocs\kohana\application\classes\Controller\Hello.php on line 6 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:43
2014-04-30 17:04:28 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\\xampp\\htdocs...', 43, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Hello.php(6): Kohana_Controller->__construct()
#2 [internal function]: Controller_Hello->__construct(Object(Request), Object(Response))
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:43
2014-04-30 17:14:21 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in C:\xampp\htdocs\kohana\application\classes\Controller\album.php on line 12 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:43
2014-04-30 17:14:21 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\\xampp\\htdocs...', 43, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\album.php(12): Kohana_Controller->__construct()
#2 [internal function]: Controller_Album->__construct(Object(Request), Object(Response))
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php:43
2014-04-30 17:17:47 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Hello.php [ 9 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Hello.php:9
2014-04-30 17:17:47 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Hello.php(9): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\\xampp\\htdocs...', 9, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Hello->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hello))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Hello.php:9
2014-04-30 17:19:13 --- CRITICAL: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-04-30 17:19:13 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('site')
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('site', NULL)
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('site')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hello))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137