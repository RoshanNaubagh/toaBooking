<?php 
class Classes extends CI_Model{
    function get_classes(){
        $query = $this->db->get('classes');
        return $query->result_array();
    }
    function get_class_ID($className,$classDate,$Coach){
        $classes=$this->db->where(['Class_Name'=>$className,'Class_Date'=>$classDate,'Coach'=>$Coach])
                           ->get('classes');
                           if($classes->num_rows()){
                              return  $classes->row()->Class_ID;
                           }
}}
?>