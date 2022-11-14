<?php

	/*/application/classes/Model/Role.php
	*
	*	Author: Krisha Iquin
	*	Modified @ May 16, 2014
	*	
	*  Model that does the manipulation for roles table
	*/
	class Model_Role extends ORM{
		//indicates that user and role has one to many relationship.
		protected $_belongs_to = array('user' => array('model'=>'user'));
	
	}
?>