<?php
class Login extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Auditlog_model');
        $this->load->model('Login_model');        
        $this->load->model('User_model'); 
        $this->load->helper('url');
             
    }
    
    function index()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('userPassword','Password','required|max_length[255]');
        $this->form_validation->set_rules('userIDNo','ID Number','required|max_length[50]');
        $_SESSION['errormsg'] = 0;
        if($this->form_validation->run())     
        {   
            $params = array(
                'userPassword' => $this->input->post('userPassword'),
                'userIDNo' => $this->input->post('userIDNo'),);
            
            $login = $this->Login_model->get_user($params); 
            if(password_verify($params['userPassword'], $login['userPassword']) == FALSE){
                $_SESSION['errormsg'] = 1;
            }
            else {
                if(isset($login['userID']) and isset($login['userTypeID']))
                {
                    $_SESSION['userID'] = $login['userID'];
                    $_SESSION['userTypeID'] = $login['userTypeID'];
                    
                    $params1 = array(
                        'userID' => $login['userIDNo'],
                        'auditDesc' => $login['userPassword'].' logged in',
                    );
                    $this->Auditlog_model->add_auditlog($params1);
                    redirect('dashboard/index');
                    //var_dump($_SESSION['userTypeID'], $_SESSION['userID']);
                }
                else {
                    $_SESSION['errormsg'] = 2;
                }
            }
        }
        $data['_view'] = 'login/index';
        $this->load->view('login/Login', $data);
        }
    function logout()
    {
        $login = $this->User_model->get_user($_SESSION['userID']); 
         $params1 = array(
                        'userID' => $login['userIDNo'],
                        'auditDesc' => $login['userPassword'].' logged in',
                    );
                    $this->Auditlog_model->add_auditlog($params1);
        session_destroy();
        redirect(site_url().'login/index');
    }
}