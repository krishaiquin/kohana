<?php defined('SYSPATH') or die('No direct script access.');

	
	/*/application/classes/Controller/Manage.php
	*
	*	Author: Krisha Iquin
	*	Modified @ May 20,2014
	*	
	*	Class responsible for managing pictures: upload,delete and editing
	*/
	class Controller_Manage extends Controller_Application{
	
		public function action_index(){
			//check if someone is logged in
			if(Auth::instance()->logged_in()){
				$this->redirect('/manage/user');
			}
			//if not, log in first.
			else{
				$this->redirect('./login');
			}
			 
		}
		//function for login role only	
		public function action_user(){
			//get the username
			$user = Auth::instance()->get_user()->username;
			//get all the user's pictures
			$pictures = ORM::factory('Image')->select_all(NULL,NULL,$user);
			//render the page
			$this->_render($pictures,$user);	
		}
		
		//function for admin only
		public function action_admin(){
			$user = Auth::instance()->get_user()->username;
			//get all users' pictures
			$pictures = ORM::factory('Image')->select_all();
			$this->_render($pictures,$user);		
		}
		
		//rennder the page
		protected function _render($pictures,$user){
			//get the script
			$javaScript =  HTML::script("/imagegallery/js/jquery-1.11.0.min.js");
			$javaScript2 = HTML::script("/imagegallery/js/lightbox.min.js");
			//get the path
			$pathThumb = URL::base() ."imagegallery/data/thumb/";
			$pathPic = URL::base() ."imagegallery/data/";
			//bind those variables to the view
			$view = View::factory('DeltaGallery/Manage')
					->bind('pictures',$pictures)
					->bind('javaScript',$javaScript)
					->bind('javaScript2',$javaScript2)
					->bind('pathThumb',$pathThumb)
					->bind('pathPic',$pathPic);
			$this->template->content = $view;
			
		}
		//function to upload
		public function action_upload(){
		$view = View::factory('DeltaGallery/Upload');
		$error_message = NULL;
		$filename = NULL;
		
		if($this->request->method() == Request::POST){
			//if there is file being submitted
			if(isset($_FILES['picture'])){
				//save the file
				$filename = $this->_save_image($_FILES['picture']);
			//something goes wrong, print a message
				if(!$filename){
					$error_message = 'There was a problem while uploading the image.
						Make sure it is uploaded and must be JPG/PNG/GIF.';
				}
			}
		}

		//bind those variables.
		$view->uploaded_file = $filename;
		$view->error_message = $error_message;
		$view->bind('input',$_POST);
		$this->template->content = $view;
	}
	
		//save the image
		protected function _save_image($image){
			//checks if file is valid
			if(!Upload::valid($image) or ! Upload::valid($image) OR
			! Upload::not_empty($image) OR
			! Upload::type($image, array('jpg', 'jpeg', 'png', 'gif'))){
				return FALSE;
			}
			
			//set the directory
			$directory = "./imagegallery/data/";
			
			//if there is a file, save it in the stored directory
			if($file = Upload::save($image,NULL,$directory)){
				$filename = $_FILES['picture']['name'];
				
				Image::factory($file)->save($directory.$filename);
				Image::factory($file)->resize(250,null)->save($directory."thumb/".$filename);
				$this->_add_database($filename);
				//delete the temporary file
				unlink($file);
				
				//return to gallery when done.
				$this->redirect('/gallery');
				return $filename;
			}
		}
		
		//add the picture's info to the database
		protected function _add_database($filename=null,$id=null){
		//gets the information about the picture
		$cat = Arr::get($this->request->post(),'category');
		$title = Arr::get($this->request->post(),'title');
		$photographer = Arr::get($this->request->post(),'photographer');
		$taken = Arr::get($this->request->post(),'taken');
		$user = Auth::instance()->get_user()->username;
			
			//if there is a file and submitted info
			if($filename && !$id && ($_FILES && $_POST)){
				//add it to the database
				$pictures = ORM::factory('Image')->add_image($filename,$title,$cat,$photographer,date('Y.m.d'),$user);
								
			}
			
		}
		
		//delete the image.
		public function action_delete(){
		//get the id of that picture
		$id = $this->request->param('id');
		//set the directory
		$directory = "./imagegallery/data/";
		//get the filename of the picture
		$image = ORM::factory('Image')->select_specific('filename',$id);
		//delete the picture's info in the database
		$pictures = ORM::factory('Image')->delete_image($id);
		foreach($image as $images){
			//use the filename to delete the photo in the file folders
			unlink($directory ."thumb/" . $images['filename']);
			unlink($directory .$images['filename']);
		}

		$this->redirect("gallery");
	
	}	
		//edit the information
		public function action_edit(){
			//get id
			$id = $this->request->param('id');
			$image = ORM::factory('Image')->select_specific('filename',$id);
			$filename='';
			
			foreach($image as $photo){
				$filename = $photo['filename'];
			}
					
			$pathThumb = URL::base() ."imagegallery/data/thumb/";			
			$view = View::factory('DeltaGallery/Edit')
					->bind('image',$filename)
					->bind('path',$pathThumb)
					->bind('input',$_POST);	
			$this->template->content = $view;			
			
		}

		public function action_update(){
			$filename = Arr::get($this->request->post(),'filename');			
			$cat = Arr::get($this->request->post(),'category');
			$title = Arr::get($this->request->post(),'title');
			$photographer = Arr::get($this->request->post(),'photographer');
			//if something has been submitted
			if($_POST){
				//use the information to update the database
				$pictures = ORM::factory('Image')->update_info($cat,$title,$photographer,$filename);
				//redirect when done
				$this->redirect('Gallery');
			}
		}
		
}

?>