<?php 
class  modelListofCustomer extends CI_Model
{
   public function getlistofcustomer()
{
   $result = $this->db->query("Select * from Booking;");
return  $result;
}

}