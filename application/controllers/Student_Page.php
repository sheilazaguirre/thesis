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
        $this->load->library('session');
        // $params['limit'] = RECORDS_PER_PAGE; 
        // $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        // $config = $this->config->item('pagination');
        // $config['base_url'] = site_url('student_page/index?');
        // $this->pagination->initialize($config);

        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('userTypeID') == 3)
        {
            $data['fn'] = $this->session->userdata('userFN');
            $data['ln'] = $this->session->userdata('userLN');
            $this->load->view('student_page/index',$data);
        }
        else
        {
            redirect('landing_page/index');
        }

    }

    function schedule()
    {
        // if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('userTypeID') == 3)
        // {
        //     $data['fn'] = $this->session->userdata('userFN');
        //     $data['ln'] = $this->session->userdata('userLN');
        //     $this->load->view('student_page/schedule',$data);
        // }
        // else
        // {
        //     redirect('landing_page/index');
        // }
    }

    function grades()
    {
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('userTypeID') == 3)
        {
            $data['fn'] = $this->session->userdata('userFN');
            $data['ln'] = $this->session->userdata('userLN');
            $this->load->view('student_page/grades',$data);
        }
        else
        {
            redirect('landing_page/index');
        }
    }

    function lessons()
    {  
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('userTypeID') == 3)
        {
            $data['fn'] = $this->session->userdata('userFN');
            $data['ln'] = $this->session->userdata('userLN');
            $this->load->view('student_page/lessons',$data);
        }
        else
        {
            redirect('landing_page/index');
        }
    }

    function assignments()
    {
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('userTypeID') == 3)
        {
            $data['fn'] = $this->session->userdata('userFN');
            $data['ln'] = $this->session->userdata('userLN');
            $this->load->view('student_page/assignments',$data);
        }
        else
        {
            redirect('landing_page/index');
        }
        
    }


    
}
