<?php
require_once 'bootstrap.php';

if(empty($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

$user_name = $_SESSION['user'];
$header = include_template('header.php',[
    'user_name' => $user_name
]);

$spc_category = [
    'Users'=>'#',
    'Results'=>'#',
    'Perfomace'=>'#'
];


$maint_category = [
    [
        'name' => 'Add question',
        'img' => '/img/new_logo/add_question.png',
        'url' => 'maintein_test.php?type=add',
    ],
    [
        'name' => 'Delete question',
        'img' => 'img/new_logo/bucket.png',
        'url' => '#',
    ],
    [
        'name' => 'Change setting',
        'img' => '/img/new_logo/question_setting.png',
        'url' => '#',
    ]
];


$page_content = include_template('trainer_page.php',[
    'spc_category' => $spc_category,
    'maint_category' => $maint_category,
    'header' => $header
]);
print ($page_content);