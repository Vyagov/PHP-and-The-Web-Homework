<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Server Info</title>
		<link rel="stylesheet" type="text/css" href="style/style.css" />
	</head>
	<body>
		<div id="wrapper">
			<div>
				<h1>Browser Info</h1>
				<p><?=$_SERVER['HTTP_USER_AGENT']?></p>
			</div>
			<div>
				<h1>Server and Host Info</h1>
				<p><?=$_SERVER['SERVER_SIGNATURE']?></p>
			</div>
		</div>
	</body>
</html>