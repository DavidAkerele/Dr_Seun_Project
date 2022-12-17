<?php

/**
 * login.php
 */
if (!isset($_POST['email'], $_POST['password'])) exit('false');

// require functions.php
require_once 'register_a.php';

$U = new Utilities;

$email = $U->sanitizeString(filter_var($_POST['email']));
$password = $U->sanitizeString(filter_var($_POST['password']));

if (!$email || !$password) exit('false');

$DB = null;

try {
	$DB = new DB;

	$query = $DB->query("SELECT `ID`, `Password` FROM `register` WHERE `Email` = '$email'");

	if (!$query->num_rows) exit('Invalid username/password');

	$record = $query->fetch_assoc();

	$userPassword = $record['password'];
	$userId = $record['id'];

	if (!password_verify($password, $userPassword)) exit('Invalid username/password');

	// store user details in session
	@session_start();
	$_SESSION['msc_username'] = $username;
	$_SESSION['msc_user_id'] = $userId;

	die('true');
} catch (\Throwable $th) {
	exit("Error: {$th->getMessage()}");
}
finally{
	unset($DB);
}