<?php

 
class Timeslot_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get timeslot by timeSlotID
     */
    function get_timeslot($timeSlotID)
    {
        return $this->db->get_where('timeslots',array('timeSlotID'=>$timeSlotID))->row_array();
    }
        
    /*
     * Get all timeslots
     */
    function get_all_timeslots()
    {
        $this->db->order_by('timeSlotID', 'asc');
        $this->db->where('status !=', 'Archived');
        return $this->db->get('timeslots')->result_array();
    }
        
    /*
     * function to add new timeslot
     */
    function add_timeslot($params)
    {
        $this->db->insert('timeslots',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update timeslot
     */
    function update_timeslot($timeSlotID,$params)
    {
        $this->db->where('timeSlotID',$timeSlotID);
        return $this->db->update('timeslots',$params);
    }
    
    /*
     * function to delete timeslot
     */
    function delete_timeslot($timeSlotID)
    {
        $this->db->where('timeSlotID',$timeSlotID);
        return $this->db->update('timeslots',$params);
    }
}
