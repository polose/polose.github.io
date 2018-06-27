<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "notes";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);
// Check connection
if ($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
} 
$id = $_GET['id'];
$id = mysqli_real_escape_string($conn,$id);
$query = "SELECT * FROM `users` WHERE `id`='" . $id . "'";
$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)) {
echo "<br><br>";
echo $row['id'];
echo $row['note'];
echo $row['title'];
}
?>