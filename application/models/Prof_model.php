<?php

 
class Prof_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get prof by profID
     */
    function get_prof($profID)
    {

        return $this->db->get_where('prof',array('profID'=>$profID))->row_array();
    }
    
    /*
     * Get all prof count
     */
    function get_all_prof_count()
    {
        $this->db->from('prof');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all prof
     */
    function get_all_prof($params = array())
    {
        $this->db->join('subjects', 'subjectID');
        $this->db->order_by('profID', 'asc');
        $this->db->where('prof.status', 'Active');
        return $this->db->get('prof')->result_array();
    }
        
    /*
     * function to add new prof
     */
    function add_prof($params)
    {
        $this->db->insert('prof',$params);
        return $this->db->insert_id();
    }
    
    
    /*
     * function to delete prof
     */
    function delete_prof($profID)
    {
        $this->db->where('profID',$profID);
        return $this->db->update('prof',$params);
    }


    /*
     * Get classlist
     */
    
    function get_classlist($classID)
    {
        $this->db->select("c.classlistID, c.studentID, c.classID, CONCAT(u.userLN,', ', u.userFN) as userName");
        $this->db->from("classlist c");
        $this->db->join('users u', 'u.userIDNo = c.studentID');
        $this->db->order_by('u.userLN', 'asc');
        $this->db->where('c.classID', $classID);
        return $this->db->get()->result_array();
    }

    /*
     * Get all grades
     */
    
    function get_all_grades($classID)
    {

        $this->db->where('classID', $classID);
        return $this->db->get("grades")->result_array();
    }
    
    function add_grades($params)
    {
        $this->db->insert('grades',$params);
        return $this->db->insert_id();
    }

    
    function updategrades($studentID, $params)
    {
        $this->db->where('studentID',$studentID);
        return $this->db->update('grades',$params);
    }
    
    function add_fgrades($params)
    {
        $this->db->insert('grades',$params);
        return $this->db->insert_id();
    }
    function updatefgrades($studentID, $params)
    {
        $this->db->where('studentID',$studentID);
        return $this->db->update('grades',$params);
    }

    function updatePassword($userIDNo)
    {
        $newpass = password_hash($this->input->post('newpass'), PASSWORD_BCRYPT);
        $data = array('userPassword' => $newpass);
        return $this->db->where('userIDNo', $userIDNo)
        ->update('users', $data);
    }

    function getCurrPassword($userIDNo)
    {
        $sql = $this->db->query("SELECT userPassword FROM users WHERE userIDNo = '{$userIDNo}'");
        if($sql->num_rows() > 0)
        {
            $result = $sql->row();
            return $result->userPassword;
        }
        else
        {
            return false;
        }
    }
}
