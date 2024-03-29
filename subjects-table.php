<!doctype html>

<?php 
session_start();
include "connect.php";

?>


<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Editable Tables | Okler Themes | Porto-Admin</title>
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
		<link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

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
			<?php include "navbar.php"?>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<?php include "left-sidebar.php"?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Subjects</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Subjects</span></li>
	
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title">Default</h2>
							</header>
							<div class="panel-body">
							<?php 
							
							if($_SESSION["roleID"]==0||$_SESSION["roleID"]==2){
							
							}
							else{?>
							<div class="row">
									<div class="col-sm-6">
										<div class="mb-md">
											<a href="subject-add.php" class="btn btn-primary">Add <i class="fa fa-plus"></i></a>
										</div>
									</div>
								</div>
							<?php
							}
							?>
								
								<table class="table table-bordered table-striped mb-none" id="datatable-editable">
									<thead>
										<tr>
											<th>Subject ID</th>
											<th>Title</th>
											<th>Description</th>
											<th>Actions</th>
										</tr>
									</thead>

									<tbody>
<!-- //////////////////////////////////////////////////////////// -->
									<?php 
									$sql1 = "SELECT * FROM subject";
									$result1 = mysqli_query($link,$sql1);
									while ($row = mysqli_fetch_array($result1)) {
									$subID = $row['subID'];
									$title = $row['title'];
									$description = $row['description'];
									?>
<!-- //////////////////////////////////////////////////////////// -->									
										<tr class="gradeX">
											<td><?php echo $row['subID']; ?></td>
											<td><?php echo $row['title']; ?></td>
											<td><?php echo $row['description']; ?></td>
											<td class="actions">
											<?php 
							
											if($_SESSION["roleID"]==0||$_SESSION["roleID"]==2){
											
											}
											else{?>
												<a href="subject.php?subID=<?php echo $subID ?>&edit=1" class="on-default"><i class="fa fa-pencil"></i></a>
												<a href="subject-delete-process.php?subID=<?php echo $subID ?>" class="on-default "><i class="fa fa-trash-o"></i></a>
												<?php } ?>
												<a href="subject.php?subID=<?php echo $subID ?>" class="on-default view-row"><i class="fa fa-eye"></i></a>
											</td>
										</tr>
										<?php }?>
									</tbody>
								</table>
							</div>
						</section>
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
		<script src="assets/vendor/select2/select2.js"></script>
		<script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="assets/javascripts/tables/examples.datatables.editable.js"></script>
	</body>
</html>