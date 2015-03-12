<?php

require_once 'libs/Frex/Frex.php';

// initialize the app
$app = new Frex();

/*
	set routes
*/

// blog setting route
$app->set('/blog/setting', 'BlogController:setting_data');

// blog setting key value route
$app->set('blog/setting/:key', 'BlogController:setting_key_value');

// posts route
$app->set('/blog/posts', 'PostsController:lastPosts');

// single post route
$app->set('/blog/posts/single/:id', 'PostSingleController:singlePost');

// run the app!
$app->run();


?>
