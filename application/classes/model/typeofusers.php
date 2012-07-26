<?php
class Model_Typeofusers extends ORM
{
	protected $_table_name = 'type_of_users';
	protected $_primary_key = 'user_type_id';

	protected $_has_many = array(
    'users' => array(
        'model'       => 'users',
        'foreign_key' => 'user_id',
    ),
	); 
}
/** EOF **/