<?php
	require_once 'searching.php';
	$print1 = '';
	$print2 = '';
	
	if ($result) {
		$print1 = "Input sequence is sorted: $result.";
		$print2 = "The Min element is $min and the Max is $max.";
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Min and Max Number in Sequence</title>
		<link rel="stylesheet" type="text/css" href="style/style.css" />
	</head>
	<body>
		<div id="wrapper">
			<div>
				<h1>Min and max number in sequence</h1>
			</div>
			<div>
				<form action="" method="post">
					<div>
						<label for="input">Input 10 numbers separate by comma ( , ):</label>
						<input type="text" id="input" name="input" />
						<p class="error"><?= $errors;?></p>
					</div>
					<div>
						<button type="submit">Submit</button>
					</div>
				</form>
			</div>
			<div id="result">
				<p><?= $print1;?></p>
				<p><?= $print2;?></p>
			</div>
		</div>
	</body>
</html>