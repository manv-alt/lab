<html>
<?PHP
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	echo "form submission results";
	echo "<br>";
	echo "<p>name:".$name."</p>";
	echo "<p>email:".$email."</p>";
	echo "<p>message:".$message."</p>";
	}
	?>
	</html>
