<?php

$controller = $_GET['controller'] ?? '';
$action = $_GET['action'] ?? '';

switch ($controller) {
    case '':
        require 'controller/root.php';
        break;
    case 'classes':
        require 'controller/classesController.php';
        break;
    case 'students':
        require 'controller/studentsController.php';
        break;
    default:
        echo 'Không tìm thấy controller phù hợp';
}