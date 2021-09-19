<!doctype html>

<html class="fixed search-results">
	<?php
		include "connect.php";
	    $title = $_GET['q'];
		$sql2 = "SELECT * FROM `subject` where UPPER(title)=UPPER('$title')";
		$result2 = mysqli_query($link,$sql2);
		$row2 = mysqli_fetch_array($result2);
		$subid=$row2["subID"];
		header("Location: subject.php?subID=$subid");
        exit();
	?>
	
		

</html>