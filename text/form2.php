<?php

$servername="localhost";
$username="root";
$password="";
$databasename="store_db";
$conn=new mysqli($servername,$username,$password,$databasename);





$empmsg_firstname=$empmsg_lastname=$empmsg_email=$empmsg_password=$empmsg_password_again='';
if(isset($_POST['Submit']))
{
	$user_first_name=$_POST['user_fname'];
	$user_last_name=$_POST['user_lname'];
	$user_email=$_POST['user_email'];
	$user_password=$_POST['user_password'];
	$user_password_again=$_POST['user_password_again'];
	$md5_user_password=md5($user_password);


	if (empty($user_first_name)) {
		$empmsg_firstname='Fill up this field';
	}
	if (empty($user_last_name)) {
		$empmsg_lastname='Fill up this field';
	}
	if (empty($user_email)) {
		$empmsg_email='Fill up this field';
	}
	if (empty($user_password)) {
		$empmsg_password='Fill up this field';
	}
	if (empty($user_password_again)) {
		$empmsg_password_again='Fill up this field';
	}
	if (!empty($user_first_name)&& !empty($user_last_name)&& !empty($user_email)&& !empty($user_password)&& !empty($user_password_again)) {
		
		if ($user_password===$user_password_again) {
			$sql="INSERT INTO user_table(user_fname,user_lname,user_email,user_password	) VALUES('$user_first_name','$user_last_name','$user_email','$md5_user_password')";
			if ($conn->query($sql)== TRUE) {
				header('location:form1.php?usercreated');
			}
		}
		else
		{
			echo "Password not match";
		}
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

<form action="form2.php" method="POST">
		
	<div class="mt-2">
		<label class="form-label">First name:</label>
		<input type="text" class="form-control" name="user_fname" value="<?php if (isset($_POST['Submit'])) {
			echo $user_first_name;
		}?>">
       <?php if(isset($_POST['Submit'])){echo "<span class='text-danger'>".$empmsg_firstname."</span>";}
			?> 
				
	</div>

<div class="mt-2">
		<label class="form-label">Last name:</label>
		<input type="text" class="form-control" name="user_lname" value="<?php if(isset($_POST['Submit'])){echo $user_last_name;}?>">
		 <?php if(isset($_POST['Submit'])){echo "<span class='text-danger'>".$empmsg_lastname."</span>";}
			?> 
	</div>
	<div class="mt-2">
		<label class="form-label">Email:</label>
		<input type="text" class="form-control" name="user_email" value="<?php if(isset($_POST['Submit'])){echo $user_email;}?>">
		 <?php if(isset($_POST['Submit'])){echo "<span class='text-danger'>".$empmsg_email."</span>";}
			?> 
	</div>
	

	<div class="mt-2">
		<label class="form-label">Password:</label>
		<input type="Password" class="form-control" name="user_password"value="<?php if(isset($_POST['Submit'])){echo $user_password;}?>">
		 <?php if(isset($_POST['Submit'])){echo "<span class='text-danger'>".$empmsg_password."</span>";}
			?> 
	</div>
<div class="mt-2">
		<label class="form-label">Password Again:</label>
		<input type="Password" class="form-control" name="user_password_again"value="<?php if(isset($_POST['Submit'])){echo $user_password_again;}?>">
		 <?php if(isset($_POST['Submit'])){echo "<span class='text-danger'>".$empmsg_password_again."</span>";}
			?> 
	</div>
	<div class="mt-2">
		   <button class="btn btn-primary" name="Submit">Submit</button>
	</div>





</form>
<h5>Have an account?<a href="form1.php">Login</a></h5>


			</div>
			<div class="col-4"></div>
		</div>
		


	</div>



</body>
</html>