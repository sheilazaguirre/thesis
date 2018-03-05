<?php
if(!defined('BASEPATH')) exit('Hacking Attempt : Get Out of the system ..!');

class Login_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    /*
    * Get user by userIDNo and password
    */
    public function takeUser($userIDNo, $password, $status)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('userIDNo', $userIDNo);
        $this->db->where('userPassword', $password);
        $this->db->where('status', $status);
        $query = $this->db->get();
        return $query->num_rows();                        
    }

    public function userData($userIDNo)
    {
        $this->db->select('userIDNo');
        $this->db->where('userIDNo', $userIDNo);
        $query = $this->db->get('users');
        return $query->row();
    }

}