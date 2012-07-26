<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Customers extends Controller {

	private function set_view ($errors = ''){

		$view = View::factory('common/template');
		$view->title = "Customers";

		$viewBody   = View::factory('customers/index');

		if (!(empty($errors))){
			$viewBody->set('errors',$errors);
		}
		$customers = Model::factory('customers');
		$view->body = $viewBody ;
	
    	return $view;
	}

	public function action_index()
	{

	  $this->response->body($this->set_view ());
 
	}

	public function action_contact_person()
	{

	$view = View::factory('common/template');
	$view->title = "Contact person";
		
	$viewBody   = View::factory('customers/customerContactPerson');
	$view->body = $viewBody ;

	$this->response->body($view);

 
	}

	public function action_general_data()
	{

	$view = View::factory('common/template');
	$view->title = "General data";
		
	$viewBody   = View::factory('customers/customerGeneralData');
	$view->body = $viewBody ;

	$this->response->body($view);

 
	}


}
/** EOF **/