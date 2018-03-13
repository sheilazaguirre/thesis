<?php
if(!defined('BASEPATH')) exit('Hacking Attempt : Get Out of the system ..!');

class Landing_Page_model extends CI_Model
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

}