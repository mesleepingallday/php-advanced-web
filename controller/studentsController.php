<?php

switch ($action){
    case '':
        require 'model/students.php';
        $students = getAllStudents();
        require 'view/students/index.php';
        break;
    case 'create':
        #Gọi đến model lớp để lấy danh sách lớp học
        require 'model/classes.php';
        #Nhưng $action='create' -> trong classes model không có case 'create':
        $classes = getAllClasses();
        require 'view/students/create.php';
        break;
    case 'edit':
        $id = $_GET['id'];
        require 'model/classes.php';
        $classes = getAllClasses();
        require 'model/students.php';
        $student = editStudent($id);
        require 'view/students/edit.php';
        break;
    case 'update':
        $id = $_POST['id'];
        $name = $_POST['name'];
        $class_id = $_POST['class_id'];
        require 'model/students.php';
        updateStudent($id, $name, $class_id);
        break;
    case 'delete':
        $id = $_GET['id'];
        require 'model/students.php';
        deleteStudent($id);
        break;
    case 'store':
        $name = $_POST['name'];
        $class_id = $_POST['class_id'];
        require 'model/students.php';
        storeStudent($name, $class_id);
        break;
    default:
        echo "Action quản lý students không hợp lệ!";
        break;
}

