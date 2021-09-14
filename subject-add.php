<!doctype html>

<?php   

extract($_POST);
include("connect.php");
if(isset($_POST['save']) && $_POST['save']== "insertsub")
{
	
	$sql=mysqli_query($link,"SELECT * FROM `subject` where title='$subjtitle'");
	if(mysqli_num_rows($sql)>0)
	{	
		
		header("Location: pages-signup.php?error=1");
		exit;
	}
	else{
		
		mysqli_autocommit($link, false);
		
		$sql1 = "insert into subject(subID,title,description) values('','$subjtitle','$description')";
		$result1 = mysqli_query($link,$sql1) ;
		if($result1){
			mysqli_commit($link);

			if(isset($_POST["subject"])) 
			{
				$sql2=mysqli_query($link,"SELECT subID FROM `subject` where title='$subjtitle'");
				$row2 = mysqli_fetch_array($sql2);
				foreach ($_POST['subject'] as $subject){
					$sql3=mysqli_query($link,"SELECT subID FROM `subject` where title='$subject'");
					$row3 = mysqli_fetch_array($sql3);
					
					mysqli_autocommit($link, false);
					$sub1ID= $row3['subID'];
					$sub2ID= $row2['subID'];
					$sql4 = "insert into prerequisites(prerequisiteID,subID) values('$sub1ID','$sub2ID')";
					$result4 = mysqli_query($link,$sql4) ;
					if($result4){
						mysqli_commit($link);
					}
				} 
					
			}
			header("Location: subjects-table.php?status=success");
			exit();
		}else{
			mysqli_rollback($link);
			echo"<font color=\"#FF0000\"><strong><br>Canceled due to errors !<br></font>";
		}
			
			
		
	}
}


    

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
        <link rel="stylesheet" href="assets/vendor/summernote/summernote.css" />
		<link rel="stylesheet" href="assets/vendor/summernote/summernote-bs3.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />

        
        

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
								<li><span>Add</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
                    <form action="subject-add.php" method="post" enctype="multipart/form-data" class="form-horizontal" method="post" novalidate="novalidate">		
                        <h2 class="mb-xlg center">Create new Subject</h2>
						<hr>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="profileFirstName">Title</label>
                            <div class="col-md-3">
                                <input type="text" name="subjtitle" class="form-control input-sm" id="profileFirstName" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Prerequisites</label>
                            <div class="col-md-6"> 
                                <select class="form-control" name="subject[]" multiple="multiple" data-plugin-multiselect data-plugin-options='{ "enableCaseInsensitiveFiltering": true }' id="ms_example6">
                                    <optgroup label="Subjects">
										<?php 
                                            $sql = "SELECT * FROM subject";
                                            $result = mysqli_query($link,$sql);
                                            while ($row = mysqli_fetch_array($result)) {
                                            $title = $row['title'];
											echo "<option value=\"{$title}\">{$title}</option>";
                                        ?>
										
										<?php } ?>
                                    </optgroup>
                                    
                                </select>
                            </div>
                        </div>
                       
                            
                        <hr class="dotted tall">
                        
                        <div>
                            
							<label class="col-md-3 control-label" for="profileBio">Subject Description</label>
							<div class="col-md-8">
								<textarea class="form-control" name="description" rows="3" ></textarea>
							</div>
                            <br>
                        </div>
					<hr class="dotted tall">

                    <div class="panel">
						<div class="row">
							<div class="col-md-9 col-md-offset-3">
								<button type="submit" name="save" value="insertsub" class="btn btn-primary">Submit</button>
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

        
        
		
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/jquery-validation/jquery.validate.js"></script>
		<script src="assets/vendor/jquery-autosize/jquery.autosize.js"></script>
		<script src="assets/vendor/select2/select2.js"></script>
		<script src="assets/vendor/summernote/summernote.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="assets/vendor/pnotify/pnotify.custom.js"></script>

		




        

		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>


	</body>
</html>