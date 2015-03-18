<?php

Class BlogModel extends Model {

	public function get_setting_data() {

		// connect with database
		$database = new Database();		

		// get setting data
		$setting_data = $database->query_assoc("SELECT * FROM setting");

		// close database connection
		$database->close();

		// return setting data
		return $setting_data;
	}

	public function get_setting_value_by_key($key) {

		// connect with database
		$database = new Database();	

		// get setting single value
		$setting_key_value = $database->query_assoc("SELECT setting_value FROM setting WHERE setting_key='$key'");

		// close database connection
		$database->close();

		// return setting single value
		return $setting_key_value;
	}

}


?>
