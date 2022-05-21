<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="switchcase.php" method="post">
		<label>What is your Grade:</label><br><input type="text" name="grade"><br>
		<input type="submit" name="">
	</form>
	<?php
		$grade = $_POST['grade'];
		switch ($grade) {
			case 'A':
				echo "You did amazing!";
				break;
			case 'B':
				echo "You did pretty good!";
				break;
			case 'C':
				echo "You did poorly!";
				break;
			case 'D':
				echo "Yo did badly!";
				break;
			case 'F':
				echo "You FAILED!";
				break;
			
			default:
				echo "Invalid Grade";
				break;
		}
	 ?>
</body>
</html>