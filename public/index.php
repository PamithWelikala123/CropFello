<?php

session_start();

require "../app/core/init.php";

DEBUG ? ini_set('display_errors', 1) : ini_set('display_errors', 0);

$app = new App;
$app->loadController();

//fromchat gpt

// $url = isset($_GET['url']) ? $_GET['url'] : '';
// $url = rtrim($url, '/');
// $url = explode('/', $url);

// if ($url[0] == 'viewitem') {
//   include 'viewitem.php';
//   exit;
// }