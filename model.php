<?php

$connect = mysqli_connect("localhost", "root", "", "advanced_website");
mysqli_set_charset($connect, "utf8");

$sql = "SELECT * FROM `orders` WHERE name = '$order'";
$result = mysqli_query($connect, $sql);
$firstOrder = mysqli_fetch_array($result);
