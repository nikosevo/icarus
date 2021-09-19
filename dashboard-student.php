					<!-- Pie Chart -->
					<div class="col-md-6">
						<section class="panel">
							<header class="panel-heading">
								<h2 class="panel-title"></h2>
								<div class="form-group">
									<h5 class="col-md-5 control-label">Select Year</h5>
									<div class="col-md-7"> 
										<select data-plugin-selectTwo class="select2-container form-control populate " onchange="location = this.value;">
										<option value="AK">-No year Selected-</option>
<!-- //////////////////////////////////////////////////////// -->
										<?php 
										$usrID=$_SESSION['userID'];
										// $sql = "SELECT tuiID FROM `isregistered` INNER JOIN students ON students.stdID=isregistered.stdID where students.userID='$usrID' ";
										$sqlr = "SELECT stdID FROM `students`  where students.userID='$usrID' ";
										$resultr = mysqli_query($link,$sqlr);
										$rowr  = mysqli_fetch_array($resultr);
										$stID = $rowr["stdID"];

										$sql = "SELECT DISTINCT year FROM tuition INNER JOIN isregistered ON tuition.tuiID=isregistered.tuiID WHERE isregistered.stdID=$stID ";
										$result = mysqli_query($link,$sql);
										while($row  = mysqli_fetch_array($result)){

										
										
										?>
<!-- //////////////////////////////////////////////////////// -->

											<option value="index.php?choice=<?php echo $row["year"] ?>" ><?php echo $row["year"] ?></option>
											
										<?php } ?>	
										</select>

									</div>
								</div>
				
							</header>

<!-- ////////////////////////////////////////////////////// -->
<?php


$sql2 = "SELECT (Count(*)* 100 / (Select Count(*) From isregistered INNER JOIN tuition ON isregistered.tuiID=tuition.tuiID where isregistered.stdID='$stID' AND tuition.year='$yr')) as Persentage From isregistered INNER JOIN tuition ON isregistered.tuiID=tuition.tuiID where isregistered.stdID='$stID'  AND isregistered.Fgrade>=5 AND tuition.year='$yr'";
$result2 = mysqli_query($link,$sql2);
$row2  = mysqli_fetch_array($result2);

if($row2["Persentage"]!=NULL){
$notpassed=100-$row2["Persentage"];	
}
else{
	$notpassed=NULL;
}

?>
<!-- ////////////////////////////////////////////////////// -->
							<div class="panel-body">
							
						<!-- Flot: Pie -->
						<div class="chart chart-md" id="flotPie"></div>
						<script type="text/javascript">

							var flotPieData = [{
								label: "Passed",
								data: [
									[1,<?php echo $row2["Persentage"] ?>]
								],
								color: '#0088cc'
							}, {
								label: "Not Passed",
								data: [
									[1, <?php echo $notpassed ?>]
								],
								color: '#2baab1'
							} ];

							// See: assets/javascripts/ui-elements/examples.charts.js for more settings.

						</script>

					</div>
					
						</section>


						
					</div>
					
					<!-- Table--> 
					