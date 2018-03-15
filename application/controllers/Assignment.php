<?php

 
class Assignment extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Assignment_model');
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
     * Listing of assignments
     */
    function index()
    {
        $data['assignments'] = $this->Assignment_model->get_all_assignments();
        
        $data['_view'] = 'assignment/index';
        $this->load->view('layouts/main',$data);
    }


    /*
     * Adding a new assignment
     */
    function add()
    {   
        $data['error2'] = " ";
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
                    // $error = array('error' => $this->upload->display_errors());
                    $data['error'] = "File uploaded is not supported use PDF, DOCX, PPT, TXT, JPEG or PNG";
                    $data['_view'] = 'assignment/add';
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
                            'auditDesc' => 'Added Assignment',
                        );
                        $this->Auditlog_model->add_auditlog($paramsaudit);
                        redirect('assignment/index');
            }

        }
        else
        {
			$this->load->model('Theclass_model');
			$data['all_theclasses'] = $this->Theclass_model->get_all_theclasses();
            
            $data['_view'] = 'assignment/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a assignment
     */
    function edit($assignID)
    {   
        // check if the assignment exists before trying to edit it
        $data['assignment'] = $this->Assignment_model->get_assignment($assignID);
        
        if(isset($data['assignment']['assignID']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('assignDesc','AssignDesc','required|max_length[150]');
			$this->form_validation->set_rules('assignTitle','AssignTitle','required|max_length[50]');
		
			if($this->form_validation->run())     
            {   

                $config['upload_path'] = './uploads/assignments';
                $config['allowed_types'] = 'jpg|png|pdf|docx|txt';
                $config['max_size'] = 1024;
                $config['max_width'] = 1024;
                $config['max_height'] = 768;
    
                $this->load->library('upload', $config);
                $var;
                if ( ! $this->upload->do_upload('filen'))
                {
                        // $error = array('error' => $this->upload->display_errors());
                        $data['error'] = "File uploaded is not supported use PDF, DOCX, PPT, TXT, JPEG or PNG only";
                    $data['_view'] = 'assignment/add';
                    $this->load->model('User_model');
                    $data['all_users'] = $this->User_model->get_all_users();
                    $this->load->view('layouts/main',$data);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        
                        $var1 = $this->upload->data()["file_name"];
                        //var_dump($var);
                        $params = array(
                            'classID' => $this->input->post('classID'),
                            'assignFile' => $var,
                            'assignDesc' => $this->input->post('assignDesc'),
                            'assignTitle' => $this->input->post('assignTitle'),
                        );
                        $this->db->set('dateModified', 'NOW()', FALSE);
                        $this->Assignment_model->update_assignment($assignID,$params);
                        $idnum = $this->session->userdata('userIDNo');
                        $paramsaudit = array(
                            'userIDNo' => $idnum,
                            'auditDesc' => 'Edited Assignment',
                        );            
                        redirect('assignment/index');
                }

            }
            else
            {
				$this->load->model('Theclass_model');
				$data['all_theclasses'] = $this->Theclass_model->get_all_theclasses();

                $data['_view'] = 'assignment/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The assignment you are trying to edit does not exist.');
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
            $idnum = $this->session->userdata('userIDNo');
                        $paramsaudit = array(
                            'userIDNo' => $idnum,
                            'auditDesc' => 'Deleted Assignment',
                        );
            redirect('assignment/index');
        }
        else
            show_error('The assignment you are trying to delete does not exist.');
    }
    
}
