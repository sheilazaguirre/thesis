<?php

 
class Landing_Page extends CI_Controller{
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
        $config['base_url'] = site_url('landing_page/index?');
        $this->pagination->initialize($config);



        $this->load->view('landing_page/index');
    }

    function about()
    {
        $this->load->view('landing_page/about');
    }

    function contact()
    {
        $this->load->view('landing_page/contact');
    }

    function admission()
    {
        $this->load->view('landing_page/services');
    }

    function error_404()
    {
        $this->load->view('landing_page/page-404');
    }


    
}
