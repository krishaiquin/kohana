<?php defined('SYSPATH') or die('No direct script access.');

	/*/application/classes/Controller/Home.php
	*
	*	Author: Krisha Iquin
	*	Modified @ May 17,2014
	*	
	*	Class responsible rendering the Home page
	*/
	class Controller_Home extends Controller_Application{

		//default function
		public function action_index(){
			$user = 'guest';
			//checks if someone logged in
			if(Auth::instance()->logged_in()){
				$user = Auth::instance()->get_user()->username;
			}
			//get all the pictures
			$pictures = ORM::factory('Image')->select_all();
			$message = 'Here are the recent photos posted in Simple Image Gallery';
			//bind the variables to the view so that the view can access their values
			$view = View::factory('DeltaGallery/home')->bind('pictures',$pictures)
					->bind('head',$head)
					->bind('user',$user)
					->bind('message',$message);
			//render the page
			$this->template->content = $view;
		}
	
	}
?>

