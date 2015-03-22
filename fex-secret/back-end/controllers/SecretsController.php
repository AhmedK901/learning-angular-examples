<?php

Class SecretsController extends Controller {

	public function getSecrets() {

		Presentation::presentation_type('application/json');

		$input_data = Presentation::input_data_as_json();

		$secrets = SecretsModel::getSecrets($input_data->request);

		if ($secrets != false) {
			Presentation::present_data($secrets, 'application/json');
		} else {
			echo 'Access denied';
		}

	}
}

?>
