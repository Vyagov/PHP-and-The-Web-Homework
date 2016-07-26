<?php

$firstName = '';
$lastName = '';
$dateOfBirth = '';
$err = false;
$errors = [];
$errors['firstName'] = '';
$errors['lastName'] = '';
$errors['dateOfBirth'] = '';

if (!empty($_POST)) {
	$firstName = isset($_POST['firstName']) ? $_POST['firstName'] : '';
	$lastName = isset($_POST['lastName']) ? $_POST['lastName'] : '';
	$dateOfBirth = isset($_POST['dateOfBirth']) ? $_POST['dateOfBirth'] : '';

	if (!preg_match('/^[a-zA-Z ]*$/', $firstName) || $firstName == '') {
		$errors['firstName'] = 'Input valid name!';
		$err = true;
	}
	
	if (!preg_match('/^[a-zA-Z ]*$/', $lastName) || $lastName == '') {
		$errors['lastName'] = 'Input valid name!';
		$err = true;
	}
	
	if (!isValidDate($dateOfBirth)) {
		$errors['dateOfBirth'] = 'Input valid date in format dd.mm.yyyy!';
		$err = true;
	}
}

function isValidDate($date) {
	list($day, $month, $year) = sscanf($date, "%d.%d.%d");
	$day = trim($day);
	$month = trim($month);
	$year = trim($year);
	
	if (!is_numeric($year) || !is_numeric($month) || !is_numeric($day)) {
		return false;
	}
	if (!checkdate($month, $day, $year)) {
		return false;
	}
	return true;
}
