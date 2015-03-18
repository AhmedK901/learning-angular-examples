<?php

Class PostsModel extends Model {

	public function get_last_posts() {

		// connect with database
		$database = new Database();

		// get last posts
		$last_posts = $database->query_assoc("SELECT * FROM posts Order By post_created_at DESC");

		// close database connection
		$database->close();

		// return last posts
		return $last_posts;
	}

	public function add_new_post($post_title, $post_name, $post_author, $post_content) {

		// connect with database
		$database = new Database();

		// validate all input values
		$post_title = $database->validate($post_title);
		$post_name = $database->validate($post_name);
		$post_author = $database->validate($post_author);
		$post_content = $database->validate($post_content);

		// check if all input is not empty
		if ($post_title != null && $post_name != null && $post_author != null && $post_content != null) {

			// insert new post
			$insert_post = $database->query("INSERT INTO posts (post_title, post_name, post_author, post_content) VALUES ('$post_title', '$post_name', '$post_author', '$post_content')");

			// output json response of result
			echo Presentation::present_data($insert_post, 'application/json');

		}

		// close database connection
		$database->close();

	}

}

?>
