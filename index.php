<?php
require_once __DIR__.'/bootstrap.php';

if (!empty($_SESSION['user'])) {
    header("Location: main.php");
    exit();
}

$errors = [];
$cookie_name = "status";
$cookie_value = "hide";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");


if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $form_data = $_POST;
    $errors = verify_login_form($form_data,$connection);

    if(count($errors) != 0)
    {
        $errors['check'] = '1';
        $cookie_value = "show";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
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

}

$page_content = include_template('start.php', [
    'errors' => $errors
]);

print ($page_content);