<?php

class Student extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Student_model');
    } 

    /*
     * Listing of students
     */
    function index()
    {
        $data['students'] = $this->Student_model->get_all_students();
        
        $data['_view'] = 'student/index';
        $this->load->view('layouts/main',$data);
    }

    function findcourse($userID){
        $course = $this->Student_model->find_course($userID);
        echo '<p>'.$course['course'].'</p>';
    }


    /*
     * Adding a new student
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('userID','UserID','required|integer');
		$this->form_validation->set_rules('blockID','BlockID','required|integer');

		
		if($this->form_validation->run())
        {

            $params = array(
				'userID' => $this->input->post('userID'),
				'blockID' => $this->input->post('blockID'),
                'dateAdded' => date('Y-m-d H:i:s'),
                'dateModified' => null,
                'status' => 'Active',
            );
            
            $student_id = $this->Student_model->add_student($params);
            redirect('student/index');
        }
        else
        {
			$this->load->model('User_model');
			$data['all_users'] = $this->User_model->get_all_student();
			$this->load->model('Block_model');
			$data['all_blocks'] = $this->Block_model->get_all_blocks();
            $data['_view'] = 'student/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a student
     */
    function edit($studentID)
    {   
        // check if the student exists before trying to edit it
        $data['student'] = $this->Student_model->get_student($studentID);
        
        if(isset($data['student']['studentID']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('userID','UserID','required|integer');
			$this->form_validation->set_rules('course','Course','required|max_length[100]');
			$this->form_validation->set_rules('blockID','BlockID','required|integer');
			$this->form_validation->set_rules('dateModified','DateModified','required');
			$this->form_validation->set_rules('status','Status','required|max_length[15]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'userID' => $this->input->post('userID'),
					'course' => $this->input->post('course'),
					'blockID' => $this->input->post('blockID'),
                    'dateModified' => date('Y-m-d H:i:s'),
					'status' => 'Active',
                );

                $this->Student_model->update_student($studentID,$params);            
                redirect('student/index');
            }
            else
            {
				$this->load->model('User_model');
				$data['all_users'] = $this->User_model->get_all_student();

				$this->load->model('Block_model');
				$data['all_blocks'] = $this->Block_model->get_all_blocks();

                $data['_view'] = 'student/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The student you are trying to edit does not exist.');
    } 

    /*
     * Deleting student
     */
    function remove($studentID)
    {
        $student = $this->Student_model->get_student($studentID);

        // check if the student exists before trying to delete it
        if(isset($student['studentID']))
        {
            $this->Student_model->delete_student($studentID);
            redirect('student/index');
        }
        else
            show_error('The student you are trying to delete does not exist.');
    }
    
}
