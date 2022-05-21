<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
	/*while and dowhileloops
		$index = 1;
		do{
			echo "$index <br>";
			$index++;
		}while($index <= 5);*/

		//FORLOOPS
		$luckyNumbers = array(4,8,14,16,23,42);
		for ($i=0; $i < count($luckyNumbers) ; $i++) { 
			echo "$luckyNumbers[$i] <br>";
		}

	 ?><br>

</body>
</html>