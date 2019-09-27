<?php
class Booking extends CI_Controller{

    function booknow(){
        $this->load->model('Classes');
        
        $result['data']=$this->Classes->get_classes();
        $this->load->view('template/header') ; 
       $this->load->view('Booking',$result);
        $this->load->view('template/footer');

    }

    public function bookingClassByUser(){
        $userID = $_POST['CustID'];
        $classID = $_POST['ClassID'];

        
        $this->load->model('Booking_model');
        $this->Booking_model->applyBooking($userID,$classID);
    }
}