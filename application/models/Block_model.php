<?php

 
class Block_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get block by blockID
     */
    function get_block($blockID)
    {
        return $this->db->get_where('blocks',array('blockID'=>$blockID))->row_array();
    }
        
    /*
     * Get all blocks
     */
    function get_all_blocks()
    {
        $this->db->order_by('blockID', 'asc');
        return $this->db->get('blocks')->result_array();
    }
        
    /*
     * function to add new block
     */
    function add_block($params)
    {
        $this->db->insert('blocks',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update block
     */
    function update_block($blockID,$params)
    {
        $this->db->where('blockID',$blockID);
        return $this->db->update('blocks',$params);
    }
    
    /*
     * function to delete block
     */
    function delete_block($blockID)
    {
        $this->db->where('blockID',$blockID);
        return $this->db->update('blocks',$params);
    }
}
