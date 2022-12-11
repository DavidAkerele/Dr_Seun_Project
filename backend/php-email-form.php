<?php
// get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// sanitize form data
$name = filter_var($name, FILTER_SANITIZE_STRING);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$message = filter_var($message, FILTER_SANITIZE_STRING);

// validate form data
$errors = array();
if(empty($name)){
  $errors[] = "Please enter your name.";
}
if(empty($email)){
  $errors[] = "Please enter your email address.";
}
if(empty($message)){
  $errors[] = "Please enter a message.";
}

// display errors
if(!empty($errors)){
  foreach($errors as $error){
    echo $error . "<br>";
  }
} else {
  // send email
  $to = "literatehq@gmail.com";
  $subject = "Contact Us Form Submission";
  $message = "Name: $name\nEmail: $email\nMessage:\n$message";
  $headers = "From: $email";
  mail($to, $subject, $message, $headers);

  // redirect to thank-you page
  header('Location: thank-you.php');
}
?>
