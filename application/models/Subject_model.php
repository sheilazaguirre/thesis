<?php

 
class Subject_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get subject by subjectID
     */
    function get_subject($subjectID)
    {
        return $this->db->get_where('subjects',array('subjectID'=>$subjectID))->row_array();
    }
    
    /*
     * Get all subjects count
     */
    function get_all_subjects_count()
    {
        $this->db->from('subjects');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all subjects
     */
    function get_all_subjects($params = array())
    {
        $this->db->join('course', 'courseID');
        $this->db->order_by('subjectCode', 'asc');
        $this->db->where('subjects.status !=', 'Archived');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('subjects')->result_array();
    }
        
    /*
     * function to add new subject
     */
    function add_subject($params)
    {
        $this->db->insert('subjects',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update subject
     */
    function update_subject($subjectID,$params)
    {
        $this->db->where('subjectID',$subjectID);
        return $this->db->update('subjects',$params);
    }
    
    /*
     * function to delete subject
     */
    function delete_subject($subjectID)
    {
        $this->db->where('subjectID',$subjectID);
        return $this->db->update('subjects',$params);
    }
}
