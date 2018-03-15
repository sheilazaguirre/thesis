<?php

class Reg_Announcement extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Announcement_model');
        $this->load->model('Auditlog_model');

        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('userTypeID') == 4)
        {
            $data['fn'] = $this->session->userdata('userFN');
            $data['ln'] = $this->session->userdata('userLN');
            $data['userID'] = $this->session->userdata('userIDNo');
            $data['_view'] = 'registrar_page/announcement/index';
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
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('userTypeID') == 4)
        {
            $data['fn'] = $this->session->userdata('userFN');
            $data['ln'] = $this->session->userdata('userLN');
            $data['userID'] = $this->session->userdata('userIDNo');
            $data['announcements'] = $this->Announcement_model->get_announcement();
            $data['_view'] = 'registrar_page/announcement/index';
            $this->load->view('layouts/reg',$data);
        }
        else
        {
            redirect('landing_page/index');
        }
        // $params['limit'] = RECORDS_PER_PAGE; 
        // $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        // $config = $this->config->item('pagination');
        // $config['base_url'] = site_url('announcement/index?');
        // $config['total_rows'] = $this->Announcement_model->get_all_announcements_count();
        // $this->pagination->initialize($config);

        
      
    }

    

    /*
     * Adding a new announcement
     */

    // function do_upload(){
    //     $config['upload_path'] = 'uploads/files/';
    //     $config['allowed_types'] = 'jpg|jpeg|png|gif|docx|pdf|txt';
    //     $config['file_name'] = $_FILES['filen']['name'];
        
    //     //Load upload library and initialize configuration
    //     $this->load->library('upload',$config);
    //     $this->upload->initialize($config);
        
    //     if($this->upload->do_upload('filen')){
    //         $uploadData = $this->upload->data();
    //         $announceFile = $uploadData['file_name'];
    //     }else{
    //         $announceFile = 'abc';
    //     }
    // } 
    
    function add()
    {   
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('userTypeID') == 4)
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
           if (! $this->upload->do_upload('filen'))
           {
               $data['error'] = "File uploaded is not supported use JPEG or PNG";
               $data['_view'] = 'registrar_page/announcement/add';
               $this->load->view('layouts/reg',$data);

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
               redirect('reg_announcement/index');
           }

       }
       
        
       else
       {
           $this->load->model('User_model');
           $data['all_users'] = $this->User_model->get_all_users();

           $data['_view'] = 'registrar_page/announcement/add';
           $data['fn'] = $this->session->userdata('userFN');
           $data['ln'] = $this->session->userdata('userLN');
           $data['userID'] = $this->session->userdata('userIDNo');
           $this->load->view('layouts/reg',$data);
       }
       
            
        }
        else
        {
            redirect('landing_page/index');
        }
       
    }  

    /*
     * Editing a announcement
     */
    function edit($announceID)
    {   
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('userTypeID') == 4)
        {
        $data['announcement'] = $this->Announcement_model->getannouncement($announceID);
        $data['userID'] = $this->session->userdata('userIDNo');
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
                    $data['error'] = "File uploaded is not supported use JPEG or PNG";
                    $data['_view'] = 'registrar_page/announcement/add';
                    $this->load->view('layouts/reg',$data);
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
                            
                                      
                            redirect('reg_announcement/index');
                }

            }
            else
            {
                $this->load->model('User_model');
                $data['all_users'] = $this->User_model->get_all_users();

                $data['_view'] = 'registrar_page/announcement/edit';
                $this->load->view('layouts/reg',$data);
            }
        }
        else
            show_error('The announcement you are trying to edit does not exist.');
            
        }
        else
        {
            redirect('landing_page/index');
        }
        // check if the assignment exists before trying to edit it
        
        
        
    } 

    /*
     * Deleting assignment
     */
    function remove($announceID)
    {
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('userTypeID') == 4)
        {
            $announcement = $this->Announcement_model->getannouncement($announceID);
            $data['userID'] = $this->session->userdata('userIDNo');
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
                redirect('reg_announcement/index');
                
            }
            else
                show_error('The announcement you are trying to delete does not exist.');
                
        }
        else
        {
            redirect('landing_page/index');
        }
        
      }
        

        // check if the assignment exists before trying to delete it
        
    
}
