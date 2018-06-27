<?php
$RollNo=$_POST['user'];
$pass=$_POST['pass'];



$RollNo=stripcslashes($RollNo);
$pass=stripcslashes($pass);
$RollNo=mysql_real_escape_string($RollNo);
$pass=mysql_real_escape_string($pass);
$pass=md5($pass);


mysql_connect("localhost","root","");
mysql_select_db("register");


$result=mysql_query("select * from users where RollNo = '$RollNo' and pass = '$pass'")
    or die("Failed to query Database ".mysql_error());
    $row=mysql_fetch_array($result);
    if ($row['RollNo'] == $RollNo && $row['pass'] == $pass) {
    	echo "Login Success";
    	header("Location:http://localhost/Insidewebsite3/websitehome.html");
    }else{
    	echo "Login Failed";
    }

?>