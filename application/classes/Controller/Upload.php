<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_Upload extends Controller_Template{
	
		public function action_index(){
			$view = View::factory('DeltaGallery/Upload');
			$error_message = NULL;
			$filename = NULL;
			
			if($this->request->method() == Request::POST){
				//if first time rendered..
				if(isset($_FILES['picture'])){
					//save the file and get filename
					$filename = $this->_save_image($_FILES['picture']);
				}
			}
			
			if(!$filename){
				$error_message = 'There was a problem while uploading the image.
					Make sure it is uploaded and must be JPG/PNG/GIF.';
			}
			
			$view->uploaded_file = $filename;
			$view->error_message = $error_message;
			$this->template->content = $view;
		}
		
		protected function _save_image($image){
			if(!Upload::valid($image) or ! Upload::valid($image) OR
            ! Upload::not_empty($image) OR
            ! Upload::type($image, array('jpg', 'jpeg', 'png', 'gif'))){
				return FALSE;
			}
			
			$directory = "./imagegallery/data/";
			
			if($file = Upload::save($image,NULL,$directory)){
				$filename = strtolower(Text::random('alnum',20)) . ".jpg";
				
				Image::factory($file)->save($directory.$filename);
				Image::factory($file)->resize(250,null)->save($directory."thumb/".$filename);
				$this->_add_database($filename,'jellyfish');
				unlink($file);
				
				return $filename;
			}
		}
		
		protected function _add_database($filename, $image){
			if($_FILES){
				$pictures = ORM::factory('Image');
				$pictures->filename = $filename;
				$pictures->title = $_FILES['picture']['name'];
				$pictures->category = 'landscape';
				$pictures->uploaded = date('Y.m.d');
				$pictures->uploader = 'krisha';
				$pictures->save();
				
			}
		
		}		
	
	}
?>

