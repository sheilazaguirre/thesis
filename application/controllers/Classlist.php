<?php

 
class Classlist extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Classlist_model');
    } 

    /*
     * Listing of classlist
     */
    function index()
    {
        $data['classlist'] = $this->Classlist_model->get_all_classlist();
        
        $data['_view'] = 'classlist/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new classlist
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('midtermGrade','MidtermGrade','required|numeric');
		$this->form_validation->set_rules('finalGrade','FinalGrade','required|numeric');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'classID' => $this->input->post('classID'),
				'studentID' => $this->input->post('studentID'),
				'midtermGrade' => $this->input->post('midtermGrade'),
				'finalGrade' => $this->input->post('finalGrade'),
            );
            $this->db->set('status', 'Active');
            $classlist_id = $this->Classlist_model->add_classlist($params);
            redirect('classlist/index');
        }
        else
        {
			$this->load->model('Theclass_model');
			$data['all_theclasses'] = $this->Theclass_model->get_all_theclasses();

			$this->load->model('Student_model');
			$data['all_students'] = $this->Student_model->get_all_students();
            
            $data['_view'] = 'classlist/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a classlist
     */
    function edit($classListID)
    {   
        // check if the classlist exists before trying to edit it
        $data['classlist'] = $this->Classlist_model->get_classlist($classListID);
        
        if(isset($data['classlist']['classListID']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('midtermGrade','MidtermGrade','required|numeric');
			$this->form_validation->set_rules('finalGrade','FinalGrade','required|numeric');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'classID' => $this->input->post('classID'),
					'studentID' => $this->input->post('studentID'),
					'midtermGrade' => $this->input->post('midtermGrade'),
					'finalGrade' => $this->input->post('finalGrade'),
                );

                $this->Classlist_model->update_classlist($classListID,$params);            
                redirect('classlist/index');
            }
            else
            {
				$this->load->model('Theclass_model');
				$data['all_theclasses'] = $this->Theclass_model->get_all_theclasses();

				$this->load->model('Student_model');
				$data['all_students'] = $this->Student_model->get_all_students();

                $data['_view'] = 'classlist/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The classlist you are trying to edit does not exist.');
    } 

    /*
     * Deleting classlist
     */
    function remove($classListID)
    {
        $classlist = $this->Classlist_model->get_classlist($classListID);

        // check if the classlist exists before trying to delete it
        if(isset($classlist['classListID']))
        {
            $this->db->set('status', 'Archive');
            $this->Classlist_model->delete_classlist($classListID);
            redirect('classlist/index');
        }
        else
            show_error('The classlist you are trying to delete does not exist.');
    }
    
}
