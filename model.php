<?php

$connect = mysqli_connect("localhost", "root", "", "advanced_website");
mysqli_set_charset($connect, "utf8");

switch($action){
    case '':
        $sql = "SELECT * FROM students";
        $students = mysqli_query($connect, $sql);
        break;
    case 'create':
        require 'view/create.php';
        break;
    case 'store':
        $sql = "INSERT INTO students(student_name) VALUES ('$name')";
        mysqli_query($connect, $sql);
        break;
    case 'edit':
        $sql = "SELECT * FROM students WHERE student_id = '$id'";
        $students = mysqli_query($connect, $sql);
        $student = mysqli_fetch_array($students);
        print_r($student);
        break;
    case 'update':
        $sql = "UPDATE students SET student_name = '$name' WHERE student_id = '$id'";
        mysqli_query($connect, $sql);
        break;
    case 'delete':
        $sql = "DELETE FROM students WHERE student_id = '$id'";
        mysqli_query($connect, $sql);
        break;
    default:
        echo "Thao tác không hợp lệ";
}

mysqli_close($connect);