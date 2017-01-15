<?php  
session_start();
echo "welcome ";
echo $_SESSION['name'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<hr>
<a href="logout.php">Logout</a>
</body>
</html>
