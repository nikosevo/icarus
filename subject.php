<!doctype html>

<?php 
	include 'connect.php';
	$subID = $_GET['subID'];
	$sql = "SELECT * FROM `subject` where subID='$subID' ";
	$result = mysqli_query($link,$sql);
	$row  = mysqli_fetch_array($result);
	$title = $row['title'];
	$description = $row['description'];
?>

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

					<div class="row">
						<div class="col-md-4 col-lg-3">

							<section class="panel">
								<div class="panel-body">
									<div class="thumb-info mb-md">
										<img src="assets/images/subject-default.jpg" class="rounded img-responsive" alt="John Doe">
										<div class="thumb-info-title">
											<span class="thumb-info-inner"><?php echo $title ;?></span>
											<span class="thumb-info-type">Mathematics</span>
										</div>
									</div>
								</div>
							</section>


						</div>
						<div class="col-md-8 col-lg-6">

							<div class="tabs">
								<ul class="nav nav-tabs tabs-primary">
									<li class="active">
										<a href="#overview" data-toggle="tab">Overview</a>
									</li>
									<li>
										<a href="#edit" data-toggle="tab">Edit</a>
									</li>
									<li>
										<a href="#tuition" data-toggle="tab">Tuition</a>
									</li>
									<li>
										<a href="#details" data-toggle="tab">Details</a>
									</li>
								</ul>
								<div class="tab-content">

									<div id="overview" class="tab-pane active">
										

										<h4 class="mb-xlg">About</h4>

										<p><?php echo $description ;?></p>
									</div>

									<div id="edit" class="tab-pane">

										<form class="form-horizontal" method="get">		
											<h4 class="mb-xlg">Subjects Information </h4>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="profileFirstName">Title</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="profileFirstName">
                                                </div>
											</div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="profileFirstName">Field</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="profileFirstName">
                                                </div>
											</div>
												
	
											<hr class="dotted tall">
											<h4 class="mb-xlg">About </h4>
											<fieldset>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileBio">Description</label>
													<div class="col-md-8">
														<textarea class="form-control" rows="3" id="profileBio"></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-xs-3 control-label mt-xs pt-none">Public</label>
													<div class="col-md-8">
														<div class="checkbox-custom checkbox-default checkbox-inline mt-xs">
															<input type="checkbox" checked="" id="profilePublic">
															<label for="profilePublic"></label>
														</div>
													</div>
												</div>
											</fieldset>

											<div class="panel-footer">
												<div class="row">
													<div class="col-md-9 col-md-offset-3">
														<button type="submit" class="btn btn-primary">Submit</button>
														<button type="reset" class="btn btn-default">Reset</button>
													</div>
												</div>
											</div>

										</form>

									</div>

									<div id="tuition" class="tab-pane">
										<!-- if there is a tution running then good-->
										<?php if(false) { ?>
										<div class="pricing-table">
											<div class="">
												<div class="plan">
													<h3>Semester<span>D</span></h3>
													<a class="btn btn-lg btn-primary" href="#">2021</a>
													<ul>
														<li><b>Teacher</b> Kwstas</li>
														<li><b>duration</b> 6 months</li>
														<li><b>Lab Weight</b> 20%</li>
														<li><b>Theory Weight</b> 80%</li>
														<li><b>Lab Limit</b> 2 years</li>
														<li><b>Theory limit</b> - </li>
													</ul>
												</div>
											</div>
										</div>
										<!-- else we have to add a new one -->
										<?php }else{ ?>
											
											<section class="panel">
												<header class="panel-heading bg-white">
													<div class="panel-heading-icon bg-primary mt-sm">
														<i class="fa fa-warning"></i>
													</div>
												</header>
												<div class="panel-body">
													<h3 class="text-semibold mt-none text-center">No tuition</h3>
													<!-- message displays different if you are a teacher or the admin-->
													<?php 
														if($_SESSION['roleID']==2){
															echo("");
														}else{
															echo("for role id  = 1");
														}
													?>
													<hr>
													<div class="text-center">
														<a href="tuition-add.php" class="btn btn-success"><i class="fa fa-plus"></i> Add</a>
														<?php if ($_SESSION['roleID'] == 2){ ?>
															<a href="#" class="btn btn-warning disabled"><i class="fa fa-exclamation"></i> Sent Reminders</a>

														<?php } ?>

													</div>
												</div>
											</section>
										

										<?php } ?>
					
									
										
									</div>

									<div id="details" class="tab-pane">
										<h4 class="mb-xlg">here are some of the tuitions from the past years</h4>
										<table class="table mb-none">
											<thead>
												<tr>
													<th>#</th>
													<th>tuitionID</th>
													<th>Year</th>
													<th>semester</th>
													<th>Teacher</th>													
													<th>actions</th>													
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Mark</td>
													<td>Otto</td>
													<td>@mdo</td>
													<td>makis</td>
													<td class="actions">
														<a href=""><i class="fa fa-eye"></i></a>
														<a href="" class="delete-row"><i class="fa fa-trash-o"></i></a>
													</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Jacob</td>
													<td>Thornton</td>
													<td>@fat</td>
													<td>takis</td>
													<td class="actions">
														<a href=""><i class="fa fa-eye"></i></a>
														<a href="" class="delete-row"><i class="fa fa-trash-o"></i></a>
													</td>
												</tr>
												<tr>
													<td>3</td>
													<td>Larry</td>
													<td>the Bird</td>
													<td>@twitter</td>
													<td>kwstas</td>
													<td class="actions">
														<a href=""><i class="fa fa-eye"></i></a>
														<a href="" class="delete-row"><i class="fa fa-trash-o"></i></a>
													</td>
												</tr>
											</tbody>
										</table>
									
									</div>

								</div>
							</div>
						</div>


					</div>
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