<?php
class Model_Adress extends ORM
{
	protected $_table_name = 'adress';
	protected $_primary_key = 'adr_id';

	protected $_has_many = array(
    'customer' => array(
        'model'       => 'customers',
        'foreign_key' => 'cust_id',
        'through'     => 'cust_have_adress'
    ),
	);

	protected $_has_one = array(
    'province' => array(
        'model'       => 'provinces',
        'foreign_key' => 'prov_id',
    ),
	);

    public function get_max(){

          $query = DB::query(Database::SELECT, 
             'SELECT max(adr_id) as last
                 FROM  adress ');

          $result = $query->execute()->as_array();

          return $result [0]["last"];
    }

}
/** EOF **