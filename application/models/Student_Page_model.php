<?php
if(!defined('BASEPATH')) exit('Hacking Attempt : Get Out of the system ..!');

class Student_Page_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function get_lesson($lessonID)
    {
        return $this->db->get_where('lessons',array('lessonID'=>$lessonID))->row_array();
    }
    
    function get_all_lessons()
    {
        $this->db->order_by('lessonID', 'asc');
        $this->db->where('status !=', 'Archived');
        $this->db->where('studentID =', '11810025');
        return $this->db->get('lessons')->result_array();
    }

    function getPassword($userIDNo)
    {
        return $this->db->get_where('users',array('userIDNo'=>$userIDNo))->row_array();
    }

    function updatePassword($userIDNo)
    {
        $newpass = password_hash($this->input->post('newpass'), PASSWORD_BCRYPT);
        $data = array('userPassword' => $newpass);
        return $this->db->where('userIDNo', $userIDNo)
        ->update('users', $data);
    }

    function getCurrPassword($userIDNo)
    {
        $sql = $this->db->query("SELECT userPassword FROM users WHERE userIDNo = '{$userIDNo}'");
        if($sql->num_rows() > 0)
        {
            $result = $sql->row();
            return $result->userPassword;
        }
        else
        {
            return false;
        }
    }

}