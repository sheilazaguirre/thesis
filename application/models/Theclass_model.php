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
        $this->db->from('classes c');
        $this->db->join('subjects s', 's.subjectID = c.subjectID', 'left');
        $this->db->join('users u', 'u.userIDNo = c.facultyID', 'left');
        $this->db->join('venues v', 'v.venueID = c.venueID', 'left');
        $this->db->join('timeslots t', 't.timeSlotID = c.timeSlotID', 'left');
        $this->db->where('c.status =', 'Active');
        return $this->db->get()->result_array();

        // $this->db->join('course', 'courseID');
        // $this->db->order_by('apid', 'asc');
        // $this->db->where('studentstat !=', 'Approved');
        // return $this->db->get('applicant')->result_array();
    }

    function get_all_theclasses_count()
    {
        $this->db->from('classes');
        return $this->db->count_all_results();
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
        // IF user exist
        if ($queryusers->num_rows() > 0)
        {
            $query = $this->db->query('SELECT * from classlist where studentID = '.$idnumber.' AND classID = 0');
            if ($query->num_rows() > 0) {
            return  2;
            // return if student exist in the table
            }
            else{
            return 1;
            // return if student does not exist
            } 
        } 
        else
        {
            // No id exist
            return 3;
        } 
    }

    function count()
    {
        //count the number of student in class
        $query = $this->db->query('SELECT COUNT(*) as StudentCount FROM classlist WHERE classID = 0');
        if ($query->num_rows() > 0)
        {
            //Returns StudentCount
            $result = $query->row();
            return $result->StudentCount;
        }
        else 
        {
            return false;
        }
    }

    function max()
    {
        $query = $this->db->query('SELECT MAX(classID) as max FROM classes');
        if ($query->num_rows() > 0)
        {
            $result = $query->row();
            return $result->max;
        }
        else 
        {
            return false;
        }
    }

    function add_allclass($classid)
    {
        $query = $this->db->query('UPDATE classlist SET classID = '.$classid.', remarks= "Enrolled" WHERE classID = 0');
    }

    function validateclass($params)
    {
        $timeslot = $params['timeSlotID'];
        $venue = $params['venueID'];
        $sem = $params['semester'];
        $acad = $params['academicYear'];

        $query = $this->db->query("SELECT * from classes where timeSlotID = $timeslot AND venueID = $venue AND semester = '$sem' AND academicYear = $acad ");
        if ($query->num_rows() > 0)
        {
            //Exist
            return 1;
        }
        else 
        {
            //Nothing exist
            return 2;
        }


    }
    

}