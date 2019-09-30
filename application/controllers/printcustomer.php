<?php 
Class Printcustomer extends CI_Controller{

    function index()
    {
              $this->load->model('modelListofCustomer');
             $data['listofbooking'] = $this->modelListofCustomer->getlistofcustomer();
             $this->load->view('showallcustomer', $data);
             }
}