
<?php require_once 'validate.php';?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Your Data</title>
		<link rel="stylesheet" type="text/css" href="style/style1.css" />
	</head>
	<body>
		<div id="wrapper">
			<div>
				<h1>Input Your Data</h1>
			</div>
			<div>
				<form action="index2.php" method="post">
					<div>
						<label for="fname">First Name:</label>
						<input type="text" id="fname" name="firstName" value="<?= $firstName;?>" />
						<p class="error"><?= $errors['firstName'];?></p>
					</div>
					<div>
						<label for="lname">Last Name:</label>
						<input type="text" id="lname" name="lastName" value="<?= $lastName;?>" />
						<p class="error"><?= $errors['lastName'];?></p>
					</div>
					<div>
						<label for="db">Date of birth:</label>
						<input type="text" id="db" name="dateOfBirth" placeholder="dd.mm.yyyy" value="<?= $dateOfBirth;?>" />
						<p class="error"><?= $errors['dateOfBirth'];?></p>
					</div>
					<div>
						<label for="city">City:</label>
						<input type="text" id="city" name="city" value="<?= $city;?>" />
						<p class="error"><?= $errors['city'];?></p>
					</div>
					<div>
						<label for="ctry">Country:</label>
						<input type="text" id="ctry" name="country" value="<?= $country;?>" />
						<p class="error"><?= $errors['country'];?></p>
					</div>
					<div>
						<button type="submit">Send</button>
					</div>
				</form>
				<div>
					<h2><?= !empty($result) ? 'Result from GET method:' : '';?></h2>
					<?php foreach($result as $key => $value): ?>
						<p><?= $key?> : <?= $value ?></p>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</body>
</html>