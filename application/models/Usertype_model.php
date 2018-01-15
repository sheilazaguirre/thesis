<?php

 
class Usertype_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get usertype by userTypeID
     */
    function get_usertype($userTypeID)
    {
        return $this->db->get_where('usertype',array('userTypeID'=>$userTypeID))->row_array();
    }
        
    /*
     * Get all usertype
     */
    function get_all_usertype()
    {
        $this->db->order_by('userTypeID', 'asc');
        return $this->db->get('usertype')->result_array();
    }
        
    /*
     * function to add new usertype
     */
    function add_usertype($params)
    {
        $this->db->insert('usertype',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update usertype
     */
    function update_usertype($userTypeID,$params)
    {
        $this->db->where('userTypeID',$userTypeID);
        return $this->db->update('usertype',$params);
    }
    
    /*
     * function to delete usertype
     */
    function delete_usertype($userTypeID)
    {
        return $this->db->delete('usertype',array('userTypeID'=>$userTypeID));
    }
}
