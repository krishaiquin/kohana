<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_About extends Controller_Template{
	
		public function action_index(){
			$view = View::factory('DeltaGallery/About');
			$this->template->content = $view;
		}
	
	}
?>