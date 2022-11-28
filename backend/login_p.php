<?php
session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    include 'database.php';
    $sql = mysqli_query($conn,"SELECT * FROM register where Email='$email' and Password='md5($password)'");
    $row = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["ID"] = $row['ID'];
        $_SESSION["Email"]=$row['Email'];
        $_SESSION["Full_Name"]=$row['Full_Name'];
        header("Location: ../pages/home/index.php"); 
    }
    else
    {
        echo "Invalid Email or Password";
    }
}
?>