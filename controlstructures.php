<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		//if staements
		$isMale = false;
		$isTall = false;
		if ($isMale && $isTall) {
			echo "You are a Tall Male";
		}elseif($isMale && !$isTall){
			echo "You are a short male";
		}elseif(!$isMale && $isTall) {
			echo "You are not male but tall";
		}
		 else {
			echo "You are not male and not tall";
		}
	?>
	<h4>Comparisons</h4>
	<?php
		function getMax($num1, $num2, $num3) {
			if($num1 >= $num2 && $num1 >= $num3){
				return $num1;
			} elseif($num2 >= $num1 && $num2 >= $num3) {
				return $num2;
			} else {
				return $num3;
			}
		}

		echo getMax(1060,1060,1200);
	 ?>
</body>
</html>