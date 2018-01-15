<?php

 
class Theclass_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get theclass by classID
     */
    function get_theclass($classID)
    {
        return $this->db->get_where('classes',array('classID'=>$classID))->row_array();
    }
        
    /*
     * Get all theclasses
     */
    function get_all_theclasses()
    {
        $this->db->order_by('classID', 'asc');
        return $this->db->get('classes')->result_array();
    }
        
    /*
     * function to add new theclass
     */
    function add_theclass($params)
    {
        $this->db->insert('classes',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update theclass
     */
    function update_theclass($classID,$params)
    {
        $this->db->where('classID',$classID);
        return $this->db->update('classes',$params);
    }
    
    /*
     * function to delete theclass
     */
    function delete_theclass($classID)
    {
        $this->db->where('classID',$classID);
        return $this->db->update('classes',$params);
    }
}
