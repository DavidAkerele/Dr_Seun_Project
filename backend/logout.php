<?php
    session_start();
    unset($_SESSION["Email"]);
    unset($_SESSION["Full_Name"]);
    header("Location:../pages/account/login.php");
?>