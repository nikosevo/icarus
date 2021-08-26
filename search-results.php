<!doctype html>
<html class="fixed search-results">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Searching Results | Okler Themes | Porto-Admin</title>
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
						<h2>Searching Results</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Pages</span></li>
								<li><span>Search</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<div class="search-content">
						<div class="search-control-wrapper">
							<form action="pages-search-results.html">
								<div class="form-group">
									<div class="input-group">
										<input type="text" class="form-control" value="something">
										<span class="input-group-btn">
											<button class="btn btn-primary" type="button">Search</button>
										</span>
									</div>
								</div>
							</form>
						</div>
						<div class="search-toolbar">
							<ul class="list-unstyled nav nav-pills">
								<li class="active">
									<a href="#everything" data-toggle="tab">Everything</a>
								</li>
								<li>
									<a href="#medias" data-toggle="tab">Medias</a>
								</li>
							</ul>
						</div>
						<div class="tab-content">
							<div id="everything" class="tab-pane active">
								<p class="total-results text-muted">Showing 1 to 10 of 47 results</p>

								<ul class="list-unstyled search-results-list">
									<li>
										<p class="result-type">
											<span class="label label-primary">user</span>
										</p>
										<a href="pages-user-profile.html" class="has-thumb">
											<div class="result-thumb">
												<img src="assets/images/!logged-user.jpg" alt="John Doe" />
											</div>
											<div class="result-data">
												<p class="h3 title text-primary">John Doe</p>
												<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ante nisl, sagittis nec lacus et, convallis efficitur justo. Curabitur elementum feugiat quam. Etiam ac orci iaculis, luctus nisl et, aliquet metus. Praesent congue tortor venenatis, ornare eros eu, semper orci.</p>
											</div>
										</a>
									</li>
									<li>
										<p class="result-type">
											<span class="label label-primary">page</span>
										</p>
										<a href="ui-elements-charts.html">
											<div class="result-data">
												<p class="h3 title text-primary">Charts</p>
												<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ante nisl, sagittis nec lacus et, convallis efficitur justo. Curabitur <strong>something</strong> elementum feugiat quam. Etiam ac orci iaculis, luctus nisl et, aliquet metus. Praesent congue tortor venenatis, ornare eros eu, semper orci.</p>
											</div>
										</a>
									</li>
									<li>
										<p class="result-type">
											<span class="label label-primary">page</span>
										</p>
										<a href="pages-invoice.html" class="has-thumb">
											<div class="result-thumb">
												<img src="assets/images/projects/project-6.jpg" alt="Invoice" />
											</div>
											<div class="result-data">
												<p class="h3 title text-primary">Invoice</p>
												<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ante nisl, sagittis nec lacus et, convallis efficitur justo. Curabitur elementum feugiat quam. Etiam ac orci iaculis, luctus nisl et, aliquet metus. Praesent congue tortor venenatis, ornare eros eu, semper orci.</p>
											</div>
										</a>
									</li>
									<li>
										<p class="result-type">
											<span class="label label-primary">email</span>
										</p>
										<a href="mailbox-email.html" class="has-thumb">
											<div class="result-thumb">
												<i class="fa fa-envelope"></i>
											</div>
											<div class="result-data">
												<p class="h3 title text-primary">John Doe</p>
												<p class="description">
													<small>05/09/2014 11:34PM</small>
													<br/>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ante nisl, sagittis nec lacus et, convallis efficitur justo. Curabitur elementum feugiat quam. Etiam ac orci iaculis, luctus nisl et, aliquet metus. Praesent congue tortor venenatis, ornare eros eu, semper orci.
												</p>
											</div>
										</a>
									</li>
									<li>
										<p class="result-type">
											<span class="label label-primary">page</span>
										</p>
										<a href="pages-media-gallery.html">
											<div class="result-data">
												<p class="h3 title text-primary">Media Gallery</p>
												<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ante nisl, sagittis nec lacus et, convallis efficitur justo. Curabitur elementum feugiat quam. Etiam ac orci iaculis, luctus nisl et, aliquet metus. Praesent congue tortor venenatis, ornare eros eu, semper orci.</p>
											</div>
										</a>
									</li>
									<li>
										<p class="result-type">
											<span class="label label-primary">page</span>
										</p>
										<a href="pages-invoice.html">
											<div class="result-data">
												<p class="h3 title text-primary">Invoice</p>
												<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ante nisl, sagittis nec lacus et, convallis efficitur justo. Curabitur elementum feugiat quam. Etiam ac orci iaculis, luctus nisl et, aliquet metus. Praesent congue tortor venenatis, ornare eros eu, semper orci.</p>
											</div>
										</a>
									</li>
									<li>
										<p class="result-type">
											<span class="label label-primary">page</span>
										</p>
										<a href="pages-calendar.html">
											<div class="result-data">
												<p class="h3 title text-primary">Calendar</p>
												<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ante nisl, sagittis nec lacus et, convallis efficitur justo. Curabitur elementum feugiat quam. Etiam ac orci iaculis, luctus nisl et, aliquet metus. Praesent congue tortor venenatis, ornare eros eu, semper orci.</p>
											</div>
										</a>
									</li>
								</ul>

								<hr class="solid mb-none" />

								<ul class="pagination">
									<li class="prev disabled">
										<a href="#">
											<i class="fa fa-chevron-left"></i>
										</a>
									</li>
									<li class="active">
										<a href="#">1</a>
									</li>
									<li>
										<a href="#">2</a>
									</li>
									<li>
										<a href="#">3</a>
									</li>
									<li>
										<a href="#">4</a>
									</li>
									<li>
										<a href="#">5</a>
									</li>
									<li class="next">
										<a href="#">
											<i class="fa fa-chevron-right"></i>
										</a>
									</li>
								</ul>
							</div>
							<div id="medias" class="tab-pane">
								<div class="row">
									<div class="col-sm-6 col-md-4 col-lg-3">
										<div class="thumbnail">
											<div class="thumb-preview">
												<a class="thumb-image" href="#">
													<img src="assets/images/projects/project-2.jpg" class="img-responsive" alt="Project">
												</a>
											</div>
											<h5 class="mg-title text-semibold">Blog<small>.png</small></h5>
										</div>
									</div>
									<div class="col-sm-6 col-md-4 col-lg-3">
										<div class="thumbnail">
											<div class="thumb-preview">
												<a class="thumb-image" href="#">
													<img src="assets/images/projects/project-5.jpg" class="img-responsive" alt="Project">
												</a>
											</div>
											<h5 class="mg-title text-semibold">Friends<small>.png</small></h5>
										</div>
									</div>
									<div class="col-sm-6 col-md-4 col-lg-3">
										<div class="thumbnail">
											<div class="thumb-preview">
												<a class="thumb-image" href="#">
													<img src="assets/images/projects/project-4.jpg" class="img-responsive" alt="Project">
												</a>
											</div>
											<h5 class="mg-title text-semibold">Life<small>.png</small></h5>
										</div>
									</div>
									<div class="col-sm-6 col-md-4 col-lg-3">
										<div class="thumbnail">
											<div class="thumb-preview">
												<a class="thumb-image" href="#">
													<img src="assets/images/projects/project-5.jpg" class="img-responsive" alt="Project">
												</a>
											</div>
											<h5 class="mg-title text-semibold">Poetry<small>.png</small></h5>
										</div>
									</div>
								</div>
							</div>
							<div id="emails" class="tab-pane">
								<p>Recent</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
							</div>
						</div>
					</div>
					<!-- end: page -->
				</section>
			</div>

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
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>

	</body>
</html>