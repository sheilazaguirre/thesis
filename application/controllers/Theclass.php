<?php
 
class Theclass extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Theclass_model');
        $this->load->model('Classlist_model');
    } 
    /*
     * Listing of theclasses
     */
    function index()
    {
        $data['theclasses'] = $this->Theclass_model->get_all_theclasses();
        
        $data['_view'] = 'theclass/index';
        $this->load->view('layouts/main',$data);
    }
    /*
     * Adding a new theclass
     */
    function add()
    {   
        $data = array('error' => '');

        // $data['tableresult'] = $this->Classlist_model->getclass();
        
        
        $this->load->library('form_validation');
		$this->form_validation->set_rules('subjectID','SubjectID','required|integer');
		$this->form_validation->set_rules('facultyID','FacultyID','required|integer');
		$this->form_validation->set_rules('timeSlotID','TimeSlotID','required|integer');
		$this->form_validation->set_rules('venueID','VenueID','required|integer');
		$this->form_validation->set_rules('academicYear','AcademicYear','required|max_length[4]');
        $this->form_validation->set_rules('semester','Semester','required');
        $this->form_validation->set_rules('remarks','Remarks','required|max_length[10]');
		
		if($this->form_validation->run())     
        {   
            $studcount = $this->Theclass_model->count();
            if ($studcount >= 25 && $studcount < 49)
            {
                $params = array(
                    'subjectID' => $this->input->post('subjectID'),
                    'facultyID' => $this->input->post('facultyID'),
                    'timeSlotID' => $this->input->post('timeSlotID'),
                    'venueID' => $this->input->post('venueID'),
                    'academicYear' => $this->input->post('academicYear'),
                    'semester' => $this->input->post('semester'),
                    'remarks' => $this->input->post('remarks'),
                    'status' => 'Active',
                );
                $valresult = $this->Theclass_model->validateclass($params);
                if ($valresult === 1 ) {
                    $theclass_id = $this->Theclass_model->add_theclass($params);
                    $res = $this->Theclass_model->max();
                    $classid = (int)$res;
                    $resultclass = $this->Theclass_model->add_allclass($classid);
                    redirect('theclass/index');
                } else {
                    $this->load->model('Subject_model');
                    $data['all_subjects'] = $this->Subject_model->get_all_subjects();
                    $this->load->model('User_model');
                    $data['all_users'] = $this->User_model->get_all_faculty();
                    $this->load->model('Timeslot_model');
                    $data['all_timeslots'] = $this->Timeslot_model->get_all_timeslots();
                    $this->load->model('Venue_model');
                    $data['all_venues'] = $this->Venue_model->get_all_venues();
                    $data['error'] = "Timeslot already taken for that Room";
                    $data['_view'] = 'theclass/add';
                    $this->load->view('layouts/main',$data);
                }
                
            }
            else if ($studcount > 50)
            {
                $this->load->model('Subject_model');
                $data['all_subjects'] = $this->Subject_model->get_all_subjects();
                $this->load->model('User_model');
                $data['all_users'] = $this->User_model->get_all_faculty();
                $this->load->model('Timeslot_model');
                $data['all_timeslots'] = $this->Timeslot_model->get_all_timeslots();
                $this->load->model('Venue_model');
                $data['all_venues'] = $this->Venue_model->get_all_venues();
                $data['error'] = "The class should not exceed more than 50 student";
                $data['_view'] = 'theclass/add';
                $this->load->view('layouts/main',$data);
            }
            else
            {
                $this->load->model('Subject_model');
                $data['all_subjects'] = $this->Subject_model->get_all_subjects();
                $this->load->model('User_model');
                $data['all_users'] = $this->User_model->get_all_faculty();
                $this->load->model('Timeslot_model');
                $data['all_timeslots'] = $this->Timeslot_model->get_all_timeslots();
                $this->load->model('Venue_model');
                $data['all_venues'] = $this->Venue_model->get_all_venues();
                $data['error'] = "The class should have atleast 25 students";
                $data['_view'] = 'theclass/add';
                $this->load->view('layouts/main',$data);
            }

            
        }
        else
        {
			$this->load->model('Subject_model');
			$data['all_subjects'] = $this->Subject_model->get_all_subjects();
			$this->load->model('User_model');
			$data['all_users'] = $this->User_model->get_all_faculty();
			$this->load->model('Timeslot_model');
			$data['all_timeslots'] = $this->Timeslot_model->get_all_timeslots();
			$this->load->model('Venue_model');
			$data['all_venues'] = $this->Venue_model->get_all_venues();
            
            $data['_view'] = 'theclass/add';
            $this->load->view('layouts/main',$data);
        }
    }  
    /*
     * Editing a theclass
     */
    function edit($classID)
    {   
        // check if the theclass exists before trying to edit it
        $data['theclass'] = $this->Theclass_model->get_theclass($classID);
        
        if(isset($data['theclass']['classID']))
        {
            $this->load->library('form_validation');
			$this->form_validation->set_rules('subjectID','SubjectID','required|integer');
			$this->form_validation->set_rules('facultyID','FacultyID','required|integer');
			$this->form_validation->set_rules('timeSlotID','TimeSlotID','required|integer');
			$this->form_validation->set_rules('venueID','VenueID','required|integer');
			$this->form_validation->set_rules('academicYear','AcademicYear','required|max_length[4]');
			$this->form_validation->set_rules('semester','Semester','required|max_length[10]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'subjectID' => $this->input->post('subjectID'),
					'facultyID' => $this->input->post('facultyID'),
					'timeSlotID' => $this->input->post('timeSlotID'),
					'venueID' => $this->input->post('venueID'),
					'academicYear' => $this->input->post('academicYear'),
					'semester' => $this->input->post('semester'),
                );
                $this->Theclass_model->update_theclass($classID,$params);            
                redirect('theclass/index');
            }
            else
            {
				$this->load->model('Subject_model');
				$data['all_subjects'] = $this->Subject_model->get_all_subjects();
				$this->load->model('User_model');
				$data['all_users'] = $this->User_model->get_all_users();
				$this->load->model('Timeslot_model');
				$data['all_timeslots'] = $this->Timeslot_model->get_all_timeslots();
				$this->load->model('Venue_model');
				$data['all_venues'] = $this->Venue_model->get_all_venues();
                $data['_view'] = 'theclass/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The theclass you are trying to edit does not exist.');
    } 
    /*
     * Deleting theclass
     */
    function remove($classID)
    {
        $theclass = $this->Theclass_model->get_theclass($classID);
        // check if the theclass exists before trying to delete it
        if(isset($theclass['classID']))
        {
            $this->db->set('status', 'Archive');
            $this->Theclass_model->delete_theclass($classID);
            redirect('theclass/index');
        }
        else
            show_error('The theclass you are trying to delete does not exist.');
    }
    public function autocomplete()
    {
            // load model
            $search_data = $this->input->post('search_data');
            $result = $this->Theclass_model->get_autocomplete($search_data);
            if (!empty($result))
            {
                $studentparams = [];
                foreach ($result as $row):
                    echo "<ul style='list-style: none'><li><a onclick='inputData(".$row->userIDNo.");'>" . $row->userIDNo .'  |  '. $row->userName . "</a></li></ul>";
                endforeach;
            }
            else
            {
                echo "<ul style='list-style: none'><li>No records found ... </em> </li>";
            }
    }
    public function insert()
    {
        $idnum = $this->input->post('idnum');
        $idnumber = (int)$idnum;
        
        // // var_dump($idnumber);
        // // $idnumber = (int)$num;
        // // // if ($result->num_rows() > 0) {
        $msg = [];
        $result2 = $this->Theclass_model->validate($idnumber);
        if ($result2 === 1)
        {
            $params = array(
                'classID' => '0',
                'studentID' => $idnumber,
                'remarks' => 'Enlisted',
                'dateAdded' => date('Y-m-d'),
                );
            $result = $this->Theclass_model->add_student($params);

            if ($result)
            {
            $msg[0] = 1;
            }
        } else if ($result2 === 2)
        {
            $msg[0] = 2;
        } else {
            $msg[0] = 3;
        }
        echo json_encode($msg);   
    }
    public function showAllClasses(){
        $out = [];
        $out['result'] = $this->Classlist_model->showAllClasses();
        $out['count'] = $this->Theclass_model->count();
        echo json_encode($out);
	}
}
