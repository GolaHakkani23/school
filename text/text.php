<?php
$servername="localhost";
$username="root";
$password="";
$dbname="hsm";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
   die("connction failed".$conn->connect_error);}
echo 'connction succesful';

?>
<<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title></title>
</head>
<body>
<form action="textshow.php" method="post">

   <list>Name:<list>
      <input type="text" name="name"><br><br>
      <list>Password:<list>
         <input type="Password" name="Password"><br><br>
         <button>submit</button>
      </list>
      </form>


</body>
</html>
