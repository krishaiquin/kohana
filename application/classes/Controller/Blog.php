<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Blog extends Controller {

	public function action_index()
	{
		$posts = ORM::factory('Post')->find_all();
		$view = View::factory('blog/index')->bind('posts',$posts);
		$this->response->body($view);
	}
	
	public function action_new(){
		if($_POST){
			try{
				$post = ORM::factory('Post');
				$post->author = $_POST['author'];
				$post->body = $_POST['body'];
				$post->save();
				$this->redirect('blog/index');
			}
			catch(ORM_Validation_Exception $e){
				$errors = $e->errors('model');
			}
			
		}
		$view = View::factory('blog/new')->bind('errors',$errors)->bind('values',$_POST);
		$this->response->body($view);
	}

} // End Welcome