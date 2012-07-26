<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Customers extends Controller {

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
		
	$viewBody   = View::factory('customers/customerContactPerson');

	$tmp    = Model::factory('customers');
	$results   = $tmp ->get_contacts_for_customer($id);

	$viewBody->set('count',count($results));
	$viewBody->set('contacts',json_encode($results));
	$viewBody->set('id',$id);
	$viewBody->set('ctr',$ctr);

	$tmp = Model::factory('contact');
	$lastContact =  $tmp->get_max();
	$viewBody->set('last',$lastContact);

	$view->body = $viewBody ;
	$this->response->body($view);
 
	}
    
    public function action_index()
	{
	  $view = View::factory('common/template');
	  $view->title = "Customers";

	  $viewBody   = View::factory('customers/index');

	  if (!(empty($errors))){
			$viewBody->set('errors',$errors);
	  }

	  $activties_model = Model::factory('activitytype');
	  $activities      = $activties_model->get_activities();

	  $modelCustomers = Model::factory('customers');
			
	  $ctr = $this->request->param('ctr');
	  
	  $viewBody->set('ctr',$ctr);
	  $viewBody->set('activities',$activities);

	  $view->body = $viewBody ;

	  $this->response->body($view);
 
	}

	public function action_create()
	{
	 if($this->request->is_ajax()){
	  	
       $tmp = Model::factory('customers');

       $id  = $tmp->create_customers($_POST); 

       $this->response->headers(array('Content-Type' => 'text/html', 'Cache-Control' => 'no-cache'))
				->body($id);
    	
      }
           	
	}

	public function action_general_data($id = '')
	{

	$view = View::factory('common/template');
	$view->title = "General data";
		
	$viewBody   = View::factory('customers/customerGeneralData');
    
    $id  = !empty($id) ? $id : $this->request->param('id');
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

	public function action_get_adress()
	{
        $ctr = $this->request->param('ctr');
        $id  = $this->request->param('id');
        
		$view        = View::factory('common/template');
        $view->title = "Adress";
		
        $viewBody    = View::factory('customers/customerAdress');
        
        $tmp         = Model::factory('customers');
        
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
       	 $customers = Model::factory('customers');

       	 $results   = $customers->search($_POST);
         
		 $this->response->headers(array('Content-Type' => 'application/json', 'Cache-Control' => 'no-cache'))
				->body(json_encode($results));
    	}
 
	}


}
/** EOF **/
