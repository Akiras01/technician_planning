<?php
class Model_Vatcode extends ORM
{
	protected $_table_name = 'vat_code';
	protected $_primary_key = 'vat_id';

	public function get_vat_codes (){

		$query = DB::query(Database::SELECT, 
             'SELECT vat_id,vat_name FROM vat_code ');

		$results = $query->execute()->as_array();

		return $results;

	}
	
}
/** EOF **