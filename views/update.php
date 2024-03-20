<?php


include_once './../vendor/autoload.php';

use App\Controllers\StudentController;

$student = new StudentController();

$student->update($_POST);

print_r($_POST);
