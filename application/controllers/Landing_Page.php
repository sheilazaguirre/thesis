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

    function admin()
    {
        $this->load->view('landing_page/admin');
    }

    function faculty()
    {
        $this->load->view('landing_page/faculty');
    }

    function registrar()
    {
        $this->load->view('landing_page/registrar');
    }


    function error_404()
    {
        $this->load->view('landing_page/page-404');
    }

    function comsci()
    {
        $this->load->view('landing_page/Com Sci.html');
    }

    function bisad()
    {
        $this->load->view('landing_page/BS Business Admin.html');
    }

    function elemed()
    {
        $this->load->view('landing_page/Elementary Education.html');
    }

    function seced()
    {
        $this->load->view('landing_page/sec-ed');
    }

    function seced_filipino()
    {
        $this->load->view('landing_page/BA Secondary Ed - Filipino.html');
    }

    function seced_math()
    {
        $this->load->view('landing_page/BA Secondary Ed - Math.html');
    }

    function seced_science()
    {
        $this->load->view('landing_page/BA Secondary Ed - Science.html');
    }

}
