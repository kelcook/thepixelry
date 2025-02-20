<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['years_exp']  = $this->home_model->years_exp();
		$data['spots_left'] = 13 - $this->signup_model->count_signups();
		$data['footer']     = $this->load->view('components/footer', '', TRUE);

		$this->load->view('home', $data);
	}
}
