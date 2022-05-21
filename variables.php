<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		$characterName = "John";
		$characterAge = 80;
		echo "There once was a man named $characterName <br>";
		echo "He was $characterAge years old <br>"; 
		$characterName = "Jerome";
		echo "He really liked the name  $characterName <br>";
		echo "But didn't like being $characterAge <br>";
	?>
	<h4>DATA TYPES</h4>
	<?php
		//string
		$phrase = "Hello World";
		//integers
		$age = 30;
		//floats
		$gpa = 3.72;
		//boolean
		$isMale = true;
		//null
		echo "string = $phrase  <br>";
		echo "integers = $age  <br>";
		echo "float = $gpa <br>";
		echo "boolean = $isMale <br>";
	?>
	<h5>Working with strings</h5>
	<?php
		$name = "Giraffe Academy <br>";
		echo strtolower($name);
		echo strtoupper("jerome juma <br>");
		echo strlen($name);
		echo "<br>";
		echo $name[0];
		echo "<br>";
		echo "string"[4];
		echo "<br>";
		$name[0] = "J";
		echo $name;
		echo "<br>";
		echo str_replace("Jiraffe", "Quingsley", $name);
		echo substr($name, 8);
		echo substr($name, 8, 4);
	 ?>

	 <h5> Working with numbers</h5>
	 <?php
	 	echo 5.7 * 9;
	 	echo "<br>";
	 	echo 10 % 3, "<br>";
	 	echo (4 + 5) * 90, "<br>";
	 	$num = 10;
	 	$num++;
	 	echo $num, "<br>";
	 	$num *= 25;
	 	echo $num, "<br>";
	 	//math functions
	 	echo abs(-1000), "<br>";
	 	echo pow(2, 4), "<br>";
	 	echo sqrt(16), "<br>"; 
	 	echo max(2, 10), "<br>";
	 	echo min(2, 10), "<br>";
	 	echo round(5.8899), "<br>";
	 	echo ceil(6.11), "<br>";
	 	echo floor(6.99), "<br>";


	  ?>

</body>
</html>