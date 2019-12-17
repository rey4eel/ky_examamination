<?php

require_once 'bootstrap.php';

if (empty($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

$user_name = $_SESSION['user'];
$header = include_template('header.php',[
    'user_name' => $user_name
]);

$type = $_GET['type'];

$page_content = include_template('choice__examination.php',[
    'header' => $header,
    'type' => $type
]);

print ($page_content);