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
}
