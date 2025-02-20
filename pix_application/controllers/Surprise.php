<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surprise extends CI_Controller {

	public function index()
	{
		$data['footer'] = $this->load->view('components/footer_checkout', '', TRUE);
		$this->load->view('lenovo_surprise', $data);
	}
}
