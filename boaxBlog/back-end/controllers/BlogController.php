<?php

Class BlogController extends Controller {

	public function setting_data() {
		
		// set type of content (json)
		Presentation::presentation_type('application/json');

		// get setting data
		$setting_data = BlogModel::get_setting_data();

		// output setting data in json format
		Presentation::present_data($setting_data, 'application/json');

	}

	public function setting_key_value($data) {

		// set type of content (json)
		Presentation::presentation_type('application/json');

		// get setting key value
		$setting_key_value = BlogModel::get_setting_value_by_key($data['key']);

		// output setting key value in json format
		Presentation::present_data($setting_key_value, 'application/json');

	}

}

?>
