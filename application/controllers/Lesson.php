<?php

 
class Lesson extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Lesson_model');
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
     * Listing of lessons
     */
    function index()
    {
        $data['lessons'] = $this->Lesson_model->get_all_lessons();
        
        $data['_view'] = 'lesson/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new lesson
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('classID','ClassID','required|integer');
		$this->form_validation->set_rules('lessonDesc','LessonDesc','required|max_length[150]');
		
		if($this->form_validation->run())     
        {   

            $config['upload_path'] = './uploads/lessons';
            $config['allowed_types'] = 'jpg|png|pdf|docx|txt|ppt|xlsx';
            $config['max_size'] = 100;
            $config['max_width'] = 1024;
            $config['max_height'] = 768;

            $this->load->library('upload', $config);
            $var;
            if ( ! $this->upload->do_upload('filen'))
            {
                    // $error = array('error' => $this->upload->display_errors());
                    $data['error'] = "File uploaded is not supported use PDF, DOCX, PPT, TXT, JPEG or PNG";
                    $data['_view'] = 'lesson/add';
                    $this->load->model('User_model');
                    $data['all_users'] = $this->User_model->get_all_users();
                    $this->load->view('layouts/main',$data);   
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());
                    
                    $var = $this->upload->data()["file_name"];
                    var_dump($var);
                    $params = array(
                        'classID' => $this->input->post('classID'),
                        'lessonFile' => $var,
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
                            'auditDesc' => 'Added a new lesson',
                        );
                    
                    redirect('lesson/index');
            }

        }
        else
        {
			$this->load->model('Theclass_model');
			$data['all_theclasses'] = $this->Theclass_model->get_all_theclasses();
            
            $data['_view'] = 'lesson/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a lesson
     */
    function edit($lessonID)
    {   
        // check if the lesson exists before trying to edit it
        $data['lesson'] = $this->Lesson_model->get_lesson($lessonID);
        
        if(isset($data['lesson']['lessonID']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('classID','ClassID','required|integer');
			$this->form_validation->set_rules('lessonDesc','LessonDesc','required|max_length[150]');
			$this->form_validation->set_rules('lessonTitle','LessonTitle','required|max_length[50]');
		
			if($this->form_validation->run())     
            {   

                $config['upload_path'] = './uploads/lessons';
                $config['allowed_types'] = 'gif|jpg|png|pdf|docx';
                $config['max_size'] = 100;
                $config['max_width'] = 1024;
                $config['max_height'] = 768;
    
                $this->load->library('upload', $config);
                $var;
                if ( ! $this->upload->do_upload('filen'))
                {
                        // $error = array('error' => $this->upload->display_errors());
                        $data['error'] = "File uploaded is not supported use PDF, DOCX, PPT, TXT, JPEG or PNG";
                        $data['_view'] = 'lesson/add';
                        $this->load->model('User_model');
                        $data['all_users'] = $this->User_model->get_all_users();
                        $this->load->view('layouts/main',$data);  
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        
                        $var = $this->upload->data()["file_name"];
                        //var_dump($var);
                        $params = array(
                            'classID' => $this->input->post('classID'),
                            'lessonFile' => $var,
                            'lessonDesc' => $this->input->post('lessonDesc'),
                            'lessonTitle' => $this->input->post('lessonTitle'),
                        );
                        $this->db->set('dateModified', 'NOW()', FALSE);
                        $this->Lesson_model->update_lesson($lessonID,$params); 
                        $idnum = $this->session->userdata('userIDNo');
                                $paramsaudit = array(
                                    'userIDNo' => $idnum,
                                    'auditDesc' => 'Edited existing lesson',
                                );           
                        redirect('lesson/index');
                }

            }
            else
            {
				$this->load->model('Theclass_model');
				$data['all_theclasses'] = $this->Theclass_model->get_all_theclasses();

                $data['_view'] = 'lesson/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The lesson you are trying to edit does not exist.');
    } 

    /*
     * Deleting lesson
     */
    function remove($lessonID)
    {
        $lesson = $this->Lesson_model->get_lesson($lessonID);

        // check if the lesson exists before trying to delete it
        if(isset($lesson['lessonID']))
        {
            $this->db->set('status', 'Archived');
            $this->Lesson_model->delete_lesson($lessonID);
            $idnum = $this->session->userdata('userIDNo');
                                $paramsaudit = array(
                                    'userIDNo' => $idnum,
                                    'auditDesc' => 'Removed an existing lesson',
                                );      
            redirect('lesson/index');
        }
        else
            show_error('The lesson you are trying to delete does not exist.');
    }
    
}
