<?php

 
class Reg extends CI_Controller{
    function __construct()
    {
        parent::__construct();
    } 

    /*
     * Listing of auditlogs
     */
    function dashboard()
    {
        $this->load->view('layouts/reg');
    }

    
    
}
