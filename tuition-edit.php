<?php 
extract($_POST);
$subID = $_GET['subID'];
include("connect.php");
if(isset($_POST['save']) && $_POST['save']== "insert")
{
	$sql=mysqli_query($link,"UPDATE tuition SET Tweight=$Tweight,Lweight=$Lweight,Tlimit=$Tlimit,Llimit=$Llimit WHERE subID=$subID and year=year(curdate())");
    if($sql){
        header("Location: subject.php?subID=$subID");
        exit();

    }else{
        mysqli_rollback($link);
		echo"<font color=\"#FF0000\"><strong><br>Registration canceled due to errors !<br></font>";
    }                       
}
?>