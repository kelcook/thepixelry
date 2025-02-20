<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		// define validation rules
		$this->form_validation->set_rules('name',                 'Name', 'trim|required');
		$this->form_validation->set_rules('email',                'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('message',              'Message', 'trim|required');
		$this->form_validation->set_rules('g-recaptcha-response', 'Security Check', 'trim|required');


		if ($this->form_validation->run() == FALSE)
        {
        	// validation failed
        	$errors = $this->form_validation->error_array();

        	if(!empty($errors['g-recaptcha-response']))
        	{
	        	$errors['recaptcha'] = $errors['g-recaptcha-response'];
				unset($errors['g-recaptcha-response']);
			}

        	echo json_encode($errors);
        }
        else
        {
        	// call model for db injection
			if ($this->contact_model->ajax_submit($_POST))
			{
				// build data array to pass to email template view
	            $data = array(
	                'name'    => $this->input->post('name'),
	                'email'   => $this->input->post('email'),
	                'message' => $this->input->post('message'),
	            );

	            // get info from form
	            $mail_from_email = $data['email'];
	            $mail_from_name  = $data['name'];

	            if(ENVIRONMENT == 'local')
	            {
	            	$mail_to = 'kelly@thepixelry.com';
	            }
	            else
	            {
	            	$mail_to = 'kelly@thepixelry.com';
	            }

	            $mail_bcc        = 'katie@thepixelry.com';
	            $mail_subject    = 'The Pixelry Website Contact Form';
	            $mail_message    = $this->load->view('emails/contact_form', $data, true);

	            // call method to send email
	            $this->email_model->send($mail_from_email, $mail_from_name, $mail_to, $mail_bcc, $mail_subject, $mail_message);

	            // the equivalent of return TRUE
				echo json_encode('TRUE');
			}
			else
			{
				// the equivalent of return FALSE
				echo json_encode('FALSE');
			}
        }
	}
}
