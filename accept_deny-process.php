<?php
    include 'connect.php';
    $userID=$_POST['id'];
    if(isset($_POST['Accept'])){
        
        $sql2 = "UPDATE users SET isactive = '1' WHERE userID = $userID";
		$result2 = mysqli_query($link,$sql2);
		
        $sql4 = "SELECT * FROM users where userID='$userID'";
		$result4 = mysqli_query($link,$sql4);
		$row4 = mysqli_fetch_array($result4);
        $role= $row4['roleID'];
        if($role==1){
            $sql5 = "INSERT INTO profesors (userID) VALUES ($userID)";
		    $result5 = mysqli_query($link,$sql5);  
        }
        elseif($role==2){
            $sql6 = "INSERT INTO students (userID) VALUES ($userID)";
		    $result6 = mysqli_query($link,$sql6);  
        }
        
        header("Location: index.php?error=2"); 
        
        
    }
    elseif(isset($_POST['Deny'])) {
        
       
        $sql3 = "DELETE FROM `users` WHERE `users`.`userID` = $userID";
		$result3 = mysqli_query($link,$sql3);
        header("Location: index.php"); 
    }
    else{
        echo("tuv");
    }

?>