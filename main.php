<?php
require_once 'bootstrap.php';

if(empty($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

if($_SESSION['user_rights'] =='1'){
    header("Location: trainer_page.php");
    exit();
}

$user_name = $_SESSION['user'];
$header = include_template('header.php',[
    'user_name' => $user_name
]);

$page_content = include_template('main.php',[
    'header' => $header
]);
print ($page_content);