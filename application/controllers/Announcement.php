<?php

class Announcement extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Announcement_model');
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
     * Listing of announcements
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('announcement/index?');
        $config['total_rows'] = $this->Announcement_model->get_all_announcements_count();
        $this->pagination->initialize($config);

        $data['announcements'] = $this->Announcement_model->get_announcement();
        
        $data['_view'] = 'announcement/index';
        $this->load->view('layouts/main',$data);
    }

    
    function add()
    {   
       $this->load->library('form_validation');

       $this->form_validation->set_rules('userID','UserID','required|integer');
       $this->form_validation->set_rules('announceTitle','AnnounceTitle','required|max_length[50]');
       $this->form_validation->set_rules('announceDetail','AnnounceDetail','required|max_length[150]');
       $this->form_validation->set_rules('announceDate','AnnounceDate','required|max_length[50]');
       
       if($this->form_validation->run())
       {
           $config['upload_path'] = './uploads/announcements';
           $config['allowed_types'] = 'jpg|png';
           $config['max_size'] = 100;
           $cofig['max_width'] = 1024;
           $config['max_height'] = 768;

           $this->load->library('upload', $config);
           $var;
           if ( ! $this->upload->do_upload())
           {
            //    $error = array('error' => $this->upload->display_errors());
               $data['error'] = "File uploaded is not supported use JPEG or PNG";
               $data['_view'] = 'announcement/add';
               $this->load->view('layouts/main',$data);
           }
           else
           {
               $data = array('upload_data' => $this->upload->data());

               $var = $this->upload->data()["file_name"];
               $params = array(
                   'userID' => $this->input->post('userID'),
                   'announceTitle' => $this->input->post('announceTitle'),
                   'announceFile' => $var,
                   'announceDetail' => $this->input->post('announceDetail'),
                   'announceDate' => $this->input->post('announceDate'),
               );
               $this->db->set('dateUploaded', 'NOW()', FALSE);
               $this->db->set('dateExpiry', 'NOW() + INTERVAL 6 Month', FALSE);
               $this->db->set('status', 'Active');
               $announce_id = $this->Announcement_model->add_announcement($params);
               $idnum = $this->session->userdata('userIDNo');
                        $paramsaudit = array(
                            'userIDNo' => $idnum,
                            'auditDesc' => 'Added announcement',
                        );
                        $this->Auditlog_model->add_auditlog($paramsaudit);
    
               redirect('announcement/index');
           }
       }
       else
       {
           $this->load->model('User_model');
           $data['all_users'] = $this->User_model->get_all_users();

           $data['_view'] = 'announcement/add';
           $this->load->view('layouts/main',$data);
       }
    }  

    /*
     * Editing a announcement
     */
    function edit($announceID)
    {   
        // check if the assignment exists before trying to edit it
        $data['announcement'] = $this->Announcement_model->getannouncement($announceID);
        
        if(isset($data['announcement']['announceID']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('userID','UserID','required|integer');
            $this->form_validation->set_rules('announceTitle','AnnounceTitle','required|max_length[50]');
            $this->form_validation->set_rules('announceDetail','AnnounceDetail','required|max_length[150]');
            $this->form_validation->set_rules('announceDate','AnnounceDate','required|max_length[50]');
		
			if($this->form_validation->run())     
            {   

                $config['upload_path'] = './uploads/announcements';
                $config['allowed_types'] = 'jpg|png';
                $config['max_size'] = 100;
                $config['max_width'] = 1024;
                $config['max_height'] = 768;
    
                $this->load->library('upload', $config);
                $var;
                if ( ! $this->upload->do_upload('filen'))
                {
                        // $error = array('error' => $this->upload->display_errors());
                        $data['error'] = "File uploaded is not supported use JPEG or PNG";
                        $data['_view'] = 'announcement/add';
                        $this->load->model('User_model');
				        $data['all_users'] = $this->User_model->get_all_users();
                        $this->load->view('layouts/main',$data);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        
                        $var = $this->upload->data()["file_name"];
                        //var_dump($var);
                        $params = array(
                            'userID' => $this->input->post('userID'),
                            'announceTitle' => $this->input->post('announceTitle'),
                            'announceFile' => $var,
                            'announceDetail' => $this->input->post('announceDetail'),
                            'announceDate' => $this->input->post('announceDate'),
                        );
                        $this->db->set('dateModified', 'NOW()', FALSE);
                        $this->Announcement_model->update_announcement($announceID,$params);
                        $idnum = $this->session->userdata('userIDNo');
                            $paramsaudit = array(
                                'userIDNo' => $idnum,
                                'auditDesc' => 'Edited announcement',
                            );
                            $this->Auditlog_model->add_auditlog($paramsaudit);            
                        redirect('announcement/index');
                }

            }
            else
            {
				$this->load->model('User_model');
				$data['all_users'] = $this->User_model->get_all_users();

                $data['_view'] = 'announcement/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The announcement you are trying to edit does not exist.');
    } 

    /*
     * Deleting assignment
     */
    function remove($announceID)
    {
        $announcement = $this->Announcement_model->getannouncement($announceID);

        // check if the assignment exists before trying to delete it
        if(isset($announcement['announceID']))
        {
            $this->db->set('status', 'Archived');
            $this->Announcement_model->delete_announcement($announceID);
            $idnum = $this->session->userdata('userIDNo');
                    $paramsaudit = array(
                        'userIDNo' => $idnum,
                        'auditDesc' => 'Deleted announcement',
                    );
                    $this->Auditlog_model->add_auditlog($paramsaudit);
            redirect('announcement/index');
        }
        else
            show_error('The announcement you are trying to delete does not exist.');
    }
    
}
