<?php

require_once 'vendor/autoload.php';

$google_client = new Google_Client();

$google_client->setClientId('116261529158-iphf2o7ot4uv9abs4qcq5fcpld4ubio3.apps.googleusercontent.com');

$google_client->setClientSecret('lS4O9HAcQKRcp_wggOm3o_8c');

$google_client->setRedirectUri('https://ehzdf.herokuapp.com/');

$google_client->addScope('email');

$google_client->addScope('profile');

session_start();

?>
