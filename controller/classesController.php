<?php

switch ($action){
    case '':
        require 'model/classes.php';
        $classes = getAllClasses();
        require 'view/classes/index.php';
        break;
    case 'create':
        require 'view/classes/create.php';
        break;
    case 'store':
        $name = $_POST['name'];
        require 'model/classes.php';
        storeClass($name);
        break;
    case 'edit':
        $id = $_GET['id'];
        require 'model/classes.php';
        $class = editClass($id);
        require 'view/classes/edit.php';
        break;
    case 'update':
        $id = $_POST['id'];
        $name = $_POST['name'];
        require 'model/classes.php';
        updateClass($id, $name);
        break;
    case 'delete':
        $id = $_GET['id'];
        require 'model/classes.php';
        deleteClass($id);
        break;
    default:
        echo "Action quản lý classes không hợp lệ!";
        break;
}

