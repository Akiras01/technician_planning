<?php
class Model_Skills extends ORM
{
	protected $_table_name  = 'skills';
	protected $_primary_key = 'skills_id';

	public function get_shifts ($technician = ''){


		$query = ' select skills.* from skills ';

		if (!empty($technician)){

			$query .= ' natural join have_skills
					    natural join technician 
					    where technician.tech_id  = :technician ';

		}

		$query = DB::query(Database::SELECT, $query);


		$query->parameters(array(

				':technician' => $technician,

		));

		return $query->execute()->as_array();
	

	}
	
}
  
/** EOF **