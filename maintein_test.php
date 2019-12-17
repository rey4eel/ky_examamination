<?php
require_once  'bootstrap.php';

$type = $_GET['type'];
$categories = get_categories($connection);

$user_name = $_SESSION['user'];
$header = include_template('header.php',[
    'user_name' => $user_name
]);

if($type == 'add'){
    $main = include_template('admin_page_form/add_form.php',[
        'categories' => $categories
    ]);
}

$page_content = include_template('admin_page_form/admin_template.php',[
        'main' => $main,
        'header' => $header
]);
print ($page_content);