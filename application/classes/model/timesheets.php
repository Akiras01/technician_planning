<?php
class Model_Timesheets extends ORM
{
	protected $_table_name = 'timesheet';
	protected $_primary_key = 'tim_id';


	public function get_timesheet ($technician){


	   $query = DB::query(Database::SELECT, 'SELECT tim_day,tim_day_begin,tim_day_end
	   										 FROM timesheet where tech_id = :technician; ');

	   $query->parameters(array(
                ':technician' => $technician,
             ));


        return $query->execute()->as_array();

	}


	
}
/** EOF **