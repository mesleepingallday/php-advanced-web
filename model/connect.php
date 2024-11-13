<?php
function connect()
{
$connect = mysqli_connect("localhost", "root", "", "advanced_website");
mysqli_set_charset($connect, "utf8");
    return $connect;
}
