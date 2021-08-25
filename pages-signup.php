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
		<!-- notification popup after the registrations is complete--> 
		<!-- change the notification message at javascript/forms/examples.wizard.js--> 
		<link rel="stylesheet" href="assets/vendor/pnotify/pnotify.custom.css" />

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
					
				<div class="col-md-12">
					<section class="panel form-wizard" id="w1">
						<header class="panel-heading">
		
			
							<h2 class="panel-title">Registration</h2>
						</header>
						<div class="panel-body panel-body-nopadding">
							<div class="wizard-tabs">
								<ul class="wizard-steps">
									<li class="active">
										<a href="#w1-account" data-toggle="tab" class="text-center">
											<span class="badge hidden-xs">1</span>
											Account
										</a>
									</li>
									<li>
										<a href="#w1-profile" data-toggle="tab" class="text-center">
											<span class="badge hidden-xs">2</span>
											Profile
										</a>
									</li>
									<li>
										<a href="#w1-confirm" data-toggle="tab" class="text-center">
											<span class="badge hidden-xs">3</span>
											Confirm
										</a>
									</li>
								</ul>
							</div>
							<form id="signupForm" class="form-horizontal" novalidate="novalidate">
								<div class="tab-content">
									<div id="w1-account" class="tab-pane active">
										<div class="form-group">
											<label class="col-sm-4 control-label" for="w1-username">Username</label>
											<div class="col-sm-8">
												<input type="text" class="form-control input-sm" name="username" id="w1-username" required >
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-4 control-label" for="w1-password">Password</label>
											<div class="col-sm-8">
												<input type="password" class="form-control input-sm" name="password" id="w1-password" minlength="6" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-4 control-label" for="w1-password-confirm">Confirm password</label>
											<div class="col-sm-8">
												<input type="password" class="form-control input-sm" name="password_confirm" id="w1-password_confirm" minlength="6"required >
											</div>
										</div>
									</div>
									<div id="w1-profile" class="tab-pane">
										<div class="form-group">
											<label class="col-sm-4 control-label" for="w1-first-name">First Name</label>
											<div class="col-sm-8">
												<input type="text" class="form-control input-sm" name="first-name" id="w1-first-name" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-4 control-label" for="w1-last-name">Last Name</label>
											<div class="col-sm-8">
												<input type="text" class="form-control input-sm" name="last-name" id="w1-last-name" required>
											</div>
										</div>
									</div>
									<div id="w1-confirm" class="tab-pane">
										<div class="form-group">
											<label class="col-sm-4 control-label">Role</label>
											<div class="col-md-6">
												<select class="form-control" data-plugin-multiselect id="ms_example1">
													<option value="cheese">Student</option>
													<option value="tomatoes">Professor</option>
						
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="panel-footer">
									<ul class="pager">
										<li class="previous disabled">
											<a><i class="fa fa-angle-left"></i> Previous</a>
										</li>
										<li class="finish hidden pull-right">
											<button class="btn btn-primary">Finish</button>
										</li>
										<li class="next">
											<a>Next <i class="fa fa-angle-right"></i></a>
										</li>
									</ul>
								</div>
							</form>
						</div>
						
					</section>
				</div>

				<p class="col-md-10 text-center text-muted mt-md mb-md">&copy; Copyright 2018. All rights reserved.</p>
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
		
		<!-- specific page vendor-->
		<script src="assets/vendor/jquery-validation/jquery.validate.js"></script>
		<script src="assets/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
		<script src="assets/vendor/pnotify/pnotify.custom.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>
	</body>
</html>