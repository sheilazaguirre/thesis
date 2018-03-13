<?php


class Venue_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get venue by venueID
     */
    function get_venue($venueID)
    {
        return $this->db->get_where('venues',array('venueID'=>$venueID))->row_array();
    }
    
    /*
     * Get all venues count
     */
    function get_all_venues_count()
    {
        $this->db->from('venues');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all venues
     */
    function get_all_venues($params = array())
    {
        $this->db->order_by('venueCode', 'asc');
        $this->db->where('status !=', 'Archived');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('venues')->result_array();
    }
        
    /*
     * function to add new venue
     */
    function add_venue($params)
    {
        $this->db->insert('venues',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update venue
     */
    function update_venue($venueID,$params)
    {
        $this->db->where('venueID',$venueID);
        return $this->db->update('venues',$params);
    }
    
    /*
     * function to delete venue
     */
    function delete_venue($venueID)
    {
        $this->db->where('venueID',$venueID);
        return $this->db->update('venues',$params);
    }
}
