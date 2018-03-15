<?php

 
class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get user by userID
     */
    function get_user($userID)
    {
        return $this->db->get_where('users',array('userID'=>$userID))->row_array();
    }

    /*
     * Get all users
     */
    function get_all_users()
    {
        $this->db->join('usertype', 'userTypeID');
        $this->db->order_by('userID', 'asc');
        $this->db->where('status', 'Active');
        return $this->db->get('users')->result_array();
    }
 
    function get_all_faculty()
    {
        $this->db->join('usertype', 'userTypeID');
        $this->db->order_by('userLN', 'asc');
        $this->db->where('status', 'Active');
        $this->db->where('usertype.userTypeID', '2');
        return $this->db->get('users')->result_array();
    }

    function get_all_student()
    {
        $this->db->join('usertype', 'userTypeID');
        $this->db->order_by('userLN', 'asc');
        $this->db->where('status', 'Active');
        $this->db->where('usertype.userTypeID', '3');
        return $this->db->get('users')->result_array();
    }



    /*
     * function to add new user
     */
    function add_user($params)
    {
        $this->db->insert('users',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update user
     */
    function update_user($userID,$params)
    {
        $this->db->where('userID',$userID);
        return $this->db->update('users',$params);
    }
    
    /*
     * function to delete user
     */
    function delete_user($userID)
    {
        $this->db->where('userID',$userID);
        return $this->db->update('users',$params);
    }

    function validate($params)
    {
        $id = $params['userIDNo'];
        $query = $this->db->query("SELECT userIDNo from users where userIDNo = $id");
        if ($query->num_rows() > 0)
        {
            return 1;
        }
        else 
        {
            //Nothing exist
            return 2;
        }
    }
}
