<?php

class Email extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
    	$this->load->library('email');

$subject = 'Hart Hart';
$message = '<h1>Hello my friend.</h1>';

// Get full html:
$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
    <title>' . html_escape($subject) . '</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>
' . $message . '
</body>
</html>';
// Also, for getting full html you may use the following internal method:
//$body = $this->email->full_html($subject, $message);

$result = $this->email
    ->from('shaunxavierpascual@gmail.com', 'GAPC')
    ->to('beper.ong@benilde.edu.ph')
    ->subject($subject)
    ->message($body)
    ->send();

var_dump($result);
echo '<br />';
echo $this->email->print_debugger();

exit;
}

}


