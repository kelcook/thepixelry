<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_up extends CI_Controller {

	public function index()
	{
		// get signup count from database
		$signups = $this->signup_model->count_signups();

		if($signups > 12)
		{
			redirect(site_url('sign-up/full'));
		}
		else
		{
			$data['state_dropdown'] = $this->dropdown_model->get_states('state', 'state', 'flex-form__item form__input form__input--select');
			$data['footer']         = $this->load->view('components/footer', '', TRUE);

			if($this->input->post('food_allergy') && $this->input->post('food_allergy') == 1)
	    	{
	    		$food_allergy = TRUE;
	    	}
	    	else
	    	{
	    		$food_allergy = FALSE;
	    	}

			// define validation rules
			// $this->form_validation->set_rules('workshop',             '', 'trim|required');
			$this->form_validation->set_rules('p_first_name',         '', 'trim|required');
			$this->form_validation->set_rules('p_last_name',          '', 'trim|required');
			$this->form_validation->set_rules('p_email',              '', 'trim|required|valid_email');
			$this->form_validation->set_rules('p_phone',              '', 'trim|required|callback_validate_phone');
			$this->form_validation->set_rules('address_line_1',       '', 'trim|required');
			$this->form_validation->set_rules('address_line_2',       '', 'trim');
			$this->form_validation->set_rules('city',                 '', 'trim|required');
			$this->form_validation->set_rules('state',                '', 'trim|required');
			$this->form_validation->set_rules('zip_code',             '', 'trim|required|numeric');
			$this->form_validation->set_rules('c_first_name',         '', 'trim|required');
			$this->form_validation->set_rules('c_last_name',          '', 'trim|required');
			$this->form_validation->set_rules('c_age',                '', 'trim|required|numeric');
			$this->form_validation->set_rules('c_shirt_size',         '', 'trim|required');
			$this->form_validation->set_rules('provide_laptop',       '', 'trim|required');
			$this->form_validation->set_rules('food_allergy',         '', 'trim|required');
			if($food_allergy)
			{
				$this->form_validation->set_rules('food_allergy_explain', '', 'trim|required');
			}
			$this->form_validation->set_rules('waiver_1',             '', 'trim|required');
			$this->form_validation->set_rules('waiver_2',             '', 'trim|required');
			$this->form_validation->set_rules('waiver_3',             '', 'trim|required');
			$this->form_validation->set_rules('waiver_4',             '', 'trim');
			$this->form_validation->set_rules('g-recaptcha-response', '', 'trim|required');


			if ($this->form_validation->run() == FALSE)
	        {
	        	if($this->input->post('food_allergy') && $this->input->post('food_allergy') == 1)
	        	{
	        		$data['food_allergy'] = $food_allergy;
	        	}

	            $this->load->view('sign_up/index', $data);
	        }
	        else
	        {
	        	// submit data to signup model and charge card
		        if($id = $this->signup_model->submit($_POST))
		        {
		        	// redirect to payment page
					redirect(site_url('sign-up/payment/'.$id));
		        }
		        else
		        {
		        	// load error view
		        	$this->load->view('sign_up/error');
		        }
	        }
	    }
	}

	public function payment($id)
	{
		$data           = $this->signup_model->get_reg_by_id($id);
		$data['footer'] = $this->load->view('components/footer_checkout', '', TRUE);

		if(!empty($_POST['stripeToken']))
		{
			if($this->signup_model->charge_card($_POST) == TRUE)
			{
				// redirect to confirmation page
				redirect(site_url('sign-up/confirmation/'.$id));
			}
			else
			{
				// card was declined
				// redirect to error page
				redirect(site_url('sign-up/error'));
			}
		}
		else
		{
			$this->load->view('sign_up/payment', $data);
		}
	}

	public function confirmation($id)
	{
		// update paid status to 1
		$this->signup_model->paid($id);

		$data = $this->signup_model->get_reg_by_id($id);

		// send confirmation email
		$this->signup_model->send_confirmation_email($data);

		// send notification email
		$this->signup_model->send_signup_notification($data);

		$data['footer'] = $this->load->view('components/footer', '', TRUE);

		$this->load->view('sign_up/confirmation', $data);
	}

	public function full()
	{
		$data['footer'] = $this->load->view('components/footer_checkout', '', TRUE);

		$this->load->view('sign_up/full', $data);
	}

	public function error()
	{
		$data['footer'] = $this->load->view('components/footer_checkout', '', TRUE);

		$this->load->view('sign_up/error', $data);
	}

	public function validate_phone($str)
	{
		// if string contains any letters
		if (preg_match('/[A-Za-z]+/', $str))
		{
			$this->form_validation->set_message('validate_phone', 'Please enter a valid phone number. <em>(Example: XXX-XXX-XXXX or numbers only)</em>');
			return FALSE;
		}
		else
		{
			// strip everything but digits
			$phone = preg_replace('/\D+/', '', $str);

			if(strlen($phone) == 10)
			{
				return $phone;
				// return TRUE;
			}
			else
			{
				$this->form_validation->set_message('validate_phone', 'Please enter a valid phone number. <em>(Example: XXX-XXX-XXXX or numbers only)</em>');
				return FALSE;
			}
		}
	}
}
