<?php

require_once 'bootstrap.php';

function validate_reg_form (mysqli $connection,array $user_data) : ?array {

    $errors =[];
    $errors['name'] = validate_name($user_data['name']);
    $errors['email'] = validate_email($connection,$user_data['email']);
    $errors['password'] = validate_password($user_data['password']);

    foreach ($errors as $key=>$error){
        if (empty($error)){
            unset($errors[$key]);
        }
    }
    return $errors;
}

function validate_name (string $name) : ?string {
    if(empty($name)) {
        return 'Field cant be empty';
    }
    $len = strlen($name);
    if ($len < 2 or $len > 60) {
        return 'The length of the field should be from 2 to 60 simbols';
    }
    return null;
}

function validate_email($connection,string $email) : ?string {

    if (empty($email)){
        return 'Required';
    }
    $email_valid =  check_email_double($connection,$email);
    if($email_valid){
        return 'This email already used';
    }
    return null;
}

function validate_password (string $password) : ?string {

    if (!$password) {
        return 'Required';
    } elseif (mb_strlen($password) < 6) {
        return 'The password is to short';
    }
    return null;
}



