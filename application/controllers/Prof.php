<?php

 
class Prof extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Prof_model');
        $this->load->model('Assignment_model');
        $this->load->model('Lesson_model');
        $this->load->helper('form');
        $this->load->helper('url');
        
        
    } 

    function schedule()
    {
        $this->load->view('prof/schedule');
    }


    function lessons()
    {
        $this->load->view('prof/lessons');
    }

    function assignments()
    {
        $this->load->view('prof/assignments');
    }

    function encodegrades()
    {
        $this->load->view('prof/encodegrades');
    }

    /*
     * Listing of prof
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('prof/index?');
        $config['total_rows'] = $this->Prof_model->get_all_prof_count();
        $this->pagination->initialize($config);



        $data['prof'] = $this->Prof_model->get_all_prof($params);
        
        $this->load->view('prof/index');
    }

    function addassign()
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
            redirect('prof/assignments');
        }
        else
        {
            $this->load->model('Theclass_model');
            $data['all_theclasses'] = $this->Theclass_model->get_all_theclasses();
            
            $this->load->view('prof/addassign',$data);
        }
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
                    var_dump($var);
            }

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
            redirect('prof/lessons');
        }
        else
        {
            $this->load->model('Theclass_model');
            $data['all_theclasses'] = $this->Theclass_model->get_all_theclasses();
            
            $this->load->view('prof/addlesson',$data);
        }
    }

    function grades()
    {        
        if(isset($_POST) && count($_POST) > 0)
        {
            $params = [];
            foreach ($this->input->post('clID') as $clID)
            {
                $params[$clID] = array(
                    'studentID' => $this->input->post('sid['.$clID.']'),
                    'classID' => $this->input->post('classid'),
                    'grade' => $this->input->post('grade['.$clID.']'),
                    'remarks' => $this->input->post('remarks['.$clID.']'),
                    'status' => "Saved",
                    'dateAdded' => date('Y-m-d H:i:s'),
                    'lastSaved' => date('Y-m-d H:i:s'),
                );
            }

            $grades = $this->Prof_model->get_all_grades($this->input->post("classID"));

            if(count($grades) == 0)
            {
                foreach($params as $p)
                {
                    $addgrades = $this->Prof_model->add_grades($p);
                }
            }
            else
            {
                if(isset($_POST['submit']))
                {
                    $params = [];
                    foreach($this->input->post('clID') as $clID)
                    {
                        $params[$clID] = array(
                            'studentID' => $this->input->post('sid['.$clID.']'),
                            'classID' => $this->input->post('classid'),
                            'grade' => $this->input->post('grade['.$clID.']'),
                            'remarks' => $this->input->post('remarks['.$clID.']'),
                            'status' => "Submitted",
                            'dateSubmitted' => date('Y-m-d H:i:s'),
                        );
                        foreach($params as $p)
                        {
                            $editgrades = $this->Prof_model->updategrades($p['studentID'], $p);
                        }
                    }
                }
                else
                {
                    $params = [];
                    foreach($this->input->post('clID') as $clID)
                    {
                        $params[$clID] = array(
                            'studentID' => $this->input->post('sid['.$clID.']'),
                            'classID' => $this->input->post('classid'),
                            'grade' => $this->input->post('grade['.$clID.']'),
                            'remarks' => $this->input->post('remarks['.$clID.']'),
                            'status' => "Saved",
                            'lastSaved' => date('Y-m-d H:i:s'),
                        );
                    }
                    foreach($params as $p)
                    {
                        $editgrades = $this->Prof_model->updategrades($p['studentID'], $p);
                    }
                }
            }
            redirect('prof/index');
        }
        else
        {
            $grades = $this->Prof_model->get_all_grades($this->input->post("classID"));
            if($grades)
            {
                for($i = 0; $i<count($grades); $i++)
                {
                    $data['classlist']['grade'][$i] = $grades[$i]['grade'];
                }
            }
            $data['classlist'] = $this->Prof_model->get_classlist();
            $this->load->view('prof/grades', $data);
        }
    }

    
    /*
     * Adding a new prof
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
                'subjectID' => $this->input->post('subjectID'),
                'remarks' => $this->input->post('remarks'),
            );
            $this->db->set('status', 'Active');
            $prof_id = $this->Prof_model->add_prof($params);
            redirect('prof/index');
        }
        else
        {
            
            $this->load->model('Subject_model');
			$data['all_subjects'] = $this->Subject_model->get_all_subjects();

            $data['_view'] = 'prof/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Deleting prof
     */
    function remove($profID)
    {
        $prof = $this->Prof_model->get_prof($profID);

        // check if the prof exists before trying to delete it
        if(isset($prof['profID']))
        {
            $this->db->set('status', 'Archive');
            $this->db->set('dateModified', 'NOW()', FALSE);
            $this->Prof_model->delete_prof($profID);
            redirect('prof/index');
        }
        else
            show_error('The prof you are trying to delete does not exist.');
    }


    
}
