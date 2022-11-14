<?php defined('SYSPATH') or die('No direct script access.');


	class Controller_ImageGallery extends Controller_Template{
	
		public function action_index(){
			$pictures = ORM::factory('Gallery')->find_all();
			$view = View::factory('imagegallery/home')->bind('pictures',$pictures);
			$this->template->content = $view;
		}
		
		public function action_render(){
			$filename = $this->request->param('id');
			$image = Image::factory('simplegallery/images/' .$filename .'.jpg');
			echo $image->resize(null,60)->render();
			
		}
	
	}

