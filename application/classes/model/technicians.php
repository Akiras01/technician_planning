<?php
class Model_Technicians extends ORM
{
	protected $_table_name = 'technicians';
	protected $_primary_key = 'tech_id';
	

	public function get_available_technicians ()
	{

	 $availables_technicians = $this
	 		 ->select('tech_id','tech_name','tech_surname')
	 		 ->where('tech_visible', '=', 1)
	 		 ->and_where('tech_begin_engagement_date','<=',date('Y-m-d',time()))
	 		 ->and_where('tech_end_engagement_date','>=',date('Y-m-d',time()))
	 		 ->find_all();

	 $results = array();

	 foreach( $availables_technicians as $available_technician){

	 	$results[] = array('tech_id'      => $available_technician->tech_id,
	 					   'tech_name'    => $available_technician->tech_name,
	 					   'tech_surname' => $available_technician->tech_surname
	 			     );

	 }
	 return $results;

	}

}
/** EOF **