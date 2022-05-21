<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		class Movie {
			public $title;  //visibility modifier
			private $rating;

			function __construct($title, $rating) {
				$this->title = $title;
				$this->setRating($rating);
			}

			//getter
			function getRating(){
				return $this->rating;
			}
			//setters
			function setRating($rating){
				if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR"){
					$this->rating = $rating;
				} else {
					$this->rating = "NR";
				}
			}
		}
		$avengers = new Movie("Avengers <br>", "Dog <br>");
		 
		$avengers->setRating("PG-13");
		echo $avengers->getRating();


	 ?>
</body>
</html>