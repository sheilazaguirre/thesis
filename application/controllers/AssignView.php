<?php

class AssignView extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('AssignView_model');
    } 

    function index()
    {
        $data['assignments'] = $this->AssignView_model->get_all_assignments();
        
        $data['_view'] = 'facultyfront/assignView';
        $this->load->view('layouts/main',$data);
    }

?>