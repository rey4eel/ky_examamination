<?php

require_once 'bootstrap.php';

//проверить сначала какой тест был последний пройденный
// ЕСли запрос вернул 0 то заблокировать все кроме первого - модальное окно с ошибкой анный тест доступен толко после прохождения лвл1
// Если запрос вернул 1 то заблокировать лвл 1 - модальное окно данный тест уже пройден. И так далее до 3

// После проверить гет запрос и вывести тест в зависимости от того какой был айди

$user_id = $_SESSION['id'];
$test_code = $_GET['code'];
$test_id = $_GET['id'];

//var_dump($user_id,$test_code,$test_id);

$allowed_status = test_allowed($connection,$test_id,$test_code,$user_id);

if($allowed_status != null){
    echo '<script type="text/javascript">alert("' . $allowed_status . '")</script>';
    exit();
}

$get_question_list = get_question($connection,$test_code,$test_id);
$page_content = include_template('aoi__examination__list__1.php',[
    'get_question_list' => $get_question_list
]);
print ($page_content);