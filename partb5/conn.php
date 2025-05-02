<?php
$servername = "localhost";
$username = "root";
$password = "villan@12";
$db = "test1";
$con = mysqli_connect($servername, $username, $password, $db);
if (!$con) {
    die("error");
}
