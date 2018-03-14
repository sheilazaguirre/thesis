<?php

 
class Student_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get student by studentID
     */
    function get_student($studentID)
    {
        return $this->db->get_where('students',array('studentID'=>$studentID))->row_array();
    }
        
    /*
     * Get all students
     */

    function get_all_students()
    {
        $this->db->join('users', 'userID');
        $this->db->join('blocks', 'blockID');
        $this->db->order_by('studentID', 'desc');
        $this->db->where('students.status', 'Active');
        return $this->db->get('students')->result_array();
    }

    function find_course($userID){
        $this->db->select('course');
        $this->db->where('userID', $userID);
        return $this->db->get('users')->row_array();

    }
        
    /*
     * function to add new student
     */
    function add_student($params)
    {
        $this->db->insert('students',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update student
     */
    function update_student($studentID,$params)
    {
        $this->db->where('studentID',$studentID);
        return $this->db->update('students',$params);
    }
    
    /*
     * function to delete student
     */
    function delete_student($studentID)
    {
        return $this->db->delete('students',array('studentID'=>$studentID));
    }

    
}
