<?php
    session_start();
    unset($_SESSION["userID"]);
    unset($_SESSION["username"]);
    unset($_SESSION["roleID"]);
    header("Location:pages-signin.php");
?>