<?php
// echo "<pre>";
// var_dump($_FILES);
// exit;

require __DIR__."/database.php";
require __DIR__."/randomName.php";

$fullName = $_POST["full-name"] ?? "";
$email = $_POST["email"] ?? "";
$password = $_POST["password"] ?? "";
$confirmPassword = $_POST["confirm-password"] ?? "";
$fileName = $_FILES["file"] ?? "";
$filePath = "";

if ($fileName) {
    $filePath = $fileName["tmp_name"];
    $fileName = $fileName["name"];
}

if(empty($fullName)){
    die("You have to enter your full name");
}

if ( ! filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Valid Email is required");
}

if (strlen($password) < 8) {
    die("Password must be 8 characters or more");
}

// To check if password contains one letter and number as well
if( ! preg_match("/[a-z]/i", $password)) {
    die("Passwords must contains at least one letter");
}

if( ! preg_match("/[0-9]/i", $password)) {
    die("Passwords must contains at least one number");
}

if ($password !== $confirmPassword) {
    die("Passwords must match");
}

$password_hash = password_hash($password, PASSWORD_DEFAULT);


if ($filePath) {
    $folName = getName(7);
    mkdir(__DIR__."\upload\\".$folName);
    $desiredPath = __DIR__."\upload\\".$folName."\\".$fileName;
    move_uploaded_file($filePath, $desiredPath);
}


$mysqli = conn(); // Connect to database

if (!$filePath) { 
    $sql = "INSERT INTO register (Full_Name, Email, Password)
            VALUES (?, ?, ?)";
} else {
    $sql = "INSERT INTO register (Full_Name, Email, Password, File)
            VALUES (?, ?, ?, ?)";
}

$stmt = $mysqli->stmt_init();

if (!$stmt->prepare($sql)) {
    die("SQL Error: " .$mysqli->error);
}

// BINDING DEPENDING ON IF FILE PATH EXISTS OR NOT
if (!$filePath) {
    $stmt->bind_param("sss",
        $fullName,
        $email,
        $password_hash);
} else {
    $stmt->bind_param("ssss",
        $fullName,
        $email,
        $password_hash, $desiredPath);
}

if($stmt->execute()){
    header("Location: ../pages/account/login.php");
    exit;
} else {
    if ($mysqli->errno === 1062) {
        die("Email already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}
?>