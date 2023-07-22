<?php
$servername="localhost";
$username="root";
$password="";
$databasename="store_db";
$conn=new mysqli($servername,$username,$password,$databasename);

$id=$_GET['edit'];
$sql="select * from user where Id='$id'";
$result=$conn->query($sql);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	
	$name= $_POST['username'];
	$phone= $_POST['phone'];
	$email= $_POST['email'];
	$type= $_POST['usertype'];
	$pass= $_POST['password'];

	$sql="update user set username='$name', phone='$phone',email='$email',usertype='$type',password='$pass'  where Id='$id'";
    $conn->query($sql);
    header("location:view_student.php");
   
}

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
     <form method="post">
     	<?php while ($row=$result->fetch_assoc()) {?>
	
      	Id: <input type="text" name="id" value="<?php echo $row["id"] ; ?>" readonly> <br>
      	Username: <input type="text" name="username" value="<?php echo $row["username"] ; ?>"><br>
      	Phone: <input type="text" name="phone" value="<?php echo $row["phone"] ; ?>"><br>
          Email: <input type="text" name="email" value="<?php echo $row["email"] ; ?>"><br>
          Usetype: <input type="text" name="usertype" value="<?php echo $row["usertype"] ; ?>"><br>
          Password: <input type="text" name="password" value="<?php echo $row["password"] ; ?>"><br>
      	
      	<button name="edit">Edit</button>

     <?php } ?>
    </form> 
</body>
</html>