<?php

Class UserController extends Controller {

	public function loginToApp() {

		Presentation::presentation_type('application/json');

		$input_data = Presentation::input_data_as_json();

		$login_result = UserModel::checkForLoginProcess($input_data->user_email, $input_data->user_pass);

		if ($login_result == '') {
			echo 'Access denied';
		} else {

			if ($login_result == null) {
				$login_result[0]['isValid'] = false;
			} else {
				$login_result[0]['isValid'] = true;
			}

			Presentation::present_data($login_result[0], 'application/json');

		}

	}

	public function checkForToken() {

		Presentation::presentation_type('application/json');

		$input_data = Presentation::input_data_as_json();

		$isTokenMatch = UserModel::checkForTokenMatch($input_data->user_token);

		if ($isTokenMatch == '') {
			echo 'Access denied';
		} else {
			Presentation::present_data($isTokenMatch[0], 'application/json');
		}

	}

	public function registerNewUser() {

		Presentation::presentation_type('application/json');

		$input_data = Presentation::input_data_as_json();

		$toRegisterNewUser = UserModel::registerNewUser($input_data->user_email, $input_data->user_pass);

		if ($toRegisterNewUser == '') {
			echo 'Access denied';
		} else {
			Presentation::present_data($toRegisterNewUser, 'application/json');
		}

	}

}

?>
