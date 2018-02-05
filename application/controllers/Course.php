<?php

class Course extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Course_model');
    } 

    /*
     * Listing of courses
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('course/index?');
        $config['total_rows'] = $this->Course_model->get_all_courses_count();
        $this->pagination->initialize($config);

        $data['courses'] = $this->Course_model->get_all_courses($params);
        
        $data['_view'] = 'course/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new course
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('courseCode','CourseCode','required|max_length[10]');
		$this->form_validation->set_rules('courseName','CourseName','required|max_length[70]');
		$this->form_validation->set_rules('remarks','Remarks','required|max_length[200]');
        $this->form_validation->set_rules('dateAdded','DateAdded');
        $this->form_validation->set_rules('dateModified','DateModified');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'courseCode' => $this->input->post('courseCode'),
				'courseName' => $this->input->post('courseName'),
				'remarks' => $this->input->post('remarks'),
				'dateAdded' => date('Y-m-d H:i:s'),
                'dateModified' => null,
                'status' => 'Active',
            );
            
            $course_id = $this->Course_model->add_course($params);
            redirect('course/index');
        }
        else
        {            
            $data['_view'] = 'course/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a course
     */
    function edit($courseID)
    {   
        // check if the course exists before trying to edit it
        $data['course'] = $this->Course_model->get_course($courseID);
        
        if(isset($data['course']['courseID']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('courseCode','CourseCode','required|max_length[10]');
			$this->form_validation->set_rules('courseName','CourseName','required|max_length[70]');
			$this->form_validation->set_rules('remarks','Remarks','required|max_length[200]');
			$this->form_validation->set_rules('dateModified','DateModified','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'courseCode' => $this->input->post('courseCode'),
					'courseName' => $this->input->post('courseName'),
					'remarks' => $this->input->post('remarks'),
					'dateModified' => date('Y-m-d H:i:s'),
                );

                $this->Course_model->update_course($courseID,$params);            
                redirect('course/index');
            }
            else
            {
                $data['_view'] = 'course/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The course you are trying to edit does not exist.');
    } 

    /*
     * Deleting course
     */
    function remove($courseID)
    {
        $course = $this->Course_model->get_course($courseID);

        // check if the course exists before trying to delete it
        if(isset($course['courseID']))
        {
            $this->db->set('status', 'Archived');
            $this->Course_model->archive_course($courseID, $params);
            redirect('course/index');
        }
        else
            show_error('The course you are trying to delete does not exist.');
    }
    
}
