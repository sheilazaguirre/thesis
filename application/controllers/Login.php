<?php
if(!defined('BASEPATH')) exit('Hacking Attempt : Get Out of the system ..!');

class Login extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auditlog_model');
        $this->load->model('Login_model');        
        $this->load->model('User_model'); 
        $this->load->helper('url');
             
    }
    
    public function index()
    {
        $session = $this->session->userdata('isLogin');
        if($session == FALSE)
        {
            redirect('landing_page/index')
        }
        else
        {
            redirect('student_page/index')
        }
    }

    public function login_form()
    {
        $this->form->validation->set_rules('userIDNo', 'IDNumber', 'required');
        $this->form->validation->set_rules('userPassword', 'Password', 'required');
        $this->form->validation->set_error_delimiters('<span class="error">', '</span>');

        if($this->form->validation->run()==FALSE)
        {
            $this->load->view('landing_page/index');
        }
        else
        {
            $userIDNo = $this->input->post('userIDNo');
            $password = $this->input->post('password');
            $cek = $this->Login_Model->takeUser($userIDNo, $password, 1);

            if($cek <> 0)
            {
                $this->session->set_userdata('isLogin', TRUE);
                $this->session->set_userdata('userIDNo', $userIDNo);
                redirect('student_page/index');
            }
            else
            {

            }
?>
<script>
    alert('Failed Login: Check your ID Number and password!');
    history.go(-1);
</script>
<?php
        }
    }
}

public function logout()
{
    $this->session->sess_destroy();
    redirect('landing_page/index');
}
?>
