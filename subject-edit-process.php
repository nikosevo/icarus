
<?php
include("connect.php");
$subID = $_GET['subID'];

extract($_POST);
if(isset($_POST['save']) && $_POST['save']== "insertsub")
{
	
	$sql=mysqli_query($link,"SELECT * FROM `subject` where subID='$subID'");
	if(mysqli_num_rows($sql)==0)
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
			if(isset($_POST["subject"])) 
			{
				$sqlDel=mysqli_query($link,"DELETE FROM prerequisites WHERE subID=$subID");

				$sql2=mysqli_query($link,"SELECT subID FROM `subject` where title='$subjtitle'");
				$row2 = mysqli_fetch_array($sql2);
				foreach ($_POST['subject'] as $subject){
					$sql3=mysqli_query($link,"SELECT subID FROM `subject` where title='$subject'");
					$row3 = mysqli_fetch_array($sql3);
					
					mysqli_autocommit($link, false);
					$sub1ID= $row3['subID'];
					$sub2ID= $row2['subID'];
					$sql4 = "insert into prerequisites(prerequisiteID,subID) values('$sub1ID','$sub2ID')";
					$result4 = mysqli_query($link,$sql4) ;
					if($result4){
						mysqli_commit($link);
					}
				} 
					
			}

			
			header("Location: subjects-table.php");
			exit();
		}else{
			mysqli_rollback($link);
			echo"<font color=\"#FF0000\"><strong><br>Canceled due to errors !<br></font>";
			header("Location: subjects-table.php?status=fail");
		}
			
			
		
	}
}

?>