<?php

$input = [];
$result = '';
$errors = '';

if (!empty($_POST)) {
	$input = isset($_POST['input']) ? explode(',', $_POST['input']) : [];
	$len = count($input);
	
	if ($len != 10) {
		$errors = 'Input 10 numbers!';
	} else {
		
		for ($i = 0; $i < $len; $i++) {
			$input[$i] = test_input($input[$i]); 
			
			if (!is_numeric($input[$i])) {
				$errors = 'Input only NUMBERS separate by \' , \'!';
			}	
		}
	}

	if ($errors == '') {
		sort($input);
		
		$min = $input[0];
		$max = $input[$len - 1];
		
		$result = implode(', ', $input);
	}
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}