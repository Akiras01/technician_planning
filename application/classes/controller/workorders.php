<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Workorders extends Controller {

	public function before ()
	{
     if ($this->request->is_ajax())
     {
        $this->auto_render = FALSE;
     }
   }


    
    public function action_index()
	{
	  $view = View::factory('common/template');
	  $view->title = "Workorders";

	  $viewBody   = View::factory('workorders/index');

	  if (!(empty($errors))){
			$viewBody->set('errors',$errors);
	  }

	  $modelworkplaces = Model::factory('workorders');
			
	  $ctr = $this->request->param('ctr');
	  
	  $viewBody->set('ctr',$ctr);


      $workorder_type_model = Model::factory('workordertypes');
      $types     	  = $workorder_type_model->get_workorder_types();
      $viewBody->set('types',$types);

	  $view->body = $viewBody ;

	  $this->response->body($view);
 
	}


	public function action_search (){

		if($this->request->is_ajax()){
       	 $customers = Model::factory('workorders');

       	 $results   = $customers->search($_POST);
         
		 $this->response->headers(array('Content-Type' => 'application/json', 'Cache-Control' => 'no-cache'))
				->body(json_encode($results));
    	}
		
	}

	public function action_generalData (){


	$view = View::factory('common/template');
	$view->title = "General data";
		
	$viewBody   = View::factory('workorders/workorderGeneralData');
    
    $id  = $this->request->param('id');
	$ctr = $this->request->param('ctr');
    
	$viewBody->set('ctr',$ctr);
    $viewBody->set('id',$id);
    
    $tmp         	 = Model::factory('workorders');
    $workorder    	 = $tmp->get_workorder($id);

    $workorder_type_model = Model::factory('workordertypes');
    $types     	  = $workorder_type_model->get_workorder_types();


    if(count($workorder) > 0){

    	$viewBody->set('workorder',$workorder[0]);
    }

    $viewBody->set('types',$types);
	$view->body = $viewBody ;
	$this->response->body($view);


	}

	public function action_tasks (){

		
	}

	public function action_customers (){

		$view = View::factory('common/template');
		$view->title = "General data";
			
		$viewBody   = View::factory('workorders/workorderCustomers');
	    
	    $id  =  $this->request->param('id');
		$ctr = $this->request->param('ctr');
	    
		$viewBody->set('ctr',$ctr);
	    $viewBody->set('id',$id);
	    
	    $tmp         	 = Model::factory('customers');
	    $customer    	 = $tmp->get_general_data($id);

	    $activities_model = Model::factory('activitytype');
	    $activities      = $activities_model->get_activities($id);

	    $vat_model       = Model::factory('vatcode');
	    $vat_codes   	 = $vat_model->get_vat_codes();

	    if(count($customer) > 0){

	    	$viewBody->set('customer',$customer[0]);
	    }

	    $viewBody->set('activities',$activities);
	    $viewBody->set('vat_codes',$vat_codes);

	    

		$view->body = $viewBody ;
		$this->response->body($view);

	}

	public function action_workplaces (){

		$view = View::factory('common/template');
		$view->title = "Workorder workplace";
			
		$viewBody   = View::factory('workorders/workorderWorkplaces');
	    
	    $id  =  $this->request->param('id');
		$ctr = $this->request->param('ctr');
	    
		$viewBody->set('ctr',$ctr);
	    $viewBody->set('id',$id);
	    
	    $tmp         	 = Model::factory('workplaces');
	    $workplace    	 = $tmp->get_general_data($id);

	    $activities_model = Model::factory('activitytype');
	    $activities      = $activities_model->get_activities($id);

	    if(count($workplace) > 0){

	    	$viewBody->set('workplace',$workplace[0]);
	    }

	    $viewBody->set('vat_codes',$vat_codes);

		$view->body = $viewBody ;
		$this->response->body($view);


	}

	public function action_equipments (){


	}

	public function action_parts (){

	}
	
}
/** EOF **/
