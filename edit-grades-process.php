<?php
include("connect.php");
$regID = $_GET['regID'];
extract($_POST);

if(isset($_POST['save']) && $_POST['save']== "insert")
{
    $sql1 = mysqli_query($link,"SELECT Lweight,Tweight FROM isregistered a CROSS JOIN tuition b ON a.tuiID = b.tuiID");
    $result = mysqli_fetch_array($sql1);
    $Fgrade = $result['Lweight']*$Lgrade + $result['Tweight']*$Tgrade;
	$sql=mysqli_query($link,"UPDATE isregistered SET Tgrade=$Tgrade , Lgrade=$Lgrade , Fgrade=$Fgrade WHERE regID=$regID");
    if($sql){
        header("Location: grades-table.php");
        exit();

    }else{
        mysqli_rollback($link);
		echo"<font color=\"#FF0000\"><strong><br>Registration canceled due to errors !<br></font>";
    }                       
}
?>