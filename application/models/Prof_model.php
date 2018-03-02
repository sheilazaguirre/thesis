<?php

 
class Prof_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get prof by profID
     */
    function get_prof($profID)
    {

        return $this->db->get_where('prof',array('profID'=>$profID))->row_array();
    }
    
    /*
     * Get all prof count
     */
    function get_all_prof_count()
    {
        $this->db->from('prof');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all prof
     */
    function get_all_prof($params = array())
    {
        $this->db->join('subjects', 'subjectID');
        $this->db->order_by('profID', 'asc');
        $this->db->where('prof.status', 'Active');
        return $this->db->get('prof')->result_array();
    }
        
    /*
     * function to add new prof
     */
    function add_prof($params)
    {
        $this->db->insert('prof',$params);
        return $this->db->insert_id();
    }
    
    
    /*
     * function to delete prof
     */
    function delete_prof($profID)
    {
        $this->db->where('profID',$profID);
        return $this->db->update('prof',$params);
    }


    /*
     * Get classlist
     */
    
    function get_classlist($params = array())
    {
        $this->db->select("c.classlistID,c.studentID, c.classID, CONCAT(u.userFN,' ', u.userLN) as userName, g.gradeID, g.grade, g.remarks, g.status");
        $this->db->from("classlist c");
        $this->db->join('users u', 'u.userIDNo = c.studentID');
        $this->db->join('grades g', 'g.studentID = c.studentID', "left");
        $this->db->order_by('u.userLN', 'asc');
        $this->db->where('c.classID', 1);
        return $this->db->get()->result_array();
    }

    /*
     * Get all grades
     */
    
    function get_all_grades($classID = NULL)
    {
        $this->db->where('classID', 1);
        return $this->db->get("grades")->result_array();
    }
    
    function add_grades($params)
    {
        $this->db->insert('grades',$params);
        return $this->db->insert_id();
    }

    function updategrades($studentID, $params)
    {
        $this->db->where('studentID',$studentID);
        return $this->db->update('grades',$params);
    }

    
}
