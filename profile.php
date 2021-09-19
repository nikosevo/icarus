<!doctype html>

<?php 
	include 'connect.php';

	


	$stdID = $_GET['stdID'];
	$roleD = $_GET['role'];

	if($roleD==1){
		$sql = "SELECT * FROM `profesors` where profID='$stdID' ";
		$result = mysqli_query($link,$sql);
		$row  = mysqli_fetch_array($result);
		$usrID = $row['userID'];
		$rank = $row['rank'];

		$sql1 = "SELECT * FROM `users` where userID='$usrID' ";
		$result1 = mysqli_query($link,$sql1);
		$row1  = mysqli_fetch_array($result1);
		$fname = $row1['fname'];
		$lname = $row1['lname'];

	}
	elseif($roleD==2){
		$sql = "SELECT * FROM `students` where stdID='$stdID' ";
		$result = mysqli_query($link,$sql);
		$row  = mysqli_fetch_array($result);
		$usrID = $row['userID'];
		$sch_number = $row['sch_number'];

		$sql1 = "SELECT * FROM `users` where userID='$usrID' ";
		$result1 = mysqli_query($link,$sql1);
		$row1  = mysqli_fetch_array($result1);
		$fname = $row1['fname'];
		$lname = $row1['lname'];

	}
	elseif($roleD==3){
		

		$sql1 = "SELECT * FROM `users` where userID='$stdID' ";
		$result1 = mysqli_query($link,$sql1);
		$row1  = mysqli_fetch_array($result1);
		$fname = $row1['fname'];
		$lname = $row1['lname'];

	}

	
	
	

?>

