<?php
$email = $_POST["email"] ?? "";
extract($_POST);
include 'database.php';

if(empty($email)){
    die("You have to enter your email");
}

if ( ! filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

$conn = conn();

$sql = mysqli_query($conn, "INSERT INTO subscribe (Email) VALUES ('$email')");

if ($conn->query($sql) === TRUE) {
    header("Location: thanks.html");
    exit;
} else {
    if (mysqli_errno($conn) == 1062) {
        echo "Error: Duplicate entry for email address: $email";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// send email confirmation
$to = $email;
$subject = "Newsletter Subscription Confirmation";
$message = "Thanks for subscribing to our newsletter! You'll now receive regular updates and news from us.\n\nBest regards,\nLiterate";
$headers = "From: literatehq@gmail.com";

mail($to, $subject, $message, $headers);


// $stmt = $mysqli->stmt_init();

// if (!$stmt->prepare($sql)) {
//     die("SQL Error: " .$mysqli->error);
// }

// $stmt->bind_param("s", $email);

// if($stmt->execute()){
//     header("Location: thanks.html");
//     exit;
// } else {
//     if ($mysqli->errno === 1062) {
//         die("Email already taken");
//     } else {
//         die($mysqli->error . " " . $mysqli->errno);
//     }
// }
?>