<?php

require_once 'libs/Frex/Frex.php';

// initialize the app
$app = new Frex();

/*
set routes
 */

// without pass any controller method
$app->set('/');

// current secrets
$app->set('/secrets', 'SecretsController:getSecrets');

// login to app
$app->set('/login', 'UserController:loginToApp');

// check for token if it's match
$app->set('/checkForToken', 'UserController:checkForToken');

// register to app
$app->set('/register', 'UserController:registerNewUser');

// run the app!
$app->run();

?>
