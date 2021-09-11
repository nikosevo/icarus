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