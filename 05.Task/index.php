
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
				<form action="?username=bezime&password=parola&repeatPass=parola" method="post">
					<div>
						<label for="usn">Username:</label>
						<input type="text" id="usn" name="username" value="qko" />
					</div>
					<div>
						<label for="pass">Password:</label>
						<input type="password" id="pass" name="password" value="posspass"/>
					</div>
					<div>
						<label for="rpass">Repeat password:</label>
						<input type="password" id="rpass" name="repeatPass" value="posspass" />
					</div>
					<div>
						<button type="submit">Submit</button>
					</div>
				</form>
			</div>
			<div id="get">
				<p>GET parameters:</p>
				<?php foreach ($_GET as $key => $value) :?>
					<p>'<?=$key;?>' => (<?= gettype($value);?>) '<?=$value;?>'</p>
				<?php endforeach;?>
			</div>
			<div id="post">
				<p>POST parameters:</p>
				<?php foreach ($_POST as $key => $value) :?>
					<p>'<?=$key;?>' => (<?= gettype($value);?>) '<?=$value;?>'</p>
				<?php endforeach;?>
			</div>
		</div>
	</body>
</html>
