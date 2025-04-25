<?php
session_start();
if(isset($_POST["btn"])){
    $username=$_POST["username"];
    $password=$_POST["password"];
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username=$_POST["username"];
        $password=$_POST["password"];
    if($username=="manish"&&$password=="2004"){
        $_SESSION["username"]=$username;
        header("location:welcome.php");
        exit();
    }else{                                                              
        $error_msg="Invalid User and Password";
    }
}
}
?>
<!DOCTYPE html>
<head>
    <title>Login Form</title>
</head>
<body>
    <h2>Login Form</h2>
    <form method="post">
        <p>
            <label>Username:</label>
            <input type="text" name="username" required>
        </p>
        <p>
            <label>Password:</label>
            <input type="password" name="password" required/>
        </p>
        <p>
            <input type="submit" value="Login" name="btn"/>
        </p>
    </form>
    <?php
    if(isset($error_msg)){
        echo "<h3 style=color:red>$error_msg</h3>";
    }
    ?>
</body>
</html>
