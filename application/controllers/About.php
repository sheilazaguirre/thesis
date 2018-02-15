<?php

class about-us extends CI_Controller{
    function __construct()
    {
        parent::__construct();        
        $this->load->model('User_model'); 
        $this->load->helper('url');
             
    }
    
    function index()
    {

        $data['_view'] = 'about-us/index';
        $this->load->view('about-us', $data);

        }

}
