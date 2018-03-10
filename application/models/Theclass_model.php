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
    public function get_autocomplete($search_data)
    {
            $this->db->select('u.userIDNo, CONCAT(u.userLN, ", ", u.userFN) AS userName');
            $this->db->or_like('userIDNo', $search_data);
            $this->db->where('userTypeID', 3);
            $this->db->or_like('userLN', $search_data);
            $this->db->or_like('userFN', $search_data);
            return $this->db->get('users u', 5)->result();
    }

    function add_student($params)
    {
        $this->db->insert('classlist',$params);
        if ($this->db->affected_rows() > 0 )
        {
            return true;
        }else {
            return false;
        }
    
    }

    function validate($idnumber)
    {
        // $this->db->select('studentID');
        // $where = array('studentID' => $idnumber, 'classID' => 0);
        // $this->db->where($where);
        
        $queryusers = $this->db->query('SELECT * from users where userIDNo = '.$idnumber.' AND userTypeID = 3');
        if ($queryusers->num_rows() > 0)
        {
            $query = $this->db->query('SELECT * from classlist where studentID = '.$idnumber.' AND classID = 0');
            if ($query->num_rows() > 0) {
            return  2;
            }
            else{
            return 1;
            } 
        } 
        else
        {
            return 3;
        } 
    }

}