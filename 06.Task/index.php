
<?php require_once 'registration.php';?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Registration Form</title>
		<link rel="stylesheet" type="text/css" href="style/style.css" />
	</head>
	<body>
		<div id="wrapper">
			<div>
				<h1>Registration Form</h1>
			</div>
			<div>
				<form action="" method="post">
					<div>
						<label for="fname">First Name:</label>
						<input type="text" id="fname" name="firstName" value="<?= $firstName?>" />
						<p class="error"><?= $errors['firstName'];?></p>
					</div>
					<div>
						<label for="lname">Last Name:</label>
						<input type="text" id="lname" name="lastName" value="<?= $lastName?>" />
						<p class="error"><?= $errors['lastName'];?></p>
					</div>
					<div>
						<label for="db">Date of birth:</label>
						<input type="text" id="db" name="dateOfBirth" placeholder="dd.mm.yyyy" value="<?= $dateOfBirth?>" />
						<p class="error"><?= $errors['dateOfBirth'];?></p>
					</div>
					<div>
						<button type="submit">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>