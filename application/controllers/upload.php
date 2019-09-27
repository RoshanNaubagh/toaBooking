<?php
Class Upload extends CI_Controller{

    public function infoupload(){
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('Class_Name','Class_Name','required|trim|alpha');
        $this->form_validation->set_rules('Coach','Coach','required|trim|alpha');
        $this->form_validation->set_rules('Class_Date','Class_Date','required|Date');

        if($this->form_validation->run()){
        $data = array(
            'Class_Date'=>$this->input->post('Class_Date'),
         'Class_Name'=>$this->input->post('Class_Name'),
         'Coach'=>$this->input->post('Coach'));
         $this->load->model('modelupload');
         $this->modelupload-> insert_data($data);
        
         $this->load->view('successupload');
        
        }
        else{
            $this->load->view('uploadclass');
        }
       
    }
    
}