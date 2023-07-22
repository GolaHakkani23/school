<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$databasename="store_db";
$conn=new mysqli($servername,$username,$password,$databasename);
 error_reporting(0);
if ($_SERVER['REQUEST_METHOD']=="POST") {
	$name=$_POST['username'];
	$pass=$_POST['password'];
	$sql="SELECT * FROM user WHERE Username='$name' AND password='$pass'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
	
	if ($row['usertype']=='student') {

		$_SESSION['username']=$name;
		header('location:studenthome.php');
		
	} 
    
	elseif ($row['usertype']=='admin') {
		$_SESSION['username']=$name;
		header('location:adminhome.php');
		
	} 

	else
	{   

		echo 'not found';
	}





}







?>



<!DOCTYPE html>
<html>
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="d.css">
	<title>Login Form</title>
</head>
<body class="body_deg" background="">
	<center>
		<div class="form_deg">
			<center class="title_deg">LOGIN FORM
				

			</center>
         <form class="login_form" action="login.php" method="POST">

         	<div>
            <label class="lebel_deg">Username</label>
            <input type="text" name="username">

         	</div>
         	<div>
            <label class="lebel_deg">password</label>
            <input type="password" name="password">
         	</div>
         	<div>
          
            <input class="btn btn-primary" type="submit" name="submit" value="Login">
         	</div>



         </form>


		</div>
	</center>

</body>
</html>