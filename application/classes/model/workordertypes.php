<?php
class Model_Workordertypes extends ORM
{
	protected $_table_name = 'workorder_types';
	protected $_primary_key = 'work_type_id';


    public function get_workorder_types ($workorder = ''){

    	$request = 'SELECT workorder_types.* FROM workorder_types ';


    	if (!empty($workorder)){

    		$request .= 'NATURAL JOIN workorders where workorders.work_id = :workorder '

    	}

    	$query = DB::query(Database::SELECT, $request);

    	$query->parameters(array(

    		':workorder' => $workorder,


    	));


          return $query->execute()->as_array();
      
    }

}