<?php

$firstName = '';
$lastName = '';
$dateOfBirth = '';
$city = '';
$country = '';
$err = false;
$result = [];
$array = [];
$errors = [];
$errors['firstName'] = '';
$errors['lastName'] = '';
$errors['dateOfBirth'] = '';
$errors['city'] = '';
$errors['country'] = '';

if (!empty($_POST)) {
	$array = $_POST;
}
if (!empty($_GET)) {
	$array = $_GET;
}

if (!empty($array)) {
	$firstName = isset($array['firstName']) ? test_input($array['firstName']) : '';
	$lastName = isset($array['lastName']) ? test_input($array['lastName']) : '';
	$dateOfBirth = isset($array['dateOfBirth']) ? $array['dateOfBirth'] : '';
	$city = isset($array['city']) ? test_input($array['city']) : '';
	$country = isset($array['country']) ? test_input($array['country']) : '';
	
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
	
	if (!preg_match('/^[a-zA-Z ]*$/', $city) || $city == '') {
		$errors['city'] = 'Input valid city!';
		$err = true;
	}
	
	if (!preg_match('/^[a-zA-Z ]*$/', $country) || $country == '') {
		$errors['country'] = 'Input valid country!';
		$err = true;
	}
	
	if (!$err) {
	
		$result = [
				'firstName' => $firstName,
				'lastName' => $lastName,
				'dateOfBirth' => $dateOfBirth,
				'city' => $city,
				'country' => $country
		];
	}
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
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
