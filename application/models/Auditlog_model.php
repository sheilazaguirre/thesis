<?php

 
class Auditlog_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get auditlog by auditID
     */
    function get_auditlog($auditID)
    {
        return $this->db->get_where('auditlogs',array('auditID'=>$auditID))->row_array();
    }
        
    /*
     * Get all auditlogs
     */
    function get_all_auditlogs()
    {
        $this->db->order_by('auditID', 'asc');
        $this->db->join('users', 'userIDNo');
        return $this->db->get('auditlogs')->result_array();
    }
        
    /*
     * function to add new auditlog
     */
    function add_auditlog($paramsaudit)
    {
        $this->db->insert('auditlogs',$paramsaudit);
        return $this->db->insert_id();
    }
    
    /*
     * function to update auditlog
     */
    function update_auditlog($auditID,$params)
    {
        $this->db->where('auditID',$auditID);
        return $this->db->update('auditlogs',$params);
    }
    
    /*
     * function to delete auditlog
     */
    function delete_auditlog($auditID)
    {
        $this->db->where('auditID',$suditID);
        return $this->db->update('auditlogs',$params);
    }
}
