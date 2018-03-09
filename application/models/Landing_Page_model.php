<?php
if(!defined('BASEPATH')) exit('Hacking Attempt : Get Out of the system ..!');

class Landing_Page_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
    * Get user by userIDNo and password
    */
    function get_user($params = array())
    {
        return $this->db->get_where('users', array('userIDNo' => $params['userIDNo']))->row_array();
    }

    function getusers($userIDNo)
    {
        return $this->db->get_where('users',array('userIDNo'=>$userIDNo))->row_array();
    }

    function email_exists($userEmail)
    {
        $sql = "SELECT userFN, userEmail FROM users WHERE userEmail = '{$userEmail}' LIMIT 1";
        $result = $this->db->query($sql);
        $row = $result->row();

        return ($result->num_rows() === 1 && $row->userEmail) ? $row->userFN : false;
    }

    function verify_reset_password_code($userEmail, $code)
    {
        $sql = "SELECT userFN, userEmail FROM users WHERE userEmail = '{$userEmail}' LIMIT 1";
        $result = $this->db->query($sql);
        $row = $result->row();

        if($result->num_rows() === 1)
        {
            return ($code == md5($this->config->item('salt') . $row->userFN)) ? true : false;
        }
        else
        {
            return false;
        }
    }

    function update_password()
    {
        $email = $this->input->post('userEmail');
        $password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);

        $sql = "UPDATE users SET userPassword = '{$password}' WHERE userEmail = '{$email}' LIMIT 1";
        $this->db->query($sql);

        if($this->db->affected_rows() === 1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    // function validate($idnumber)
    // {
    //     $valuser = $this->db->query('SELECT userTypeID FROM users where userIDNo = '.$idnumber.'');

    
    // }

}