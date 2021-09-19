
<!-- bars chart-->
<div class="col-md-12">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Bar Chart</h2>
            <p class="panel-subtitle">A bar chart is a way of summarizing a set of categorical data.</p>
        </header>
        <div class="panel-body">

<!-- //////////////////////////////////////////////////////// -->
        <?php 
            $usrID=$_SESSION['userID'];
            // $sql = "SELECT tuiID FROM `isregistered` INNER JOIN students ON students.stdID=isregistered.stdID where students.userID='$usrID' ";
            $sqlr = "SELECT stdID FROM `students`  where students.userID='$usrID' ";
            $resultr = mysqli_query($link,$sqlr);
            $rowr  = mysqli_fetch_array($resultr);
            $stID = $rowr["stdID"];
           
            
            
        ?>
<!-- //////////////////////////////////////////////////////// -->


            <!-- Morris: Bar -->
            <div class="chart chart-md" id="morrisBar"></div>
            <script type="text/javascript">
                <?php
                $sql = "SELECT DISTINCT year FROM tuition  WHERE profID=$usrID ";
                $result = mysqli_query($link,$sql);
                while($row  = mysqli_fetch_array($result)){
                ?>
                var morrisBarData = [{
                    y: '2004',
                    a: 10,
                    
                }, {
                    y: '2005',
                    a: 100,
                   
                }, {
                    y: '2006',
                    a: 60,
                   
                }, {
                    y: '2007',
                    a: 75,
                   
                }, {
                    y: '2008',
                    a: 90,
                    
                }, {
                    y: '2009',
                    a: 75,
                   
                }, {
                    y: '2010',
                    a: 50,
                    
                }, {
                    y: '2011',
                    a: 75,
                    
                }, {
                    y: '2012',
                    a: 30,
                    
                }, {
                    y: '2013',
                    a: 75,
                   
                }, {
                    y: '2014',
                    a: 60,
                   
                }];

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

