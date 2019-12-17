<?php

require_once 'bootstrap.php';

    $form_data = $_POST;
    $errors = verify_login_form($form_data,$connection);

    if(count($errors) != 0)
    {
        echo "Following mistake should be fixed";
        echo "\r\n";
        foreach ($errors as $key=>$value){
            $error = $key.""."=>".$value;
            echo $error;
            echo "\r\n";
        }
    }
    else
    {
        $user = get_user($connection,$form_data['email']);
        if ($user)
        {
            $_SESSION = [
                'user' => $user['name'],
                'id'   => $user['id'],
                'user_rights' => $user['user_rights']
            ];

            header("Location: main.php");
            exit();
        }
    }

