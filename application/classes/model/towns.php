<?php   
class Model_Towns extends ORM
{
	protected $_table_name = 'towns';
	protected $_primary_key = 'town_id';

    public function get_all_towns (){

        $query = DB::query(Database::SELECT, 'SELECT town_id,town_label FROM towns ');

        return $query->execute();

    }

    public function get_towns_from_provinces($province){

         $query = DB::query(Database::SELECT, 'SELECT town_id,town_label FROM towns 
                                               WHERE prov_id=:province ');


         $query->parameters(array(
                ':province' => $province,
             ));

        return $query->execute();

    }
}
/** EOF **