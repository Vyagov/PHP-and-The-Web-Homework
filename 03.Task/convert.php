<?php

$temp = '';
$select = '';
$result = '';
$errors = [];
$errors['temp'] = '';
$errors['select'] = '';

if (!empty($_POST)) {
	$temp = isset($_POST['temp']) ? test_input($_POST['temp']) : '';
	$select = isset($_POST['select']) ? $_POST['select'] : '';

	if (!is_numeric($temp)) {
		$errors['temp'] = 'Enter a valid temperature!';
	}

	if ($select == 'conversions') {
		$errors['select'] = 'Select conversion!';
	}

	if ($errors['temp'] == '' && $errors['select'] == '') {
		switch ($select) {
			case 'cTOf':
				$result = round(($temp * (9 / 5) + 32), 2);
				break;
			case 'fTOc':
				$result = round((($temp - 32) * (5 / 9)), 2);
				break;
		}
	}
	
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
