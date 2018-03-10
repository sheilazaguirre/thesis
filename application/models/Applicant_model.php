<?php

 
class Applicant_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get applicant by apid
     */
    function get_applicant($apid)
    {
        return $this->db->get_where('applicant',array('apid'=>$apid))->row_array();
    }
        
    /*
     * Get all applicant
     */
    function get_all_applicant()
    {
        $this->db->join('course', 'courseID');
        $this->db->order_by('apid', 'asc');
        $this->db->where('studentstat !=', 'Approved');
        return $this->db->get('applicant')->result_array();
    }
        
    /*
     * function to add new applicant
     */
    function add_applicant($params)
    {
        $this->db->insert('applicant',$params);
        return $this->db->insert_id();
    }

    function add_user($params)
    {
        $this->db->insert('users', $params);
        return $this->db->insert_id();

    }

    function approve_applicant($apid, $params1)
    {
        $this->db->where('apid', $apid);
        return $this->db->update('applicant',$params1);
    }

    /*
     * function to update applicant
     */
    function update_applicant($apid,$params)
    {
        $this->db->where('apid',$apid);
        return $this->db->update('applicant',$params);

    }

    /*
     * function to delete applicant
     */
    function archive_applicant($apid)
    {
        $this->db->where('apid',$apid);
        return $this->db->update('applicant',$params);

    }
}


