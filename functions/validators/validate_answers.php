<?php

function validate_add_answer (array $form_data) : ?array {

    $errors =[];
    $errors['answer'] = validate_answer_text($form_data['answer']);

    foreach ($errors as $key=>$error){
        if (empty($error)){
            unset($errors[$key]);
        }
    }
    return $errors;
}

function validate_answer_text (string $description) : ?string {
    if(empty($description)) {
        return 'The description is empty';
    }
    $len = strlen($description);
    if ($len < 1 or $len > 2000) {
        return 'The content lenght should be from 30 to 2000 symbol';
    }
    return null;
}

