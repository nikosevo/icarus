					<!-- Pie Chart -->
					<div class="col-md-6">
						<section class="panel">
							<header class="panel-heading">
								<h2 class="panel-title"></h2>
								<div class="form-group">
									<h5 class="col-md-5 control-label">Select Year</h5>
									<div class="col-md-7"> 
										<select class="form-control" multiple="multiple" data-plugin-multiselect data-plugin-options='{ "enableCaseInsensitiveFiltering": true }' id="ms_example6">
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

										$sql2 = "SELECT (Count(*)* 100 / (Select Count(*) From isregistered where stdID='$stID')) as Persentage From isregistered where stdID='$stID'  AND isregistered.Fgrade>=5 ";
										$result2 = mysqli_query($link,$sql2);
										$row2  = mysqli_fetch_array($result2);

										$notpassed=100-$row2["Persentage"];
										?>
<!-- //////////////////////////////////////////////////////// -->
											<option value="<?php echo $row["year"] ?>"><?php echo $row["year"] ?></option>
											
										<?php } ?>	
										</select>
									</div>
								</div>
				
							</header>
							<div class="panel-body">
				
								<!-- Flot: Pie -->
								<div class="chart chart-md" id="flotPie"></div>

								<script type="text/javascript">
				
									var flotPieData = [{
										label: "Passed",
										data: [
											[1,$row2["Persentage"]]
										],
										color: '#0088cc'
									}, {
										label: "Not Passed",
										data: [
											[1, $notpassed]
										],
										color: '#2baab1'
									}
									, {
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
												<td>2010 win</td>
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