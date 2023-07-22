
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1 align="center">WELCOME TO MY PAGE</h1>
<?php
session_start();
if (!empty($_SESSION['login'])) {
	echo $_SESSION['login'];
}else{
	header('location:form1.php');
}

?>
<h3>
	<a href="logout.php">logout</a>
</h3>

</body>
</html>