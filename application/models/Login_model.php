<?php
class Login_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
    * Get user by username and password
    */
    function get_user($params)
    {
        return $this->db->get_where('users', array('userIDNo' => $params['userIDNo']))->row_array();
    }
}