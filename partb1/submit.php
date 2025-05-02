<?php 
if ($_SERVER['REQUEST_METHOD']=="POST")
{
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $Password=$_POST['password'];

    $Phone=$_POST['phone'];
    echo"<h1>Welcome $Name</h1>";
    echo"<h2>Your Email is $Email</h2>";
    echo "<h2>Your Password is $Password</h2>";
    echo "<h2>Your Phone Number is $Phone</h2>";
    echo "<h2>Thank you for registering</h2>";
}
?>