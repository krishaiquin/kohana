<?php defined('SYSPATH') or die ('No direct script access.'):
	
	class Controller_User_Account extends Controller_Application{
		
		public function action_login(){
			if(Auth::instance()->logged_in()){
				Request::instance()->redirect('home/user');
			}
			
			$this->template->content = View::factory('DeltaGallery/login')
										->bind('user', $user)
										->bind('errors', $errors);
			if ($_POST) {
				// Attempt to login user
				$remember = array_key_exists('remember', $this->request->post()) ? (bool) $this->request->post('remember') : FALSE;
				
				$is_login = Auth::instance()->login($this->request->post('user'), $this->request->post('pass'), $remember);
				// If successful, redirect user
				if ($is_login) {
					$this->request->redirect('home/user');
				} else {
					$message = 'Please check out your username or password.';
				}
			}
		}
		
		public function action_logout(){
			Auth::instance()->logout();
			Request::instance()->redirect('login');
		}
		
		public function action_signup(){
			$content = View::factory('account/signup');
			this->template->content = $content;
			
			if($_POST){
				$user = new Model_User;
				$post = $user->validate_add($_POST);
				if($post->check()){
					$user->values($post);
					$user->save();
					$user->add('roles',ORM::factory('role')->find(1));
				}
				else{
					$this->errors = $post->errors('signup');
					Request::instance()->redirect('signup');
				}
				Request::instance()->redirect('');
			}
		}
	}