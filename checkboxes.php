<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="checkboxes.php" method="post">
		<label>Apples:</label><input type="checkbox" name="fruits[]" value="apples"><br>
		<label>Oranges:</label><input type="checkbox" name="fruits[]" value="oranges"><br>
		<label>Pears:</label><input type="checkbox" name="fruits[]" value="pears"><br>
		<input type="submit" name="">
	</form>
	<?php
		$fruits = $_POST['fruits'];
		echo $fruits[0], "<br>";
		echo $fruits[1], "<br>";
		echo $fruits[2], "<br>";
	 ?>
</body>
</html>