<?php
include 'connect.php';

$fname=$_POST["fName"];
$lname=$_POST["lName"];
$name=$_POST["name"];
$password=$_POST["pass"];

$q="INSERT INTO db_regester VALUES ('$fName','$lName', $name','$password')";
$result=$conn->query($q);
if($result)
{
echo '<br>Registration Successful! <br><a href="login.html">Click here</a> to login.';

}
?>

