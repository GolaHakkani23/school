<?php
$servername="localhost";
$username="root";
$password="";
$databasename="store_db";
$conn=new mysqli($servername,$username,$password,$databasename);

$id=$_GET['delete'];
$sql="delete  from user where Id='$id'";
$result=$conn->query($sql);

if ($result) {
	header("location:view_student.php");
}



?>