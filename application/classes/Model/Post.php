<?php
	class Model_Post extends ORM{
		public function rules(){
			return array(
				'author'=> array(
					array('not_empty')
				),
				'body'=>array(
					array('not_empty')
				)
			);
		}
		
	}

