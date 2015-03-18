<?php

Class PostsController extends Controller {

	public function lastPosts() {
		
		// set type of content (json)
		Presentation::presentation_type('application/json');

		// get last posts
		$last_posts = PostsModel::get_last_posts();

		// output last posts in json format
		Presentation::present_data($last_posts, 'application/json');

	}

	public function addNewPost() {

		// set type content (json)
		Presentation::presentation_type('application/json');

		// set POST input values
		$input_data = Presentation::input_data_as_json();

		// insert new post to database
		PostsModel::add_new_post($input_data->post_title, $input_data->post_name, $input_data->post_author, $input_data->post_content);

	}
}

?>
