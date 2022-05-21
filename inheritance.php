<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		class Chef {
			function makeChicken(){
				echo "The chef makes chicken <br>";
			}
			function makeSalad() {
				echo "The chef makes salad <br>";
			}
			function makeSpecialDish() {
				echo "The chef makes bbq ribs <br>";
			}
		}

		class ItalianChef extends Chef {
			function makePasta() {
				echo "The chef makes pasta";
			}
			function makeSpecialDish() {
				echo "The chef makes chicken parm <br>";
			}
		}

		$chef = new Chef;
		$italianchef = new ItalianChef;
		$chef->makeChicken();
		$italianchef->makePasta();
		$italianchef->makeSpecialDish();
		$chef->makeSpecialDish();
	 ?>
</body>
</html>