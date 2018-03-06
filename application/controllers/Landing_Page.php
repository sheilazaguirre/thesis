<?php
if(!defined('BASEPATH')) exit('Hacking Attempt : Get Out of the system ..!');
 
class Landing_Page extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Landing_Page_model');        
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
            
            $login = $this->Landing_Page_model->get_user($params); 
            if(password_verify($params['userPassword'], $login['userPassword']) == FALSE){
                $_SESSION['errormsg'] = 1;
            }
            else {
                if(isset($login['userIDNo']) and isset($login['userTypeID']))
                {
                    $_SESSION['userIDNo'] = $login['userIDNo'];
                    $_SESSION['userTypeID'] = $login['userTypeID'];

                    
                    $params1 = array(
                        'userID' => $login['userIDNo'],
                        'auditDesc' => $login['userPassword'].' logged in',
                    );
                    // $this->Auditlog_model->add_auditlog($params1);
                    redirect('student_page/index');
                    //var_dump($_SESSION['userTypeID'], $_SESSION['userID']);
                }
                else {
                    $_SESSION['errormsg'] = 2;
                }
            }
        }
        $data['_view'] = 'landing_page/index';
        $this->load->view('landing_page/index', $data);
        }
    function logout()
    {
        $login = $this->User_model->get_user($_SESSION['userIDNo']); 
         $params1 = array(
                        'userID' => $login['userIDNo'],
                        'auditDesc' => $login['userPassword'].' logged in',
                    );
                    // $this->Auditlog_model->add_auditlog($params1);
        session_destroy();
        redirect(site_url().'landing_page/index');
    }

    function about()
    {
        $this->load->view('landing_page/about');
    }

    function contact()
    {
        $this->load->view('landing_page/contact');
    }

    function admission()
    {
        $this->load->view('landing_page/services');
    }

    function admin()
    {
        $this->load->view('landing_page/admin');
    }

    function faculty()
    {
        $this->load->view('landing_page/faculty');
    }

    function registrar()
    {
        $this->load->view('landing_page/registrar');
    }


    function error_404()
    {
        $this->load->view('landing_page/page-404');
    }

    function comsci()
    {
        $this->load->view('landing_page/Com Sci.html');
    }

    function bisad()
    {
        $this->load->view('landing_page/BS Business Admin.html');
    }

    function elemed()
    {
        $this->load->view('landing_page/Elementary Education.html');
    }

    function seced()
    {
        $this->load->view('landing_page/sec-ed');
    }

    function seced_filipino()
    {
        $this->load->view('landing_page/BA Secondary Ed - Filipino.html');
    }

    function seced_math()
    {
        $this->load->view('landing_page/BA Secondary Ed - Math.html');
    }

    function seced_science()
    {
        $this->load->view('landing_page/BA Secondary Ed - Science.html');
    }

}
