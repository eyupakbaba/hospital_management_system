<!DOCTYPE html>
<html>
<head>
	<title>Hospital Management System HOME</title>

	<link rel="stylesheet" href="index.css">
</head>
<body style="background-image: url(images/heart.jpg); background-repeat: no-repeat; background-size: cover;">
	<?php 
		include("include/header.php");
	?>

	<div style="margin-top: 40px;"></div>
	<div class="container">
	<div class="col-md-12">
		<div class="row">
			<div div="info" class="col-md-3 mx-1 shadow">

				<img src="images/info.png" style="width: 80%; height: 80%";>

				<h5 class="text-center">Click on the button for more information</h5>

				<a href="#">
					<button class="button" style="margin-left: 30%;">More Info</button>
				</a>
				
			</div>
			<div class="col-md-3 mx-1 shadow">
				
				<img src="images/patient.png" style="width: 80%; height: 80%;">

				<h5 class="text-center">Create account so that we can take good care of you</h5>
 
				<a href="account.php">
					<button class="button" style="margin-left: 30%;">Create Account</button>
				</a>
			</div>
			<div id="doc" class="col-md-3 mx-1 shadow">
				
				<img src="images/evde-dok.jpg" style="width: 80%; height: 80%;">

				<h5 class="text-center">We are employing high-quality doctors</h5>

				
				<a href="apply.php">
					<button class="button" style="margin-left: 30%;">Apply Now!</button>
				</a>
				
			</div>
		</div>
	</div>
	</div>

</body>
</html>