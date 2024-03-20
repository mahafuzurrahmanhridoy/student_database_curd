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

<body>
    <div class="container">
        <div class="row">
            <div class="card-body">
                <div class="col-md-12 mt-5">
                    <div class="card-header">
                        <h4>
                            Student Registration Form
                            <a class="btn btn-outline-primary float-right" href="./index.php">Student List</a>
                        </h4>
                    </div>
                    <form action="./store.php" method="post">
                        <div class="col-md-12 mt-5">
                            <label for="" class="form-label">Student Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="col-md-12 mt-5">
                            <label for="" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="col-md-12 mt-5">
                            <label for="" class="form-label">Class</label>
                            <input type="text" class="form-control" id="class" name="class">
                        </div>
                        <div class="col-md-12 mt-5">
                            <label for="" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="number" name="phone_number">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

</body>

</html>