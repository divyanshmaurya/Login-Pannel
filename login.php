<?php
include 'connect.php';
session_start();

$_SESSION['name']=$_POST["name"];
$_SESSION['pass']=$_POST["pass"];
$n=$_SESSION['name'];
$p=$_SESSION['pass'];
$q="SELECT * FROM db_regester WHERE username='$n' AND password='$p'";
	
	$result=$conn->query($q);
	if($result)
	{
		echo "query executed";
		header('location:user.php');
	}
		else
		echo 'Incorrect username or password.<br><a href="login.html">try again</a>';


?>