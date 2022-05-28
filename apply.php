<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Apply Now!!!</title>
</head>
<body style="background-image: url(images/3202988.jpg);background-size: cover;background-repeat: no-repeat;">
	<?php 
		include("include/header.php");
	 ?>
	 <div class="container-fluid">
	 	<div class="col-md-12">
	 		<div class="row">
	 			<div class="col-md-3"></div>
	 			<div class="col-md-6 my-3 jumbotron">
	 				<form method="post" class="form-control">
	 					<div class="form-group">
	 						<label>Firstname</label>
	 						<input type="text" name="fname" class="form-control" autocomplete="off" placeholder="Enter Firstname">
	 					</div>
	 					<div class="form-group">
	 						<label>Surname</label>
	 						<input type="text" name="sname" class="form-control" autocomplete="off" placeholder="Enter Surname">
	 					</div>
	 					<div class="form-group">
	 						<label>Username</label>
	 						<input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
	 					</div>
	 					<div class="form-group">
	 						<label>Email</label>
	 						<input type="text" name="email" class="form-control" autocomplete="off" placeholder="Enter Email">
	 					</div>
	 					<div class="form-group">
	 						<label>Select Gender</label>
	 						<select name="gender" class="form-control">
	 							<option value="">Select Gender</option>
	 							<option value="Male">Male</option>
	 							<option value="Female">Female</option>
	 						</select>
	 					</div>
	 					<div class="form-group">
	 						<label>Phone Number</label>
	 						<input type="text" name="number" class="form-control" autocomplete="off" placeholder="Enter Phone Number">
	 					</div>
	 					<div class="form-group">
	 						<label>Select Gender</label>
	 						<select name="gender" class="form-control">
	 							<option value="">Select Country</option>
	 							<option value="Male">Russia</option>
	 							<option value="Female">İndia</option>
	 							<option value="Female">Turkey</option>
	 							<option value="Female">France</option>
	 						</select>
	 					</div>
	 					<div class="form-group">
	 						<label>Password</label>
	 						<input type="text" name="number" class="form-control" autocomplete="off" placeholder="Enter Password">
	 					</div>
	 					<div class="form-group">
	 						<label>Confirm Password</label>
	 						<input type="text" name="number" class="form-control" autocomplete="off" placeholder="Enter Confirm Password">
	 					</div><br>
	 					<input type="submit" name="apply" value="Apply Now" class="btn btn-success">
	 					<p>I already have a account<a href="doctorlogin.php"> Click Here!!</a></p>
	 				</form>
	 			</div>
	 			<div class="col-md-3"></div>
	 		</div>
	 	</div>
	 </div>
</body>
</html>