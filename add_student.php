<?php

$servername="localhost";
$username="root";
$password="";
$databasename="store_db";
$conn=new mysqli($servername,$username,$password,$databasename);




if(isset($_POST['Submit']))
{
	$user_name=$_POST['username'];
	$user_phone=$_POST['phone'];
	$user_email=$_POST['email'];
	$u_password=$_POST['password'];
	$usertype='student';

	$check="SELECT * FROM user Where username='$user_name'";
	$check_user=mysqli_query($conn,$check);
	$row_count=mysqli_num_rows($check_user);
	if ($row_count==1) {
		echo "username already exsist";
	} else
		{
			
		}


$sql="INSERT INTO user(username,phone,email,usertype,password) VALUES('$user_name',
	'$user_phone','$user_email','$usertype','$u_password')";

$result=mysqli_query($conn,$sql);
if ($result) {
	echo "Added student";

}
	else{
		echo "failed";
	}	 

}





?>


<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login page</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-4"></div>
			<div class="col-4" style="margin-top:60px;"> 

<form action="add_student.php" method="POST">
		
	<div class="mt-2">
		<label class="form-label">Name:</label>
		<input type="text" class="form-control" name="username" >
		
				
	</div>


	
	<div class="mt-2">
		<label class="form-label">Phone:</label>
		<input type="text" class="form-control" name="phone" >
	</div>
	<div class="mt-2">
		<label class="form-label">Email:</label>
		<input type="text" class="form-control" name="email" >
		 
	</div>

	<div class="mt-2">
		<label class="form-label">Password:</label>
		<input type="Password" class="form-control" name="password">
		

	<div class="mt-2">
		   <button class="btn btn-primary" name="Submit">add student</button>
	</div>





</form>



			</div>
			<div class="col-4"></div>
		</div>
		


	</div>



</body>
</html>