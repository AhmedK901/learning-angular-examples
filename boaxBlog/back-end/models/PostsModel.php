<?php

Class PostsModel extends Model {

	public function get_last_posts() {

		// connect with database
		$database = new Database();

		// get last posts
		$last_posts = $database->get_associative_data_from_query("SELECT * FROM posts Order By post_created_at ASC");

		// close database connection
		$database->close();

		// return last posts
		return $last_posts;
	}

}

?>