<?php
class Register extends CI_Controller{

    function index()
    {
     $this->load->view('register');
     
    }
   function validation(){
    $this->load->model('Register_model');
       $this->load->library('form_validation');
        $this->form_validation->set_rules('Name','Name','required|trim|alpha');
        $this->form_validation->set_rules('DOB','DOB','required|Date');
        $this->form_validation->set_rules('gender','gender','required');
        $this->form_validation->set_rules('Email','Email','required|trim|is_unique[customer.Email]');
       $this->form_validation->set_rules('Password','Password','required|trim');
        $this->form_validation->set_rules('health_status','health_status','required|trim');
        $this->form_validation->set_rules('phone','phone','required|trim|numeric');
        $this->form_validation->set_rules('emercontact','emercontact','required|trim|numeric');
        $this->form_validation->set_rules('martial_art_experience','martial_art_experience','required|trim');

     //  $isError = false;
     //  $data = array();      
       if($this->form_validation->run()){
        $data = array(
            'Name'=>$this->input->post('Name'),
         'DOB'  => $this->input->post('DOB'),
         'Sex'  => $this->input->post('gender'),
         'Email'  => $this->input->post('Email'),
         'Password' => $this->input->post('Password'),
         'Health_Status'  => $this->input->post('health_status'),
         'Phone'  => $this->input->post('phone'),
         'Emergency_Contact'  => $this->input->post('emercontact'),
         'Martial_art_Experience'  => $this->input->post('martial_art_experience'));
        
        // $this->load->model('Register_model');
        // $this->Register_model->insert_data($data);
        
          // $this->load->view('Booking');
        
          $this->load->model('Register_model');
          $this->Register_model->insert_data($data);
          $this->load->view('Registration_Success');
          
          
       }
       else{
           $this->load->view('register');
           
           
       }

       














//    }
    
   }}