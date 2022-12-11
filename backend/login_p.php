<?php
session_start();


if(isset($_POST["email"], $_POST["password"]))
{
    $password = $_POST['password'];
    $email = $_POST['email'];

    extract($_POST);
    include 'database.php';
    $conn = conn();
    echo "Here";

    $password_sql = mysqli_query($conn, "SELECT Password FROM register WHERE Email = '$email'");
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $password_verify = password_verify($password, $password_hash);

    if ($password_verify) {
        $sql = mysqli_query($conn, "SELECT * FROM register where Email = '$email' and Password = '$password_hash'");
        $row = mysqli_fetch_array($sql);
        if(is_array($row))
        {
            $_SESSION["ID"] = $row['ID'];
            $_SESSION["Email"] = $row['Email'];
            $_SESSION["Full_Name"] = $row['Full_Name'];
            $_SESSION["Password"] = $row['Password'];

            header("Location: ../pages/home/index.php"); 
        }
        else
        {
            echo "Invalid Email or Password";
        }
    }
}
?>