<?php

 
class Reports extends CI_Controller{
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
        $config['base_url'] = site_url('reports/index?');
        $this->pagination->initialize($config);



        $this->load->view('reports/index');
    }

    function applicant()
    {
        $this->load->view('reports/applicantlistreport');
    }

    function classlist()
    {
        $this->load->view('reports/classlistreport');
    }

    function faculty()
    {
        $this->load->view('reports/facultylistreport');
    }

    function grades()
    {
        $this->load->view('reports/gradelistreport');
    }

    function section()
    {
        $this->load->view('reports/sectionlistreport');
    }

    function studentgrade()
    {
        $this->load->view('reports/studentgradereport');
    }

    function studentlist()
    {
        $this->load->view('reports/studentlistreport');
    }

    function userlist()
    {
        $this->load->view('reports/userlistreport');
    }


    function comsci()
    {
        $this->load->view('reports/classreport');
    }

    function bisad()
    {
        $this->load->view('reports/BS Business Admin.html');
    }

    function elemed()
    {
        $this->load->view('reports/Elementary Education.html');
    }

    function seced()
    {
        $this->load->view('reports/sec-ed');
    }

    function seced_filipino()
    {
        $this->load->view('reports/BA Secondary Ed - Filipino.html');
    }

    function seced_math()
    {
        $this->load->view('reports/BA Secondary Ed - Math.html');
    }

    function seced_science()
    {
        $this->load->view('reports/BA Secondary Ed - Science.html');
    }

}
