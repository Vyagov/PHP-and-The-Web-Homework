<?php

$firstNum = '';
$secondNum = '';
$select = '';
$result = '';
$errors = [];
$errors['firstNum'] = '';
$errors['secondNum'] = '';
$errors['select'] = '';

if (!empty($_POST)) {
	$firstNum = isset($_POST['firstNum']) ? test_input($_POST['firstNum']) : '';
	$secondNum = isset($_POST['secondNum']) ? test_input($_POST['secondNum']) : '';
	$select = isset($_POST['select']) ? $_POST['select'] : '';
	
	if (!is_numeric($firstNum)) {
		$errors['firstNum'] = 'Enter a valid number!';
	}
	
	if ($secondNum == 0 && $select === '/') {
		$errors['secondNum'] = 'Can not be divided by zero!';
	}
	
	if (!is_numeric($secondNum)) {
		$errors['secondNum'] = 'Enter a valid number!';
	}
	
	if ($select == 'math') {
		$errors['select'] = 'Select operation!';
	}
	
	if ($errors['firstNum'] == '' && $errors['secondNum'] == '' &&$errors['select'] == '') {
		switch ($select) {
			case '+':
				$result = $firstNum + $secondNum;
			break;
			case '-':
				$result = $firstNum - $secondNum;;
			break;
			case '*':
				$result = $firstNum * $secondNum;;
			break;
			case '/':
				$result = $firstNum / $secondNum;;
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
