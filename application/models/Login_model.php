<?php

class Login_model extends CI_Model
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
        return $this->db->get_where('users',array('userIDNo' => $params['userIDNo']))->row_array();
    }

    function getuser($userIDNo)
    {
        return $this->db->get_where('users',array('userIDNo'=>$userIDNo))->row_array();
    }


}