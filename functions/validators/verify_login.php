<?php


function verify_login_form (array $form_data,mysqli $connection) : ?array {

    $errors =[];
    $errors['email'] = verify_email($connection,$form_data['email']);
    $errors['password'] = verify_password($connection,$form_data['email'],$form_data['password']);


    foreach ($errors as $key=>$error){
        if (empty($error)){
            unset($errors[$key]);
        }
    }
    return $errors;
}

function verify_email (mysqli $connection,string $email) : ?string {
    if(empty($email)) {
        return 'Поле не должно быть пустым ';
    }
    $email_is_notindb = check_email($connection, $email);

    if ($email_is_notindb == true) {
        return null;
    }

    return 'Email не найден ';
}


function verify_password($connection,$email,$password): ?string
{
    if (!$password) {
        return 'Заполните поле';
    }
    $pass_is_notindb = check_pass($connection,$email,$password);
    if ($pass_is_notindb) {
        return 'Неверный пользователь или пароль';
    }
    return null;
}




