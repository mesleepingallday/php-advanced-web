<?php

require_once 'model/connect.php';
$connect = connect();

function getAllClasses() {
    global $connect;
    $sql = "SELECT * FROM classes";
    $result = mysqli_query($connect, $sql);
    mysqli_close($connect);
    return $result;
}
function storeClass($name) {
    global $connect;
    $sql = "INSERT INTO classes (name) VALUES ('$name')";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
    header("location: index.php?controller=classes");
}
function editClass($id) {
    global $connect;
    $sql = "SELECT * FROM classes WHERE id = '$id'";
    $classes = mysqli_query($connect, $sql);
    $class = mysqli_fetch_array($classes);
    mysqli_close($connect);
    return $class;
}
function updateClass($id, $name) {
    global $connect;
    $sql = "UPDATE classes SET name = '$name' WHERE id = '$id'";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
    header("location: index.php?controller=classes");
}
function deleteClass($id) {
    global $connect;
    $sql = "DELETE FROM classes WHERE id = '$id'";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
    header("location: index.php?controller=classes");
}

