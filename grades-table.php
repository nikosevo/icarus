<!doctype html>

<?php 
session_start();
include "connect.php";
if($_SESSION["roleID"]==0||$_SESSION["roleID"]==2){
header("Location: pages-404.html");
}
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
		<link rel="stylesheet" href="assets/vendor/pnotify/pnotify.custom.css" />


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
						<h2>Grades</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Grades</span></li>
	
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

                    <section role="main" class="col-md-140content-body">
					<header class="page-header">
						<h2>Ajax Tables</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Tables</span></li>
								<li><span>Ajax</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
                    <form class="form-horizontal form-bordered" action="#">
                        					
                    </form>
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                            </div>
                            <div class="form-group">
                            <div class="col-md-6">
                                <select data-plugin-selectTwo class="select2-container form-control populate " onchange="location = this.value;">
                                        <option value="AK">-No subject Selected-</option>
<!-- //////////////////////////////////////////////////////////// -->
									<?php 
										$usID = $_SESSION["userID"];

										$sql3 = "SELECT * FROM profesors where userID='$usID'";
										$result3 = mysqli_query($link,$sql3);
										$row3 = mysqli_fetch_array($result3);

										$sql2 = "SELECT * FROM tuition where profID='$usID' and `year`='2021'";
										$result2 = mysqli_query($link,$sql2);
										while ($row2 = mysqli_fetch_array($result2)) {
										
										$tuiID= $row2["tuiID"];
										$subID = $row2["subID"];
										$sql1 = "SELECT * FROM subject where subID='$subID'";
										$result1 = mysqli_query($link,$sql1);
										$row = mysqli_fetch_array($result1);
										$subID = $row['subID'];
										$title = $row['title'];
										$description = $row['description'];
										$tui = NULL;

						
									?>
<!-- //////////////////////////////////////////////////////////// -->		
                                        <option value="grades-table.php?choice=<?php echo $tuiID ?>"><?php echo $title ?></option>
									<?php } ?>     
                                </select>
                            </div>
							<a class="mb-xs mt-xs mr-xs modal-with-zoom-anim btn btn-success" href="#modalAnim">Finalise results</a>
							<div id="modalAnim" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
								<section class="panel">
									<header class="panel-heading">
										<h2 class="panel-title">Are you sure?</h2>
									</header>
									<div class="panel-body">
										<div class="modal-wrapper">
											<div class="modal-icon">
												<i class="fa fa-question-circle"></i>
											</div>
											<div class="modal-text">
												<p>After clicking "Confirm" you can no longer change the table. Do you want to continue with this action?</p>
											</div>
										</div>
									</div>
									<footer class="panel-footer">
										<div class="row">
											<div class="col-md-12 text-right">
												<button class="btn btn-primary modal-confirm">Confirm</button>
												<button class="btn btn-default modal-dismiss">Cancel</button>
											</div>
										</div>
									</footer>
								</section>
							</div>
                        </div>	
                        </header>
                        <div class="panel-body">
							<table class="table table-bordered table-striped mb-none" id="datatable-editable">
								<thead>
									<tr>
										<th>ICSD</th>
										<th>Name</th>
										<th>Lab Grade</th>
										<th>Theory Grade</th>
										<th>Final Grade</th>
										<th>actions</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									    $tui = NULL;
										if(isset($_GET['choice'])) {
											$tui = $_GET['choice'];	
										}									
										$sql5 = "SELECT * FROM isregistered where tuiID='$tui' ";
										$result5 = mysqli_query($link,$sql5);
										while ($row5 = mysqli_fetch_array($result5)) {
											$Tgrade = $row5["Tgrade"];
											$Lgrade = $row5["Lgrade"];
											$Fgrade = $row5["Fgrade"];
											$stdID = $row5["stdID"];
											$regID = $row5['regID'];

											$sql6 = "SELECT * FROM students where stdID='$stdID'";
											$result6 = mysqli_query($link,$sql6);
											$row6 = mysqli_fetch_array($result6);
											$userID= $row6["userID"];
											$sch=$row6["sch_number"];

											$sql7 = "SELECT * FROM users where userID='$userID'";
											$result7 = mysqli_query($link,$sql7);
											$row7 = mysqli_fetch_array($result7);
											$fname= $row7["fname"];
											$lname= $row7["lname"];
									?>	
											<tr class="gradeX">
												<td><?php echo $sch ;?></td>
												<td><?php echo $fname ," " , $lname ; ?></td>
												<td><?php echo $Lgrade; ?></td>
												<td><?php echo $Tgrade; ?></td>
												<td><?php echo $Fgrade; ?></td>

												<td class="actions">
													<a href="#modalForm<?php echo $regID?>" class="modal-with-form"><i class="fa fa-pencil"></i></a>
													<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
													<form id="modalForm<?php echo $regID?>" action="edit-grades-process.php?regID=<?php echo $regID?>" method="post" enctype="multipart/form-data"  class="col-md-4 col-md-offset-4  mfp-hide">
														<section class="col-md-12 ">
															<header class="panel-heading">
																<h2 class="panel-title">Edit the tuition</h2>
															</header>
															<div class="panel-body">
																<form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
																	<fieldset>
																		<div class="form-group">
																			<label class="col-md-8 center " for="profileFirstName">Lab Grade</label>
																			<div class="col-md-4 pull-right">
																				<input type="text" class="form-control input-sm" name="Tgrade" value=" <?php echo $row5["Lgrade"];?>" >
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-md-8 center" for="profileFirstName">Theory Grade</label>
																			<div class="col-md-4 pull-right">
																				<input type="text" class="form-control input-sm" name="Lgrade" value=" <?php echo $row5["Tgrade"];?>">
																			</div>
																		</div>
																	</fieldset>
																</form>
															</div>
															<footer class="panel-footer">
																<div class="row">
																	<div class="col-md-12 text-right">
																		<button type="submit" name="save" value="insert" class="btn btn-primary">Submit</button>
																		<button class="btn btn-default modal-dismiss">Cancel</button>
																	</div>
																</div>
															</footer>
														</section>
													</form>
												</td>
											</tr>	
											
											


										<?php } ?>
								</tbody>
							</table>
							<hr>
							<a class="btn btn-primary" onclick="download_table_as_csv('datatable-editable');"><i class="fa fa-download"></i> Download table</a>
                        </div>
                    </section>
					<!-- end: page -->
				</section>
			</div>

			<!-- right side bar the one with the diary -->
			<?php include "right-sidebar.php" ?>
		</section>

		<div id="dialog" class="modal-block mfp-hide">
			<section class="panel">
				<header class="panel-heading">
					<h2 class="panel-title">Are you sure?</h2>
				</header>
				<div class="panel-body">
					<div class="modal-wrapper">
						<div class="modal-text">
							<p>Are you sure that you want to delete this row?</p>
						</div>
					</div>
				</div>
				<footer class="panel-footer">
					<div class="row">
						<div class="col-md-12 text-right">
							<button id="dialogConfirm" class="btn btn-primary">Confirm</button>
							<button id="dialogCancel" class="btn btn-default">Cancel</button>
						</div>
					</div>
				</footer>
			</section>
		</div>

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
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/pnotify/pnotify.custom.js"></script>
		<script src="assets/javascripts/ui-elements/examples.modals.js"></script>



		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		<script src="assets/javascripts/exportTable.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="assets/javascripts/tables/examples.datatables.editable.js"></script>
		<script src="assets/javascripts/tables/examples.datatables.ajax.js"></script>


	</body>
</html>