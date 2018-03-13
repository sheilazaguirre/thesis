<?php

class My404 extends CI_Controller{
    function __construct()
    {
        parent::__construct();        
        $this->load->helper('url');
             
    }
    
    function index()
    {

        $this->load->view('landing_page/page-404');

        }

}
