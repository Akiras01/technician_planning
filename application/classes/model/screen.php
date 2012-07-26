<?php
class Model_Screen extends ORM
{
	protected $_table_name = 'screen';
	protected $_primary_key = 'screen_id';
    protected $_has_many = array(
    'screen' => array(
        'model'   => 'users_type',
        'through' => 'users_type_have_screen',
    ),
 );

    public function getAVailablesScreens ($permission){

    	$screens = Model::factory('screen')
   		         ->where('screen_permission', '<=', $permission)
    		     ->order_by('screen_left')
    		     ->find_all();

    	$menus = array();
    	$label = "";	     
		
		foreach ($screens as $screen){

	        if ($screen->screen_is_accessible){
	        	$menus ["$label"][] = serialize($screen);
	        }else {
	        	$label = $screen->screen_label;
	        	$menus ["$label"] = array();
	        }    

	    }
			
		return $menus;
    }
}
/** EOF **