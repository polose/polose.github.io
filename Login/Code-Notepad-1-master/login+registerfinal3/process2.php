<?php
session_start();
$db=mysqli_connect("localhost","root","","register");
if (isset($_POST['submit'])) {
   
	$Name=mysql_real_escape_string($_POST['Name']);
	$RollNo=mysql_real_escape_string($_POST['RollNo']);
	$email=mysql_real_escape_string($_POST['email']);
	$department=mysql_real_escape_string($_POST['department']);
	$pass=mysql_real_escape_string($_POST['pass']);
	$confirmpass=mysql_real_escape_string($_POST['confirmpass']);

	if ($pass == $confirmpass) 
	{
		$pass=md5($pass);
		$sql="INSERT INTO users(Name,RollNo,email,department,pass) VALUES('$Name','$RollNo','$email','$department','$pass')";
		mysqli_query($db, $sql);
		echo "Sign up success";
		header("Location:http://localhost/login+registerfinal/loginpageyoutube.html");
						
	}
	else
	{
		echo "passwords dont match";
       $_SESSION['message']="The two passwords do not match";

	}
}
?>

