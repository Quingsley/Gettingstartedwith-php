<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form action="BetterCalc.php" method="post">
	<label>First Number</label><br><input type="number" step="0.0001" name="num1"><br>
	<label>Second Number</label><br><input type="number" step="0.0001" name="num2"><br>
	<label>Operator</label><br><input type="textbox" name="op"><br>
	<input type="submit" name="">
</form>

<?php
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$op = $_POST['op'];

	if($op == "+") {
		echo $num1 + $num2;
	}elseif ($op == "-") {
		// code...
		echo $num1 - $num2;
	}elseif($op == "*") {
		echo $num1 * $num2;
	}elseif ($op == "/") {
		// code...
		echo $num1 / $num2;
	}elseif ($op == "%") {
		// code...
		echo $num1 % $num2;
	}else {
		echo "Invalid operation";
	}
 ?>
</body>
</html>