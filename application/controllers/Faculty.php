<?php

 
class Faculty extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Faculty_model');
    } 

    /*
     * Listing of faculty
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('faculty/index?');
        $config['total_rows'] = $this->Faculty_model->get_all_faculty_count();
        $this->pagination->initialize($config);



        $data['faculty'] = $this->Faculty_model->get_all_faculty($params);
        
        $data['_view'] = 'faculty/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new faculty
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'userID' => $this->input->post('userID'),
                'subjectID' => $this->input->post('subjectID'),
                'remarks' => $this->input->post('remarks'),
            );
            $this->db->set('dateAdded', 'NOW()', FALSE);
            $this->db->set('status', 'Active');
            $faculty_id = $this->Faculty_model->add_faculty($params);
            redirect('faculty/index');
        }
        else
        {
			$this->load->model('User_model');
            $data['all_users'] = $this->User_model->get_all_faculty();
            
            $this->load->model('Subject_model');
			$data['all_subjects'] = $this->Subject_model->get_all_subjects();

            $data['_view'] = 'faculty/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a faculty
     */
    function edit($facultyID)
    {   
        // check if the faculty exists before trying to edit it
        $data['faculty'] = $this->Faculty_model->get_faculty($facultyID);
        
        if(isset($data['faculty']['facultyID']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'userID' => $this->input->post('userID'),
                    'subjectID' => $this->input->post('subjectID'),
                );
                $this->db->set('dateModified', 'NOW()', FALSE);
                $this->Faculty_model->update_faculty($facultyID,$params);            
                redirect('faculty/index');
            }
            else
            {
				$this->load->model('User_model');
				$data['all_users'] = $this->User_model->get_all_faculty();

                $data['_view'] = 'faculty/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The faculty you are trying to edit does not exist.');
    } 

    /*
     * Deleting faculty
     */
    function remove($facultyID)
    {
        $faculty = $this->Faculty_model->get_faculty($facultyID);

        // check if the faculty exists before trying to delete it
        if(isset($faculty['facultyID']))
        {
            $this->db->set('status', 'Archive');
            $this->db->set('dateModified', 'NOW()', FALSE);
            $this->Faculty_model->delete_faculty($facultyID);
            redirect('faculty/index');
        }
        else
            show_error('The faculty you are trying to delete does not exist.');
    }
    
}
