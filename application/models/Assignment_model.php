<?php
 
class Assignment_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get assignment by assignID
     */
    function get_assignment($assignID)
    {
        return $this->db->get_where('assignments',array('assignID'=>$assignID))->row_array();
    }
        
    /*
     * Get all assignments
     */
    function get_all_assignments()
    {
        $this->db->order_by('assignID', 'asc');
        $this->db->where('status !=', 'Archived ');
        return $this->db->get('assignments')->result_array();
    }
        
    /*
     * function to add new assignment
     */
    function add_assignment($params)
    {
        $this->db->insert('assignments',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update assignment
     */
    function update_assignment($assignID,$params)
    {
        $this->db->where('assignID',$assignID);
        return $this->db->update('assignments',$params);
    }
    
    /*
     * function to delete assignment
     */
    function delete_assignment($assignID)
    {
        $this->db->where('assignID',$assignID);
        return $this->db->update('assignments',$params);
    }
}
