<?php

require_once 'bootstrap.php';

if (empty($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

$type = $_GET['type'];
$code = $_GET['code'];

$user_name = $_SESSION['user'];
$header = include_template('header.php',[
    'user_name' => $user_name
]);

$page_content = include_template('aoilvl__examination.php',[
    'header' => $header,
    'code' => $code,
    'type' => $type
]);

print ($page_content);