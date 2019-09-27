<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
public function index()
 {
    $this->load->view('template/header') ; 
    $this->load->view('Home');
    $this->load->view('template/footer') ;
 }
  
 public function loginPage(){
   $this->load->view('template/Header');
    $this->load->view('login');
    $this->load->view('template/footer');
 }
 
   function validation()
   {
      $this->load->library('form_validation');
      $this->form_validation->set_rules('user_email','User Email','required|trim');
      $this->form_validation->set_rules('user_password','Password','required|trim');
      if($this->form_validation->run()){
         
         $email=$this->input->post('user_email');
          $password=$this->input->post('user_password');
     $this->load->model('Login_model');
      $login_id = $this->Login_model->validate_login($email,$password);
if($login_id){
   $this->load->library('session');

   $this->session->set_userdata('custID',$login_id);
   return  redirect ('index.php/Booking/booknow');
   
}
else{
   

   $this->load->view('login');



          
          }
          }
          else
          {            
              $this->load->view('login');
          }



 


         }}