<?php

class Reg_Course extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Course_model');
        $this->load->model('Auditlog_model');

        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('userTypeID') == 4)
        {
            $data['fn'] = $this->session->userdata('userFN');
            $data['ln'] = $this->session->userdata('userLN');
            $data['userID'] = $this->session->userdata('userIDNo');
            
        }
        else
        {
            redirect('landing_page/index');
        }
    } 

    /*
     * Listing of courses
     */
    function index()
    {
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('userTypeID') == 4)
        {
            $data['fn'] = $this->session->userdata('userFN');
            $data['ln'] = $this->session->userdata('userLN');
            $data['userID'] = $this->session->userdata('userIDNo');

            $params['limit'] = RECORDS_PER_PAGE; 
            $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
            
            $config = $this->config->item('pagination');
            $config['base_url'] = site_url('reg_course/index?');
            $config['total_rows'] = $this->Course_model->get_all_courses_count();
            $this->pagination->initialize($config);

            $data['courses'] = $this->Course_model->get_all_courses($params);
            
            $data['_view'] = 'registrar_page/course/index';
            $this->load->view('layouts/reg',$data);
        }
        else
        {
            redirect('landing_page/index');
        }
    }

    /*
     * Adding a new course
     */
    function add()
    {   
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('userTypeID') == 4)
        {
        $this->load->library('form_validation');

		$this->form_validation->set_rules('courseCode','CourseCode','required|max_length[10]');
		$this->form_validation->set_rules('courseName','CourseName','required|max_length[70]');
		$this->form_validation->set_rules('remarks','Remarks','required|max_length[200]');
        $this->form_validation->set_rules('dateModified','DateModified');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'courseCode' => $this->input->post('courseCode'),
				'courseName' => $this->input->post('courseName'),
				'remarks' => $this->input->post('remarks'),
                'dateModified' => null,
                'status' => 'Active',
            );
            $this->db->set('dateAdded', 'NOW()', FALSE);
            $course_id = $this->Course_model->add_course($params);
            $idnum = $this->session->userdata('userIDNo');
                    $paramsaudit = array(
                        'userIDNo' => $idnum,
                        'auditDesc' => 'Added Course',
                    );
                    $this->Auditlog_model->add_auditlog($paramsaudit);
            redirect('reg_course/index');
        }
        else
        {            
            $data['_view'] = 'registrar_page/course/add';
            $this->load->view('layouts/reg',$data);
        }
        }
        else
        {
            redirect('landing_page/index');
        }
    }  

    /*
     * Editing a course
     */
    function edit($courseID)
    {   
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('userTypeID') == 4)
        {
        // check if the course exists before trying to edit it
        $data['course'] = $this->Course_model->get_course($courseID);
        
        if(isset($data['course']['courseID']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('courseCode','CourseCode','required|max_length[10]');
			$this->form_validation->set_rules('courseName','CourseName','required|max_length[70]');
			$this->form_validation->set_rules('remarks','Remarks','required|max_length[200]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'courseCode' => $this->input->post('courseCode'),
					'courseName' => $this->input->post('courseName'),
					'remarks' => $this->input->post('remarks'),
                );
                $this->db->set('dateModified', 'NOW()', FALSE);
                $this->Course_model->update_course($courseID,$params);            
                $idnum = $this->session->userdata('userIDNo');
                    $paramsaudit = array(
                        'userIDNo' => $idnum,
                        'auditDesc' => 'Edited Course',
                    );
                    $this->Auditlog_model->add_auditlog($paramsaudit);
                redirect('reg_course/index');
            }
            else
            {
                $data['_view'] = 'registrar_page/course/edit';
                $this->load->view('layouts/reg',$data);
            }
        
        }
        else
            show_error('The course you are trying to edit does not exist.');
        }
        else
        {
            redirect('landing_page/index');
        }
    } 

    /*
     * Deleting course
     */
    function remove($courseID)
    {
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('userTypeID') == 4)
        {
        $course = $this->Course_model->get_course($courseID);

        // check if the course exists before trying to delete it
        if(isset($course['courseID']))
        {
            $this->db->set('status', 'Archived');
            $this->Course_model->archive_course($courseID, $params);
            $idnum = $this->session->userdata('userIDNo');
                        $paramsaudit = array(
                            'userIDNo' => $idnum,
                            'auditDesc' => 'Deleted Course',
                        );
                        $this->Auditlog_model->add_auditlog($paramsaudit);
            redirect('reg_course/index');
        }
        else
            show_error('The course you are trying to delete does not exist.');
        }
        else
        {
            redirect('landing_page/index');
        }
    }
    
}
