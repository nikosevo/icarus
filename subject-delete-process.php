
<?php
include("connect.php");
$subID = $_GET['subID'];

$sql=mysqli_query($link,"DELETE FROM subject WHERE subID=$subID");
if($sql){
    mysqli_close($link);
    header("Location: subjects-table.php?status=$subID");
    exit;
}else{
    mysqli_rollback($link);
    echo"<font color=\"#FF0000\"><strong><br>Canceled due to errors !<br></font>";
    header("Location: subjects-table.php?status=fail$subID");
}
        
        


?>