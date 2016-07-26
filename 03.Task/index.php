<?php
	require_once 'convert.php';
	$print = '';
	
	if ($result) {
		$char1 = $select === 'cTOf' ? '&#8451;' : '&#8457;';
		$char2 = $select === 'cTOf' ? '&#8457;' : '&#8451;';
		$print = "$temp$char1 &nbsp;&nbsp; are &nbsp;&nbsp; $result$char2";
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Temperature Converter</title>
		<link rel="stylesheet" type="text/css" href="style/style.css" />
	</head>
	<body>
		<div id="wrapper">
			<div>
				<h1>Temperature converter</h1>
			</div>
			<div>
				<form action="" method="post">
					<div>
						<label for="temp">Enter temperature: </label>
						<input type="text" id="temp" name="temp" value="<?= $temp;?>" />
						<p class="error"><?= $errors['temp'];?></p>
					</div>
					<div>
						<label for="select">Select conversion:</label>
						<select name="select" id="select">
							<option>conversions</option>
							<?php if( $_POST['select'] === 'cTOf' ) :?> 
								<option selected="selected" value="cTOf">Celsius to Fahrenheit</option>
							<?php else :?> 
								<option value="cTOf">Celsius to Fahrenheit</option>
							<?php endif;?>
							<?php if( $_POST['select'] === 'fTOc' ) :?> 
								<option selected="selected" value="fTOc">Fahrenheit to Celsius</option>
							<?php else :?> 
								<option value="fTOc">Fahrenheit to Celsius</option>
							<?php endif;?>
						</select>
						<p class="error"><?= $errors['select'];?></p>
					</div>
					<div>
						<button type="submit">Convert</button>
					</div>
				</form>
			</div>
			<div id="result">
				<p><?= $print;?></p>
			</div>
		</div>
	</body>
</html>