<?php

 
class Prof_Func extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Assignment_model');
        $this->load->model('Lesson_model');
        $this->load->model('Auditlog_model');
    } 

    /*
     * Listing of assignments
     */
    function index()
    {
        $data['assignments'] = $this->Assignment_model->get_all_assignments();
        
        $this->load->view('prof/index',$data);


    }


    /*
     * Adding a new assignment
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('assignDesc','AssignDesc','required|max_length[150]');
		$this->form_validation->set_rules('assignTitle','AssignTitle','required|max_length[50]');
		
		if($this->form_validation->run())     
        {   

            $config['upload_path'] = './uploads/assignments';
            $config['allowed_types'] = 'jpg|png|pdf|docx|txt';
            $config['max_size'] = 100;
            $config['max_width'] = 1024;
            $config['max_height'] = 768;

            $this->load->library('upload', $config);
            $var;
            if ( ! $this->upload->do_upload('filen'))
            {
                    $error = array('error' => $this->upload->display_errors());
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());
                    
                    $var = $this->upload->data()["file_name"];
                    //var_dump($var);
            }

            $params = array(
				'classID' => $this->input->post('classID'),
				'assignFile' => $var,
				'assignDesc' => $this->input->post('assignDesc'),
				'assignTitle' => $this->input->post('assignTitle'),
            );
            $this->db->set('dateUploaded', 'NOW()', FALSE);
            $this->db->set('dateExpiry', 'NOW() + INTERVAL 6 Month', FALSE);
            $this->db->set('status', 'Active');
            $assignment_id = $this->Assignment_model->add_assignment($params);
            $idnum = $this->session->userdata('userIDNo');
                    $paramsaudit = array(
                        'userIDNo' => $idnum,
                        'auditDesc' => 'Uploaded Assignment',
                    );
            $this->Auditlog_model->add_auditlog($paramsaudit);
            redirect('prof/assignments');
        }
        else
        {
			$this->load->model('Theclass_model');
			$data['all_theclasses'] = $this->Theclass_model->get_all_theclasses();
            
            $this->load->view('prof/addassign',$data);
        }
    }  

    /*
     * Deleting assignment
     */
    function remove($assignID)
    {
        $assignment = $this->Assignment_model->get_assignment($assignID);

        // check if the assignment exists before trying to delete it
        if(isset($assignment['assignID']))
        {
            $path_to_file = '.uploads/assignments/';
            if(unlink($path_to_file)) {
                 echo 'deleted successfully';
            }
            else {
                 echo 'errors occured';
            }
            $this->db->set('status', 'Archived');
            $this->db->set('dateModified', 'NOW()', FALSE);
            $this->Assignment_model->delete_assignment($assignID);
            redirect('assignment/index');
        }
        else
            show_error('The assignment you are trying to delete does not exist.');
    }
    

    function addlesson()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('classID','ClassID','required|integer');
		$this->form_validation->set_rules('lessonDesc','LessonDesc','required|max_length[150]');
		
		if($this->form_validation->run())     
        {   

            $config['upload_path'] = './uploads/lessons';
            $config['allowed_types'] = 'jpg|png|pdf|docx|txt|ppt|xlsx';
            $config['max_size'] = 1024;
            $config['max_width'] = 1024;
            $config['max_height'] = 768;

            $this->load->library('upload', $config);
            $var1;
            if ( ! $this->upload->do_upload('filen'))
            {
                    $error = array('error' => $this->upload->display_errors());
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());
                    
                    $var1 = $this->upload->data()["file_name"];
            }

            $params = array(
				'classID' => $this->input->post('classID'),
				'lessonFile' => $var1,
				'lessonDesc' => $this->input->post('lessonDesc'),
				'lessonTitle' => $this->input->post('lessonTitle'),
            );
            $this->db->set('dateUploaded', 'NOW()', FALSE);
            $this->db->set('dateExpiry', 'NOW() + INTERVAL 6 Month', FALSE);
            $this->db->set('status', 'Active');
            $lesson_id = $this->Lesson_model->add_lesson($params);
            $idnum = $this->session->userdata('userIDNo');
                    $paramsaudit = array(
                        'userIDNo' => $idnum,
                        'auditDesc' => 'Uploaded lesson',
                    );
            $this->Auditlog_model->add_auditlog($paramsaudit);
            redirect('prof/lessons');
        }
        else
        {
			$this->load->model('Theclass_model');
			$data['all_theclasses'] = $this->Theclass_model->get_all_theclasses();
            
            $this->load->view('prof_func/addlesson',$data);
        }
    }  
    function removelesson($lessonID)
    {
        $lesson = $this->Lesson_model->get_lesson($lessonID);

        // check if the lesson exists before trying to delete it
        if(isset($lesson['lessonID']))
        {
            $this->db->set('status', 'Archived');
            $this->db->set('dateModified', 'NOW()', FALSE);
            $this->Lesson_model->delete_lesson($lessonID);
            redirect('prof/lessons');
        }
        else
            show_error('The lesson you are trying to delete does not exist.');
    }
}
