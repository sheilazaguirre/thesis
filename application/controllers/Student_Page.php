<?php
if(!defined('BASEPATH')) exit('Hacking Attempt : Get Out of the system ..!');
 
class Student_Page extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
    } 

    /*
     * Listing of prof
     */
    public function index()
    {
        $this->load->library('session');
        // $params['limit'] = RECORDS_PER_PAGE; 
        // $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        // $config = $this->config->item('pagination');
        // $config['base_url'] = site_url('student_page/index?');
        // $this->pagination->initialize($config);

        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('userTypeID') == 3)
        {
            $data['fn'] = $this->session->userdata('userFN');
            $data['ln'] = $this->session->userdata('userLN');
            $this->load->view('student_page/index',$data);
        }
        else
        {
            redirect('landing_page/index');
        }

    }

    function account()
    {
        $this->load->view('student_page/account');
    }

    function updatepwd()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('password', 'Current Password', 'required|alpha_numeric|min_length[6]|max_length[20]');
        $this->form_validation->set_rules('newpass', 'New Password', 'required|alpha_numeric|min_length[6]|max_length[20]');
        $this->form_validation->set_rules('confpass', 'Confirm Password', 'required|alpha_numeric|min_length[6]|max_length[20]');

        if($this->form_validation->run())
        {
            $cur_password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
            $new_password = $this->input->post('newpass');
            $con_password = $this->input->post('confpass');
            $this->load->model('Student_Page_model');
            $userIDNo = $_SESSION['userIDNo'];
            $passwd = $this->Student_Page_model->getCurrPassword($userIDNo);
            if($passwd == $cur_password)
            {
                if($new_password == $conf_password)
                {
                    if ($this->queries->updatePassword($userIDNo)) 
                    {
                        echo "Password updated successfully";
                    }
                    else
                    {
                        echo "Failed to update password";
                    }

                }
                else
                {
                    echo "New password & Confirm doesn't match";
                }

            } 
            else
            {
                echo "Current Password does not match";
            }
        }
        else
        {
            echo validation_errors();

        }
    }

    function schedule()
    {
        // if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('userTypeID') == 3)
        // {
        //     $data['fn'] = $this->session->userdata('userFN');
        //     $data['ln'] = $this->session->userdata('userLN');
        //     $this->load->view('student_page/schedule',$data);
        // }
        // else
        // {
        //     redirect('landing_page/index');
        // }
    }

    function grades()
    {
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('userTypeID') == 3)
        {
            $data['fn'] = $this->session->userdata('userFN');
            $data['ln'] = $this->session->userdata('userLN');
            $this->load->view('student_page/grades',$data);
        }
        else
        {
            redirect('landing_page/index');
        }
    }

    function lessons()
    {  
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('userTypeID') == 3)
        {
            $data['fn'] = $this->session->userdata('userFN');
            $data['ln'] = $this->session->userdata('userLN');
            $this->load->view('student_page/lessons',$data);
        }
        else
        {
            redirect('landing_page/index');
        }
    }

    function assignments()
    {
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('userTypeID') == 3)
        {
            $data['fn'] = $this->session->userdata('userFN');
            $data['ln'] = $this->session->userdata('userLN');
            $this->load->view('student_page/assignments',$data);
        }
        else
        {
            redirect('landing_page/index');
        }
        
    }

    function account()
    {
        $this->load->view('student_page/account');
    }

    function updatepwd()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('password', 'Current Password', 'required|alpha_numeric|min_length[6]|max_length[20]');
        $this->form_validation->set_rules('newpass', 'New Password', 'required|alpha_numeric|min_length[6]|max_length[20]');
        $this->form_validation->set_rules('confpass', 'Confirm Password', 'required|alpha_numeric|min_length[6]|max_length[20]');

        if($this->form_validation->run())
        {
            $cur_password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
            $new_password = $this->input->post('newpass');
            $con_password = $this->input->post('confpass');
            $this->load->model('Student_Page_model');
            $userIDNo = $_SESSION['userIDNo'];
            $passwd = $this->Student_Page_model->getCurrPassword($userIDNo);
            if($passwd == $cur_password)
            {
                if($new_password == $conf_password)
                {
                    if ($this->queries->updatePassword($userIDNo)) 
                    {
                        echo "Password updated successfully";
                    }
                    else
                    {
                        echo "Failed to update password";
                    }

                }
                else
                {
                    echo "New password & Confirm doesn't match";
                }

            } 
            else
            {
                echo "Current Password does not match";
            }
        }
        else
        {
            echo validation_errors();

        }
    }


    
}
