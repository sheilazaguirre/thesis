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

}