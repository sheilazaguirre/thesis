<?php
if(!defined('BASEPATH')) exit('Hacking Attempt : Get Out of the system ..!');
 
class Student_Page extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
    } 

    /*
     * Listing of prof
     */
    public function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('student_page/index?');
        $this->pagination->initialize($config);

        if($this->session->userdata('isLogin') == TRUE)
        {
            redirect('landing_page/index');
        }
        else
        {
            $this->load->view('student_page/index');
        }

    }

    function schedule()
    {
        $this->load->view('student_page/schedule');
    }

    function grades()
    {
        $this->load->view('student_page/grades');
    }

    function lessons()
    {
        $this->load->view('student_page/lessons');
    }

    function assignments()
    {
        $this->load->view('student_page/assignments');
    }


    
}
