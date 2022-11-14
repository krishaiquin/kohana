<?php defined('SYSPATH') or die('No direct script access.');

	/*/application/classes/Controller/About.php
	*
	*	Author: Krisha Iquin
	*	Modified @ May 16, 2014
	*	renders About page
	*/
	class Controller_About extends Controller_Application{
		//default controller
		public function action_index(){
			//create a view
			$view = View::factory('DeltaGallery/About');
			//then makie this view as the content of the template
			$this->template->content = $view;
		}
	
	}
?>