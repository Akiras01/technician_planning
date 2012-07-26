<?php
class Model_Customers extends ORM
{
	protected $_table_name = 'customers';
	protected $_primary_key = 'cust_id';

	protected $_has_one = array(
    'vat_code' => array(
        'model'       => 'vat_code',
        'foreign_key' => 'vat_id',
    ),
    'activity_type' => array(
        'model'       => 'activity_type',
        'foreign_key' => 'act_typ_id',
    ),
	);

    protected $_has_many = array(
    'contact' => array(
        'model'       => 'contact',
        'foreign_key' => 'con_id',
    ),
    'adress' => array(
        'model'       => 'adress',
        'foreign_key' => 'adr_id',
        'through'     => 'cust_have_adress',
    ),
    ); 
    
    
    public function get_general_data ($id)
    {
       $query = DB::query(Database::SELECT, 
             'SELECT customers.* FROM customers 
                 natural join activity_type 
                 natural join vat_code
              WHERE cust_id = :user');
 
        $query->parameters(array(
            ':user' => $id,
        ));
        
        $results = $query->execute();

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
                     country.count_id,country.count_name
                 FROM customers 
                 natural join cust_have_adress 
                 natural join adress
                 natural join towns
                 natural join town_ships
                 natural join provinces
                 natural join country
              WHERE cust_id = :user');

        $query->parameters(array(
            ':user' => $id,
        ));

         $results =  $query->execute()->as_array();  

        if (count($results) == 0 ){


            return  array(
                        array('adr_id' => 25,'adr_street_number' => ' ',
                              'adr_street_name' => ' ','town_id' => '',
                              'prov_id' => '',
                              'town_ship_id' => ' ',
                              'town_ship_postcode' => ' ','count_id' => ' ')
                    );
        }

       return $results;  
    }
    
    public function get_contacts_for_customer($id){
             
        $query = DB::query(Database::SELECT, 
             'SELECT con_id,con_name,con_surname,con_mail,con_phone, con_fax 
                     FROM customers natural join contact 
              WHERE cust_id = :user');

           $query->parameters(array(
                ':user' => $id,
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

    public function get_names(){


        $query = DB::query(Database::SELECT, 
             'SELECT cust_id as id, concat(cust_name," ",cust_surname) as name
                     FROM customers ');

        $results =  $query->execute()->as_array();

        return $results;


    }
    
     public function get_vat_code($id){

        $query = DB::query(Database::SELECT, 
             'SELECT vat_id,vat_name FROM customers natural join vat_code 
              WHERE cust_id = :user');

               $query->parameters(array(
                ':user' => $id,
             ));

        return $query->execute();        

    }



    public function get_activity ($id)
     {
          $query = DB::query(Database::SELECT, 
             'SELECT activity_type.* FROM customers natural join activity_type 
              WHERE cust_id = :user');

               $query->parameters(array(
                ':user' => $id,
             ));

            return $query->execute();

     }

     public function update_customers($parameters){

         $query     = 'update customers set ';
         $not_valid = false;
         $erros = '';
         
         if (!empty($parameters['name'])){
         
            $query  .= 'cust_name = :cust_name,';
             
         }else {
             
             $not_valid = true;
             
             
         }    
         
         if (!empty($parameters['surname'])){
            
            $query  .= 'cust_surname = :cust_surname,';
             
         }else {
             
              $not_valid = true;
             
         }   
         
         if (!empty($parameters['tel'])){
             
            $query  .= 'cust_tel = :cust_tel,';
         }   
         
         
         if (!empty($parameters['mail'])){
  
                $query  .= 'cust_mail = :cust_mail,';
         }  
         
         if (!empty($parameters['gsm'])){
             

                $query  .= 'cust_gsm = :cust_gsm,';
                 
         } 
         
         if (!empty($parameters['fax'])){
 
                $query  .= 'cust_fax = :cust_fax,';
         } 
         
         if (!empty($parameters['activity'])){


                   $query  .= 'act_typ_id = :act_typ_id,'; 
             
         } 

          if (!empty($parameters['liable'])){
             
             if (intval($parameters['liable'])){

                $query  .= 'cust_is_liable = :cust_is_liable,';
                 
             }      
         } 

          if (!empty($parameters['active'])){
             
             if (intval($parameters['active'])){
             
                 $query  .= 'cust_active = :cust_active,';
             
             }       
         } 

         if (!empty($parameters['vatCode'])){

                 $query  .= 'vat_id = :vat_id,';
                             
         }    

         if (!empty($parameters['vatNumber'])){

                $query  .= 'cust_vat_number = :cust_vat_number,';

         }

         if (!empty($parameters['badBuyer'])){
             
             if (intval($parameters['badBuyer'])){

                $query  .= 'cust_bad = :cust_bad,';
             
                 
             }else{
                 
                 $not_valid = true;
             }        
         }  


         if (!empty($parameters['domiciliation'])){

            $query  .= 'cust_domiciliation_number = :cust_domiciliation_number,';
                  
         }   


         if (!empty($parameters['accountNumber'])){
             
            $query  .= 'cust_account_number = :cust_account_number,';
                  
         } 

         if (!empty($parameters['reprieve'])){
             
             if (is_int($parameters['reprieve'])){

                $query  .= 'cust_reprieve = :cust_reprieve,';
                   
             }else{
                 
                $not_valid = true;
             }        
         }


         if (!empty($parameters['discount'])){
             
             if (is_float($parameters['discount'])){

                $query  .= 'cust_discount = :cust_discount,';
                      
             }else{
                 
                $not_valid = true;
                 
             }        
         }    

         if (!empty($parameters['discountReason'])){

                $query  .= 'cust_discount_reason = :cust_discount_reason,';
             
         }  

         if (!empty($parameters['remarks'])){
             
               $query  .= 'cust_remarks = :cust_remarks,';
         } 

 


      //   if (!($not_valid)) {

            $query = substr($query,0, strlen($query) - 1).' WHERE cust_id=:cust_id';

            $query = DB::query(Database::UPDATE, $query);  

              $query->parameters(array(
                ':cust_id'                   => $parameters['id'],
                ':cust_name'                 => $parameters['name'],
                ':cust_surname'              => $parameters['surname'],
                ':cust_tel'                  => $parameters['tel'],
                ':cust_gsm'                  => $parameters['gsm'],
                ':cust_fax'                  => $parameters['fax'],
                ':cust_mail'                 => $parameters['mail'],
                ':cust_is_liable'            => intval($parameters['liable']),
                ':cust_vat_number'           => $parameters['vatNumber'],
                ':cust_active'               => intval($parameters['active']),
                ':cust_bad'                  => intval($parameters['badBuyer']),
                ':cust_account_number'       => $parameters['accountNumber'],
                ':cust_domiciliation_number' => $parameters['domiciliation'],
                ':cust_discount'             => floatval($parameters['discount']),
                ':cust_discount_reason'      => $parameters['discountReason'],
                ':cust_reprieve'             => intval($parameters['reprieve']),
                ':cust_remarks'              => $parameters['remarks'],
                ':vat_id'                    => intval($parameters['vatCode']),
                ':act_typ_id'                => intval($parameters['activity'])
             ));

            $query->execute();
            return $parameters['id'];


        // }     


     }


     
     public function create_customers ($parameters){


         if (empty($parameters['id'])){

            $query     = 'INSERT INTO customers (';

            $values    = ' VALUES (';
            $not_valid = false;
            $erros = '';
         
         if (!empty($parameters['name'])){
         
            $query  .= 'cust_name,';
            $values .= ':cust_name,';
             
         }else {
             
             $not_valid = true;
             
             
         }    
         
         if (!empty($parameters['surname'])){
            
            $query  .= 'cust_surname,';
            $values .= ':cust_surname,';
             
         }else {
             
              $not_valid = true;
             
         }   
         
         if (!empty($parameters['tel'])){
             
             if (preg_match('/^[0-9\/]{10,}$/',$parameters['tel'])){

                 $query  .= 'cust_tel,';
                 $values .= ':cust_tel,';
                 
                 
             }else{

                $not_valid = true;
                 
             }
         }   
         
         
         if (!empty($parameters['mail'])){
             
             if (preg_match('/^[0-9a-zA-Z\.\-]{3,}[@]{1}[a-zA-Z]{3,5}[\.][a-zA-Z]{2,5}$/',$parameters['mail'])){
                 
                $query .= 'cust_mail,';
                $values .= ':cust_mail,';
                 
             }else{

                 $not_valid = true;
                 
             }
         }  
         
         if (!empty($parameters['gsm'])){
             
             if (preg_match('/^[0-9\/]{10,}$/',$parameters['gsm'])){
                 
                $query  .= 'cust_gsm,';
                $values .= ':cust_gsm,';
                 
             }else{

                 $not_valid = true;
                 
             }
         } 
         
         if (!empty($parameters['fax'])){
             
             if (preg_match('/^[0-9\/]{10,}$/',$parameters['fax'])){
                 
                $query  .= 'cust_fax,';
                $values .= ':cust_fax,';
                 
             }else{

                 $not_valid = true;
                 
             }
         } 
         
         if (!empty($parameters['activity'])){
 
             
            $query  .= 'act_typ_id,';
            $values .= ':act_typ_id,';
             
        }

          if (!empty($parameters['liable'])){
             
             if (is_int($parameters['liable'])){

                $query  .= 'cust_is_liable,';
                $values .= ':cust_is_liable,';
                 
             }      
         } 

          if (!empty($parameters['active'])){
             
             if (is_int($parameters['active'])){
             
                $query  .= 'cust_active,';
                $values .= ':cust_active,';
             
             }       
         } 

         if (!empty($parameters['vatCode'])){

                $query  .= 'vat_id,';
                $values .= ':vat_id,';
                      
         }    

         if (!empty($parameters['vatNumber'])){

                $query  .= 'cust_vat_number,';
                $values .= ':cust_vat_number,';

         }

         if (!empty($parameters['badBuyer'])){
             
             if (is_int($parameters['badBuyer'])){

                $query  .= 'cust_bad,';
                $values .= ':cust_bad,';
             
                 
             }else{
                 
                 $not_valid = true;
             }        
         }  


         if (!empty($parameters['domiciliation'])){

            $query  .= 'cust_domiciliation_number,';
            $values .= ':cust_domiciliation_number,';
                  
         }   


         if (!empty($parameters['accountNumber'])){

            $query  .= 'cust_account_number,';
            $values .= ':cust_account_number,';
             
                  
         } 

         if (!empty($parameters['reprieve'])){
             
             if (is_int($parameters['reprieve'])){

                $query  .= 'cust_reprieve,';
                $values .= ':cust_reprieve,';
                   
             }else{
                 
                $not_valid = true;
             }        
         }


         if (!empty($parameters['discount'])){
             
             if (is_float($parameters['discount'])){

                $query  .= 'cust_discount,';
                $values .= ':cust_discount,';
                      
             }else{
                 
                $not_valid = true;
                 
             }        
         }    

         if (!empty($parameters['discountReason'])){

                $query  .= 'cust_discount_reason,';
                $values .= ':cust_discount_reason,';
             
         }  

         if (!empty($parameters['remarks'])){
             
                $query  .= 'cust_remarks,';
                $values  .= ':cust_remarks,';
         } 

     //    if ($not_valid == true) {

              $query = substr($query,0,strlen($query) - 1).' ) ';
              $values = substr($values,0,strlen($values) - 1).' ) ';
              

              $query = DB::query(Database::INSERT, $query.$values); 

              $query->parameters(array(
                ':cust_name'                 => $parameters['name'],
                ':cust_surname'              => $parameters['surname'],
                ':cust_tel'                  => $parameters['tel'],
                ':cust_gsm'                  => $parameters['gsm'],
                ':cust_fax'                  => $parameters['fax'],
                ':cust_mail'                 => $parameters['mail'],
                ':cust_is_liable'            => intval($parameters['liable']),
                ':cust_vat_number'           => $parameters['vatNumber'],
                ':cust_active'               => intval($parameters['active']),
                ':cust_bad'                  => intval($parameters['badBuyer']),
                ':cust_account_number'       => $parameters['accountNumber'],
                ':cust_domiciliation_number' => $parameters['domiciliation'],
                ':cust_discount'             => floatval($parameters['discount']),
                ':cust_discount_reason'      => $parameters['discountReason'],
                ':cust_reprieve'             => intval($parameters['reprieve']),
                ':cust_remarks'              => $parameters['remarks'],
                ':vat_id'                    => intval($parameters['vatCode']),
                ':act_typ_id'                => intval($parameters['activity'])
             ));

             $query->execute(); 
             
             $query   = DB::query(Database::SELECT, 'SELECT MAX(cust_id) as id from customers'); 
             $results = $query->execute();
             return $results[0]['id'];

         //}     
         
         }else {

            return $this->update_customers($parameters);
           
         }


         
     }

     public function search($parameters){
         
         
        $request =  'SELECT cust_id,cust_name,cust_surname FROM customers ';
        $join    =  array();
        $where   =  array();

        $id       = trim ($parameters['id']);
        $name     = trim($_POST['name']);
        $surname  = trim($_POST['surname']);
        $activity = trim($_POST['activity']);

        if (!empty($id)&& is_int(intval($id))){

            $where []     = " cust_id LIKE :id ";

        }

        if (!empty($name)){

               $where []   = " cust_name LIKE :name ";

        }

        if (!empty($surname)){

                  $where []   = " cust_surname LIKE :surname ";

        }

        if (!empty($activity) && is_int(intval($activity))){

                  $join  []   = " NATURAL JOIN activity_type "  ;
                  $where []   = " customers.act_typ_id = :activity ";

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
                ':id' => "%".$id."%",
                ':name' => "%".$name."%",
                ':surname' => "%".$surname."%",
                ':activity' =>  $activity,
             ));
        
        $results =  $query->execute()->as_array();

        
        return $results;

     }
	
}
/** EOF **