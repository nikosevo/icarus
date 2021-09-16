<?php 
	include 'connect.php';
    $userID = $_GET['uid'];
    $stid= $_GET['stid'];
    $rolee=$_GET['role'];
    extract($_POST);

	if(isset($_POST['save']) && $_POST['save']== "profileUP"){
        
		mysqli_autocommit($link, false);
		if($npwd==$npwd2){
            if($npwd==''){
               $sql = "UPDATE users SET fname = '$fname', lname = '$lname'  WHERE userID=$userID";
			   $result = mysqli_query($link,$sql) ; 
            }          
            else{
               $password = md5($npwd); 
               $sql = "UPDATE users SET fname = '$fname', lname = '$lname', passwd = '$password'  WHERE userID=$userID";
			   $result = mysqli_query($link,$sql) ; 
            }
			if($rolee=='1'){
                $sql = "UPDATE profesors SET `rank` = '$rank'  WHERE userID=$userID";
                $result = mysqli_query($link,$sql) ; 
             }
			
			if($result){
				mysqli_commit($link);
                header("Location: profile.php?stdID=$stid&role=$rolee");
			}else{
				mysqli_rollback($link);
			}
		}
		else{
			echo"lol u ";
		}
		
	} 
?>