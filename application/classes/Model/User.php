<?php

	/*/application/classes/Model/User.php
	*
	*	Author: Krisha Iquin
	*	Modified @ May 16, 2014
	*	
	*  Model that does the manipulation for user table
	*/
	class Model_User extends Model_Auth_User{
		//table user
		protected $_table = 'users';
		//indicates that user can have many user_token, role, image
		protected $_has_many = array(
			'user_tokens' => array('model' =>'user_token'),
			'roles' 	  => array('model' =>'role', 'through' => 'roles_users'),
			'image'    => array('model' => 'image')
		);	
	
		//rules for registration.
		public function rules(){
			return array(
				'username' =>array(
					array('not_empty'),
					array(array($this,'unique'),array(':field',':value'))
				),
				'password'=>array(
					array('not_empty'),
					array('min_length', array(':value', 4))
				),
				'email'=>array(
					array('not_empty'),
					array(array($this,'unique'),array(':field',':value')),
					array('regex', array(':value','/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'))
				)
			);
		}
		//getting specific column
		public function select_specific($columnname){
			return DB::select($columnname)->from($this->_table)->execute();		
		}
	}