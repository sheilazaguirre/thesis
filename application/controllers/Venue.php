<?php

 
class Venue extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Venue_model');
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
     * Listing of venues
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('venue/index?');
        $config['total_rows'] = $this->Venue_model->get_all_venues_count();
        $this->pagination->initialize($config);

        $data['venues'] = $this->Venue_model->get_all_venues($params);
        
        $data['_view'] = 'venue/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new venue
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('venueCode','VenueCode','required|max_length[10]');
		$this->form_validation->set_rules('venueName','VenueName','required|max_length[100]');
		$this->form_validation->set_rules('venueType','VenueType','required|max_length[50]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'venueType' => $this->input->post('venueType'),
				'venueCode' => $this->input->post('venueCode'),
				'venueName' => $this->input->post('venueName'),
            );
            $this->db->set('status', 'Active');
            $venue_id = $this->Venue_model->add_venue($params);
            $idnum = $this->session->userdata('userIDNo');
                        $paramsaudit = array(
                            'userIDNo' => $idnum,
                            'auditDesc' => 'Successfully added a new venue',
                        );
            redirect('venue/index');
        }
        else
        {            
            $data['_view'] = 'venue/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a venue
     */
    function edit($venueID)
    {   
        // check if the venue exists before trying to edit it
        $data['venue'] = $this->Venue_model->get_venue($venueID);
        
        if(isset($data['venue']['venueID']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('venueCode','VenueCode','required|max_length[10]');
			$this->form_validation->set_rules('venueName','VenueName','required|max_length[100]');
			$this->form_validation->set_rules('venueType','VenueType','required|max_length[50]');
			$this->form_validation->set_rules('status','Status','required|max_length[15]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'venueType' => $this->input->post('venueType'),
					'venueCode' => $this->input->post('venueCode'),
					'venueName' => $this->input->post('venueName'),
					'status' => $this->input->post('status'),
                );

                $this->Venue_model->update_venue($venueID,$params);    
                $idnum = $this->session->userdata('userIDNo');
                        $paramsaudit = array(
                            'userIDNo' => $idnum,
                            'auditDesc' => 'Successfully edited an existing venue',
                        );        
                redirect('venue/index');
            }
            else
            {
                $data['_view'] = 'venue/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The venue you are trying to edit does not exist.');
    } 

    /*
     * Deleting venue
     */
    function remove($venueID)
    {
        $venue = $this->Venue_model->get_venue($venueID);

        // check if the venue exists before trying to delete it
        if(isset($venue['venueID']))
        {
            $this->db->set('status', 'Archived');
            $this->Venue_model->delete_venue($venueID);
            $idnum = $this->session->userdata('userIDNo');
                        $paramsaudit = array(
                            'userIDNo' => $idnum,
                            'auditDesc' => 'Successfully removed venue',
                        );
            redirect('venue/index');
        }
        else
            show_error('The venue you are trying to delete does not exist.');
    }
    
}
