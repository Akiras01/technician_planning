<?php
class Model_Users_type extends ORM
{
	protected $_table_name = 'type_of_users';
	protected $_primary_key = 'user_type_id';

	protected $_has_many = array(
    '[users]' => array(
        'model'       => '[user]',
        'foreign_key' => '[user_id]',
    ),
    'screen' => array(
        'model'   => 'screen',
        'through' => 'users_type_have_screen',
    ),
	);
    
}
/** EOF **/