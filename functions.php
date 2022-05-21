<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		function sayHi($name, $age){
			echo "Hello $name, you are $age<br>";
		}

		sayHi("Jerome", 20);
		sayHi("Jeriel",10);
		sayHi("Jerry", 7);

		//RETURN STATEMENTS
		function cube($num){
			return $num * $num * $num;
		}

		$cubeResult = cube(4);
		echo "The cube of 4 is: $cubeResult <br>";

	 ?>
</body>
</html>