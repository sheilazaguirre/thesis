<?php

 
class Reg_Auditlog extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Auditlog_model');
    } 

    /*
     * Listing of auditlogs
     */
    function index()
    {
        $data['auditlogs'] = $this->Auditlog_model->get_all_auditlogs();
        
        $data['_view'] = 'registrar_page/auditlog/index';
        $this->load->view('layouts/reg',$data);
    }

    /*
     * Adding a new auditlog
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('userID','UserID','required|integer');
		$this->form_validation->set_rules('auditDesc','AuditDesc','required|max_length[50]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'userID' => $this->input->post('userID'),
				'auditDesc' => $this->input->post('auditDesc'),
            );
            $this->db->set('timestamp', 'NOW()', FALSE);
            $this->db->set('status', 'Active');
            $auditlog_id = $this->Auditlog_model->add_auditlog($params);
            redirect('reg_auditlog/index');
        }
        else
        {
			$this->load->model('User_model');
			$data['all_users'] = $this->User_model->get_all_users();
            
            $data['_view'] = 'registrar_page/auditlog/add';
            $this->load->view('layouts/reg',$data);
        }
    }  

    /*
     * Editing a auditlog
     */
    function edit($auditID)
    {   
        // check if the auditlog exists before trying to edit it
        $data['auditlog'] = $this->Auditlog_model->get_auditlog($auditID);
        
        if(isset($data['auditlog']['auditID']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('userID','UserID','required|integer');
			$this->form_validation->set_rules('auditDesc','AuditDesc','required|max_length[50]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'userID' => $this->input->post('userID'),
					'auditDesc' => $this->input->post('auditDesc'),
                );

                $this->Auditlog_model->update_auditlog($auditID,$params);            
                redirect('reg_auditlog/index');
            }
            else
            {
				$this->load->model('User_model');
				$data['all_users'] = $this->User_model->get_all_users();

                $data['_view'] = 'registrar_page/auditlog/edit';
                $this->load->view('layouts/reg',$data);
            }
        }
        else
            show_error('The auditlog you are trying to edit does not exist.');
    } 

    /*
     * Deleting auditlog
     */
    function remove($auditID)
    {
        $auditlog = $this->Auditlog_model->get_auditlog($auditID);

        // check if the auditlog exists before trying to delete it
        if(isset($auditlog['auditID']))
        {
            $this->db->set('status', 'Archive');
            $this->Auditlog_model->delete_auditlog($auditID);
            redirect('reg_auditlog/index');
        }
        else
            show_error('The auditlog you are trying to delete does not exist.');
    }
    
}
