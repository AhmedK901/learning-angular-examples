<?php

Class PostSingleModel extends Model {

	public function getSinglePostById($id) {

		// connect with database
		$database = new Database();

		// get single post
		$single_post_data = $database->get_associative_data_from_query("SELECT * FROM posts WHERE post_id = '$id'"); 

		// close database connection
		$database->close();

		// return single post
		return $single_post_data;

	}

}
?>