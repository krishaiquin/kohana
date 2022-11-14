<?php defined('SYSPATH') or die('No direct script access.');

	/*/application/classes/Controller/Login.php
	*
	*	Author: Krisha Iquin
	*	Modified @ May 16,2014
	*	
	*	Class that contains how login,registration and logout works
	*	It also renders login and registration page.
	*/
	class Controller_Login extends Controller_Application{
	
		//login page
		public function action_index(){
			$message='';
			//if already logged in. go to home
			if(Auth::instance()->logged_in()){
				$this->redirect("/home");
			}
			
			$content = View::factory("DeltaGallery/Login")
						->bind('message',$message)
						->bind('input',$_POST); //view use 'input' to reference to $_POST values. We need this so that when error occurs
												//when loggin in, you dont need to retype your username.
			$this->template->content = $content;
			
			
			if($_POST){
				$remember = isset($post['remember']);
				$post = $this->request->post();
				$success = Auth::instance()->login($post['user'],$post['pass'],$remember);
				
				if($success){
					$this->redirect("/home");
				}
				else{
					$message = "Your username or password is incorrect";
				}
			}
		
		}
		
		//function to register login role
		public function action_register(){
			//get information from the form
			$user = Arr::get($this->request->post(),'user');
			$pass = Arr::get($this->request->post(),'pass');
			$email = Arr::get($this->request->post(),'email');
			
			if($_POST){
				//save the user
				try{
					$newuser = ORM::factory('User');
					$newuser->username = $user;
					$newuser->password = $pass;
					$newuser->email = $email;
					$newuser->save();
					$role = ORM::factory('role')->where('name','=','login')->find();
					$newuser->add('roles',$role);
					
					$this->redirect('./Login');
				}
				catch(ORM_Validation_Exception $e){
					$error = $e -> errors('model');
				}
			}
			
			$view = View::factory('DeltaGallery/Register')
					->bind('errors',$error)
					->bind('input',$_POST);
			$this->template->content = $view;
		}
		
		//register admin. in different function and page so that only people who knows the link can register as admin.
		public function action_registeradmin(){
			$user = Arr::get($this->request->post(),'user');
			$pass = Arr::get($this->request->post(),'pass');
			$email = Arr::get($this->request->post(),'email');
			
			if($_POST){
				try{
					$newuser = ORM::factory('User');
					$newuser->username = $user;
					$newuser->password = $pass;
					$newuser->email = $email;
					$newuser->save();
					$loginrole = ORM::factory('role')->where('name','=','login')->find();
					$adminrole = ORM::factory('role')->where('name','=','admin')->find();
					$newuser->add('roles',$loginrole);
					$newuser->add('roles',$adminrole);
					
					$this->redirect('./Login');
				}
				catch(ORM_Validation_Exception $e){
					$error = $e -> errors('model');
				}
			}
			
			$view = View::factory('DeltaGallery/RegisterAdmin')
					->bind('errors',$error)
					->bind('input',$_POST);
			$this->template->content = $view;
		}
		
		//log out function
		public function action_logout(){
			//logs out the user
			auth::instance()->logout();
			//then redirect to home
			$this->redirect('./home');
		}
	
	}

?>