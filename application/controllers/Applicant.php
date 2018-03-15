<?php

class Applicant extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Applicant_model');
        $this->load->model('Auditlog_model');

        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('userTypeID') == 1)
        {
            $data['fn'] = $this->session->userdata('userFN');
            $data['ln'] = $this->session->userdata('userLN');
            
        }
        else
        {
            redirect('landing_page/index');
        }
    }

    /*
     * Listing of applicant
     */
    function index()
    {
        $data['applicant'] = $this->Applicant_model->get_all_applicant();

        $data['_view'] = 'applicant/index';
        $this->load->view('layouts/main',$data);
    }


    /*
     * Adding a new applicant
     */
    function add()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('apfn','First Name','required|max_length[50]');
        $this->form_validation->set_rules('apln','Last Name','required|max_length[50]');
        $this->form_validation->set_rules('apmn','Middle Name','required|max_length[50]');
        $this->form_validation->set_rules('courseID','Course','required|max_length[50]');
        $this->form_validation->set_rules('email','Email','required|max_length[100]');
        $this->form_validation->set_rules('mobile','Mobile','required|max_length[15]');
        $this->form_validation->set_rules('birthdate','Birth date','required');
        $this->form_validation->set_rules('birthplace','Birthplace','required|max_length[150]');
        $this->form_validation->set_rules('gender','Gender','required|max_length[20]');
        $this->form_validation->set_rules('civstat','Civstat','required|max_length[20]');
        $this->form_validation->set_rules('nationality','Nationality','required|max_length[20]');
        $this->form_validation->set_rules('religion','Religion','required|max_length[20]');
        $this->form_validation->set_rules('addcity','City Address','required|max_length[150]');
        $this->form_validation->set_rules('addprov','Provincial Address','max_length[150]');
        $this->form_validation->set_rules('elemschool','Elementary','required|max_length[50]');
        $this->form_validation->set_rules('secschool','Secondary','required|max_length[50]');
        $this->form_validation->set_rules('tertschool','Tertiary','required|max_length[50]');
        $this->form_validation->set_rules('reasonleave','Reason for Leaving','required|max_length[150]');
        $this->form_validation->set_rules('guardianame','Guardianame','max_length[50]');
        $this->form_validation->set_rules('relationship','Relationship','max_length[20]');
        $this->form_validation->set_rules('fathername','Father name','required|max_length[50]');
        $this->form_validation->set_rules('fatherocc','Father occupation','required|max_length[50]');
        $this->form_validation->set_rules('mothername','Mother name','required|max_length[50]');
        $this->form_validation->set_rules('motherocc','Mother occupation','required|max_length[50]');
        $this->form_validation->set_rules('datesubmitted','Datesubmitted');
        $this->form_validation->set_rules('datemodified','Datemodified');
        $this->form_validation->set_rules('studentstat','Student status','required|max_length[20]');

        if($this->form_validation->run())
        {
            $datebirth = $this->input->post('birthdate');
            $today = date("Y-m-d");
            $diff = date_diff(date_create($datebirth), date_create($today));
            $num = $diff->format('%y');
            $age = (int)$num;



            $params = array(
                'courseID' => $this->input->post('courseID'),
                'studentstat' => $this->input->post('studentstat'),
                'status' => 'Active',
                'apfn' => $this->input->post('apfn'),
                'apln' => $this->input->post('apln'),
                'apmn' => $this->input->post('apmn'),
                'email' => $this->input->post('email'),
                'birthdate' => $datebirth,
                'age' => $age,
                'mobile' => $this->input->post('mobile'),
                'gender' => $this->input->post('gender'),
                'civstat' => $this->input->post('civstat'),
                'nationality' => $this->input->post('nationality'),
                'religion' => $this->input->post('religion'),
                'elemschool' => $this->input->post('elemschool'),
                'secschool' => $this->input->post('secschool'),
                'tertschool' => $this->input->post('tertschool'),
                'guardianame' => $this->input->post('guardianame'),
                'relationship' => $this->input->post('relationship'),
                'fathername' => $this->input->post('fathername'),
                'fatherocc' => $this->input->post('fatherocc'),
                'mothername' => $this->input->post('mothername'),
                'motherocc' => $this->input->post('motherocc'),
                'datesubmitted' => date('Y-m-d H:i:s'),
                'datemodified' => null,
                'birthplace' => $this->input->post('birthplace'),
                'addcity' => $this->input->post('addcity'),
                'addprov' => $this->input->post('addprov'),
                'reasonleave' => $this->input->post('reasonleave'),
            );

            $applicant_id = $this->Applicant_model->add_applicant($params);
            $idnum = $this->session->userdata('userIDNo');
                    $paramsaudit = array(
                        'userIDNo' => $idnum,
                        'auditDesc' => 'Added Applicant',
                    );
                    $this->Auditlog_model->add_auditlog($paramsaudit);
            redirect('applicant/index');
        }
        else {
            $data['_view'] = 'applicant/add';
            $this->load->view('layouts/main', $data);
        }
    }

    function adduser($apid){
        $applicant = $this->Applicant_model->get_applicant($apid);


        // check if the applicant exists before trying to delete it
        if(isset($applicant['apid']))
        {

            $params = array(
                'userTypeID' => '3',
                'status' => 'Active',
                'gender' => $applicant['gender'],
                'userPassword' => password_hash('gapcmypassword', PASSWORD_BCRYPT),
                'userIDNo' => '11810051',
                'userLN' => $applicant['apln'],
                'userFN' => $applicant['apfn'],
                'userMN' => $applicant['apmn'],
                'userEmail' => $applicant['email'],
                'userMobile' => $applicant['mobile'],
                'birthdate' => $applicant['birthdate'],
                'courseID' => $applicant['courseID'],
                'age' => $applicant['age'],
                'birthplace' => $applicant['birthplace'],
                'civstat' => $applicant['civstat'],
                'nationality' => $applicant['nationality'],
                'religion' => $applicant['religion'],
                'elemschool' => $applicant['elemschool'],
                'secschool' => $applicant['secschool'],
                'tertschool' => $applicant['tertschool'],
                'guardian' => $applicant['guardianame'],
                'relation' => $applicant['relationship'],
                'fathername' => $applicant['fathername'],
                'fatherocc' => $applicant['fatherocc'],
                'mothername' => $applicant['mothername'],
                'motherocc' => $applicant['motherocc'],
                'addcity' => $applicant['addcity'],
                'addprov' => $applicant['addprov'],
                'dateadded' => date('Y-m-d H:i:s'),
                'datemodified' => null,
            );

            $params1 = array (
                'status' => 'Closed',
                'studentstat' => 'Approved',
            );

            $this->Applicant_model->approve_applicant($apid, $params1);
            $this->Applicant_model->add_user($params);
            $idnum = $this->session->userdata('userIDNo');
                    $paramsaudit = array(
                        'userIDNo' => $idnum,
                        'auditDesc' => 'Added student from applicant',
                    );
                    $this->Auditlog_model->add_auditlog($paramsaudit);
            redirect('user/index');
        }
        else
            show_error('The applicant you are trying to insert does not exist.');
    }



    /*
     * Editing a applicant
     */
    function edit($apid)
    {
        // check if the applicant exists before trying to edit it
        $data['applicant'] = $this->Applicant_model->get_applicant($apid);

        if(isset($data['applicant']['apid']))
        {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('apfn','First Name','required|max_length[50]');
            $this->form_validation->set_rules('apln','Last Name','required|max_length[50]');
            $this->form_validation->set_rules('apmn','Middle Name','required|max_length[50]');
            $this->form_validation->set_rules('courseID','Course','required|max_length[50]');
            $this->form_validation->set_rules('email','Email','required|max_length[100]|valid_email');
            $this->form_validation->set_rules('mobile','Mobile','required|max_length[15]');
            $this->form_validation->set_rules('birthdate','Birth date','required');
            $this->form_validation->set_rules('age','Age','required');
            $this->form_validation->set_rules('birthplace','Birthplace','required|max_length[150]');
            $this->form_validation->set_rules('gender','Gender','required|max_length[20]');
            $this->form_validation->set_rules('civstat','Civstat','required|max_length[20]');
            $this->form_validation->set_rules('nationality','Nationality','required|max_length[20]');
            $this->form_validation->set_rules('religion','Religion','required|max_length[20]');
            $this->form_validation->set_rules('addcity','City Address','required|max_length[150]');
            $this->form_validation->set_rules('elemschool','Elementary','required|max_length[50]');
            $this->form_validation->set_rules('secschool','Secondary','required|max_length[50]');
            $this->form_validation->set_rules('tertschool','Tertiary','required|max_length[50]');
            $this->form_validation->set_rules('reasonleave','Reason for Leaving','required|max_length[150]');
            $this->form_validation->set_rules('guardianame','Guardian name','max_length[50]');
            $this->form_validation->set_rules('relationship','Relationship','max_length[20]');
            $this->form_validation->set_rules('fathername','Father Name','required|max_length[50]');
            $this->form_validation->set_rules('fatherocc','Father Occupation','required|max_length[50]');
            $this->form_validation->set_rules('mothername','Mother name','required|max_length[50]');
            $this->form_validation->set_rules('motherocc','Mother Occupation','required|max_length[50]');
            $this->form_validation->set_rules('studentstat','Student Status ','required|max_length[20]');
            $this->form_validation->set_rules('status','Status','required|max_length[20]');

            if($this->form_validation->run())
            {

                $params = array(
                    'courseID' => $this->input->post('courseID'),
                    'studentstat' => $this->input->post('studentstat'),
                    'status' => $this->input->post('status'),
                    'apfn' => $this->input->post('apfn'),
                    'apln' => $this->input->post('apln'),
                    'apmn' => $this->input->post('apmn'),
                    'email' => $this->input->post('email'),
                    'mobile' => $this->input->post('mobile'),
                    'birthdate' => $this->input->post('birthdate'),
                    'age' => $this->input->post('age'),
                    'birthplace' => $this->input->post('birthplace'),
                    'gender' => $this->input->post('gender'),
                    'civstat' => $this->input->post('civstat'),
                    'nationality' => $this->input->post('nationality'),
                    'religion' => $this->input->post('religion'),
                    'addcity' => $this->input->post('addcity'),
                    'addprov' => $this->input->post('addprov'),
                    'elemschool' => $this->input->post('elemschool'),
                    'secschool' => $this->input->post('secschool'),
                    'tertschool' => $this->input->post('tertschool'),
                    'reasonleave' => $this->input->post('reasonleave'),
                    'guardianame' => $this->input->post('guardianame'),
                    'relationship' => $this->input->post('relationship'),
                    'fathername' => $this->input->post('fathername'),
                    'fatherocc' => $this->input->post('fatherocc'),
                    'mothername' => $this->input->post('mothername'),
                    'motherocc' => $this->input->post('motherocc'),
                    'datemodified' => date('Y-m-d H:i:s'),

                );

                $this->Applicant_model->update_applicant($apid,$params);
                $idnum = $this->session->userdata('userIDNo');
                    $paramsaudit = array(
                        'userIDNo' => $idnum,
                        'auditDesc' => 'Edited Applicant',
                    );
                $this->Auditlog_model->add_auditlog($paramsaudit);
                redirect('applicant/index');
            }
            else
            {
                $data['_view'] = 'applicant/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The applicant you are trying to edit does not exist.');
    }

    /*
     * Deleting applicant
     */
    function remove($apid)
    {
        $applicant = $this->Applicant_model->get_applicant($apid);

        // check if the applicant exists before trying to delete it
        if(isset($applicant['apid']))
        {
            $this->db->set('status', 'Archived');
            $this->Applicant_model->archive_applicant($apid, $params);
            $idnum = $this->session->userdata('userIDNo');
                    $paramsaudit = array(
                        'userIDNo' => $idnum,
                        'auditDesc' => 'Deleted applicant',
                    );
                    $this->Auditlog_model->add_auditlog($paramsaudit);
            redirect('applicant/index');
        }
        else
            show_error('The applicant you are trying to delete does not exist.');
    }

}

