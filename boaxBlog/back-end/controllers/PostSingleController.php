<?php

class PostSingleController extends Controller {

	public function singlePost($data) {

		// set output type to json
		Presentation::presentation_type('application/json');

		// get single post
		$single_post = PostSingleModel::getSinglePostById($data['id']);

		// return single post as json format
		Presentation::present_data($single_post, 'application/json');

	}
}

?>