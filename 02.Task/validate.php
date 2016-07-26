<?php

$username = '';
$repeatPass = '';
$password = '';
$result = '';
$cryptPass = '';
$errors = [];
$err = false;
$errors['username'] = '';
$errors['password'] = '';
$errors['repeatPass'] = '';

if (!empty($_POST)) {
	$username = isset($_POST['username']) ? test_input($_POST['username']) : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';
	$repeatPass = isset($_POST['repeatPass']) ? $_POST['repeatPass'] : '';

	if (!preg_match('/^[a-zA-Z0-9-_\.]{3,20}$/', $username)) {
		$err = true;
		$errors['username'] = 'Username format: numbers, upper or lower case - between 3 and 20 chars!';
	}

	if (!preg_match('/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/', $password)) {
		$err = true;
		$errors['password'] = 'Password format: upper and lower case and number or special char - min 8 chars!';
	}
	
	if(strcmp($password, $repeatPass) !== 0){
		$err = true;
		$errors['repeatPass'] = 'The two passwords do not match!';
	}
	
	$cryptPass = crypt($password, password_hash($password, PASSWORD_DEFAULT));
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
