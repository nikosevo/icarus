<!-- here goes the code for the homepage of a guest --> 
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