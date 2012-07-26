<?php
class Model_Workorders extends ORM
{
	protected $_table_name = 'workorders';
	protected $_primary_key = 'work_id';

    
    public function get_workorder ($id)
    {
       $query = DB::query(Database::SELECT, 
             'SELECT * FROM workorders 
              WHERE work_id = :workorder');
 
        $query->parameters(array(
            ':workorder' => intval($id),
        ));
        
        return $results = $query->execute()->as_array();
    }  

    public function get_equipments ($id){

      $query = DB::query(Database::SELECT, 
             'SELECT work_equ_quantity, equipments.* FROM workorders
              natural join work_have_equ
              natural join equipments 
              WHERE work_id = :workorder');
 
        $query->parameters(array(
            ':workorder' => intval($id),
        ));

        
        return $query->execute()->as_array();

    } 

    public function get_parts ($id){

        $query = DB::query(Database::SELECT, 
             'SELECT work_part_quantity, parts.* FROM workorders
              natural join work_have_parts
              natural join parts 
              WHERE work_id = :workorder');
 
        $query->parameters(array(
            ':workorder' => intval($id),
        ));

        
        return $query->execute()->as_array();
    } 

    public function get_tasks ($id){

         $query = DB::query(Database::SELECT, 
             'SELECT  tasks.* FROM workorders
              natural join tasks 
              WHERE work_id = :workorder');
 
        $query->parameters(array(
            ':workorder' => intval($id),
        ));

        
        return $query->execute()->as_array();

    }

    public function search ($parameters){

        $request =  'SELECT work_id,work_begin_date,work_end_date,work_status FROM workorders 
                     NATURAL JOIN workorder_types ';

        $join    =  array();
        $where   =  array();

   
        $id             = trim ($parameters['id']);
        $begin_date     = trim($parameters['beginDate']);
        $end_date       = trim($parameters['endDate']);
        $type           = trim($parameters['type']);

        if (!empty($id)&& is_int(intval($id))){

            $where []     = " work_id LIKE :id ";

        }

        if (!empty($begin_date)){

               $where []   = " work_begin_date = :begin_date ";

        }

        if (!empty($end_date)){

                  $where []   = " work_end_date = :end_date ";

        }

        if (!empty($type) && is_int(intval($type))){

                  $where []   = " workorder_types.work_type_id = :type ";

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
                ':begin_date' => $begin_date,
                ':end_date' => $end_date,
                ':type' =>  $type,
             ));
        
        $results =  $query->execute()->as_array();

        
        return $results;

     }
}