<?php

 
class Faculty_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get faculty by facultyID
     */
    function get_faculty($facultyID)
    {

        return $this->db->get_where('faculty',array('facultyID'=>$facultyID))->row_array();
    }
    
    /*
     * Get all faculty count
     */
    function get_all_faculty_count()
    {
        $this->db->from('faculty');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all faculty
     */
    function get_all_faculty($params = array())
    {
        $this->db->join('users', 'userID');
        $this->db->join('subjects', 'subjectID');
        $this->db->order_by('userLN', 'asc');
        $this->db->where('faculty.status', 'Active');
        return $this->db->get('faculty')->result_array();
    }
        
    /*
     * function to add new faculty
     */
    function add_faculty($params)
    {
        $this->db->insert('faculty',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update faculty
     */
    function update_faculty($facultyID,$params)
    {
        $this->db->where('facultyID',$facultyID);
        return $this->db->update('faculty',$params);
    }
    
    /*
     * function to delete faculty
     */
    function delete_faculty($facultyID)
    {
        $this->db->where('facultyID',$facultyID);
        return $this->db->update('faculty',$params);
    }
}
