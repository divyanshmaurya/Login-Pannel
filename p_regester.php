<?php
include 'connect.php';

$name=$_POST["name"];
$password=$_POST["pass"];

$q="INSERT INTO db_regester VALUES ('$name','$password')";
$result=$conn->query($q);
if($result)
{
echo '<br>You are regestered.<br><a href="login.html">Click here</a> to login.';

}
?>

