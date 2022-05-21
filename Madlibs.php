<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="Madlibs.php" method="get">
		<label>Color:</label><br><input type="text" name="color"><br>
		<label>Plural Noun:</label><br><input type="text" name="pluralNoun"><br>
		<label>Celebrity:</label><br><input type="text" name="celebrity"><br>
		<input type="submit" name="">
	</form>
	<?php
		$color = $_GET['color'];
		$pluralNoun = $_GET['pluralNoun'];
		$celebrity = $_GET['celebrity'];
		echo "Roses are $color <br>";
		echo "$pluralNoun are blue <br>";
		echo "BY $celebrity <br>";
		echo $_GET['age']; //url parameter
	 ?>
</body>
</html>