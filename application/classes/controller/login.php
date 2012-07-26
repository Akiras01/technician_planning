<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller {

	private function set_login_view ($errors = ''){

		$view = View::factory('common/template');
		$view->title = "Login";

		$viewBody   = View::factory('login/index');

		if (!(empty($errors))){
			$viewBody->set('errors',$errors);
		}

		$view->body = $viewBody ;
	
    	return $view;
	}

	public function action_index()
	{
	  $this->response->body($this->set_login_view ());
 
	}

	public function action_log()
	{	

    $user = Model::factory('users');
  
    if (empty($_POST['login'])){
    	$view = $this->set_login_view ('Login incorrect');
		  $this->response->body($view);
    }

    if (empty($_POST['passwd'])){
    	$view = $this->set_login_view ('Mot de passe incorrect');
		$this->response->body($view);
    }

    $check = $user->where('user_login', '=', $_POST['login'])
	 		 ->and_where('user_passwd','=',md5($_POST['passwd']))
	 		 ->find()->loaded();

    if (!$check){

    	 $view = $this->set_login_view ('Identifiant ou mot de passe incorrect');
		 $this->response->body($view);

    }else {
    		    	
    	Cache::instance()->set('user_name',$user->user_login);
   		Cache::instance()->set('user_type',$user->user_type_id);

      $lang = strtolower($user->user_lang);

      if (empty($lang)){
          $lang = 'en';
      }

      i18n::lang($lang);

      Cache::instance()->set('lang',$lang);

   		
   		$type_user =  Model::factory('typeofusers')
   		             ->where('user_type_id', '=', $user->user_type_id)
    		          ->find();

      $menus = Model::factory('screen')->getAVailablesScreens ($type_user->user_type_permission);
      
   		Cache::instance()->set('menus',$menus);    

    	$this->request->redirect('planning');
    }
  
	}
} 
/** EOF **/