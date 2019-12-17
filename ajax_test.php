<?php
require_once 'bootstrap.php';


$answer_data = $_POST;
$answer_data['lvl'] = 1;
$answer_data['category_id'] = 1;
$answer_data['user_name'] = $_SESSION['id'];
$errors = validate_add_answer($answer_data);
if (count($errors) === 0) {
    $result = check_second_insert_empty($connection, $answer_data);
    if (!$result) {
        $update = update_answer_data($connection, $answer_data);
        if ($update) {
            echo "Your question succefully updated in DB";
        } else {
            echo "Question did not updated please contact Admin";
        }
    }
    if ($result) {
        $insert = insert_answer_data($connection, $answer_data);
        if ($insert) {
            echo "Your question succefully saved in DB";
        } else {
            echo "Question did not saved please contact Admin";
        }
    }
}
else {
    echo "Following mistake should be fixed";
    echo "\r\n";
    foreach ($errors as $key => $value) {
        $error = $key.""."=>".$value;
        echo $error;
        echo "\r\n";
    }
}