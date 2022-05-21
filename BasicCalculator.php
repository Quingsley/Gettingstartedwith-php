<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>Basic Calc</h2>
	<form action="BasicCalculator.php" method="get">
		<label>First Number:</label><br><input type="number" name="num1"><br>
		<label>Second Number:</label><br><input type="number" name="num2"><br>
		<input type="submit" name="">
	</form>
	Answer: <?php echo $_GET["num1"] + $_GET["num2"] ?>
</body>
</html>