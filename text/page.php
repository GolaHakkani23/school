<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Show</title>
</head>
<body>
     <?php 
         if(empty($_POST['Name']))
         {
         	echo "the name field is empty";
         }
         else
         	 echo $_POST['Name'];
             
             echo $_POST['Id'];
             echo $_POST['text']

        
     ?>
</body>
</html>