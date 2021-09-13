<?php
    session_start();
    unset($_SESSION["userID"]);
    unset($_SESSION["username"]);
    $_SESSION["roleID"]=0;
    header("Location:pages-signin.php");
?>