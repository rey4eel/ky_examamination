<?php

function validate_add_question (array $form_data,?array $file_data) : ?array {

    $errors =[];
    $errors['description'] = validate_description($form_data['description']);
//    $errors['category'] = validate_category($form_data['category']);
//    $errors['lvl'] = validate_lvl($form_data['lvl']);
    $errors['file'] = validate_lot_file($file_data);

    if(isset($form_data['noimage'])){
        $errors['file'] = null;
    }
    foreach ($errors as $key=>$error){
        if (empty($error)){
            unset($errors[$key]);
        }
    }
    return $errors;
}
// создать валидацию для файл прикрепленного в форме
function validate_lot_file(?array $file_data): ?string
{
    if ($file_data['size'] === 0) {
        return $errors = 'File was not loaded';
    }
    $file_type = mime_content_type($file_data['tmp_name']);
    $allow_type = ['image/png', 'image/jpeg'];
    if (!in_array($file_type, $allow_type)) {
        return $errors = 'Wrong Format';
    }
    return null;
}

function validate_description (string $description) : ?string {
    if(empty($description)) {
        return 'The description is empty';
    }
    $len = strlen($description);
    if ($len < 30 or $len > 2000) {
        return 'The content lenght should be from 30 to 2000 symbol';
    }
    return null;
}

//function validate_rate (string $rate) : ?string {
//    if (!is_numeric($rate)) {
//        return 'Допустим ввод только цифр';
//    }
//    if($rate <= 0) {
//        return 'Начальная цена должна быть больше 0';
//    }
//    return null;
//}



//function validate_category (string $category) : ?string {
//    if($category == 'Выберите категорию') {
//        return 'Выберите категорию';
//    }
//    return null;
//}

