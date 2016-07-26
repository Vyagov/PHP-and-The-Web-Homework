<?php

$result = [];
$errors = [];

$alphabet = range('A', 'Z');

$fruits = [
		'BANANA', 'APPLE', 'AVOCADO', 'CHERRY',
		'GRAPE', 'NECTARINE', 'PINEAPPLE', 'PUMPKIN',
		'WATERMELON', 'APRICOT', 'MELON', 'STRAWBERRY',
		'MULBERRY', 'RASPBERRY', 'POMEGRANATE'
];

if (!isset($_POST['fruit'])) {
	$errors = 0;
	$rand = rand(0, count($fruits) - 1);
	$fruit = $fruits[$rand];
	$mask = preg_replace('/[A-Z]/', '_', $fruit);
}

if (isset($_POST['fruit'])) {
	$fruit = $_POST['fruit'];
}

if (isset($_POST['mask'])) {
	$mask = $_POST['mask'];
}

$letter = isset($_POST['letter']) ? $_POST['letter'] : '';
$errors = isset($_POST['errors']) ? $_POST['errors'] : 0;

$result = '';
$flag = false;

if (!empty($_POST)) {
	if ($letter !== '' && strpos($fruit, $letter) !== false) {
		$array = str_split($fruit);
			
		foreach($array as $key => $value) {
			if ($value == $letter) {
				$mask{$key} = $letter;
			}
		}
		$result = $mask;
	} else if ($errors < 6) {
		$errors++;
	}

	if ($errors == 6) {
		$flag = true;
	}
}
