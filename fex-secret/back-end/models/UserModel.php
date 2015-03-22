<?php

Class UserModel extends Model {

	public function randomToken($length) {
		$key = '';
		$keys = array_merge(range(0, 9), range('a', 'z'));

		for ($i = 0; $i < $length; $i++) {
			$key .= $keys[array_rand($keys)];
		}

		return $key;
	}

	public function checkForLoginProcess($email, $password) {

		if ($email != null && $password != null) {

			$database = new Database();

			$email = $database->validate($email);
			$password = $database->validate($password);

			$get_token = $database->query_assoc("SELECT user_token FROM users WHERE user_email = '$email' AND user_pass = MD5('$password')");

			if (count($get_token) != 0) {

				$user_token = UserModel::randomToken(50);

				$update_token = $database->query("UPDATE users SET user_token='$user_token'");

				$get_token = $database->query_assoc("SELECT user_token FROM users WHERE user_email = '$email' AND user_pass = MD5('$password')");
			}

			$database->close();

			return $get_token;
		}

		return;

	}

	public function registerNewUser($email, $password) {

		if ($email != null && $password != null) {

			$database = new Database();

			$email = $database->validate($email);
			$password = $database->validate($password);

			$checkEmailIfExist = $database->query_assoc("SELECT * FROM users WHERE user_email = '$email'");

			if (count($checkEmailIfExist) != 0) {

				$database->close();

				return array('isExist' => true);

			} else {

				$user_token = UserModel::randomToken(50);

				$registerNewUser = $database->query("INSERT INTO users (user_email, user_pass, user_token) VALUE ('$email', MD5('$password'), '$user_token')");

				$database->close();

				return array('isExist' => false, 'user_token' => $user_token);

			}

		}

		return;
	}

	public function checkForTokenMatch($token) {

		if ($token != null) {

			$database = new Database();

			$token = $database->validate($token);

			$get_token = $database->query_assoc("SELECT user_token FROM users WHERE user_token = '$token'");

			$database->close();

			return $get_token;

		}

		return;

	}

}

?>
