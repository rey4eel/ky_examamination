<?php
require_once 'bootstrap.php';


$question_data = $_POST;
$file_data = $_FILES['img'];
$errors = validate_add_question($question_data,$file_data);
$question_data['id'] = $_SESSION['id'];
if (count($errors) === 0){
    $question_data['file'] = save_file($_FILES['img']);
    $insert = insert_question_data($connection,$question_data);
    if ($insert) {
        echo "Your question succefully saved in DB";
    }
    else{
        echo "Question did not saved please contact Admin";
    }

}else{
        echo "Following mistake should be fixed";
        echo "\r\n";
    foreach ($errors as $key=>$value){
        $error = $key.""."=>".$value;
        echo $error;
        echo "\r\n";
    }
}