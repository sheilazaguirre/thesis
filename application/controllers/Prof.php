<?php

 
class Prof extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Prof_model');
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
                $var_dump($_POST['submit']);
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
