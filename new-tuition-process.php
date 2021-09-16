<?php
include("connect.php");
$subID = $_GET['subID'];
$usID = $_GET['usID'];

$sql="INSERT INTO tuition (year,semester,subID,profID)
VALUES (year(curdate()),month(curdate())%2 + 1, $subID , $usID)";

$res=mysqli_query($link,$sql);

if($res)
{	
    
    header("Location: subject.php?subID=$subID");
    exit;
}
else{
    
    
    mysqli_rollback($link);
    echo"<font color=\"#FF0000\"><strong><br>Canceled due to errors !<br></font>";
    header("Location: subjects-table.php?status=fail");

}


?>