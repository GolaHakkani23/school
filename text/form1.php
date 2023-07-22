<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$databasename="store_db";
$conn=new mysqli($servername,$username,$password,$databasename);

$emp_email=$emp_password='';
if(isset($_POST['submit']))

{
$user_email=$_POST['user_email'];
$user_password=$_POST['user_password'];
$md5_user_password=md5($user_password);
if (empty($user_email)) {
$emp_email='fill up this filled';
}
if (empty($user_password)) {
	$emp_password='fill up this filled';
}

if (!empty($user_email)&& !empty($user_password)) {
	$sql="SELECT * FROM user_table WHERE user_email='$user_email' AND user_password='$md5_user_password'";
	$query=$conn->query($sql);
	if ($query->num_rows>0) {
		$_SESSION['login']='login success';
		header('location:dashbord.php');
		
	} else
	{
		echo 'not found';
		
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
			<div class="col-4" style="margin-top:150px;"> 
				<?php
				if (isset($_GET['usercreated'])) {
					echo "user create successfully";
				}





				?>

<form action="form1.php" method="POST">
		
	<div class="mt-2">
		<label class="form-label">Email:</label>
		<input type="text" class="form-control" name="user_email"value="<?php if (isset($_POST['submit'])) {
			echo $user_email;
		}?>">
		 <?php if(isset($_POST['submit'])){echo "<span class='text-danger'>".$emp_email."</span>";}
			?> 
	</div>

<div class="mt-2">
		<label class="form-label">Password:</label>
		<input type="text" class="form-control" name="user_password"value="<?php if (isset($_POST['submit'])) {
			echo $user_password;
		}?>">
		<?php if(isset($_POST['submit'])){echo "<span class='text-danger'>".$emp_password."</span>";}
			?>
	</div>

	<div class="mt-2">
		   <button class="btn btn-primary" name="submit">Login</button>
	
			<div class="col-4"></div>
		
</form>
<h5>Have an account?<a href="form2.php">Register</a></h5>

</body>
</html>