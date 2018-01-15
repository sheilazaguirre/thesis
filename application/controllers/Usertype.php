<?php

 
class Usertype extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Usertype_model');
    } 

    /*
     * Listing of usertype
     */
    function index()
    {
        $data['usertype'] = $this->Usertype_model->get_all_usertype();
        
        $data['_view'] = 'usertype/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new usertype
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('userType','UserType','required|max_length[50]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'userType' => $this->input->post('userType'),
            );
            
            $usertype_id = $this->Usertype_model->add_usertype($params);
            redirect('usertype/index');
        }
        else
        {            
            $data['_view'] = 'usertype/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a usertype
     */
    function edit($userTypeID)
    {   
        // check if the usertype exists before trying to edit it
        $data['usertype'] = $this->Usertype_model->get_usertype($userTypeID);
        
        if(isset($data['usertype']['userTypeID']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('userType','UserType','required|max_length[50]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'userType' => $this->input->post('userType'),
                );

                $this->Usertype_model->update_usertype($userTypeID,$params);            
                redirect('usertype/index');
            }
            else
            {
                $data['_view'] = 'usertype/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The usertype you are trying to edit does not exist.');
    } 

    /*
     * Deleting usertype
     */
    function remove($userTypeID)
    {
        $usertype = $this->Usertype_model->get_usertype($userTypeID);

        // check if the usertype exists before trying to delete it
        if(isset($usertype['userTypeID']))
        {
            $this->Usertype_model->delete_usertype($userTypeID);
            redirect('usertype/index');
        }
        else
            show_error('The usertype you are trying to delete does not exist.');
    }
    
}
