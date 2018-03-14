<?php

 
class Reg_Subject extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Subject_model');
    } 

    /*
     * Listing of subjects
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('subject/index?');
        $config['total_rows'] = $this->Subject_model->get_all_subjects_count();
        $this->pagination->initialize($config);

        $data['subjects'] = $this->Subject_model->get_all_subjects($params);
        
        $data['_view'] = 'subject/index';
        $this->load->view('layouts/reg',$data);
    }

    /*
     * Adding a new subject
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('subjectType','Subject Type','required|max_length[50]');
		$this->form_validation->set_rules('subjectCode','Subject Code','required|max_length[15]');
		$this->form_validation->set_rules('subjectName','Subject Name','required|max_length[100]');
		$this->form_validation->set_rules('units','Units','required|integer');
		
		if($this->form_validation->run())     
        {   
            $params = array(
                'subjectType' => $this->input->post('subjectType'),
                'courseID' => $this->input->post('courseID'),
				'subjectCode' => $this->input->post('subjectCode'),
				'subjectName' => $this->input->post('subjectName'),
                'units' => $this->input->post('units'),
                'status' => 'Active',
            );
            $subject_id = $this->Subject_model->add_subject($params);
            redirect('subject/index');
        }
        else
        {   
            $this->load->model('Course_model');
            $data['all_courses'] = $this->Course_model->get_all_courses();
                     
            $data['_view'] = 'subject/add';
            $this->load->view('layouts/reg',$data);
        }
    }  

    /*
     * Editing a subject
     */
    function edit($subjectID)
    {   
        // check if the subject exists before trying to edit it
        $data['subject'] = $this->Subject_model->get_subject($subjectID);
        
        if(isset($data['subject']['subjectID']))
        {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('subjectType','SubjectType','required|max_length[50]');
            $this->form_validation->set_rules('subjectCode','SubjectCode','required|max_length[15]');
			$this->form_validation->set_rules('subjectName','SubjectName','required|max_length[100]');
			$this->form_validation->set_rules('units','Units','required|integer');
		
			if($this->form_validation->run())     
            {   
                $params = array(
                    'subjectType' => $this->input->post('subjectType'),
                    'courseID' => $this->input->post('courseID'),
					'subjectCode' => $this->input->post('subjectCode'),
					'subjectName' => $this->input->post('subjectName'),
					'units' => $this->input->post('units'),
                );

                $this->Subject_model->update_subject($subjectID,$params);            
                redirect('subject/index');
            }
            else
            {
                $this->load->model('Course_model');
                $data['all_courses'] = $this->Course_model->get_all_courses();

                $data['_view'] = 'subject/edit';
                $this->load->view('layouts/reg',$data);
            }
        }
        else
            show_error('The subject you are trying to edit does not exist.');
    } 

    /*
     * Deleting subject
     */
    function remove($subjectID)
    {
        $subject = $this->Subject_model->get_subject($subjectID);

        // check if the subject exists before trying to delete it
        if(isset($subject['subjectID']))
        {
            $this->db->set('status', 'Archived');
            $this->Subject_model->delete_subject($subjectID);
            redirect('subject/index');
        }
        else
            show_error('The subject you are trying to delete does not exist.');
    }
    
}
