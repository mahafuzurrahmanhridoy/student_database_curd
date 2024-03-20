<?php

namespace App\Controllers;

use PDO;
use PDOException;

class StudentController
{
    private $dbHost = "localhost";
    private $dbName = "students_database";
    private $dbUser = "root";
    private $dbPassword = "";
    private $conn;

    public function __construct()
    {
        try {
            session_start();
            $this->conn = new PDO("mysql:host=$this->dbHost;dbname=$this->dbName", $this->dbUser, $this->dbPassword);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function index()
    {
        $query = "SELECT * FROM `student`";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }



    public function store(array $data)
    {

        try {
            $query = "INSERT INTO student (name, email, class, phone_number) VALUES (:student_name, :email_address, :class, :phone_number)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                'student_name' => $data['name'],
                'email_address' => $data['email'],
                'class' => $data['class'],
                'phone_number' => $data['phone_number'],
            ]);
            $_SESSION['message'] = 'Successfully Created';
            header('location: ./../views/index.php');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function show($id)
    {
        $query = "SELECT * FROM student where id = $id";
        $stmt = $this->conn->query($query);

        return $stmt->fetch();
    }


    public function update(array $data)
    {

        try {

            // "UPDATE products SET title=:title where id = :id";
            $query = "UPDATE student SET name=:name where id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                ':name' => $data['name'],
                ':id' => $data['id'],
            ]);

            $_SESSION['message'] = 'Successfully Updated';

            header('location: ./../views/index.php');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public function delete($id)
    {
        try {
            $query = "delete from student where id = $id";
            $stmt = $this->conn->query($query);
            $stmt->execute();

            $_SESSION['message'] = 'Successfully Deleted';

            header('location: ./../views/index.php');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
