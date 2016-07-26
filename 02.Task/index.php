<?php
	require_once 'validate.php';
	$printUser = '';
	$printPass = '';
	
	if (!empty($_POST) && !$err) {
		$printUser = "Username is: $username";
		$printPass = "Crypt password is: $cryptPass";
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Login Form</title>
		<link rel="stylesheet" type="text/css" href="style/style.css" />
	</head>
	<body>
		<div id="wrapper">
			<div>
				<h1>Login Form</h1>
			</div>
			<div>
				<form action="" method="post">
					<div>
						<label for="usn">Username:</label>
						<input type="text" id="usn" name="username" value="<?= $username?>" />
						<p class="error"><?= $errors['username'];?></p>
					</div>
					<div>
						<label for="pass">Password:</label>
						<input type="password" id="pass" name="password" value="<?= $password?>" />
						<p class="error"><?= $errors['password'];?></p>
					</div>
					<div>
						<label for="rpass">Repeat password:</label>
						<input type="password" id="rpass" name="repeatPass" value="<?= $repeatPass?>" />
						<p class="error"><?= $errors['repeatPass'];?></p>
					</div>
					<div>
						<button type="submit">Submit</button>
					</div>
				</form>
			</div>
			<div>
				<p><?= $printUser;?></p>
				<p><?= $printPass;?></p>
			</div>
		</div>
	</body>
</html>