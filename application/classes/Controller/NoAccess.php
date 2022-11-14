<?php defined('SYSPATH') or die('No direct script access.');
	
	/*/application/classes/Controller/NoAccess.php
	*
	*	Author: Krisha Iquin
	*	Modified @ May 17,2014
	*	
	*	Class that renders the view that denies the access of login role managing all the pictures.
	*/
	class Controller_NoAccess extends Controller_Application{
	
		public function action_index(){
			$view = View::factory('DeltaGallery/NoAccess');
			$this->template->content = $view;
		}
	
	}
?>