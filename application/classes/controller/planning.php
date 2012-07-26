<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Planning extends Controller {


	public function before ()
	{
   	  if ($this->request->is_ajax())
      {
        $this->auto_render = FALSE;
      }
    }

	private function set_view ($errors = ''){

		$view = View::factory('common/template');
		$view->title = "Planning";

		$viewBody   = View::factory('planning/index');

		if (!(empty($errors))){
			$viewBody->set('errors',$errors);
		}
		$technicians = Model::factory('technicians');
		$viewBody->set('technicians',$technicians->get_available_technicians());
		$view->body = $viewBody ;
	
    	return $view;
	}

	public function action_index()
	{

	  $this->response->body($this->set_view ());
 
	}

	

	public function action_show (){

		$view = View::factory('common/template');
		$view->title = "Planning day";

		$viewBody   = View::factory('planning/planning');

		$ctr        = $this->request->param('ctr');
		$technician = $this->request->param('technician');

		$model_timesheet = Model::factory('timesheets');
		$timesheet       = $model_timesheet->get_timesheet ($technician);

		$model_shift     = Model::factory('shifts');
		$shifts          = $model_shift->get_shifts($technician);
 

		$viewBody->set('timesheet',json_encode($timesheet));
		$viewBody->set('shifts',json_encode($shifts));
		$viewBody->set('technician',$technician);
		$viewBody->set('ctr',$ctr);
		$viewBody->set('date',date('Y-m-d',time()));

	
		$view->body = $viewBody ;
	
    	$this->response->body($view);

	}

} // End Welcome
