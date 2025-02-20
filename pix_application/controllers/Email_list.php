<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_list extends CI_Controller {

	public function index()
	{
		$this->load->view('email_list');
	}
}
