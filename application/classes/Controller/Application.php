<?php defined('SYSPATH') or die('No direct script access.');

/*/application/classes/Controller/Application.php
*
*	Author: Krisha Iquin
*	Modified @ May 17,2014
*	
* Base Controller for the whole web application
*/
abstract class Controller_Application extends Controller_Template {

	//before function is executed first before executing the requested controller and action
    public function before()
    {
        parent::before();
        $this->template->content = '';
        //get all the styles
		$this->template->styles = array('reset.css', 'text.css', 'style.css', 'lightbox.css');
        //get all the scripts
		$this->template->scripts = array('jquery-1.11.0.min.js', 'lightbox.min.js');		
		//variables that is being use to refer to login and admin role
		$role_login = new Model_Role( array( 'name' => 'login' ) );
		$role_admin = new Model_Role( array( 'name' => 'admin' ) );	
		
		try{
			//if someone is login
			if(Auth::instance()->logged_in()){
				$has_admin =  Auth::instance()->get_user()->has( 'roles', $role_admin );
				$has_login =  Auth::instance()->get_user()->has( 'roles', $role_login );
				$user = Auth::instance()->get_user()->username;
				//setting the header
				$this->template->header = View::factory('DeltaGallery/head')->bind('user',$user);
				
				//if the action is admin
				if($this->request->action() == 'admin' && ($has_login && !$has_admin)){
					//admin only can access that page. login role redirects to No access page
						$this->redirect('./NoAccess');
				}
			}
			else{
				$user = 'guest';
				$this->template->header =  $this->request->controller()!= 'Login' ? View::factory('DeltaGallery/headPublic'): '';
					
				//if the requested page is page is for the user or admin
				if($this->request->action() == 'user' || $this->request->action() == 'admin' ){
					//the user should login or register
					$this->redirect('./Login');
				}
			}
		}
		
		catch(Kohana_HTTP_Exception $e){
			$this->redirect('./NoAccess');
		
		}
		
		
    }

}
// End Application