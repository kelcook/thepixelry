<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dropdown_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

	/*
     * Function get_states
     *
     * populates a <select> element with values from an array
     *
     * @param (str) ($name_attr) the name attribute of the <select> element
     * @param (str) ($id_attr) the id attribute of the <select> element
     * @param (str) ($class_attr) the class attribute of the <select> element
     * @param (str) ($selected) the selected value of the <select> element
     * @param (str) ($select_text) the default text of the <select> element, allows for customization
     *
     * @return (str) dropdown list of states
     */
	public function get_states($name_attr = '', $id_attr = '', $class_attr = '', $selected = '', $select_text = 'Select State')
	{
		$state_list = array(
			''   => $select_text,
			'AL' => 'Alabama',
            'AK' => 'Alaska',
            'AZ' => 'Arizona',
            'AR' => 'Arkansas',
            'CA' => 'California',
            'CO' => 'Colorado',
            'CT' => 'Connecticut',
            'DE' => 'Delaware',
            'DC' => 'District Of Columbia',
            'FL' => 'Florida',
            'GA' => 'Georgia',
            'HI' => 'Hawaii',
            'ID' => 'Idaho',
            'IL' => 'Illinois',
            'IN' => 'Indiana',
            'IA' => 'Iowa',
            'KS' => 'Kansas',
            'KY' => 'Kentucky',
            'LA' => 'Louisiana',
            'ME' => 'Maine',
            'MD' => 'Maryland',
            'MA' => 'Massachusetts',
            'MI' => 'Michigan',
            'MN' => 'Minnesota',
            'MS' => 'Mississippi',
            'MO' => 'Missouri',
            'MT' => 'Montana',
            'NE' => 'Nebraska',
            'NV' => 'Nevada',
            'NH' => 'New Hampshire',
            'NJ' => 'New Jersey',
            'NM' => 'New Mexico',
            'NY' => 'New York',
            'NC' => 'North Carolina',
            'ND' => 'North Dakota',
            'OH' => 'Ohio',
            'OK' => 'Oklahoma',
            'OR' => 'Oregon',
            'PA' => 'Pennsylvania',
            'RI' => 'Rhode Island',
            'SC' => 'South Carolina',
            'SD' => 'South Dakota',
            'TN' => 'Tennessee',
            'TX' => 'Texas',
            'UT' => 'Utah',
            'VT' => 'Vermont',
            'VA' => 'Virginia',
            'WA' => 'Washington',
            'WV' => 'West Virginia',
            'WI' => 'Wisconsin',
            'WY' => 'Wyoming'
        );

        return form_dropdown($name_attr, $state_list, set_value($name_attr, $selected), 'id="'.$id_attr.'" class="'.$class_attr.'"');
	}
}