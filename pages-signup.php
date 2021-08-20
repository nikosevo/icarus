<!doctype html>

<?php   
if(isset($_GET['error']) && $_GET['error'] == 1){ 
	echo '<script>alert("Username Already Exists!")</script>';
} 

if(isset($_GET['error']) && $_GET['error'] == 2){ 
	echo '<script>alert("Passwords dont match!")</script>';
}
extract($_POST);
include("connect.php");
if(isset($_POST['save']) && $_POST['save']== "insert")
{
	include("connect.php");
	$sql=mysqli_query($link,"SELECT * FROM users where username='$username'");
	if(mysqli_num_rows($sql)>0)
	{	
		
		header("Location: pages-signup.php?error=1");
		exit;
	}
	if($pwd != $pwd_confirm){
		
		header("Location: pages-signup.php?error=2");
		exit;
	}
	else{
		
		mysqli_autocommit($link, false);
		$password = md5($pwd);
		$sql = "insert into users(userID,username,passwd,roleID) values('','$username','$password','0')";
		$result = mysqli_query($link,$sql) ;
		if($result){
			mysqli_commit($link);
			echo"<font color=\"#3300FF\"><strong><br>Registration successful!<br></font>";
			header("Location: pages-signin.php?status=success");
			exit();
		}else{
			mysqli_rollback($link);
			echo"<font color=\"#FF0000\"><strong><br>Registration canceled due to errors !<br></font>";
		}
			
			
		
	}
}


    

?>

<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo pull-left">
					<img src="assets/images/logo.jpg" height="54" alt="Porto Admin" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign Up</h2>
					</div>
					<div class="panel-body">
						<form action="pages-signup.php" method="post" enctype="multipart/form-data">
							<div class="form-group mb-lg">
								<label>Username</label>
								<input name="username" type="text" class="form-control input-lg" required="required" />
							</div>

							<!-- <div class="form-group mb-lg">
								<label>What is your role</label>
								<select name="Role" id="role">
									<option value="" selected disabled hidden>Choose here</option>
									<option value="student">Student</option>
									<option value="profesor">Profesor</option>
								</select>
							</div> -->

							<div class="form-group mb-none">
								<div class="row">
									<div class="col-sm-6 mb-lg">
										<label>Password</label>
										<input name="pwd" type="password" class="form-control input-lg" required="required" />
									</div>
									<div class="col-sm-6 mb-lg">
										<label>Password Confirmation</label>
										<input name="pwd_confirm" type="password" class="form-control input-lg" required="required" />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="AgreeTerms" name="agreeterms" type="checkbox"/>
										<label for="AgreeTerms">I agree with <a href="#">terms of use</a></label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" name="save" value="insert" class="btn btn-primary hidden-xs">Sign Up</button>
									<button type="submit" name="save" value="insert" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign Up</button>
								</div>
							</div>

							<span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>or</span>
							</span>


							<p class="text-center">Already have an account? <a href="pages-signin.php">Sign In!</a>

						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2018. All rights reserved.</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>

	</body>
</html>