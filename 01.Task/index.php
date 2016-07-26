<?php
	require_once 'calculate.php';
	$print = '';
	
	if ($result) {
		$print = "Result is: $firstNum $select $secondNum = $result";
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Simple Calculator</title>
		<link rel="stylesheet" type="text/css" href="style/style.css" />
	</head>
	<body>
		<div id="wrapper">
			<div>
				<h1>Simple Calculator</h1>
			</div>
			<div>
				<form action="" method="post">
					<div>
						<label for="fnum">First number:</label>
						<input type="text" id="fnum" name="firstNum" value="<?= $firstNum?>" />
						<p class="error"><?= $errors['firstNum'];?></p>
					</div>
					<div>
						<label for="select">Select operation:</label>
						<select name="select" id="select">
							<option>math</option>
							<?php if( $_POST['select'] === '+' ) :?> 
								<option selected="selected" value="+">+</option>
							<?php else :?> 
								<option value="+">+</option>
							<?php endif;?>
							<?php if( $_POST['select'] === '-' ) :?> 
								<option selected="selected" value="-">-</option>
							<?php else :?> 
								<option value="-">-</option>
							<?php endif;?>
							<?php if( $_POST['select'] === '*' ) :?> 
								<option selected="selected" value="*">*</option>
							<?php else :?> 
								<option value="*">*</option>
							<?php endif;?>
							<?php if( $_POST['select'] === '/' ) :?> 
								<option selected="selected" value="/">/</option>
							<?php else :?> 
								<option value="/">/</option>
							<?php endif;?>
						</select>
						<p class="error"><?= $errors['select'];?></p>
					</div>
					<div>
						<label for="snum">Second number:</label>
						<input type="text" id="snum" name="secondNum" value="<?= $secondNum?>" />
						<p class="error"><?= $errors['secondNum'];?></p>
					</div>
					<div>
						<button type="submit">Calculate</button>
					</div>
				</form>
			</div>
			<div>
				<p><?= $print;?></p>
			</div>
		</div>
	</body>
</html>