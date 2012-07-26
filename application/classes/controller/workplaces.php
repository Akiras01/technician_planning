<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Workplaces extends Controller {

	public function before ()
	{
     if ($this->request->is_ajax())
     {
        $this->auto_render = FALSE;
     }
   }

	
	public function action_contact_person()
	{
	
    $id= $this->request->param('id');
	$ctr= $this->request->param('ctr');

	$view = View::factory('common/template');
	$view->title = "Contact person";
		
	$viewBody   = View::factory('workplaces/workplaceContactPerson');

	$tmp    = Model::factory('workplaces');
	$results   = $tmp ->get_contacts_for_workplace($id);

	$viewBody->set('count',count($results));
	$viewBody->set('contacts',json_encode($results));
	$viewBody->set('id',$id);
	$viewBody->set('ctr',$ctr);

	$view->body = $viewBody ;
	$this->response->body($view);
 
	}
    
    public function action_index()
	{
	  $view = View::factory('common/template');
	  $view->title = "Workplaces";

	  $viewBody   = View::factory('workplaces/index');

	  if (!(empty($errors))){
			$viewBody->set('errors',$errors);
	  }

	  $modelworkplaces = Model::factory('workplaces');
			
	  $ctr = $this->request->param('ctr');
	  
	  $viewBody->set('ctr',$ctr);

	  $modelCustomers = Model::factory('customers');
	  $viewBody->set('owners',$modelCustomers->get_names());


	  $view->body = $viewBody ;

	  $this->response->body($view);
 
	}

	public function action_get_customers()
	{

		$ctr = $this->request->param('ctr');
        $id  = $this->request->param('id');
        
		$view        = View::factory('common/template');
        $view->title = "workplaces_owners";
		
        $viewBody    = View::factory('workplaces/workplaceCustomers');
        
        $tmp         = Model::factory('workplaces');
        
        $customers   = $tmp->get_owners($id);

        $viewBody->set('id',$id);
        $viewBody->set('ctr',$ctr);
        $viewBody->set('count',count($customers));
        $viewBody->set('customers', json_encode($customers));

        $view->body = $viewBody ;
        $this->response->body($view);


	}

	public function action_create()
	{
	 if($this->request->is_ajax()){
	  	
       $tmp = Model::factory('workplaces');

       $id  = $tmp->create_workplaces($_POST); 

       $this->response->headers(array('Content-Type' => 'text/html', 'Cache-Control' => 'no-cache'))
				->body($id);
    	
      }
           	
	}

	public function action_general_data($id = '')
	{

	$view = View::factory('common/template');
	$view->title = "General data";
		
	$viewBody   = View::factory('workplaces/workplaceGeneralData');
    
    $id  = !empty($id) ? $id : $this->request->param('id');
	$ctr = $this->request->param('ctr');
    
	$viewBody->set('ctr',$ctr);
    $viewBody->set('id',$id);
    
    $tmp         = Model::factory('workplaces');
    $workplace   = $tmp->get_general_data($id);

    if(count($workplace) > 0){

    	$viewBody->set('workplace',$workplaces[0]);
    }

    $vat_model = Model::factory('vatcode');

    $viewBody->set('vat_codes',$vat_model->get_vat_codes());

	$view->body = $viewBody ;
	$this->response->body($view);

 
	}

	public function action_get_adress()
	{
        $ctr = $this->request->param('ctr');
        $id  = $this->request->param('id');
        
		$view        = View::factory('common/template');
        $view->title = "Adress";
		
        $viewBody    = View::factory('workplaces/workplaceAdress');
        
        $tmp         = Model::factory('workplaces');
        $adresses    = $tmp->get_adress($id);
        
        $viewBody->set('id',$id);
        $viewBody->set('ctr',$ctr);
        $viewBody->set('count',count($adresses));

        $countries_model   = Model::factory('countries');

        $viewBody->set('countries', json_encode($countries_model->get_countries()));


        $provinces_model   = Model::factory('provinces');
        $viewBody->set('provinces', json_encode($provinces_model->get_all_provinces()));

        $viewBody->set('adresses', json_encode($adresses));


        $townShip_model   = Model::factory('townships');
        $viewBody->set('postcodes', json_encode($townShip_model->get_all_postcodes()));
        $viewBody->set('town_ships', json_encode($townShip_model->get_all_town_ships()));


        $tmp = Model::factory('adress');
		$lastAdress =  $tmp->get_max();

		$viewBody->set('last',$lastAdress);


        $view->body = $viewBody ;
        $this->response->body($view);
	}

	public function action_search()
	{

		if($this->request->is_ajax()){
       	 $workplace = Model::factory('workplaces');

       	 $results   = $workplace->search($_POST);
         
		 $this->response->headers(array('Content-Type' => 'application/json', 'Cache-Control' => 'no-cache'))
				->body(json_encode($results));
    	}
 
	}


}
/** EOF **/
