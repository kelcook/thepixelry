<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function submit($post_data)
    {
    	unset($post_data['g-recaptcha-response']);

    	// set paid to 0
    	$post_data['paid'] = 0;

    	if($this->db->insert('signups', $post_data))
    	{
    		$insert_id = $this->db->insert_id();
   			return  $insert_id;
    	}
    	else
    	{
    		return FALSE;
    	}
    }

    public function get_reg_by_id($id)
    {
    	$this->db->where('id', $id);
    	$query  = $this->db->get('signups');
    	$result = $query->row_array();

    	if(!empty($result))
    	{
    		return $result;
    	}
    	else
    	{
    		return FALSE;
    	}
    }

    public function charge_card($post_data)
    {
    	require_once('./vendor/autoload.php');

		$stripe = array(
			"secret_key"      => STRIPE_SECRET_KEY,
			"publishable_key" => STRIPE_PUBLISHABLE_KEY
		);

		\Stripe\Stripe::setApiKey($stripe['secret_key']);

		$token = $_POST['stripeToken'];
		$email = $_POST['stripeEmail'];

		$customer = \Stripe\Customer::create(array(
			'email'  => $email,
			'source' => $token
		));

		// Create the charge on Stripe's servers - this will charge the user's card
		try {
			$charge = \Stripe\Charge::create(array(
				'customer' => $customer->id,
				'amount'   => 10000,
				'currency' => 'usd'
			));

			return TRUE;
		} catch(\Stripe\Error\Card $e) {
			// The card has been declined
			return FALSE;
		}
    }

    public function count_signups()
    {
    	$this->db->where('paid', 1);
    	$query   = $this->db->get('signups');
    	$results = $query->result();
    	$signups = count($results);

    	return $signups;
    }

    public function paid($id)
    {
	    // set paid field to 1
	    $this->db->where('id', $id);
	    $this->db->update('signups', array('paid' => 1));

    	return TRUE;
    }

    public function declined($id)
    {
	    // set paid field to 1
	    $this->db->where('id', $id);
	    $this->db->update('signups', array('paid' => 0));

    	return TRUE;
    }

	public function send_confirmation_email($data)
	{
		// send confirmation email
        $mail_from_email = 'info@thepixelry.com';
        $mail_from_name  = 'The Pixelry';
		$mail_to         = $data['p_email'];
        $mail_bcc        = '';
        $mail_subject    = 'The Pixelry Code Camp Sign Up Confirmation';
        $mail_message    = $this->load->view('emails/signup_confirmation', $data, TRUE);

        // call method to send email
        $this->email_model->send($mail_from_email, $mail_from_name, $mail_to, $mail_bcc, $mail_subject, $mail_message);
	}

	public function send_signup_notification($data)
	{
		// send confirmation email
        $mail_from_email = 'info@thepixelry.com';
        $mail_from_name  = 'The Pixelry';

        if(ENVIRONMENT == 'local')
        {
        	$mail_to = 'kelly@thepixelry.com';
        }
        else
        {
        	$mail_to = 'kelly@thepixelry.com';
        }

        $mail_bcc        = '';
        $mail_subject    = 'The Pixelry Code Camp Sign Up Notification';
        $mail_message    = $this->load->view('emails/signup_notification', $data, TRUE);

        // call method to send email
        $this->email_model->send($mail_from_email, $mail_from_name, $mail_to, $mail_bcc, $mail_subject, $mail_message);
	}
}