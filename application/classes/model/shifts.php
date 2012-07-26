<?php
class Model_Shifts extends ORM
{
	protected $_table_name  = 'shift';
	protected $_primary_key = 'shi_id';

	public function get_shifts ($technician,$date = ''){

		$query = DB::query(Database::SELECT, 'SELECT shi_begin,shi_end,tim_day FROM shift 
											   NATURAL JOIN timesheet
											   NATURAL JOIN technicians 
											  WHERE tech_id = :technician');


		$query->parameters(array(

				':technician' => $technician,

		));

		$results         = $query->execute()->as_array();
		$shifts          = array();
		$ctr             =  $day = 0;
		$datas_tot_treat = array();
		$label = I18n::get('shifts',i18n::lang(Cache::instance()->get('lang')));


		foreach($results as $result){
	
			$day   = $result['tim_day'];

			$datas_tot_treat["$day"] = array('summary' =>  $label,
				                            'begin' => $result['shi_begin'],
				                            'end'   => $result['shi_end'] );

		}

		$day = $year  = $month = $date = null;


		if (empty($date)){

			$year  			 = date('Y',time ());
			$month 			 = date('m',time ());	
			$date            = date('Y-m-d',mktime(0,0,0,$month,0,$year));
			
		}else{

			list($year,$month,$day) = explode("-",$date);
			$date  = date('Y-m-d',mktime(0,0,0,$month  --,0,$year));

		}

		$number_of_days  = date('t',strtotime($date));
		$ctr = 0;

		do{
			$date  = date('Y-m-d',mktime(0,0,0,$month, ++ $ctr,$year));
			$day_of_week = date('w',strtotime($date));

			if (array_key_exists($day_of_week, $datas_tot_treat)){
	
				$data        = $datas_tot_treat["$day_of_week"];

				list($beginYear,$beginMonth,$beginDay)   = explode("-",$date);
				$beginDate   = $beginYear.'-'.($beginMonth - 1).'-'.$beginDay;

				list($endYear,$endMonth,$endDay)   = explode("-",$date);
				$endDate   = $endYear.'-'.($endMonth - 1).'-'.$endDay;

				$shifts [] = array('id'            => $ctr ,
								   'summary'       => $data['summary'],
				                   'startTime'     => $date.'T'.$data['begin'],
				                   'endTime'       => $date.'T'.$data['end'] );
			}

		}while (!($ctr > $number_of_days));

		return $shifts;

	}
	
}
  
/** EOF **