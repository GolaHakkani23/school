<?php
session_start();
if (!isset($_SESSION['username'])) {
	header("location:login.php");
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashbord</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
<header class="k">
	<a href="">Admin Dashbord</a>
	<div class="logout"><a href="logout.php" class="btn btn-primary">Logout</a></div>
</header>
<aside>
<ul>
		



		<li><a href="admisson.php">Admisson</a></li>
	<li><a href="add_student.php">Add Student</a></li>
	<li><a href="view_student.php">view Student</a></li>
	<li><a href="">Add teacher</a></li>
	<li><a href="">view teacher</a></li>
	<li><a href="">Add course</a></li>
	<li><a href="">view coursee</a></li>
	</ul>




</aside>
</body>
</html>