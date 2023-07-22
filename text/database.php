<?php
$servername="localhost";
$username="root";
$password="";
$databasename="hms";
$conn= new mysqli($servername,$username,$password,$databasename);
$sql="select * from reg";
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
	
      <table border="1" align="center">
      	<tr>
      		<th>Id</th>
      		<th>Name</th>
      		<th>Address</th>
      		<th>Option</th>
      	</tr>
      <?php while ($row=$result->fetch_assoc()) {?>
	
      	<tr>
      		<td><?php echo $row["Id"] ; ?></td>
      		<td><?php echo $row["Name"] ; ?></td>
      		<td><?php echo $row["Adress"] ; ?></td>
      		<td><a href="<?php echo $row["Id"] ; ?>">	<button>Edit</button> </a> </td>

      	</tr>

     <?php } ?>
      </table>
      
</body>
</html>
