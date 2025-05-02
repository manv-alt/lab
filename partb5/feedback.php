<?php
include "conn.php";
$res = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submitbtn'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $query1 = "INSERT INTO `feedback`(`name`,`email`,`subject`,`message`)VALUES('$name','$email','$subject','$message')";
        $res = $con->query($query1);
        if ($res) {
            echo "<script>window.alert('Feedback  Sumbitted');</script>";
        }
    }
}
