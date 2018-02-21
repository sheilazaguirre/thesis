<?php

 
class Landing_Page extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function __construct()
    {
        parent::__construct();
    }

    public function takeUser($userIDNo, $password, $status)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('userIDNo', $userIDNo);
        $this->db->where('password', $password);
        $this->db->where('status', $status);
        $query = $this->db->get();
        return $query->num_rows();        
    }

    public function userData($userIDNo)
    {
        $this->db->select('userIDNo');
        $this->db->select('');
                
    }

}
?>