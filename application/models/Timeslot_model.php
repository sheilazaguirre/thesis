<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
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
        $this->db->order_by('timeSlotID', 'desc');
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
        return $this->db->delete('timeslots',array('timeSlotID'=>$timeSlotID));
    }
}
