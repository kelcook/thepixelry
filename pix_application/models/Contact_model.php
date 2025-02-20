<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function ajax_submit($post_data)
    {
    	unset($post_data['g-recaptcha-response']);

    	if($this->db->insert('contact', $post_data))
    	{
    		return TRUE;
    	}
    	else
    	{
    		return FALSE;
    	}
    }
}