<?php
session_start();
if(isset($_POST['save'])&& $_POST['save']== "signin")
{
    extract($_POST);
    include 'connect.php';
    $password = md5($pwd);
    $sql=mysqli_query($link,"SELECT * FROM users where username='$username' and passwd='$password'");
    $row  = mysqli_fetch_array($sql);
    if($row['isactive'] == 0 ){
        echo "Waiting for adming to aprove";
        //break here
        header("Location: index.php"); 
        exit();

    }
    if(is_array($row))
    {
        $_SESSION["userID"] = $row['userID'];
        $_SESSION["username"]=$row['username'];
        $_SESSION["roleID"]=$row['roleID'];
        header("Location: index.php"); 
    }
    else
    {
        echo "Invalid Username /Password";
    }
}
?>