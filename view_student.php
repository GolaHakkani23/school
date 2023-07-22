
<?php
$servername="localhost";
$username="root";
$password="";
$databasename="store_db";
$conn=new mysqli($servername,$username,$password,$databasename);
$sql="select * from user where usertype='student'";
$result=$conn->query($sql);

if($_SERVER["REQUEST_METHOD"]=="GET")
{
	if(isset($_GET['edit']))
	{
		$id=$_GET['edit'];
      header("location:edit.php?edit=$id");   
	}
	elseif(isset($_GET['delete']))
	{
		$id=$_GET['delete'];
		header("location:delete.php?delete=$id");
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="get">
      <table border="1">
      	<tr>
      		<th>ID</th>
      		<th>Name</th>
      		<th>PHONE</th>
      		<th>Email</th>
      		<th>usertype</th>
      		<th>pass</th>
      		<th colspan="2">Option</th>
      	</tr>
      <?php while ($row=$result->fetch_assoc()) {?>
	
      	<tr>
      		<td><?php echo $row["id"] ; ?></td>
      		<td><?php echo $row["username"] ; ?></td>
      		<td><?php echo $row["phone"] ; ?></td>
      		<td><?php echo $row["email"] ; ?></td>
      		<td><?php echo $row["usertype"] ; ?></td>
      		<td><?php echo $row["password"] ; ?></td>
      		<td><button name="edit" value="<?php echo $row["id"] ; ?>">Edit</button></td>
      		<td><button name="delete" value="<?php echo $row["id"] ; ?>">Delete</button></td>

      	</tr>

     <?php } ?>
      </table>
      </form>
</body>
</html>