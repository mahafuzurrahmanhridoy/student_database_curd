<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Student Database</title>
</head>

<body>
    <?php

    include_once './../vendor/autoload.php';

    use App\Controllers\StudentController;

    $students = new StudentController();

    $student = $students->index();

    // echo '<pre>';
    // print_r($student);
    // echo '</pre>';
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card-header">
                    <?php
                    if (isset($_SESSION['message'])) {
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    }
                    ?>
                    <h4>
                        Student Database
                        <a href="./create.php" class="btn btn-success float-right">Add New Student</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Class</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $id = 0;
                            foreach ($student as $students) { ?>

                                <tr>
                                    <th><?= ++$id ?></th>
                                    <td><?= $students['name'] ?></td>
                                    <td><?= $students['email'] ?></td>
                                    <td><?= $students['class'] ?></td>
                                    <td><?= $students['phone_number'] ?></td>
                                    <td>
                                        <a href="./edit.php?id=<?= $students['id'] ?>" class="btn btn-primary">Edit</a>
                                        <a href="./show.php?id=<?= $students['id'] ?>" class="btn btn-info">Show</a>
                                        <a href="./delete.php?id=<?= $students['id'] ?>" class="btn btn-danger">Delete</a>

                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

</body>

</html>