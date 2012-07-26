<?php
class Model_Provinces extends ORM
{
	protected $_table_name = 'provinces';
	protected $_primary_key = 'prov_id';

	protected $_has_one = array(
    'country' => array(
        'model'       => 'country',
        'foreign_key' => 'count_id',
    ),
	);

	protected $_has_many = array(
    'adress' => array(
        'model'       => 'adress',
        'foreign_key' => 'adr_id', 
    ),
	);

    public function get_all_provinces (){

        $query = DB::query(Database::SELECT, 'SELECT * FROM provinces ');

        return $query->execute()->as_array();

    }

    public function get_provinces_from_country($country){

         $query = DB::query(Database::SELECT, 'SELECT prov_id,prov_label FROM provinces 
                                               WHERE count_id=:country ');


         $query->parameters(array(
                ':country' => $country,
             ));

        return $query->execute();

    }
	
}
/** EOF **