<?php
session_start();

session_destroy();
echo "You are being Logged Out";
header("Refresh:2; url:http://localhost/login+registerfinal3/loginpageyoutube.php");


?>