<?php
// if ($_SERVER["REQUEST_METHOD"] != "POST") {
//     header("Location: /Project/pages/account/signup.php" );
//     exit;
// }

// $email = $_POST["email"] ?? "";
// $full_name = $_POST["full-name"] ?? "";
// $password = $_POST["password"] ?? "";
// $confirmPassword = $_POST["confirm-password"] ?? "";
// $profile = $_POST['file'] ?? "";

// extract($_POST);
// include("database.php");
// $sql = mysqli_query($conn,"SELECT * FROM register where Email = '$email'");
// if(mysqli_num_rows($sql) > 0) {
//     echo "Account Already Exists"; 
// 	exit;
// }

// else if (isset($_POST['save'])) {
//     $file = rand(1000,100000)."-".$_FILES['file']['name'];
//     $file_loc = $_FILES['file']['tmp_name'];
//     $folder = "upload/";
//     $new_file_name = strtolower($file);
//     $final_file = str_replace(' ','-',$new_file_name);
//     if(move_uploaded_file($file_loc,$folder.$final_file))
//     {
//         $query = "INSERT INTO register(Full_Name, Email, Password, File) VALUES ('$full_name', '$email', 'md5($password)', $final_file)";
//         $sql = mysqli_query($conn, $query) or die("Could Not Perform the Query");
//         header ("Location: ../pages/account/login.php?status=success");
//         exit;
//     }
//     else 
//     {
// 		echo "Error.Please try again";
//         exit;
// 	}

//     header("Location: /Project/pages/courses/signup.php" );
//     exit;
// }

if(empty($_POST["full-name"])){
    die("You have to enter your full name");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid Email is required");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be 8 characters or more");
}

// To check if password contains one letter and number as well
if( ! preg_match("*[a-z]*", $_POST("password"))) {
    die("Passwords must contains at least one letter");
}

if( ! preg_match("*[0-9]*", $_POST("password"))) {
    die("Passwords must contains at least one number");
}

if ($_POST["password"] !== $_POST["confirm-password"]) {
    die("Passwords must match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO register (Full_Name, Email, Password, File)
        VALUES (?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if ($stmt->prepare($sql)) {
    die("SQL Error: " .$mysqli->error);
}

$stmt->bind_param("ssss",
                    $_POST["full-name"],
                    $_POST["email"],
                    $password_hash);

$stmt->execute();

echo "Signup Successful";

print_r($_POST);
var_dump($password);
?>