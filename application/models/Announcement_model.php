<?php

 
class Announcement_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get announcement by announceID
     */
     
    function get_announcement()
    {

        $query = $this->db->query(
            "SELECT a.announceID, CONCAT(u.userFN,' ', u.userLN) as userName, a.announceTitle, a.announceFile, a.announceDetail, a.announceDate, a.dateUploaded, a.dateModified, a.dateExpiry, a.status from announcements a
            INNER JOIN users u ON a.userID = u.userID
            WHERE a.status='Active'"
        );
        return $query->result_array();
    }
    function getannouncement($announceID)
    {
        return $this->db->get_where('announcements',array('announceID'=>$announceID))->row_array();
    }
    
    /*
     * Get all announcements count
     */
    function get_all_announcements_count()
    {
        $this->db->from('announcements');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all announcements
     */
    function get_all_announcements($params = array())
    {
        $this->db->order_by('announceID', 'asc');
        $this->db->where('status !=', 'Archived');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('announcements')->result_array();
    }
        
    /*
     * function to add new announcement
     */
    function add_announcement($params)
    {
        $this->db->insert('announcements',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update announcement
     */
    function update_announcement($announceID,$params)
    {
        $this->db->where('announceID',$announceID);
        return $this->db->update('announcements',$params);
    }
    
    /*
     * function to delete announcement
     */
    function delete_announcement($announceID)
    {
        $this->db->where('announceID',$announceID);
        return $this->db->update('announcements',$params);
    }
}
