<?php
class Model_Users extends ORM
{
	protected $_table_name = 'users';
	protected $_primary_key = 'user_id';

	protected $_has_one = array(
    'type_of_users' => array(
        'model'       => 'type_of_users',
        'foreign_key' => 'user_type_id',
    ),
	);
	

	public function check_user ($login,$passwd)
	{

	 $user = $this->where('user_login', '=', $login)
	 		 ->and_where('user_passwd','=',md5($passwd))
	 		 ->find();

	 return $user->loaded();

	}

	public function get_user_by_login ($login,$passwd = ''){

		$user = $this->where('user_login', '=', $login)
					 ->and_where('user_passwd','=',md5($passwd))	 
	    			 ->find();
	}

	public function get_type_user ($id)
	{

	 $user = $this->where('user_id', '=', $id)
	 		  	  ->with('typeofusers')
	 		 	  ->where('user_id','=',md5($passwd))
	 		 	  ->find();

	 return $user->typeofusers;

	}

}
/** EOF **