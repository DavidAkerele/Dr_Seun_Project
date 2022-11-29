<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: /Project/pages/account/signup.php" );
    exit;
}

$email = $_POST["email"] ?? "";
$full_name = $_POST["full-name"] ?? "";
$password = $_POST["password"] ?? "";
$confirmPassword = $_POST["confirm-password"] ?? "";
$profile = $_POST['file'] ?? "";

extract($_POST);
include("database.php");
$sql = mysqli_query($conn,"SELECT * FROM register where Email = '$email'");
if(mysqli_num_rows($sql) > 0) {
    echo "Account Already Exists"; 
	exit;
}

else if (isset($_POST['save'])) {
    $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $folder = "upload/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ','-',$new_file_name);
    if(move_uploaded_file($file_loc,$folder.$final_file))
    {
        $query = "INSERT INTO register(Full_Name, Email, Password, File) VALUES ('$full_name', '$email', 'md5($password)', $final_file)";
        $sql = mysqli_query($conn, $query) or die("Could Not Perform the Query");
        header ("Location: ../pages/account/login.php?status=success");
        exit;
    }
    else 
    {
		echo "Error.Please try again";
        exit;
	}

    header("Location: /Project/pages/courses/signup.php" );
    exit;
}

?>