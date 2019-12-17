<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set("Europe/Moscow");
setlocale(LC_ALL, 'ru_RU');
session_start();

$config = require __DIR__.'/config.php';
require_once __DIR__.'/functions/db/db.php';
require_once __DIR__.'/functions/view/view.php';
require_once __DIR__.'/functions/validators/validation.php';
require_once __DIR__.'/functions/validators/verify_login.php';
require_once __DIR__.'/functions/validators/validate_add_question.php';
require_once __DIR__.'/functions/validators/validate_show_test.php';
require_once __DIR__.'/functions/validators/validate_answers.php';
$connection = db_connect($config['db']);