



<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>student managment system</title>
	<link rel="stylesheet" type="text/css" href="b.css">

</head>
<body>
<nav>
	<label class="logo">AIUB</label>
	<ul>
		<li><a href="">Home</a></li>
		<li><a href="">Contact</a></li>
		<li><a href="">Admisson</a></li>
		<li><a href="login.php" class="btn btn-success">login</a></li>
	</ul>
</nav>
<div class="section1">
	<label class="img_text">We Teach Students With Care</label>
	<img class="main_img" src="school_management.jpg">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">

		    <img class="welcome_img" src="school2.jpg">
			</div>
           <div class="col-md-8">
           	<h1>Welcome to AIUB</h1>
           	<p>hhhhhhhhhhhhhhhhhhhhhhhhhhhhhfdhf tefgewsh hfh</p>
           </div>
			
		</div>



	</div>
	<center>
		<h1>Our teachers</h1>
	</center>
<div class="container">
<div class="row">
<div class="col-md-4">
	<img class="teacher" src="teacher1.jpg">
	<p>in a vibrant,academically challenging,and encouraging enviorment where manifold viewpoints are prized and celebrated.</p>
</div>
<div class="col-md-4">
	<img class="teacher" src="teacher2.jpg">
	<p>in a vibrant,academically challenging,and encouraging enviorment where manifold viewpoints are prized and celebrated.</p>
</div>
	<div class="col-md-4">
		<img class="teacher" src="teacher3.jpg">
		<p>in a vibrant,academically challenging,and encouraging enviorment where manifold viewpoints are prized and celebrated.</p>
	</div>



</div>



</div>
	<center>
		<h1>Our courses</h1>
	</center>
<div class="container">
<div class="row">
<div class="col-md-4">
	<img class="teacher" src="web.jpg">
	<h3>Web Developer</h3>
</div>
<div class="col-md-4">
	<img class="teacher" src="graphic.jpg">
	<h3>Graphics Design</h3>
</div>
	<div class="col-md-4">
		<img class="teacher" src="marketing.png">
		<h3>Marketing</h3>
	</div>

</div>
</div>
<center>
<h3 class="adm">Admisson Form</h3>
</center>
<div align="center" class="admisson_form">
	<form action="data_check.php" method="POST">
		<div class="adm_int">
			<label class="label_text">Name</label>
			<input class="input_deg" type="text" name="name">
			
				
		</div>
		
         <div class="adm_int">
			<label class="label_text">Email</label>
			<input class="input_deg" type="text" name="email">
		</div>

         <div class="adm_int">
			<label class="label_text">Phone</label>
			<input class="input_deg" type="text" name="phone">
		</div>
		<div class="adm_int">
			<label class="label_text">Message</label>
			<textarea class="in_text" name="message"></textarea>
		</div>
		<div class="adm_int">
			
			<input class="btn btn-primary" id="submit" type="submit" name="Submit" value="Apply">
		</div>






	</form>
	
</div>
<footer>
	<h5 class="footer_text">All @copyright reserved aiub</h5>
</footer>
</body>
</html>