<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>User Profile | Okler Themes | Porto-Admin</title>
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
		
		<link rel="stylesheet" href="assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" />
		<link rel="stylesheet" href="assets/vendor/select2/select2.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />

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
						<h2>User Profile</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Pages</span></li>
								<li><span>User Profile</span></li>
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
										<img src="assets/images/!logged-user.jpg" class="rounded img-responsive" alt="John Doe">
										<div class="thumb-info-title">
											<?php 
											if($roleD==1){?>
												<span class="thumb-info-inner"><?php echo $fname , " " ,  $lname; ?></span>
												<span class="thumb-info-type"><?php echo $rank?></span>	
											<?php
											}
											?>
											<?php 
											if($roleD==2){?>
												<span class="thumb-info-inner"><?php echo $fname , " " ,  $lname; ?></span>
												<span class="thumb-info-type"><?php echo $sch_number?></span>	
											<?php
											}
											?>
											<?php 
											if($roleD==3){?>
												<span class="thumb-info-inner"><?php echo $fname , " " ,  $lname; ?></span>
												<span class="thumb-info-type">admin</span>	
											<?php
											}
											?>
											
										</div>
									</div>

									
								</div>
							</section>


						</div>
						<div class="col-md-8 col-lg-6">

							<div class="tabs">
								<ul class="nav nav-tabs tabs-primary">
									
								<?php 
								if($roleD==2){
									?>
									<li class="active">
										<a href="#overview" data-toggle="tab">Overview</a>
									</li>
									<?php 
									}
									?>
									
									<li>
										<a href="#edit" data-toggle="tab">Edit</a>
									</li>
									<?php 
									if($roleD==2){
									?>
									<li>
										<a href="#declaration" data-toggle="tab">Registration</a>
									</li>
									<?php 
									}
									?>
									
								</ul>

								<div class="tab-content">
									
										<?php 
										if($roleD==2){?>
										<div id="overview" class="tab-pane active">
										<h4 class="mb-md">Update Status</h4>
												
										<div class="panel-body">
											<div id= "tab" class="table-responsive">
												<table class="table table-hover mb-none">
													<thead>
														<tr>
															<th>#</th>
															<th>Subject Name</th>
															<th>Grade</th>
															<th>Passed/Not Passed</th>
														</tr>
													</thead>
													<tbody>
<!-- //////////////////////////////////////////////////////////////// -->
													<?php

														$sqlAv = "SELECT AVG(Fgrade) 'average' FROM isregistered where stdID='$stdID' and Fgrade > 5";
														$resultAv = mysqli_query($link,$sqlAv);
														$rowAv = mysqli_fetch_array($resultAv);

														$average = $rowAv['average'];

														$sql5 = "SELECT * FROM isregistered where stdID='$stdID' ";
														$result5 = mysqli_query($link,$sql5);

														while ($row5 = mysqli_fetch_array($result5)) {
															$Fgrade = $row5["Fgrade"];
															if($Fgrade>=5){
																$pass="Passed";
															}
															else{$pass="Not Passed";}
															$tuiID = $row5["tuiID"];
															$regID =$row5["regID"];

															$sql4 = "SELECT * FROM tuition where tuiID='$tuiID' ";
															$result4 = mysqli_query($link,$sql4);
															$row4 = mysqli_fetch_array($result4);
															$subID = $row4["subID"];
															$semester = $row4["semester"];

															$sql3 = "SELECT * FROM `subject` where subID='$subID' ";
															$result3 = mysqli_query($link,$sql3);
															$row3 = mysqli_fetch_array($result3);
															$title = $row3["title"];
													?>
<!-- ////////////////////////////////////////////////////////////////-->
														<tr>
															<td><?php echo $regID ?></td>
															<td><?php echo $title ?></td>
															<td><?php echo $Fgrade ?></td>
															<td><?php echo $pass ?></td>
														</tr>
														<?php } ?>
														<tr>
															<td></td>
															<td>average Passed</td>
															<td><?php echo $average ?></td>
															<td><?php if($average>8){echo "excellent";}else{echo "good";}?></td>
														</tr>	
													</tbody>
												</table>
												<br>
											</div>
											<input type="button" value="Create PDF" id="btPrint" onclick="createPDF()" />
											
										</div>
										</div>
										<?php
											}
										?>
										

									
									
									<div id="edit" class="tab-pane">

									<form  action="profile-update.php?uid=<?php echo $usrID ?>&stid=<?php echo $stdID ?>&role=<?php echo $roleD ?>" method="post" enctype="multipart/form-data"  class="form-horizontal" >
											<h4 class="mb-xlg">Personal Information</h4>
											<fieldset>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileFirstName">First Name</label>
													<div class="col-md-8">
														<input type="text" class="form-control" name="fname" id="profileFirstName" autocomplete="off" value=<?php echo $fname?>>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileLastName" >Last Name</label>
													<div class="col-md-8">
														<input type="text" class="form-control" name="lname" id="profileLastName" autocomplete="off" value=<?php echo $lname?>>
													</div>
												</div>
												<?php
												if($roleD==1){
												?>
													<div class="form-group">
													<label class="col-md-3 control-label" for="profileLastName" >Rank</label>
													<div class="col-md-8">
														<input type="text" class="form-control" name="rank" id="rank" autocomplete="off" value=<?php echo $rank?>>
													</div>
													</div>
												<?php
												}
												?>
												
											</fieldset>
											<hr class="dotted tall">
											<h4 class="mb-xlg">Change Password</h4>
											<fieldset class="mb-xl">
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileNewPassword">New Password</label>
													<div class="col-md-8">
														<input type="password" class="form-control" name="npwd" id="profileNewPassword" autocomplete="off">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileNewPasswordRepeat">Repeat New Password</label>
													<div class="col-md-8">
														<input type="password" class="form-control" name="npwd2" id="profileNewPasswordRepeat" autocomplete="off">
													</div>
												</div>
											</fieldset>
											<div class="panel-footer">
												<div class="row">
													<div class="col-md-9 col-md-offset-3">
														<button type="submit" name="save" value="profileUP" class="btn btn-primary">Submit</button>
														<button type="reset" class="btn btn-default">Reset</button>
													</div>
												</div>
											</div>

										</form>

									</div>
									<?php 
									if($roleD==2){
									?>
									
									<div id="declaration" class="tab-pane">
									<?php
										$sqll = "SELECT * FROM isregistered where stdID='$stdID' AND final=1 ";
										$resultl = mysqli_query($link,$sqll);
										if($rowl = mysqli_fetch_array($resultl)){
										?>
										
									<table class="table table-hover mb-none">
												<thead>
													<tr>
														<th>#</th>
														<th>Title</th>
													</tr>
												</thead>
												<tbody>
<!-- //////////////////////////////////////////////////////////////// -->
												<?php
													$sqll = "SELECT * FROM isregistered where stdID='$stdID' AND final=1 ";
													$resultl = mysqli_query($link,$sqll);
													
													while ($rowl = mysqli_fetch_array($resultl)) {
														
														$tuiID1 = $rowl["tuiID"];
														$regID1 =$rowl["regID"];

														$sql10 = "SELECT * FROM tuition where tuiID='$tuiID1' ";
														$result10 = mysqli_query($link,$sql10);
														$row10 = mysqli_fetch_array($result10);
														$subID1 = $row10["subID"];
														

														$sql11 = "SELECT * FROM `subject` where subID='$subID1' ";
														$result11 = mysqli_query($link,$sql11);
														$row11 = mysqli_fetch_array($result11);
														 
												?>
<!-- ////////////////////////////////////////////////////////////////-->
													<tr>
														<td><?php echo $regID1 ?></td>
														<td><?php echo $row11["title"] ?></td>														
													</tr>
													<?php
													}
													?>
												</tbody>
											</table>
											
											<?php 
											}
											else{
											?>
											
										<form action="registration-update.php?stid=<?php echo $stdID ?>" method="post" enctype="multipart/form-data"  class="form-horizontal">

											<h4 class="mb-lg">Declaration.</h4>
											<h5 class="mb-lg">Here you can choose in which subjects you will be tested this semester.</h4>
											<div class="form-group">
												<label class="col-md-3 control-label">Prerequisites</label>
												<div class="col-md-6"> 
													<select class="form-control" name="subjects[]" multiple="multiple" data-plugin-multiselect data-plugin-options='{ "enableCaseInsensitiveFiltering": true }' id="ms_example6">
														<optgroup label="Subjects">

															<?php 
															$sql8 = "SELECT * FROM tuition where `year`= year(curdate()) AND semester = month(curdate()) % 2 + 1 ";
															$result8 = mysqli_query($link,$sql8);
															while ($row8 = mysqli_fetch_array($result8)) { 
																	$selected = false;
																	$subjID = $row8["subID"];
																	$tuiID = $row8['tuiID'];

																	$sql10 = "SELECT * FROM `isregistered` WHERE stdID=$stdID and tuiID=$tuiID";
																	$result10 = mysqli_query($link,$sql10);
																	
																	
																	
																	while($row10 = mysqli_fetch_array($result10)){
																		if($row10['tuiID'] == $tuiID){
																			$selected = true;
																		}
																	}
																	$sql9 = "SELECT * FROM `subject` where subID='$subjID' ";
																	$result9 = mysqli_query($link,$sql9);	
																	$row9 = mysqli_fetch_array($result9);
																	$title= $row9['title'];

																	if($selected){
																		echo "<option selected value=\"{$subjID}\">{$title}</option>";
																		
																	}else{
																		echo "<option value=\"{$subjID}\">{$title}</option>";
																		
																	}
															?>
															
															<?php } ?>
														</optgroup>
														
													</select>
												</div>
											</div>

											

											
											<hr class="dotted short">

											
											<button type="submit" name="save" value="save" class="btn">Save</button>
											<button type="submit" name="save" value="final" class="btn btn-primary">Submit</button>
											
										</form>
										
										
	
											
										

										<?php 
										}
										?>
									</div>
									<?php 
									}
									?>
								</div>
								
							</div>
						</div>
						<div class="col-md-12 col-lg-3">
							<h4 class="mb-md">Stats</h4>
							<?php if($roleD==1){
								$sql2 = "SELECT (Count(profID)* 100 / (Select Count(*) From `tuition` INNER JOIN isregistered ON tuition.tuiID=isregistered.tuiID where tuition.profID='$usrID')) as Persentage FROM `tuition` INNER JOIN isregistered ON tuition.tuiID=isregistered.tuiID where tuition.profID='$usrID' AND isregistered.Fgrade>=5 ";
								$result2 = mysqli_query($link,$sql2);
								$row2  = mysqli_fetch_array($result2);
								
								$sql12 = "SELECT Count(tuiID) as Current FROM `tuition`  where tuition.profID='$usrID' AND  `year`= year(curdate()) AND semester = month(curdate()) % 2 + 1 ";
								$result12 = mysqli_query($link,$sql12);
								$row12  = mysqli_fetch_array($result12);
								?>
								<ul class="simple-card-list mb-xlg">
								<li class="primary">
									<h3><?php echo $row12["Current"] ?></h3>
									<p>Lessons you have this year</p>
								</li>
								<li class="primary">
									<h3><?php echo $row2["Persentage"] ?> %</h3>
									<p>Percentage of student passed your subjects </p>
								</li>
								
							</ul>
							<?php
							}
							?>

							<?php if($roleD==2){
								$sql2 = "SELECT (Count(*)* 100 / (Select Count(*) From isregistered where stdID='$stdID')) as Persentage From isregistered where stdID='$stdID'  AND isregistered.Fgrade>=5 ";
								$result2 = mysqli_query($link,$sql2);
								$row2  = mysqli_fetch_array($result2);
								
								$sql12 = "SELECT Count(regID) as Passed FROM `isregistered`  where stdID='$stdID' AND isregistered.Fgrade>=5 ";
								$result12 = mysqli_query($link,$sql12);
								$row12  = mysqli_fetch_array($result12);
								?>
								<ul class="simple-card-list mb-xlg">
								<li class="primary">
									<h3><?php echo $row12["Passed"] ?></h3>
									<p>Subjects you have passed</p>
								</li>
								<li class="primary">
									<h3><?php echo $row2["Persentage"] ?> %</h3>
									<p>Percentage of subjects you have passed   </p>
								</li>
							<?php
							}
							?>
							<?php if($roleD==3){

							}
							?>
							

							
							
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
		<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>

		<script src="assets/vendor/codemirror/addon/selection/active-line.js"></script>


		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>
		<script src="assets/javascripts/exportTable.js"></script>

		<script src="assets/javascripts/forms/examples.advanced.form.js" ></script>


	</body>
</html>