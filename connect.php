<?php
	
$user="Divyansh";
$pass="123";
$host="localhost";
$database = "sample";
/*if($conn = mysqli_connect($host,$user,$pass,$database));
	echo "Connected to user<br>";
*/

$conn = new mysqli($host,$user,$pass,$database) or die($conn->connect_error);
?>
