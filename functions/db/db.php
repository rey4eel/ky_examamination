<?php
function db_connect ($db_config) : mysqli {
    $connection = mysqli_connect($db_config['host'],$db_config['user'],$db_config['password'],$db_config['database']);

    if (!$connection){
        exit('Ошибка соединения с БД: ' . mysqli_connect_error());

    }
    mysqli_set_charset($connection, 'utf8');

    return $connection;
}

function get_email ($connection,$email): bool {
    $query_data = "SELECT email FROM users WHERE email = '$email'";

    $query = mysqli_query($connection,$query_data);

    if (!$query) {
        exit(mysqli_errno($connection));
    }
    if ($query_data === $email) {
        return true;
    }
    return false;
}


function get_user(mysqli $connection, string $email): array
{
    $sql = "SELECT id, name , user_rights FROM users WHERE email = '$email'";
    $result = mysqli_query($connection, $sql);
    if (!$result) {
        exit(mysqli_error($connection));
    }
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    return $user;
}

function check_email (mysqli $connection,$email): bool {
    $query_data = "SELECT email FROM users WHERE email = '$email'";

    $query = mysqli_query($connection,$query_data);
    $db_email = mysqli_fetch_all($query,MYSQLI_ASSOC);
    if (!$query) {
        exit(mysqli_errno($connection));
    }
    if (empty($db_email))
    {
        return true;
    }
    if ($db_email[0]['email'] === $email) {
        return true;
    }
    return false;
}

function check_pass ($connection,$email,$pass): bool {

    $query_data_email = "SELECT id FROM users WHERE email = '$email' AND user_password = '$pass'";

    $query_email = mysqli_query($connection,$query_data_email);

    $db_email = mysqli_fetch_all($query_email,MYSQLI_ASSOC);

    if (empty($db_email[0]['id'])){
        return true;
    }
    if (!$query_email) {
        exit(mysqli_errno($connection));
    }
    return false;
}

function check_email_double (mysqli $connection, $email ) :bool {

    $query_data = "SELECT email FROM users WHERE email = '$email'";
    $query = mysqli_query($connection,$query_data);
    $db_email = mysqli_fetch_all($query,MYSQLI_ASSOC);
    if (empty($db_email))
    {
        return false;
    }
    if ($db_email[0]['email'] === $email) {
        return true;
    }
    return false;
}

function add_user (mysqli $connection,array $user_data) :bool {

    $query_data = "INSERT INTO users 
                          (name,email,user_password,registration_date,user_rights)
                     VALUES
                ('{$user_data['name']}','{$user_data['email']}','{$user_data['password']}',NOW(),{$user_data['user_right']})";


    $query = mysqli_query($connection,$query_data);

    if ($query)
    {
        return mysqli_insert_id($connection);
    }
    return true;
}

function get_categories(mysqli $connection): ?array {
    $query = 'SELECT id,title FROM test_categories';
    $request = mysqli_query($connection,$query);

    if (!$request){
        //ошибка sql-запроса
        $error = mysqli_error($connection);
        //куда-то вывести $error, например:
        exit('Ошибка MySQL: '.$error);
    }
    return mysqli_fetch_all($request,MYSQLI_ASSOC);
}

function insert_question_data (mysqli $connection,array $question_data) : ?int {
    $query_data = "INSERT INTO questions 
                          (description,category_id,lvl,image,author_id)
                     VALUES
                ('{$question_data['description']}','{$question_data['category']}','{$question_data['lvl']}','{$question_data['file']}','{$question_data['id']}')";

    $query = mysqli_query($connection,$query_data);
    if ($query) {
        return mysqli_insert_id($connection);
    }else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }
    return null;
}

function save_file(array $img): string
{
    $file_name = $img['name'];
    $ext = substr($file_name, strrpos($file_name, '.'));
    $link = '/uploads/'.uniqid().$ext;
    move_uploaded_file($img['tmp_name'],
        substr($link, 1));
    return $link;
}

function check_last_test(mysqli $connection, string $get_code,int $user_id) :?array {

    switch ($get_code){
        case 001:
            $test = 'last_passed_aoi_test';
            break;
        case 002:
            $test = 'last_passed_spi_test';
            break;
        default:
            $test = 'smt_test';

    }

    $query_data = "SELECT $test FROM users WHERE id='$user_id'";
    $query = mysqli_query($connection,$query_data);
    if (!$query){
        //ошибка sql-запроса
        $error = mysqli_error($connection);
        //куда-то вывести $error, например:
        exit('Ошибка MySQL: '.$error);
    }
    return mysqli_fetch_all($query,MYSQLI_ASSOC);
}

function return_single_string (?array $data) :?string {
    if(empty($data)){
        return null;
    }
    foreach ($data as $arraynm=>$array){
        foreach ($array as $key=>$value){
            $result = $value;
        }
    }
    return $result;
}

function get_question (mysqli $connection,?string $code,?string  $id) :?array {
    $query_data = "SELECT description,image,id FROM questions WHERE lvl='$id' AND category_id='$code'";
    $query = mysqli_query($connection,$query_data);
    if (!$query){
        //ошибка sql-запроса
        $error = mysqli_error($connection);
        //куда-то вывести $error, например:
        exit('Ошибка MySQL: '.$error);
    }
    return mysqli_fetch_all($query,MYSQLI_ASSOC);
}

function insert_answer_data (mysqli $connection,?array $answer_data) : ?int {
    $query_data = "INSERT INTO answers 
                          (answ_text,question_id,lvl,category_id,user_id)
                     VALUES
                ('{$answer_data['answer']}','{$answer_data['question_id']}','{$answer_data['lvl']}','{$answer_data['category_id']}','{$answer_data['user_name']}')";

    $query = mysqli_query($connection,$query_data);
    if ($query) {
        return mysqli_insert_id($connection);
    }else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }
    return null;
}

function check_second_insert_empty (mysqli $connection,?array $answer_data) :?bool {
    $query_data = "SELECT question_id FROM answers WHERE question_id = '{$answer_data['question_id']}'";
    $query = mysqli_query($connection,$query_data);
    if (!$query){
        //ошибка sql-запроса
        $error = mysqli_error($connection);
        //куда-то вывести $error, например:
        exit('Ошибка MySQL: '.$error);
    }
    $result = mysqli_fetch_all($query,MYSQLI_ASSOC);
    if(empty($result)){
        return true;
    }
    return false;
}

function update_answer_data (mysqli $connection,?array $answer_data) : ?bool {
    $query_data = "UPDATE answers SET answ_text= '{$answer_data['answer']}'
                   WHERE question_id = '{$answer_data['question_id']}'";

    $query = mysqli_query($connection,$query_data);
    if (!$query){
        return false;
        //ошибка sql-запроса
//        $error = mysqli_error($connection);
        //куда-то вывести $error, например:
//        exit('Ошибка MySQL: '.$error);
    }
    return true;
}