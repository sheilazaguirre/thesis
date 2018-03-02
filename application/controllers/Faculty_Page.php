<?php

 
class Faculty_Page extends CI_Controller{
    function __construct()
    {
        parent::__construct();
    } 

    /*
     * Listing of prof
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('faculty_page/index?');
        $this->pagination->initialize($config);



        $this->load->view('faculty_page/index');
    }

    function schedule()
    {
        $this->load->view('faculty_page/schedule');
    }

    function grades()
    {
        $this->load->view('prof/grades');
    }

    function lessons()
    {
        $this->load->view('faculty_page/lessons');
    }

    function assignments()
    {
        $this->load->view('faculty_page/assignments');
    }


    
}
