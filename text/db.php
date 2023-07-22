<?php
$servername="localhost";
$username="root";
$password="";
$databasename="hms";
$conn= new mysqli($servername,$username,$password,$databasename);
$sql="select * from ab";
$result=$conn->query($sql);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1 align="center">Agent</h1>
	<form method="get" action="edit.php">
      <table align="center" border="2">
      	<tr>
      		<th>Id</th>
      		<th> Shop Name</th>
      		<th>Address</th>
      		<th>Option</th>


      		
      	</tr>
      <?php while ($row=$result->fetch_assoc()) {?>
	
      	<tr>
      		<td><?php echo $row["Id"] ; ?></td>
      		<td><?php echo $row["Name"] ; ?></td>
      		<td><?php echo $row["Address"] ; ?></td>
      		<td><button name="edit" value="<?php echo $row["Id"] ; ?>">Edit</button></td>
      		<td><button name="edit" value="<?php echo $row["Id"] ; ?>">Submit</button></td>

      	</tr>

      	</tr>

     <?php } ?>
      </table>
      </form>
</body>
</html>