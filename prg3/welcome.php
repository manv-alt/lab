<?php
session_start();
if(isset($_SESSION["username"])){
    $username=$_SESSION["username"];
}else{
    header("location:index.php");
}
if(isset($_GET["logout"])){
    $_SESSION=array();
    session_destroy();
    header("location:index.php");
    exit();
}
?>
<html>
    <head>
        <title>Welcome Form</title>
    </head>
<body>
    <h2>Welcome 
    <?php
    echo $_SESSION["username"];
    ?></h2>
    <p>This is a secure area. You're logged in succesfully.</p>
    <a href="Welcome.php?logout=1">Logout</a>
</body>
</html>
