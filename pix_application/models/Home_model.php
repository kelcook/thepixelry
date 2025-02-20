<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function years_exp()
    {
    	$current_date = date('Y-m-d');
    	$date1        = date_create("2004-06-01");
		$date2        = date_create($current_date);
		$diff         = date_diff($date1,$date2);
		$diff_round   = round($diff->y.'.'.$diff->m);

		return $diff_round;
    }
}