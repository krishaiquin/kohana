<?php defined('SYSPATH') or die('No direct script access.');

	/*/application/classes/Controller/Gallery.php
	*
	*	Author: Krisha Iquin
	*	Modified @ May 21,2014
	*	
	*	Class responsible rendering picture in Gallery page and filter images
	*/
	class Controller_Gallery extends Controller_Application{
	
		public function action_index(){			
			$this->_render();	
		}
		
		//method for filtering the images
		public function action_filter(){		
			//get the selected user
			$selectedUser = Arr::get($this->request->post(),'ddUser');
			//get the selected category
			$selectedCat = Arr::get($this->request->post(),'ddCat');	
			
			//if values are submitted
			if($_POST){
				//render the page
				$this->_render($selectedCat,$selectedUser);
			}
		}
		
		//function that renders the page
		protected function _render($category=null,$users=null){			
			$picture_count = ORM::factory('Image')->count_all();
			//pagination
			$pagination = Pagination::factory(array(
				'total_items' => $picture_count,
				'items_per_page' => 12
			));
			$pager_links = $pagination->render();
			
			//if there is user and category parameter provided to decide which pictures to render
			if($users && $category){
				if($category=='all' && $users=='all' )
					$pictures = ORM::factory('Image')->filter(NULL,NULL,$pagination->items_per_page,$pagination->offset);
				else{
					if($users=='all'){
						$pictures = ORM::factory('Image')->filter(NULL,$category,$pagination->items_per_page,$pagination->offset);
					}
					else{
						if($category=='all')
							$pictures = ORM::factory('Image')->filter($users,NULL,$pagination->items_per_page,$pagination->offset);
						else	
							$pictures = ORM::factory('Image')->filter($users,$category,$pagination->items_per_page,$pagination->offset);
					}
					
				}
			}
			else
				$pictures = ORM::factory('Image')->select_all($pagination->items_per_page,$pagination->offset);
			$view = View::factory('DeltaGallery/Gallery')->bind('pictures',$pictures)
					->bind('pager_links',$pager_links);
			$this->template->content = $view;
		
		}
	
	}

?>