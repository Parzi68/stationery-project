<?php


if (isset($_POST["submit"])) {

	$name = $_POST["fullname"];
	$username = $_POST["uid"];
	$email = $_POST["email"];
	$mobile = $_POST["mobile"];
	$address = $_POST["address"];
	$pwd = $_POST["pwd"];
	$confirm_pwd = $_POST["confirm-pwd"];

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

	if (emptyInputSignup($name, $username, $email, $mobile, $address, $pwd, $confirm_pwd) !== false) {
		header("location:../php/signup.php?error=emptyinput");
		exit();
	}
	if (invalidUid($username) !== false) {
		header("location:../php/signup.php?error=invaliduid");
		exit();
	}
	if (invalidEmail($email) !== false) {
		header("location:../php/signup.php?error=invalidemail");
		exit();
	}
	if (pwdMatch($pwd, $confirm_pwd) !== false) {
		header("location:../php/signup.php?error=passwordsdontmatch");
		exit();
	}
	if (uidExists($conn, $username, $email, $mobile) !== false) {
		header("location:../php/signup.php?error=usernametaken");
		exit();
	}
	if (pwdLong($pwd) < 8) {
		header("location:../php/signup.php?error=passwordshouldbe8ormore");
		exit();
	}
	if (mobile($mobile) < 10) {
		header("location:../php/signup.php?error=mobileshouldbe10");
		exit();
	} 
	createuser($conn,$name, $username, $email, $mobile, $address, $pwd);
}
else
{
	header("location:../php/signup.php");
	exit();
}
