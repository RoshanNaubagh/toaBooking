<?php 
class Booking_model extends CI_Model{
    
    public function applyBooking($custID,$classID){
        $data = array(
            'CustID' => $custID,
            'Class_ID'=>$classID,
        );

        $this->db->set('BookingDate','NOW()',FALSE);
        $this->db->insert('booking',$data);

    }
}
?>