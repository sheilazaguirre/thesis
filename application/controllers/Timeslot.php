<?php

 
class Timeslot extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Timeslot_model');
        $this->load->model('Auditlog_model');

        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('userTypeID') == 1)
        {
            $data['fn'] = $this->session->userdata('userFN');
            $data['ln'] = $this->session->userdata('userLN');
        }
        else
        {
            redirect('landing_page/index');
        }
    } 

    /*
     * Listing of timeslots
     */
    function index()
    {
        $data['timeslots'] = $this->Timeslot_model->get_all_timeslots();
        
        $data['_view'] = 'timeslot/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new timeslot
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('dayOfWeek','DayOfWeek','required|max_length[10]');
		$this->form_validation->set_rules('startTime','StartTime','required|max_length[50]');
		$this->form_validation->set_rules('endTime','EndTime','required|max_length[50]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'dayOfWeek' => $this->input->post('dayOfWeek'),
				'startTime' => $this->input->post('startTime'),
				'endTime' => $this->input->post('endTime'),
            );
            $this->db->set('status', 'Active');
            $timeslot_id = $this->Timeslot_model->add_timeslot($params);
            $idnum = $this->session->userdata('userIDNo');
                        $paramsaudit = array(
                            'userIDNo' => $idnum,
                            'auditDesc' => 'Successfully added a new timeslot',
                        );
            redirect('timeslot/index');
        }
        else
        {            
            $data['_view'] = 'timeslot/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a timeslot
     */
    function edit($timeSlotID)
    {   
        // check if the timeslot exists before trying to edit it
        $data['timeslot'] = $this->Timeslot_model->get_timeslot($timeSlotID);
        
        if(isset($data['timeslot']['timeSlotID']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('dayOfWeek','DayOfWeek','required|max_length[10]');
			$this->form_validation->set_rules('startTime','StartTime','required|max_length[50]');
			$this->form_validation->set_rules('endTime','EndTime','required|max_length[50]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'dayOfWeek' => $this->input->post('dayOfWeek'),
					'startTime' => $this->input->post('startTime'),
					'endTime' => $this->input->post('endTime'),
                );

                $this->Timeslot_model->update_timeslot($timeSlotID,$params);  
                $idnum = $this->session->userdata('userIDNo');
                        $paramsaudit = array(
                            'userIDNo' => $idnum,
                            'auditDesc' => 'Successfully edited a timeslot',
                        );          
                redirect('timeslot/index');
            }
            else
            {
                $data['_view'] = 'timeslot/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The timeslot you are trying to edit does not exist.');
    } 

    /*
     * Deleting timeslot
     */
    function remove($timeSlotID)
    {
        $timeslot = $this->Timeslot_model->get_timeslot($timeSlotID);

        // check if the timeslot exists before trying to delete it
        if(isset($timeslot['timeSlotID']))
        {
            $this->db->set('status', 'Archived');
            $this->Timeslot_model->delete_timeslot($timeSlotID);
            $idnum = $this->session->userdata('userIDNo');
                        $paramsaudit = array(
                            'userIDNo' => $idnum,
                            'auditDesc' => 'Successfully removed timeslot',
                        );
            redirect('timeslot/index');
        }
        else
            show_error('The timeslot you are trying to delete does not exist.');
    }
    
}
