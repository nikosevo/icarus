<?php
	session_start();
	include 'connect.php';
	$userID= $_SESSION["userID"];
	$roleID= $_SESSION["roleID"];
	$firstname =""; 
	$lastname  = ""; 
	$role="" ;
	if ($roleID==0){
		$role="visitor";
	}
	if ($roleID==1){
		$sql=mysqli_query($link,"SELECT * FROM users where userID='$userID' ");
		$row  = mysqli_fetch_array($sql);
		$firstname = $row['fname']; 
		$lastname  = $row['lname']; 
		$role="profesor" ;	
	}
	elseif($roleID==2){
		$sql=mysqli_query($link,"SELECT * FROM users where userID='$userID' ");
		$row  = mysqli_fetch_array($sql);
		$firstname = $row['fname']; 
		$la\stname  = $row['lname']; 
		$role="student" ;
	}
	elseif($roleID==3){
		$sql=mysqli_query($link,"SELECT * FROM users where userID='$userID' ");
		$row  = mysqli_fetch_array($sql);
		$firstname = $row['username']; 
		$lastname  = ""; 
		$role="administrator" ;
	}
	
	
?>
<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="assets/images/logo.jpg" height="35" alt="JSOFT Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<form action="search-results.php" class="search nav-form">
						<div class="input-group input-search">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>
			
					<span class="separator"></span>
					<?php if($role=="visitor"){ ?>
						<a href="pages-signin.php" class="mb-xs mt-xs mr-xs btn btn-primary">sign in</a>

					<?php }else{?>

					


					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
								<span class="name"><?php echo $firstname?>  <?php echo $lastname?></span>
								<span class="role"><?php echo $role?></span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="profile.php"><i class="fa fa-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
					<?php if($role=="administrator"){ ?>
						<ul class="notifications">
							<li>
								<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
									<i class="fa fa-bell"></i>
									<span class="badge">3</span>
								</a>
				
								<div class="dropdown-menu notification-menu">
									<div class="notification-title">
										<span class="pull-right label label-default">3</span>
										Alerts
									</div>
				
									<div class="content">
										<ul>
											<li>
												<a href="#" class="clearfix">
													<div class="image">
														<i class="fa fa-users bg-info"></i>
													</div>
													<span class="button title">User just signed up</span>
													<button type="button" class="btn btn-xs btn-primary" tabindex="-1">Student</button>
													<button type="button" class="btn btn-xs btn-success" tabindex="-1">Teacher</button>
													<button type="button" class="btn btn-xs btn-danger" tabindex="-1">Deny</button>
												</a>
											</li>
										</ul>
				
										<hr />
										<ul>
											<li>
												<a href="#" class="clearfix">
													<div class="image">
														<i class="fa fa-users bg-info"></i>
													</div>
													<span class="button title">User just signed up</span>
													<button type="button" class="btn btn-xs btn-primary" tabindex="-1">Student</button>
													<button type="button" class="btn btn-xs btn-success" tabindex="-1">Teacher</button>
													<button type="button" class="btn btn-xs btn-danger" tabindex="-1">Deny</button>
												</a>
											</li>
										</ul>
										<hr />
										<ul>
											<li>
												<a href="#" class="clearfix">
													<div class="image">
														<i class="fa fa-users bg-info"></i>
													</div>
													<span class="button title">User just signed up</span>
													<button type="button" class="btn btn-xs btn-primary" tabindex="-1">Student</button>
													<button type="button" class="btn btn-xs btn-success" tabindex="-1">Teacher</button>
													<button type="button" class="btn btn-xs btn-danger" tabindex="-1">Deny</button>
												</a>
											</li>
										</ul>
										<hr />
				
										<div class="text-right">
											<a href="#" class="view-more">View All</a>
										</div>
									</div>
								</div>
							</li>
						</ul>
					
					<?php }} ?>
					<span class="separator"></span>

			

				</div>
				<!-- end: search & user box -->
			</header>