<?php
class Model_Countries extends ORM
{
	protected $_table_name = 'country';
	protected $_primary_key = 'count_id';

	public function get_countries (){

		$query = DB::query(Database::SELECT, 'SELECT count_id,count_name FROM country ');

		$results     = $query->execute()->as_array();

		$countries   = array();

		foreach($results as $result){

			$name = I18n::get($result['count_name'],i18n::lang(Cache::instance()->get('lang')));
			$countries [] = array('count_id' => $result['count_id'] ,'count_name' =>  $name);

		}

		return $countries;

	}
	
}
  
/** EOF **