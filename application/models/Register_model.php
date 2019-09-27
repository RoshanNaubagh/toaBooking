<?php
class Register_model extends CI_Model
{
 function insert_data($data)
 {
    
    
    $this->db->insert('customer',$data);
 }

 
 }


?>
