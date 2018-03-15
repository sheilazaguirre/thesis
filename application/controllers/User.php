<?php

 
class User extends CI_Controller{
    function __construct()
    {
        parent::__construct();
		$this->load->model('User_model');
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
     * Listing of users
     */
    function index()
    {
        $data['users'] = $this->User_model->get_all_users();
        
        $data['_view'] = 'user/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new user
     */
    function add()
    {   
		$data['error'] = "";
		$data['error2'] = "";
        $this->load->library('form_validation');

		$this->form_validation->set_rules('userIDNo','UserIDNo','required|integer');
		$this->form_validation->set_rules('userTypeID','UserTypeID','required|integer');
		$this->form_validation->set_rules('userLN','UserLN','required|max_length[50]');
        $this->form_validation->set_rules('userMN','UserMN','required|max_length[50]');
		$this->form_validation->set_rules('userFN','UserFN','required|max_length[50]');
		$this->form_validation->set_rules('userEmail','UserEmail','required|max_length[100]');
		$this->form_validation->set_rules('userMobile','UserMobile','required|max_length[15]');
		$this->form_validation->set_rules('birthdate','Birthdate','required');
		$this->form_validation->set_rules('birthplace','Birthplace','required|max_length[150]');
		$this->form_validation->set_rules('gender','Gender','required|max_length[20]');
		$this->form_validation->set_rules('civstat','Civstat','required|max_length[20]');
		$this->form_validation->set_rules('nationality','Nationality','required|max_length[20]');
		$this->form_validation->set_rules('religion','Religion','required|max_length[20]');
		$this->form_validation->set_rules('addcity','Addcity','required|max_length[150]');
		$this->form_validation->set_rules('addprov','Addprov','max_length[150]');
		$this->form_validation->set_rules('elemschool','Elemschool','required|max_length[50]');
		$this->form_validation->set_rules('secschool','Secschool','required|max_length[50]');
		$this->form_validation->set_rules('tertchool','Tertchool','required|max_length[50]');
		$this->form_validation->set_rules('guardian','Guardian','max_length[100]');
		$this->form_validation->set_rules('relation','Relation','max_length[30]');
		$this->form_validation->set_rules('fathername','Fathername','required|max_length[100]');
		$this->form_validation->set_rules('fatherocc','Fatherocc','required|max_length[50]');
		$this->form_validation->set_rules('mothername','Mothername','required|max_length[100]');
		$this->form_validation->set_rules('motherocc','Motherocc','required|max_length[50]');

		
		if($this->form_validation->run())     
        {
            $datebirth = $this->input->post('birthdate');
            $today = date("Y-m-d");
            $diff = date_diff(date_create($datebirth), date_create($today));
            $num = $diff->format('%y');
			$age = (int)$num;
			
			if ($age >= 14 && $age <39)
			{
				$params = array(
					'userTypeID' => $this->input->post('userTypeID'),
					'status' => 'Active',
					'gender' => $this->input->post('gender'),
					'userPassword' => password_hash('gapcmypassword', PASSWORD_BCRYPT),
					'userIDNo' => $this->input->post('userIDNo'),
					'userLN' => $this->input->post('userLN'),
					'userFN' => $this->input->post('userFN'),
					'userMN' => $this->input->post('userMN'),
					'userEmail' => $this->input->post('userEmail'),
					'userMobile' => $this->input->post('userMobile'),
					'birthdate' => $datebirth,
					'age' => $age,
					'civstat' => $this->input->post('civstat'),
					'nationality' => $this->input->post('nationality'),
					'religion' => $this->input->post('religion'),
					'elemschool' => $this->input->post('elemschool'),
					'secschool' => $this->input->post('secschool'),
					'tertschool' => $this->input->post('tertchool'),
					'guardian' => $this->input->post('guardian'),
					'relation' => $this->input->post('relation'),
					'fathername' => $this->input->post('fathername'),
					'fatherocc' => $this->input->post('fatherocc'),
					'mothername' => $this->input->post('mothername'),
					'motherocc' => $this->input->post('motherocc'),
					'birthplace' => $this->input->post('birthplace'),
					'addcity' => $this->input->post('addcity'),
					'addprov' => $this->input->post('addprov'),
					'dateadded' => date('Y-m-d H:i:s'),
					'datemodified' => null,
				);
				
				$valres = $this->User_model->validate($params);
				if ($valres === 2)
				{
					$user_id = $this->User_model->add_user($params);
					$idnum = $this->session->userdata('userIDNo');
                        $paramsaudit = array(
                            'userIDNo' => $idnum,
                            'auditDesc' => 'Successfully added a user',
                        );
					redirect('user/index');
				}
				else {
					$this->load->model('Usertype_model');
				$data['all_usertype'] = $this->Usertype_model->get_all_usertype();
				$data['error2'] = "USERID already exist (Check database)";
           		$data['_view'] = 'user/add';
            	$this->load->view('layouts/main',$data);
				}
				
				
			} 
			else if ($age >= 40) {
				$this->load->model('Usertype_model');
				$data['all_usertype'] = $this->Usertype_model->get_all_usertype();
				$data['error'] = "Student too old / Invalid years";
           		$data['_view'] = 'user/add';
            	$this->load->view('layouts/main',$data);
			}
			else {
				$this->load->model('Usertype_model');
				$data['all_usertype'] = $this->Usertype_model->get_all_usertype();
				$data['error'] = "Student too young for college / Invalid years";
           		$data['_view'] = 'user/add';
            	$this->load->view('layouts/main',$data);
			}

            
        }
        else
        {
			$this->load->model('Usertype_model');
			$data['all_usertype'] = $this->Usertype_model->get_all_usertype();
            
            $data['_view'] = 'user/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a user
     */
    function edit($userID)
    {   
        // check if the user exists before trying to edit it
        $data['user'] = $this->User_model->get_user($userID);
        
        if(isset($data['user']['userID']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('userIDNo','UserIDNo','required|integer');
			$this->form_validation->set_rules('userTypeID','UserTypeID','required|integer');
			$this->form_validation->set_rules('userLN','UserLN','required|max_length[50]');
            $this->form_validation->set_rules('userMN','UserMN','required|max_length[50]');
			$this->form_validation->set_rules('userFN','UserFN','required|max_length[50]');
			$this->form_validation->set_rules('userEmail','UserEmail','required|max_length[100]');
			$this->form_validation->set_rules('userPassword','UserPassword','required|max_length[300]');
			$this->form_validation->set_rules('userMobile','UserMobile','required|max_length[15]');
			$this->form_validation->set_rules('status','Status','required|max_length[15]');
			$this->form_validation->set_rules('birthdate','Birthdate','required');
			$this->form_validation->set_rules('age','Age');
			$this->form_validation->set_rules('birthplace','Birthplace','required|max_length[150]');
			$this->form_validation->set_rules('gender','Gender','required|max_length[20]');
			$this->form_validation->set_rules('civstat','Civstat','required|max_length[20]');
			$this->form_validation->set_rules('nationality','Nationality','required|max_length[20]');
			$this->form_validation->set_rules('religion','Religion','required|max_length[20]');
			$this->form_validation->set_rules('addcity','Addcity','required|max_length[150]');
			$this->form_validation->set_rules('addprovince','Addprovince','max_length[150]');
			$this->form_validation->set_rules('elemschool','Elemschool','required|max_length[50]');
			$this->form_validation->set_rules('secschool','Secschool','required|max_length[50]');
			$this->form_validation->set_rules('tertschool','Tertchool','required|max_length[50]');
			$this->form_validation->set_rules('guardian','Guardian','max_length[100]');
			$this->form_validation->set_rules('relation','Relation','max_length[30]');
			$this->form_validation->set_rules('fathername','Fathername','required|max_length[100]');
			$this->form_validation->set_rules('fatherocc','Fatherocc','required|max_length[50]');
			$this->form_validation->set_rules('mothername','Mothername','required|max_length[100]');
			$this->form_validation->set_rules('motherocc','Motherocc','required|max_length[50]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'userTypeID' => $this->input->post('userTypeID'),
					'status' => $this->input->post('status'),
					'gender' => $this->input->post('gender'),
					'userIDNo' => $this->input->post('userIDNo'),
					'userLN' => $this->input->post('userLN'),
					'userFN' => $this->input->post('userFN'),
					'userMN' => $this->input->post('userMN'),
					'userEmail' => $this->input->post('userEmail'),
					'userMobile' => $this->input->post('userMobile'),
					'birthdate' => $this->input->post('birthdate'),
					'civstat' => $this->input->post('civstat'),
					'nationality' => $this->input->post('nationality'),
					'religion' => $this->input->post('religion'),
					'elemschool' => $this->input->post('elemschool'),
					'secschool' => $this->input->post('secschool'),
					'tertschool' => $this->input->post('tertschool'),
					'guardian' => $this->input->post('guardian'),
					'relation' => $this->input->post('relation'),
					'fathername' => $this->input->post('fathername'),
					'fatherocc' => $this->input->post('fatherocc'),
					'mothername' => $this->input->post('mothername'),
					'motherocc' => $this->input->post('motherocc'),
					'birthplace' => $this->input->post('birthplace'),
					'addcity' => $this->input->post('addcity'),
					'addprovince' => $this->input->post('addprovince'),
                    'datemodified' => date('Y-m-d H:i:s')
                );

				$this->User_model->update_user($userID,$params);   
				$idnum = $this->session->userdata('userIDNo');
                        $paramsaudit = array(
                            'userIDNo' => $idnum,
                            'auditDesc' => 'Successfully edited a user',
                        );         
                redirect('user/index');
            }
            else
            {
				$this->load->model('Usertype_model');
				$data['all_usertype'] = $this->Usertype_model->get_all_usertype();

                $data['_view'] = 'user/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The user you are trying to edit does not exist.');
    } 

    /*
     * Deleting user
     */
    function remove($userID)
    {
        $user = $this->User_model->get_user($userID);

        // check if the user exists before trying to delete it
        if(isset($user['userID']))
        {
            $this->db->set('status', 'Archived');
			$this->User_model->delete_user($userID, $params);
			$idnum = $this->session->userdata('userIDNo');
                        $paramsaudit = array(
                            'userIDNo' => $idnum,
                            'auditDesc' => 'Successfully removed a user',
                        );
            redirect('user/index');
        }
        else
            show_error('The user you are trying to delete does not exist.');
    }
    
}
