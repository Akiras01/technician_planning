<?php
class Model_Activitytype extends ORM
{
	protected $_table_name = 'activity_type';
	protected $_primary_key = 'act_typ_id';

	public function get_activities (){

        $query = DB::query(Database::SELECT, 
             'SELECT * FROM activity_type ');

        return $query->execute();

    }
	
}
/** EOF **