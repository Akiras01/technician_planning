<?php   
class Model_TownShips extends ORM
{
	protected $_table_name = 'town_ships';
	protected $_primary_key = 'town_ship_id';

    public function get_all_town_ships (){

        $query = DB::query(Database::SELECT, 'SELECT town_ship_id,town_ship_label FROM town_ships ');

        return $query->execute()->as_array();

    }

    public function get_all_postcodes (){

        $query = DB::query(Database::SELECT, 'SELECT town_ship_postcode FROM town_ships ');

        return $query->execute()->as_array();

    }

    public function get_town_ships_from_provinces($province){

         $query = DB::query(Database::SELECT, 'SELECT town_ship_id,town_ship_label FROM town_ships 
                                               WHERE prov_id=:province ');


         $query->parameters(array(
                ':province' => $province,
             ));

        return $query->execute()->as_array();

    }
}
/** EOF **