<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h1>Registration Form</h1>
    <form id="form" action="submit.php" method="POST">
        <div id="container">

            <label for="name"> Name</label></br>
            <input type="text" placeholder="enter your name" name="name" required /></br></br>
            
            <label for="email"> Email</label></br>
            <input type="email" placeholder="enter your email address" name="email" required /></br></br>

            <label for="message"> Message</label></br>
            <textarea rows="4" name="message" placeholder="enter your message" name="message" required>
        </textarea> </br></br>
            <button>submit</button>
        </div>
    </form>
</body>

</html>