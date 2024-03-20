<?php


include_once './../vendor/autoload.php';

use App\Controllers\StudentController;

$students = new StudentController();

$student = $students->delete($_GET['id']);
