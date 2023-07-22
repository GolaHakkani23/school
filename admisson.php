





<?php
$servername="localhost";
$username="root";
$password="";
$databasename="store_db";
$conn=new mysqli($servername,$username,$password,$databasename);


$sql="select * from admisson";
$result=$conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="h.css">
	<title></title>
</head>
<body>
	<h1 align="center">Applied For admisson</h1>
	<form method="get" action="Admisson.php">
      <table class="table">
      	<tr>
      		<th>Name</th>
      		<th>Email</th>
      		<th>Phone</th>
      		<th>Message</th>
      	</tr>
      <?php while ($row=$result->fetch_assoc()) {?>
	
      	<tr>
      		<td><?php echo $row["name"] ; ?></td>
      		<td><?php echo $row["email"] ; ?></td>
      		<td><?php echo $row["phone"] ; ?></td>
      		<td><?php echo $row["message"] ; ?></td>
      		

      	</tr>

     <?php } ?>
      </table>
      </form>
</body>
</html>