<?php
require_once 'bootstrap.php';

$errors = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_data = $_POST;
    $errors = validate_reg_form($connection,$user_data);
    if (count($errors)) {
        $page_content = include_template('registration.php', [
            'errors' => $errors
        ]);
    } else {
        $is_user_added = add_user($connection, $user_data);
        if ($is_user_added) {
            header("Location: index.php");
        }
    }
}
$modal = include_template('modal.php',[]);

$page_content = include_template('registration.php', [
    'modal' => $modal,
    'errors' => $errors
]);

print($page_content);