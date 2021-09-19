<?php 
	include 'connect.php';
    session_start();



    $stid= $_GET['stid'];
    
    extract($_POST);

	if(isset($_POST['save']) && $_POST['save']== "save"){
        
		$sql2=mysqli_query($link,"SELECT * FROM isregistered where stdID=$stid");
        $row2=mysqli_fetch_array($sql2);

        if($row2){
            $sql4=mysqli_query($link,"DELETE FROM isregistered where stdID=$stid");
              
        }
        
		foreach ($_POST['subjects'] as $subjects){
            
            
            
            $sql1=mysqli_query($link,"SELECT * FROM tuition where subID=$subjects");
            $row1=mysqli_fetch_array($sql1);
           
            mysqli_autocommit($link, false);
            $tuID=$row1['tuiID'];
             
            $sql3=mysqli_query($link,"INSERT INTO isregistered (Tgrade,Lgrade,Fgrade,tuiID,stdID) VALUES (0,0,0,$tuID,$stid)");
            
            
            
				if($sql3){
                    
                    mysqli_commit($link);
				}
            
            
            
        } 
    
        
        
       
        header("Location: profile.php?stdID=$stid&role=2");
        exit();
		
	} 
    elseif(isset($_POST['save']) && $_POST['save']== "final"){
        $result5=mysqli_query($link,"SELECT * FROM isregistered where stdID=$stid");
        
        while($row5=mysqli_fetch_array($result5)){
            $regid=$row5["regID"];
            $sql5=mysqli_query($link,"UPDATE isregistered SET final=1 where regID=$regid");
            
        }
        header("Location: profile.php?stdID=$stid&role=2");
        exit();
    }
?>