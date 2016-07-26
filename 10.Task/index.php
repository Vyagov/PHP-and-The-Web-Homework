
<?php 

require_once 'logic.php';

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Hangman Game</title>
		<link rel="stylesheet" type="text/css" href="style/reset-style.css" />
		<link rel="stylesheet" type="text/css" href="style/style.css" />
	</head>
	<body>
		<div id="wrapper">
			<div>
				<h1>Hangman Game</h1>
			</div>
			<div id="main">
				<div id="info">
					<div id="image">
						<img alt="Hangman Pictures" src=<?= "images/pic$errors.gif";?>>
					</div>
					<div id="result">
			            <h2 class="fruit">
			            	<?php 
			            	if ($_POST && $result) {
				            	echo $result; 
			            	} else if ($flag) {
				            	echo $fruit; 
			            	} else { 
				            	echo $mask; 
			            	}
			            	?>
			            </h2>
			        </div>
			    </div>
				<div>
					<form action="index.php" method="post">
				        <div>
					        <input type="hidden" name="fruit" value="<?= $fruit;?>">
					        <input type="hidden" name="mask" value="<?= $mask;?>">
					        <input type="hidden" name="errors" value="<?= $errors;?>">
				        </div>
				        <div class="letter">
				        	<?php foreach($alphabet as $value): ?>
								<button type="submit" name="letter" value="<?= $value?>"><?= $value?></button>
							<?php endforeach; ?>
				        </div>
				        <div class="submit">
							<button type="submit" <?php if ($mask == $fruit || $flag) {echo 'disabled';} ?>>send letter</button>
							<a href="index.php"><button type="button">reset</button></a>
						</div>
				    </form>
				</div>
			</div>
		</div>
	</body>
</html>