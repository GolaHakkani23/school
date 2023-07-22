
<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$databasename="store_db";
$conn=new mysqli($servername,$username,$password,$databasename);


if(isset($_POST['Submit']))
{
	$data_name=$_POST['name'];

	$data_email=$_POST['email'];
	$data_phone=$_POST['phone'];
	$data_message=$_POST['message'];

$sql="INSERT INTO admisson(name,email,phone,message	) VALUES('$data_name','$data_email','$data_phone','$data_message')";



$result=mysqli_query($conn,$sql);
if ($result) {
$_SESSION['message']="your application sent successful";
header("location:index1.php");



}
else
{
echo 'apply failed';

}



}
	
		




?>
