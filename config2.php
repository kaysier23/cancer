<?php

require_once 'vendor/autoload.php';

if (!session_id())
{
    session_start();
}

// Call Facebook API 

$facebook = new \Facebook\Facebook([
  'app_id'      => '206238130687793',
  'app_secret'     => 'dfe86e961869a27e388a3de7770d9d15',
  'default_graph_version'  => 'v2.10'
]);

?>
