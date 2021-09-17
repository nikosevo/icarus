<?php 
	include 'connect.php';
    session_start();

    $stid= $_SESSION["userID"];
    
    extract($_POST);

	if(isset($_POST['save']) && $_POST['save']== "save"){
        
		mysqli_autocommit($link, false);
		foreach ($_POST['subject'] as $subject){
            $sql1=mysqli_query($link,"SELECT tuiID FROM tuition where subID=$subject");
            $row1=mysqli_fetch_array($sql1);
            $tuID=$row1['tuiID'];
            $sql3=mysqli_query($link,"INSERT INTO isregistered (Tgrade,Lgrade,Fgrade,tuiID,stdID) VALUES (0,0,0,$tuID,$stid)");
            
            mysqli_commit($link);
            
            
        } 
    
        
        
       
        header("Location: profile.php?stdID=$stid");
        exit();
		
	} 
    elseif(isset($_POST['save']) && $_POST['save']== "final"){

    }
?>