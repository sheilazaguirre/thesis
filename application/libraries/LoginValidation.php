<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginValidation {

    public function isValid()
    {
        if(empty($_SESSION['userID']))
        {
            redirect(site_url().'login');
        }
        else {
            return;
        }
    }
} 