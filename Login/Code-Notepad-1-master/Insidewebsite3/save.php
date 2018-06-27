<?php

session_start();

$db=mysqli_connect("localhost","root","","notes");

if (isset($_POST['button'])) {
   
	$text=$_POST['Text'];
	$Title=$_POST['title'];
	

		$sql="INSERT INTO users(note,title) VALUES('$text','$Title')";
		
		mysqli_query($db, $sql);

		
			
}
?>

