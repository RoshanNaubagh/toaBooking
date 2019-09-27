<?php
class Modelupload extends CI_Model
{
 function insert_data($data)
 {
    
    
    $this->db->insert('classes',$data);
 }

 
 }


?>