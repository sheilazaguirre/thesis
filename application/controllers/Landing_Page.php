<?php
if(!defined('BASEPATH')) exit('Hacking Attempt : Get Out of the system ..!');
 
class Landing_Page extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Landing_Page_model');        
        $this->load->model('User_model'); 
        $this->load->model('Auditlog_model');
        $this->load->helper('url');
        $this->load->library('session');
    } 

    
    function index()
    {
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('userPassword','Password','required|max_length[255]');
        $this->form_validation->set_rules('userIDNo','ID Number','required|max_length[50]');
        $_SESSION['errormsg'] = 0;
        $form_reponse=$this->input->post('g-recaptcha-response');
        $url="https://www.google.com/recaptcha/api/siteverify";
        $secretkey="6LfRmzcUAAAAALyhGzTaoIa5XsHxb3MocPDbDZd_";
        $response=file_get_contents($url."?secret=".$secretkey."&response=".$form_reponse."&remoteip=".$_SERVER["REMOTE_ADDR"]);
        $dota=json_decode($response);
        if($this->form_validation->run())     
        {   
            $params = array(
                'userPassword' => $this->input->post('userPassword'),
                'userIDNo' => $this->input->post('userIDNo'),);
            $login = $this->Landing_Page_model->get_user($params); 
            if(password_verify($params['userPassword'], $login['userPassword']) == FALSE){
                $this->session->set_flashdata('err_message', 'Invalid ID Number or Password!');
            }
            else {
                if(isset($login['userIDNo']) and isset($login['userTypeID']) and isset($dota->success) && $dota->success=="true")
                {
                    $newdata = array( 
                        'userIDNo'  => $login['userIDNo'],
                        'userFN'  => $login['userFN'], 
                        'userLN'  => $login['userLN'],  
                        'userTypeID' => $login['userTypeID'], 
                        'logged_in' => TRUE
                     );  
                     $this->session->set_userdata($newdata);

                    $idnum = $login['userIDNo'];
                    // $usertype = $login['userTypeID'];  
                    // $result = $this->Landing_Page_model->validate($idnum);

                    $paramsaudit = array(
                        'userIDNo' => $idnum,
                        'auditDesc' => 'Logged In',
                    );
                    
                    $this->Auditlog_model->add_auditlog($paramsaudit);
                    redirect('student_page/index');
                    //var_dump($_SESSION['userTypeID'], $_SESSION['userID']);
                }
                else {
                $this->session->set_flashdata('err_message', 'Invalid credentials, also make sure to validate with recaptcha');
                }
            }
        }
        $data['_view'] = 'landing_page/index';
        $this->load->view('landing_page/index', $data);
        session_destroy();
    }
    
    function logout()
    {
        $idnum = $this->session->userdata('userIDNo');
        $paramsaudit = array(
            'userIDNo' => $idnum,
            'auditDesc' => 'Logged Out',
        );
        $this->Auditlog_model->add_auditlog($paramsaudit);
                    // $this->Auditlog_model->add_auditlog($params1);
        session_destroy();
        redirect(site_url().'landing_page/index');
    }

    function forgot_password()
    {
        if (isset($_POST['userEmail']) && !empty($_POST['userEmail']))
        {
            $this->load->library('form_validation');
            $form_reponse=$this->input->post('g-recaptcha-response');
            $url="https://www.google.com/recaptcha/api/siteverify";
            $secretkey="6LfRmzcUAAAAALyhGzTaoIa5XsHxb3MocPDbDZd_";
            $response=file_get_contents($url."?secret=".$secretkey."&response=".$form_reponse."&remoteip=".$_SERVER["REMOTE_ADDR"]);
            $dota=json_decode($response);
            //check if email is valid
            $this->form_validation->set_rules('userEmail', 'Email Addresss', 'trim|required|min_length[6]|max_length[50]|valid_email|xss_clean');
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('layouts/header');
                $this->load->view('landing_page/forgot', array('error' => 'Please supply a valid email address.'));
                $this->load->view('layouts/footer');
            }
            else
            {
                $userEmail = trim($this->input->post('userEmail'));
                $result = $this->Landing_Page_model->email_exists($userEmail);

                if($result and isset($dota->success) && $dota->success=="true")
                {
                    $this->send_reset_password_email($userEmail, $result);
                    $this->load->view('layouts/header');
                    $this->load->view('landing_page/reset_password_sent', array('userEmail'=> $userEmail));
                    $this->load->view('layouts/footer');
                }
                else
                {
                    $this->load->view('layouts/header');
                    $this->load->view('landing_page/forgot', array('error'=> 'Either your email is not registered or you did not click the recaptcha.'));
                    $this->load->view('layouts/footer');
                }
            }
        }
        else
        {
            $this->load->view('layouts/header');
            $this->load->view('landing_page/forgot');
            $this->load->view('layouts/footer');
        }
    }

    function forgot_password_form($userEmail, $email_code)
    {
        if(isset($userEmail, $email_code))
        {
            $userEmail = trim($userEmail);
            $email_hash = sha1($userEmail . $email_code);
            $verified = $this->Landing_Page_model->verify_reset_password_code($userEmail, $email_code);

            if($verified)
            {
                $this->load->view('layouts/header');
                $this->load->view('landing_page/update_password', array('email_hash' => $email_hash, 'email_code' => $email_code, 'userEmail' => $userEmail));
                $this->load->view('layouts/footer');
            }
            else
            {
               $this->load->view('layouts/header');
               $this->load->view('landing_page/forgot', array('error' => 'There was a problem with your link', 'userEmail' => $userEmail));
               $this->load->view('layouts/footer');  
            }
        }
    }



    function update_password()
    {
        if (!isset($_POST['userEmail'], $_POST['email_hash']) || $_POST['email_hash'] !== sha1($_POST['userEmail'] . $_POST['email_code']))
        {
            die("No hacking please");
        }

        $this->load->library('form_validation');

        $this->form_validation->set_rules('email_hash', 'Email Hash', 'trim|required');
        $this->form_validation->set_rules('userEmail', 'Email', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[50]|matches[password_conf]|xss_clean');
        $this->form_validation->set_rules('password_conf', 'Confirmed Password', 'trim|required|min_length[6]|max_length[50]|xss_clean');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('layouts/header');
            $this->load->view('landing_page/update_password');
            $this->load->view('layouts/footer');
        }
        else
        {
            $result = $this->Landing_Page_model->update_password();

            if($result)
            {
                $this->load->view('layouts/header');
                $this->load->view('landing_page/update_password_success');
                $this->load->view('layouts/footer');
            }
            else
            {
                $this->load->view('layouts/header');
                $this->load->view('landing_page/update_password', array('error' => 'Problem updating your password'));
                $this->load->view('layouts/footer');
            }
        }
    }

    function send_reset_password_email($userEmail, $userFN)
    {
        $this->load->library('email');
        $email_code = md5($this->config->item('salt') . $userFN);

        $this->email->set_mailtype('html');
        $this->email->from('shaunxavierpascual@yahoo.com', 'GAPC');
        $this->email->to($userEmail);
        $this->email->subject('Confirm to reset password');

        $message = '<!DOCTYPE html><html lang="en"><head></head><body>';
        $message .= '<p>Dear ' . $userFN .  ',</p>';
        $message .= '<p>We want to help you reset your password! Please<strong><a href="' . base_url() .'landing_page/forgot_password_form/' . $userEmail . '/' .$email_code . '"> click here</a></strong> to reset your password.</p>';
        $message .= '<p>If this is not you, kindly ignore this message or contact us</p>';
        $message .= 'Thank you!</p>';
        $message .= '</body></html>';

        $this->email->message($message);
        $this->email->send();
    }

    function announcements()
    {
        $this->load->model('Announcement_model');
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('announcement/index?');
        $config['total_rows'] = $this->Announcement_model->get_all_announcements_count();
        $this->pagination->initialize($config);

        $data['announcements'] = $this->Announcement_model->get_announcement();
        
        $this->load->view('landing_page/announcements',$data);
    }

    function application()
    {
        $this->load->model('Applicant_model');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('apfn','First Name','required|max_length[50]');
        $this->form_validation->set_rules('apln','Last Name','required|max_length[50]');
        $this->form_validation->set_rules('apmn','Middle Name','required|max_length[50]');
        $this->form_validation->set_rules('courseID','Course','required|max_length[50]');
        $this->form_validation->set_rules('email','Email','required|max_length[100]');
        $this->form_validation->set_rules('mobile','Mobile','required|max_length[15]');
        $this->form_validation->set_rules('birthdate','Birth date','required');
        $this->form_validation->set_rules('birthplace','Birthplace','required|max_length[150]');
        $this->form_validation->set_rules('gender','Gender','required|max_length[20]');
        $this->form_validation->set_rules('civstat','Civstat','required|max_length[20]');
        $this->form_validation->set_rules('nationality','Nationality','required|max_length[20]');
        $this->form_validation->set_rules('religion','Religion','required|max_length[20]');
        $this->form_validation->set_rules('addcity','City Address','required|max_length[150]');
        $this->form_validation->set_rules('addprov','Provincial Address','max_length[150]');
        $this->form_validation->set_rules('elemschool','Elementary','required|max_length[50]');
        $this->form_validation->set_rules('secschool','Secondary','required|max_length[50]');
        $this->form_validation->set_rules('tertschool','Tertiary','required|max_length[50]');
        $this->form_validation->set_rules('reasonleave','Reason for Leaving','required|max_length[150]');
        $this->form_validation->set_rules('guardianame','Guardianame','max_length[50]');
        $this->form_validation->set_rules('relationship','Relationship','max_length[20]');
        $this->form_validation->set_rules('fathername','Father name','required|max_length[50]');
        $this->form_validation->set_rules('fatherocc','Father occupation','required|max_length[50]');
        $this->form_validation->set_rules('mothername','Mother name','required|max_length[50]');
        $this->form_validation->set_rules('motherocc','Mother occupation','required|max_length[50]');
        $this->form_validation->set_rules('datesubmitted','Datesubmitted');
        $this->form_validation->set_rules('datemodified','Datemodified');

        if($this->form_validation->run())
        {
            $datebirth = $this->input->post('birthdate');
            $today = date("Y-m-d");
            $diff = date_diff(date_create($datebirth), date_create($today));
            $num = $diff->format('%y');
            $age = (int)$num;



            $params = array(
                'courseID' => $this->input->post('courseID'),
                'studentstat' => 'Pending',
                'status' => 'Active',
                'apfn' => $this->input->post('apfn'),
                'apln' => $this->input->post('apln'),
                'apmn' => $this->input->post('apmn'),
                'email' => $this->input->post('email'),
                'birthdate' => $datebirth,
                'age' => $age,
                'mobile' => $this->input->post('mobile'),
                'gender' => $this->input->post('gender'),
                'civstat' => $this->input->post('civstat'),
                'nationality' => $this->input->post('nationality'),
                'religion' => $this->input->post('religion'),
                'elemschool' => $this->input->post('elemschool'),
                'secschool' => $this->input->post('secschool'),
                'tertschool' => $this->input->post('tertschool'),
                'guardianame' => $this->input->post('guardianame'),
                'relationship' => $this->input->post('relationship'),
                'fathername' => $this->input->post('fathername'),
                'fatherocc' => $this->input->post('fatherocc'),
                'mothername' => $this->input->post('mothername'),
                'motherocc' => $this->input->post('motherocc'),
                'datesubmitted' => date('Y-m-d H:i:s'),
                'datemodified' => null,
                'birthplace' => $this->input->post('birthplace'),
                'addcity' => $this->input->post('addcity'),
                'addprov' => $this->input->post('addprov'),
                'reasonleave' => $this->input->post('reasonleave'),
            );

            $applicant_id = $this->Applicant_model->add_applicant($params);
            $this->load->view('layouts/header');
            $this->load->view('landing_page/application_success');
            $this->load->view('layouts/footer');
        }
        else {
            $this->load->view('landing_page/application');
        }
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


    function faculty()
    {
        $this->load->library('session');
        $data = array('error' => '');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('userPassword','Password','required|max_length[255]');
        $this->form_validation->set_rules('userIDNo','ID Number','required|max_length[50]');
        $_SESSION['errormsg'] = 0;
        $form_reponse=$this->input->post('g-recaptcha-response');
        $url="https://www.google.com/recaptcha/api/siteverify";
        $secretkey="6LfRmzcUAAAAALyhGzTaoIa5XsHxb3MocPDbDZd_";
        $response=file_get_contents($url."?secret=".$secretkey."&response=".$form_reponse."&remoteip=".$_SERVER["REMOTE_ADDR"]);
        $dota=json_decode($response);
        if($this->form_validation->run())     
        {   
            $params = array(
                'userPassword' => $this->input->post('userPassword'),
                'userIDNo' => $this->input->post('userIDNo'),);
            $login = $this->Landing_Page_model->get_user($params); 
            if(password_verify($params['userPassword'], $login['userPassword']) == FALSE){
                $this->session->set_flashdata('err_message', 'Invalid ID Number or Password!');
                $data = array('error' => 'Invalid ID Number or Password!');
                // $this->load->view('landing_page/faculty', $data);
            }
            else {
                if(isset($login['userIDNo']) and isset($login['userTypeID']) and isset($dota->success) && $dota->success=="true")
                {
                    
                    $newdata = array( 
                        'userIDNo'  => $login['userIDNo'],
                        'userFN'  => $login['userFN'], 
                        'userLN'  => $login['userLN'],  
                        'userTypeID' => $login['userTypeID'], 
                        'logged_in' => TRUE
                     );  
                     $this->session->set_userdata($newdata);

                    $idnum = $login['userIDNo'];
                    // $usertype = $login['userTypeID'];  
                    // $result = $this->Landing_Page_model->validate($idnum);

                    $paramsaudit = array(
                        'userIDNo' => $idnum,
                        'auditDesc' => 'Logged In',
                    );
                    
                    $this->Auditlog_model->add_auditlog($paramsaudit);
                    redirect('prof/index');
                    //var_dump($_SESSION['userTypeID'], $_SESSION['userID']);
                }
                else {
                    $data = array('error' => 'Invalid credentials, also make sure to validate with recaptcha');
                    // $this->load->view('landing_page/faculty', $data);
                }
            }
        }
        $data['_view'] = 'landing_page/faculty';
        $this->load->view('landing_page/faculty', $data);
        session_destroy();
    }

    function registrar()
    {
        $this->load->library('session');
        $data = array('error' => '');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('userPassword','Password','required|max_length[255]');
        $this->form_validation->set_rules('userIDNo','ID Number','required|max_length[50]');
        $_SESSION['errormsg'] = 0;
        $form_reponse=$this->input->post('g-recaptcha-response');
        $url="https://www.google.com/recaptcha/api/siteverify";
        $secretkey="6LfRmzcUAAAAALyhGzTaoIa5XsHxb3MocPDbDZd_";
        $response=file_get_contents($url."?secret=".$secretkey."&response=".$form_reponse."&remoteip=".$_SERVER["REMOTE_ADDR"]);
        $dota=json_decode($response);
        if($this->form_validation->run())     
        {   
            $params = array(
                'userPassword' => $this->input->post('userPassword'),
                'userIDNo' => $this->input->post('userIDNo'),);
            $login = $this->Landing_Page_model->get_user($params); 
            if(password_verify($params['userPassword'], $login['userPassword']) == FALSE){
                $this->session->set_flashdata('err_message', 'Invalid ID Number or Password!');
                $data = array('error' => 'Invalid ID Number or Password!');
                // $this->load->view('landing_page/faculty', $data);
            }
            else {
                if(isset($login['userIDNo']) and isset($login['userTypeID']) and isset($dota->success) && $dota->success=="true")
                {
                    
                    $newdata = array( 
                        'userIDNo'  => $login['userIDNo'],
                        'userFN'  => $login['userFN'], 
                        'userLN'  => $login['userLN'],  
                        'userTypeID' => $login['userTypeID'], 
                        'logged_in' => TRUE
                     );  
                     $this->session->set_userdata($newdata);

                    $idnum = $login['userIDNo'];
                    // $usertype = $login['userTypeID'];  
                    // $result = $this->Landing_Page_model->validate($idnum);

                    $paramsaudit = array(
                        'userIDNo' => $idnum,
                        'auditDesc' => 'Logged In',
                    );
                    redirect('reg/dashboard');
                    //var_dump($_SESSION['userTypeID'], $_SESSION['userID']);
                }
                else {
                    $data = array('error' => 'Invalid credentials, also make sure to validate with recaptcha');
                    // $this->load->view('landing_page/faculty', $data);
                }
            }
        }
        $data['_view'] = 'landing_page/registrar';
        $this->load->view('landing_page/registrar', $data);
        session_destroy();
    }

    function admin()
    {
        $data = array('error' => '');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('userPassword','Password','required|max_length[255]');
        $this->form_validation->set_rules('userIDNo','ID Number','required|max_length[50]');
        $_SESSION['errormsg'] = 0;
        $form_reponse=$this->input->post('g-recaptcha-response');
        $url="https://www.google.com/recaptcha/api/siteverify";
        $secretkey="6LfRmzcUAAAAALyhGzTaoIa5XsHxb3MocPDbDZd_";
        $response=file_get_contents($url."?secret=".$secretkey."&response=".$form_reponse."&remoteip=".$_SERVER["REMOTE_ADDR"]);
        $dota=json_decode($response);
        if($this->form_validation->run())     
        {   
            $params = array(
                'userPassword' => $this->input->post('userPassword'),
                'userIDNo' => $this->input->post('userIDNo'),);
            $login = $this->Landing_Page_model->get_user($params); 
            if(password_verify($params['userPassword'], $login['userPassword']) == FALSE){
                $this->session->set_flashdata('err_message', 'Invalid ID Number or Password!');
                $data = array('error' => 'Invalid ID Number or Password!');
                // $this->load->view('landing_page/faculty', $data);
            }
            else {
                if(isset($login['userIDNo']) and isset($login['userTypeID']) and isset($dota->success) && $dota->success=="true")
                {
                    
                    $newdata = array( 
                        'userIDNo'  => $login['userIDNo'],
                        'userFN'  => $login['userFN'], 
                        'userLN'  => $login['userLN'],  
                        'userTypeID' => $login['userTypeID'], 
                        'logged_in' => TRUE
                     );  
                     $this->session->set_userdata($newdata);

                    $idnum = $login['userIDNo'];
                    // $usertype = $login['userTypeID'];  
                    // $result = $this->Landing_Page_model->validate($idnum);

                    $paramsaudit = array(
                        'userIDNo' => $idnum,
                        'auditDesc' => 'Logged In',
                    );
                    $this->Auditlog_model->add_auditlog($paramsaudit);
                    redirect('admin/dashboard');
                    //var_dump($_SESSION['userTypeID'], $_SESSION['userID']);
                }
                else {
                    $data = array('error' => 'Invalid credentials, also make sure to validate with recaptcha');
                    // $this->load->view('landing_page/faculty', $data);
                }
            }
        }
        $data['_view'] = 'landing_page/admin';
        $this->load->view('landing_page/admin', $data);
        session_destroy();
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
