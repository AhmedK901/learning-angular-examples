<?php

Class SecretsModel extends Model {

	public function getSecrets($request) {

		if ($request == 'secrets') {

			$database = new Database();

			$secrets = $database->query_assoc("SELECT * FROM secrets");

			$database->close();

			return $secrets;

		}

		return false;

	}

}

?>
