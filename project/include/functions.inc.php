<?php

function emptyInputSignup($name, $username, $email, $mobile, $address, $pwd, $confirm_pwd){
	 $result;
	 if (empty($name) || empty($username) || empty($email) || empty($mobile) || empty($address) || empty($pwd) || empty($confirm_pwd)) {
	 	$result = true;
	 }
	 else{
	 	$result = false;
	 }
	 return $result;
}
function invalidUid($username) {
	 $result;
	 if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
	 	$result = true;
	 }
	 else{
	 	$result = false;
	 }
	 return $result;
}
function invalidEmail($email) {
	 $result;
	 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	 	$result = true;
	 }
	 else{
	 	$result = false;
	 }
	 return $result;
}
function pwdMatch($pwd, $confirm_pwd){
	 $result;
	 if ($pwd !== $confirm_pwd) {
	 	$result = true;
	 }
	 else{
	 	$result = false;
	 }
	 return $result;
}
 function pwdLong($pwd){
	$result; 
	if (strlen($_POST["$pwd"]) < 8) {
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
} 
function mobile($mobile){
	$result; 
	if (strlen($_POST["$mobile"]) < 10 || strlen($_POST["$mobile"]) > 10) {
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
} 

function uidExists($conn, $username, $email, $mobile){
	$sql = "SELECT * FROM customer_details WHERE c_id = ? OR c_email = ? OR c_mobile = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location:../php/signup.php?error=stmtfailed");
		exit();
	}


mysqli_stmt_bind_param($stmt, "ssi", $username, $email, $mobile);

mysqli_stmt_execute($stmt);

$resultData = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($resultData)) {
	return $row;
}
else{
	$result = false;
	return $result;
}

mysqli_stmt_close($stmt);

}

function createuser($conn,$name, $username, $email, $mobile, $address, $pwd){
	$sql = "INSERT INTO customer_details (c_name, c_email, c_mobile, c_uid, c_pwd, c_address) VALUES (?, ?, ?, ?, ?, ?) ;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location:../php/signup.php?error=stmtfailed");
		exit();
	}

	$hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

mysqli_stmt_bind_param($stmt, "ssisss", $name, $email, $mobile, $username, $hashedpwd, $address);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

header("location:../php/signup.php?error=none");
header("location:../php/index.php");
exit();

}

function emptyInputLogin($username, $pwd){
	$result;
	if (empty($username) || empty($pwd)) {
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}

function usernameExist($conn, $username, $email){
	$sql = "SELECT * FROM customer_details WHERE c_id = ? OR c_email = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location:../php/login.php?error=stmtfailed");
		exit();
	}


mysqli_stmt_bind_param($stmt, "ss", $username, $email);

mysqli_stmt_execute($stmt);

$resultData = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($resultData)) {
	return $row;
}
else{
	$result = false;
	return $result;
}

mysqli_stmt_close($stmt);

}

function loginUser($conn, $username, $pwd){
	$uidExists = usernameExist($conn, $username, $username);

	if ($uidExists === false) {
		header("location:../php/login.php?error=wronglogin");
		exit();
	}


	$pwdHashed = $uidExists["c_pwd"];
	$checkPwd = password_verify($pwd, $pwdHashed);

	if ($checkPwd == false) {
		header("location:../php/login.php?error=wronglogin");
		exit();
	}
	else if ($checkPwd == true) {
		session_start();
		$_SESSION["userid"] = $uidExists["c_id"];
		$_SESSION["useruid"] = $uidExists["c_uid"];
		header("location:../php/index.php");
		exit();
	}
}
