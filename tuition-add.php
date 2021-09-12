<!doctype html>
<!--
<?php 
	include 'connect.php';
	$subID = $_GET['subID'];
	$sql = "SELECT * FROM `subject` where subID='$subID' ";
	$result = mysqli_query($link,$sql);
	$row  = mysqli_fetch_array($result);
	$title = $row['title'];
	$description = $row['description'];
?>
-->

<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Subject</title>
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

		<!-- Specific Page Vendor CSS --> 
		<link rel="stylesheet" href="assets/vendor/select2/select2.css" />

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
		<section class="body">

			<!-- start: header -->
			<?php include "navbar.php" ?>
			
			<div class="inner-wrapper">
				<!-- left sidebar -->
				<?php include "left-sidebar.php" ?>


				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Subject</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Pages</span></li>
								<li><span>Maths</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
                    <h4 class="mb-xlg">Here you can add a new tuition for the lesson.</h4>

                    <form class="form-horizontal" method="get">		
                        <h4 class="mb-xlg">Subjects Tuitions </h4>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="profileFirstName">Year</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="profileFirstName">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="profileFirstName">Semester</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="profileFirstName">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="profileFirstName">Teacher</label>
                            <div class="col-md-5">
                            <select data-plugin-selectTwo class="form-control populate">
                                    <option value="kwstas">kwstas</option>
                                    <option value="Giannhs">Giannhs</option>
                                    <option value="Giwrgos">Giwrgos</option>
                                    <option value="to maraki">to maraki</option>
                                    <option value="elenh">elenh</option>
                                    <option value="Aggelos">Aggelos</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="profileFirstName">Subject</label>
                            <div class="col-md-5">
                            <select data-plugin-selectTwo class="form-control populate">
                                    <option value="kwstas">Maths</option>
                                    <option value="Giannhs">Geometry</option>
                                    <option value="Giwrgos">English</option>                                    
                                </select>
                            </div>
                        </div>
                            
                        <hr class="dotted tall">
                        <h4 class="mb-xlg">Vathmologia </h4>
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="profileFirstName">Theory Weight</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="profileFirstName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="profileFirstName">Lab Weight</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="profileFirstName">
                                </div>
                            </div>
                        </fieldset>
                        <hr class="dotted tall">
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="profileFirstName">Grade Limit Theory</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="profileFirstName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="profileFirstName">Grade Limit Lab</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="profileFirstName">
                                </div>
                            </div>
                        </fieldset>
                        <hr class="dotted tall">

                        <div class="panel">
                            <div class="row">
                                <div class="col-md-9 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                </div>
                            </div>
                        </div>

                    </form>
					<!-- end: page -->
				</section>
			</div>
            <!-- right side bar the one with the diary -->
			<?php include "right-sidebar.php" ?>
		</section>

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/jquery-autosize/jquery.autosize.js"></script>
		<script src="assets/vendor/select2/select2.js"></script>

		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>


	</body>
</html>