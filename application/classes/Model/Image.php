<?php
	/*/application/classes/Model/Image.php
	*
	*	Author: Krisha Iquin
	*	Modified @ May 16, 2014
	*	
	*  Model that does the manipulation for images table
	*/
	class Model_Image extends ORM{
		//set the table to 'image'
		protected $_table = 'images';
	
		//add the image
		public function add_image($filename,$title,$cat,$photograher,$uploaded,$uploader){
			return DB::insert($this->_table,array('filename','title','category','photographer','uploaded','uploader'))
				->values(array($filename,$title,$cat,$photograher,$uploaded,$uploader))->execute();
		}
		//select all the image
		public function select_all($limit=null,$offset=null,$user=null,$category=null){
			$pictures = DB::select()->from($this->_table)
			->order_by('uploaded', 'DESC')
			->order_by('filename','ASC')
			->limit($limit)
			->offset($offset);
			
			if($user){
				$pictures->where('uploader', '=', $user);
			}
			if($category){
				$pictures->where('category', '=', $user);
			}
			return $pictures->execute();
		}
		
		//counts the images
		public function count_all(){
			return DB::select(DB::expr('COUNT(*) AS picture_count'))
			-> from($this->_table)
			->execute()
			->get('picture_count');
		}
		
		//delete the image
		public function delete_image($id){
			return DB:: delete($this->_table)->where('id', '=' , $id)->execute();
		}
		
		//select specific column with corresponding id. id could be null
		public function select_specific($columnname,$id=null){
			$pictures = DB::select($columnname)->from($this->_table);
			
			if($id){
				$pictures->where('id','=',$id)->execute();
			}
				
			return $pictures->execute();		
		}
		
		//select all column with corresponding id
		public function select_image($id){
			return DB::select()->from($this->_table)->where("id",'=',$id);
		}
		
		//filter the images
		public function filter($user=null,$cat=null,$limit=null,$offset=null){
		$picture = DB::select()->from($this->_table)
			->order_by('uploaded', 'DESC')
			->order_by('filename','ASC')
			->limit($limit)
			->offset($offset);
			
			if($cat){
				$picture->where('category','=',$cat);
			}
			if($user){
				$picture->where('uploader','=',$user);
			}
			
			return $picture->execute();	
		}
		
		//update the database image
		public function update_info($cat,$title,$photographer,$filename){
			return DB::update($this->_table)->set(array(
					'category' => $cat,
					'title' => $title,
					'photographer' => $photographer
			))->where('filename','=',$filename)->execute();
		}

			
	}
?>