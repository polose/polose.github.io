
<?php
mysql_connect('localhost','root','');
mysql_select_db('notes');
$sql="SELECT * FROM users";
$records=mysql_query($sql);
?>



<!DOCTYPE html>
<html>
<head>
	<title>website</title>
	<link rel="stylesheet" type="text/css" href="viewcss.css">
</head>
<body>
<div id="container">
<div id="header">
	<a href="http://localhost/Insidewebsite3/websitehome.html">Home</a>
	<a href="http://localhost/Insidewebsite3/view.php">View</a>
		<a href="http://localhost/login+registerfinal3/loginpageyoutube.php" style="float:right" class="Log">Logout</a>
</div>
<div id="content">
<div id="profile">

<img src="http://www.hrzone.com/sites/all/themes/pp/img/default-user.png" alt="Profile pic">
	
</div>
<div id="Text">
<form action="view.php" method="get">
<input type="text" name="id" value="" id="view" style="border: solid 1px black;" placeholder="Enter the ID"/>
<input type="submit" name="submit" value="submit"/>
</form>
<table width="400" border="1" cellpadding="1">
	
	<tr>
		<th>Id</th>
		<th>Title</th>
	</tr>

	<?php

	while ($data=mysql_fetch_assoc($records)) {
		echo "<tr>";

		echo "<td>".$data['id']."</td>";
		echo "<td>".$data['title']."</td>";
		echo "</tr>";
	}
	


	?>

</table>

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

$id = isset($_GET['id']) ? $_GET['id'] : '';

$id = mysqli_real_escape_string($conn,$id);
$query = "SELECT * FROM `users` WHERE `id`='" . $id . "'";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)) {
echo "<br><br>";
echo ("<xmp>");
echo $row['id']."=>".$row['title'];
echo "<br>";
echo "<br>";
echo "<br>";
echo $row['note'];

echo ("</xmp>");
}
?>

</div>
</div>
<div id="footer">
	

</div>
</div>
</body>
</html>