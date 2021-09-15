
<?php
include("connect.php");
$subID = $_GET['subID'];


$sql=mysqli_query($link,"DELETE FROM subject WHERE subID=$subID");
if(mysqli_num_rows($sql))
{	
    
    header("Location: subject-table.php?subID=$subID");
    exit;
}
else{
    
    mysqli_autocommit($link, false);
    $sql1="UPDATE subject SET title='$subjtitle' , description='$description' where subID=$subID";
    $result1 = mysqli_query($link,$sql1) ;
    if($result1){
        mysqli_commit($link);

        
        header("Location: subjects-table.php?status=kaikala");
        exit();
    }else{
        mysqli_rollback($link);
        echo"<font color=\"#FF0000\"><strong><br>Canceled due to errors !<br></font>";
        header("Location: subjects-table.php?status=fail");
    }
        
        
    
}


?>