<?php
session_start();
if (!empty($_SESSION['username'])) {
	echo $_SESSION['username'];
}else{
	header('location:login.php');
}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<h2><a href="logout.php">Logout</a></h2>
</body>
</html>