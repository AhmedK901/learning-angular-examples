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
}

?>