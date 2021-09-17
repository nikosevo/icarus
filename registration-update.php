<?php 
	include 'connect.php';
    session_start();



    $stid= $_GET['stid'];
    
    extract($_POST);

	if(isset($_POST['save']) && $_POST['save']== "save"){
        
		
		foreach ($_POST['subjects'] as $subjects){

            
            
            $sql1=mysqli_query($link,"SELECT * FROM tuition where subID=$subjects");
            $row1=mysqli_fetch_array($sql1);
           
            mysqli_autocommit($link, false);
            $tuID=$row1['tuiID'];
             
            $sql3=mysqli_query($link,"INSERT INTO isregistered (Tgrade,Lgrade,Fgrade,tuiID,stdID) VALUES (0,0,0,$tuID,$stid)");
            
            echo $tuID;
            
				if($sql3){
                    echo $stid;
                    mysqli_commit($link);
				}
            
            
            
        } 
    
        
        
       
        // header("Location: profile.php?stdID=3");
        // exit();
		
	} 
    elseif(isset($_POST['save']) && $_POST['save']== "final"){

    }
?>