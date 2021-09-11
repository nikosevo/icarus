<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Dashboard | JSOFT Themes | JSOFT-Admin</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
		<meta name="author" content="JSOFT.net">

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
		<link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="/assets/vendor/morris/morris.css" />
		<link rel="stylesheet" href="assets/vendor/owl-carousel/owl.carousel.css" />
		<link rel="stylesheet" href="assets/vendor/owl-carousel/owl.theme.css" />

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

				<?php if($_SESSION['roleID']==0){ ?>
					<!-- here goes the code for the homepage of a guest --> 
					<section  class="col-md-9 content-body">
					<h1>Our Stuff</h1>
					<br>
					<div class="owl-carousel" data-plugin-carousel data-plugin-options='{ "autoPlay": 3000, "items": 3, "itemsDesktop": [1199,4], "itemsDesktopSmall": [979,3], "itemsTablet": [768,2], "itemsMobile": [479,1] }'>
						<!-- we create the carousel with the professors here -->
						<?php 
							$sql1 = "SELECT * FROM profesors";
							$result1 = mysqli_query($link,$sql1);
							while ($row = mysqli_fetch_array($result1)) {
								$profID = $row['profID'];
								$rank = $row['rank'];

								$usID = $row['userID'];
								$sql2 = "SELECT * FROM users where userID='$usID'";
								$result2 = mysqli_query($link,$sql2);
								$row2 = mysqli_fetch_array($result2);

								$fname = $row2['fname'];
								$lname = $row2['lname'];
							
						?>
						<div class="item spaced"><img class="img-thumbnail" src="assets/images/!logged-user.jpg" alt=""></div>
						<?php } ?>


					</div>

					<hr>

					<!-- we create the cards with each subject -->
					<h1>Subjects</h1>
					<br>
					
					<?php
						$sql1 = "SELECT * FROM subject";
						$result1 = mysqli_query($link,$sql1);
						while ($row = mysqli_fetch_array($result1)) {
							$title = $row['title'];
							$des = $row['description'];

							
					?>
					<div class="col-md-6 col-lg-6 col-xl-3">
						<section class="panel panel-featured-left panel-featured-primary">
							<div class="panel-body">
								<div class="widget-summary">
									<div class="widget-summary-col widget-summary-col-icon">
										<div class="summary-icon bg-primary">
											<a class="fa fa-life-ring"></a>
										</div>
									</div>
									<div class="widget-summary-col">
										<div class="summary">
											<a href="#" class="title"><?php echo($title)?></a>
											<div class="info">
												<span class="text-primary">professor</span>
											</div>
										</div>
										<div class="summary-footer">
											<a href="subjects-table.php" class="text-muted text-uppercase">(view all)</a>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
					
					<?php } ?>
							
				</section>

				<?php }else if($_SESSION['roleID']==2){ ?> 

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Dashboard</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Dashboard</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- Bars Chart -->
					<div class="col-md-12">
						<section class="panel">
							<header class="panel-heading">
								
				
								<h2 class="panel-title">Bars Chart</h2>
								<p class="panel-subtitle">The number of Subjects you had each year</p>
							</header>
							<div class="panel-body">
				
								<!-- Flot: Bars -->
								<div class="chart chart-md" id="flotBars"></div>
								<script type="text/javascript">
				
									var flotBarsData = [
										["2010", 28],
										["2011", 42],
										["1012", 25],
										["2013", 28],
										["2014", 42],
										["1015", 25],
										["2016", 28],
										["2017", 42],
										["1018", 25],
										
									];
				
									// See: assets/javascripts/ui-elements/examples.charts.js for more settings.
				
								</script>
				
							</div>
						</section>
					</div>					

					<!-- Pie Chart -->
					<div class="col-md-6">
						<section class="panel">
							<header class="panel-heading">
								<h2 class="panel-title"></h2>
								<div class="form-group">
									<h5 class="col-md-5 control-label">Select Subject</h5>
									<div class="col-md-7"> 
										<select class="form-control" multiple="multiple" data-plugin-multiselect data-plugin-options='{ "enableCaseInsensitiveFiltering": true }' id="ms_example6">
											<optgroup label="Mathematics">
												<option value="analysis">Analysis</option>
												<option value="algebra">Linear Algebra</option>
												<option value="discrete">Discrete Mathematics</option>
												<option value="numerical">Numerical Analysis</option>
												<option value="probability">Probability Theory</option>
											</optgroup>
											<optgroup label="Computer Science">
												<option value="programming">Introduction to Programming</option>
												<option value="automata">Automata Theory</option>
												<option value="complexity">Complexity Theory</option>
												<option value="software">Software Engineering</option>
											</optgroup>
										</select>
									</div>
								</div>
				
							</header>
							<div class="panel-body">
				
								<!-- Flot: Pie -->
								<div class="chart chart-md" id="flotPie"></div>
								<script type="text/javascript">
				
									var flotPieData = [{
										label: "Series 1",
										data: [
											[1, 60]
										],
										color: '#0088cc'
									}, {
										label: "Series 2",
										data: [
											[1, 10]
										],
										color: '#2baab1'
									}, {
										label: "Series 3",
										data: [
											[1, 15]
										],
										color: '#734ba9'
									}, {
										label: "Series 4",
										data: [
											[1, 15]
										],
										color: '#E36159'
									}];
				
									// See: assets/javascripts/ui-elements/examples.charts.js for more settings.
				
								</script>
				
							</div>
						</section>
					</div>
					
					<!-- Table--> 
					<div class="col-md-6">
						<section class="panel">
							<header class="panel-heading">
								<h2 class="panel-title">All</h2>
							</header>
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-condensed mb-none">
										<thead>
											<tr>
												<th>#</th>
												<th>semester</th>
												<th>Rate</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>2010 winter</td>
												<td>505</td>
											</tr>
											<tr>
												<td>2</td>
												<td>2010 summer</td>
												<td>26</td>
											</tr>
											<tr>
												<td>3</td>
												<td>2011 winter</td>
												<td>23</td>
											</tr>
											<tr>
												<td>4</td>
												<td>2011 summer</td>
												<td>65</td>
											</tr>
											
								
										</tbody>
									</table>
								</div>
							</div>
						</section>
					</div>

		
						
					
				</section>
			</div>

			<?php } ?>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
			
								<ul>
									<li>
										<time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>
			
							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>
			
						</div>
					</div>
				</div>
			</aside>
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
		<script src="assets/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
		<script src="assets/vendor/flot/jquery.flot.js"></script>
		<script src="assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
		<script src="assets/vendor/flot/jquery.flot.pie.js"></script>
		<script src="assets/vendor/flot/jquery.flot.categories.js"></script>
		<script src="assets/vendor/flot/jquery.flot.resize.js"></script>
		<script src="assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="assets/vendor/raphael/raphael.js"></script>
		<script src="assets/vendor/morris/morris.js"></script>
		<script src="assets/vendor/gauge/gauge.js"></script>
		<script src="assets/vendor/snap-svg/snap.svg.js"></script>
		<script src="assets/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="assets/vendor/select2/select2.js"></script>
		<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="assets/vendor/owl-carousel/owl.carousel.js"></script>


		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>


	

	</body>
</html>