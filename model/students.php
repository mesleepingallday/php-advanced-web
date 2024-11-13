<?php

require_once 'model/connect.php';
$connect = connect();

function getAllStudents() {
    global $connect;
    $sql = "SELECT students.*, classes.name as class_name FROM students LEFT JOIN classes ON students.class_id = classes.id";
    $result = mysqli_query($connect, $sql);
    mysqli_close($connect);
    return $result;
}
function editStudent($id) {
    global $connect;
    $sql = "SELECT * FROM students WHERE id = '$id'";
    $students = mysqli_query($connect, $sql);
    $student = mysqli_fetch_array($students);
    mysqli_close($connect);
    return $student;
}
function updateStudent($id, $name, $class_id) {
    global $connect;
    $sql = "UPDATE students SET name = '$name', class_id = '$class_id' WHERE id = '$id'";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
    header("location: index.php?controller=students");
}
function storeStudent($name, $class_id) {
    global $connect;
    $sql = "INSERT INTO students (name, class_id) VALUES ('$name','$class_id')";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
    header("location: index.php?controller=students");
}
function deleteStudent($id) {
    global $connect;
    $sql = "DELETE FROM students WHERE id = '$id'";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
    header("location: index.php?controller=students");
}


