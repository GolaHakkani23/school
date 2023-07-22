<?php
$servername="localhost";
$username="root";
$password="";
$databasename="hms";
$conn= new mysqli($servername,$username,$password,$databasename);
$sql="select * from ab";
$result=$conn->query($sql);
$id=$_GET['edit'];
$sql="select * from ab where Id='$id'";
$result=$conn->query($sql);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	
	$name= $_POST['name'];
	$add=$_POST['address'];
	$sql="update ab set name='$name', Address='$add' where Id='$id'";
    $conn->query($sql);
    header("location:db.php");
   
}

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
     <form method="post">
     	<?php while ($row=$result->fetch_assoc()) {?>
		Id: <input type="text" name="id" value="<?php echo $row["Id"] ; ?>" readonly> <br>
      	Name: <input type="text" name="name" value="<?php echo $row["Name"] ; ?>"><br>
      	Address: <input type="text" name="address" value="<?php echo $row["Address"] ; ?>"><br>
      	<button name="edit">Edit</button>


     <?php } ?>
    </form> 
</body>
</html>