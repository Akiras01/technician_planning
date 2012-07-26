<?php
class Model_Users_Parameters extends ORM
{
	protected $_table_name = 'users_parameters';
	protected $_primary_key = 'user_param_id';
	
	protected $_belongs_to = array(
    '[Users]' => array(
     /*   'model'       => '[users]',
        'foreign_key' => '[user_id]',*/
    ),
);

}
/** EOF **