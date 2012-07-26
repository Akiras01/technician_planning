<?php
class Model_Contact extends ORM
{
	protected $_table_name = 'contact';
	protected $_primary_key = 'con_id';


    public function get_max(){

          $query = DB::query(Database::SELECT, 
             'SELECT max(con_id) as last
                 FROM  contact ');

          $result = $query->execute()->as_array();

          return $result [0]["last"];
    }

}
/** EOF **