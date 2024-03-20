<?php

use App\Controllers\StudentController;

include_once './../vendor/autoload.php';

$students = new StudentController();

$student = $students->show($_GET['id']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Student Form</title>
</head>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card-header">
                <h4>
                    Showing Student data
                    <a href="./index.php" class="btn btn-success float-right">Go Back</a>
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Class</th>
                            <th scope="col">Phone Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $student['name'] ?></td>
                            <td><?= $student['email'] ?></td>
                            <td><?= $student['class'] ?></td>
                            <td><?= $student['phone_number'] ?></td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

</html>