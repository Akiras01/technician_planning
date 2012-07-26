<?php
class Model_Workplaces extends ORM
{
	protected $_table_name = 'workplaces';
	protected $_primary_key = 'workp_id';

    
    public function get_general_data ($id)
    {
       $query = DB::query(Database::SELECT, 
             'SELECT workplaces.* FROM workplaces 
                 natural join vat_code
              WHERE workp_id = :workplace');
 
        $query->parameters(array(
            ':workplace' => $id,
        ));
        
        $results = $query->execute();

        return $results->as_array();
    }    

    public function get_owners($id)
    {

        $query = DB::query(Database::SELECT, 
             'SELECT customers.* 
                 FROM workplaces 
                 natural join customers
              WHERE workp_id = :workplace');
 
        $query->parameters(array(
            ':workplace' => $id,
        ));

         $results = $query->execute();

         if (count($results) == 0){

            return array(
                    array('cust_id'=> ' ', 'cust_name' => ' ', 'cust_surname' => ' ',
                          'cust_tel' => ' ','cust_gsm' => ' ', 'cust_fax' => ' '  ,
                          'cust_mail' => ' ', 'cust_is_liable' => ' ','cust_vat_number' => '',
                          'cust_active' => ' ', 'cust_bad' => ' ', 'cust_account_number' => ' ',
                          'cust_domiciliation_number' => ' ', 'cust_discount' => ' ',
                          'cust_discount_reason' => ' ', 'cust_reprieve' => ' ', 'cust_remarks' => ' ',
                          'vat_id' => ' ', 'act_typ_id' => ''
                     )
                );

         }

        return $results->as_array();
    }

    public function get_adress ($id)
    {
     $query = DB::query(Database::SELECT, 
             'SELECT adress.adr_id,adress.adr_street_number,
                     adress.adr_street_name,
                     towns.town_id,towns.town_label,provinces.prov_id,
                     provinces.prov_label,town_ships.town_ship_id,
                     town_ships.town_ship_label,town_ships.town_ship_postcode,
                     country.count_name
                 FROM workplaces 
                 natural join workp_have_adress 
                 natural join adress
                 natural join towns
                 natural join town_ships
                 natural join provinces
                 natural join country
              WHERE workp_id = :workplace');
 
        $query->parameters(array(
            ':workplace' => $id,
        ));

        
        $results =  $query->execute()->as_array();  

        if (count($results) == 0 ){


              return  array(
                        array('adr_id' => 0,'adr_street_number' => ' ',
                              'adr_street_name' => ' ','town_id' => '',
                              'town_label' => '','prov_id' => '','prov_label' => '',
                              'town_ship_id' => ' ','town_ship_label' => ' ',
                              'town_ship_postcode' => ' ','count_name' => ' ')
                    );
        }

       return $results; 
    }
    
    public function get_contacts_for_workplace($id){
        
        
        $query = DB::query(Database::SELECT, 
             'SELECT con_id,con_name,con_surname,con_mail,con_phone, con_fax 
                    FROM workplaces natural join contact 
              WHERE workp_id = :workplace');

           $query->parameters(array(
                ':workplace' => $id,
             ));

        $results =  $query->execute()->as_array();  
       
        if (count($results) == 0 ){


            return  array(
                        array('con_id' => 0,'con_name' => ' ','con_surname' => ' ',
                         'con_mail' => '', 'con_phone' => '','con_fax' => '')
                    );
        }

       return $results;        

    }
    
     public function get_vat_code($id){


          $query = DB::query(Database::SELECT, 
             'SELECT vat_id,vat_name FROM workplaces natural join vat_code 
              WHERE workp_id = :workplace');

               $query->parameters(array(
                ':workplace' => $id,
             ));

           return $query->execute();        

    }


     public function update_workplaces($parameters){

         $query     = 'update workplaces set ';
         $not_valid = false;
         $erros = '';
         
         if (!empty($parameters['name'])){
         
            $query  .= 'workp_name = :workp_name,';
             
         }else {
             
             $not_valid = true;
             
             
         }    
         
         
         if (!empty($parameters['tel'])){
             
            $query  .= 'workp_tel = :workp_tel,';
         }   
         
         
         if (!empty($parameters['mail'])){
  
                $query  .= 'workp_mail = :workp_mail,';
         }  
         
         if (!empty($parameters['gsm'])){
             

                $query  .= 'workp_gsm = :workp_gsm,';
                 
         } 
         
         if (!empty($parameters['fax'])){
 
                $query  .= 'workp_fax = :workp_fax,';
         } 

         if (!empty($parameters['active'])){
             
             if (intval($parameters['active'])){
             
                 $query  .= 'workp_active = :workp_active,';
             
             }       
         } 
         


         if (!empty($parameters['vatCode'])){

                 $query  .= 'vat_id = :vat_id,';
                             

         } 

   
         if (!empty($parameters['remarks'])){
             
               $query  .= 'workp_remarks = :workp_remarks,';
         } 



      //   if (!($not_valid)) {

            $query = substr($query,0, strlen($query) - 1).' WHERE workp_id=:workp_id';

            $query = DB::query(Database::UPDATE, $query);  

              $query->parameters(array(
                ':workp_id'                   => $parameters['id'],
                ':workp_name'                 => $parameters['name'],
                ':workp_tel'                  => $parameters['tel'],
                ':workp_gsm'                  => $parameters['gsm'],
                ':workp_fax'                  => $parameters['fax'],
                ':workp_mail'                 => $parameters['mail'],
                ':workp_active'               => intval($parameters['active']),
                ':workp_remarks'              => $parameters['remarks'],
                ':vat_id'                    => intval($parameters['vatCode'])
             ));

            $query->execute();
            return $parameters['id'];


        // }     


     }


     
     public function create_workplaces ($parameters){


         if (empty($parameters['id'])){

            $query     = 'INSERT INTO workplaces (';

            $values    = ' VALUES (';
            $not_valid = false;
            $erros = '';

         
         if (!empty($parameters['name'])){
         
            $query  .= 'workp_name,';
            $values .= ':workp_name,';
             
         }else {
             
             $not_valid = true;
             
             
         }    
          
         
         if (!empty($parameters['tel'])){
             
             if (preg_match('/^[0-9\/]{10,}$/',$parameters['tel'])){

                 $query  .= 'workp_tel,';
                 $values .= ':workp_tel,';
                 
                 
             }else{

                $not_valid = true;
                 
             }
         }   
         
         
         if (!empty($parameters['mail'])){
             
             if (preg_match('/^[0-9a-zA-Z\.\-]{3,}[@]{1}[a-zA-Z]{3,5}[\.][a-zA-Z]{2,5}$/',$parameters['mail'])){
                 
                $query .= 'workp_mail,';
                $values .= ':workp_mail,';
                 
             }else{

                 $not_valid = true;
                 
             }
         }  
         
         if (!empty($parameters['gsm'])){
             
             if (preg_match('/^[0-9\/]{10,}$/',$parameters['gsm'])){
                 
                $query  .= 'workp_gsm,';
                $values .= ':workp_gsm,';
                 
             }else{

                 $not_valid = true;
                 
             }
         } 

         
         if (!empty($parameters['fax'])){
             
            if (preg_match('/^[0-9\/]{10,}$/',$parameters['fax'])){
                 
                $query  .= 'workp_fax,';
                $values .= ':workp_fax,';
                 
             }else{

                 $not_valid = true;
                 
             }
         } 
         
  
          if (!empty($parameters['active'])){
             
             if (is_int($parameters['active'])){
             
                $query  .= 'workp_active,';
                $values .= ':workp_active,';
             
             }       
         } 

         if (!empty($parameters['vatCode'])){

                $query  .= 'vat_id,';
                $values .= ':vat_id,';
                      
         }    

         if (!empty($parameters['remarks'])){
             
                $query  .= 'workp_remarks,';
                $values  .= ':workp_remarks,';
         } 

     //    if ($not_valid == true) {

              $query = substr($query,0,strlen($query) - 1).' ) ';
              $values = substr($values,0,strlen($values) - 1).' ) ';
              

              $query = DB::query(Database::INSERT, $query.$values); 

              $query->parameters(array(
                ':workp_name'                 => $parameters['name'],
                ':workp_tel'                  => $parameters['tel'],
                ':workp_gsm'                  => $parameters['gsm'],
                ':workp_mail'                 => $parameters['mail'],
                ':workp_active'               => intval($parameters['active']),
                ':workp_remarks'              => $parameters['remarks'],
                ':vat_id'                    => intval($parameters['vatCode'])

             ));

             $query->execute(); 
             
             $query   = DB::query(Database::SELECT, 'SELECT MAX(cust_id) as id from workplaces'); 
             $results = $query->execute();
             return $results[0]['id'];

         //}     
         
         }else {

            return $this->update_workplaces($parameters);
           
         }


         
     }

     public function search($parameters){
         
         
        $request =  'SELECT workp_id,workp_name FROM workplaces ';
        $join    =  array();
        $where   =  array();

        $id       = trim ($parameters['id']);
        $name     = trim($_POST['name']);
        $owner    = trim($_POST['owner']);


        if (!empty($id)&& is_int(intval($id))){

            $where []     = ' workp_id LIKE :id ';

        }

        if (!empty($name)){

               $where []   = ' workp_name LIKE :name ';

        }

        if (!empty($owner)){

               $where []   = ' cust_id LIKE :owner ';
               $join  []   = ' natural join customers ';

        }

        
        if (count($where) == 0){
            
            return array();
            
        }   

        if(count($join) > 0){

            $request .= implode(" ", $join);

        }

        $request .= ' WHERE '.implode('AND',$where);
        
        $query = DB::query(Database::SELECT, $request);

               $query->parameters(array(
                ':id'   => "%".$parameters['id']."%",
                ':name' => "%".$parameters['name']."%",
                ':owner' => "%".$parameters['owner']."%",

             ));
        
        
         $results =  $query->execute()->as_array();
        
        return $results;

     }

     public function get_max (){

     }
	
}
/** EOF **