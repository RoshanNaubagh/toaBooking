<?php 
class Login_model extends CI_Model{
    function validate_login($email,$password)
    {
      
      $q= $this->db->where(['Email'=> $email,'Password'=>$password])
                     ->get('customer');
                    // echo "<pre>";
             if($q->num_rows()){
                // print_r($q->result()); exit;
               //  $row =$q->row();
                // return $row->id;
                return $q->row()->CustID;

             }
             else{
                 return FALSE;
             }

    }
    

}