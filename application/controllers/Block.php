<?php

 
class Block extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Block_model');
    } 

    /*
     * Listing of blocks
     */
    function index()
    {
        $data['blocks'] = $this->Block_model->get_all_blocks();
        
        $data['_view'] = 'block/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new block
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('blockCode','BlockCode','max_length[255]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'blockCode' => $this->input->post('blockCode'),
            );
            $this->db->set('status', 'Active');
            $block_id = $this->Block_model->add_block($params);
            redirect('block/index');
        }
        else
        {            
            $data['_view'] = 'block/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a block
     */
    function edit($blockID)
    {   
        // check if the block exists before trying to edit it
        $data['block'] = $this->Block_model->get_block($blockID);
        
        if(isset($data['block']['blockID']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('blockCode','BlockCode','max_length[255]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'blockCode' => $this->input->post('blockCode'),
                );

                $this->Block_model->update_block($blockID,$params);            
                redirect('block/index');
            }
            else
            {
                $data['_view'] = 'block/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The block you are trying to edit does not exist.');
    } 

    /*
     * Deleting block
     */
    function remove($blockID)
    {
        $block = $this->Block_model->get_block($blockID);

        // check if the block exists before trying to delete it
        if(isset($block['blockID']))
        {
            $this->db->set('status', 'Archive');
            $this->Block_model->delete_block($blockID);
            redirect('block/index');
        }
        else
            show_error('The block you are trying to delete does not exist.');
    }
    
}
