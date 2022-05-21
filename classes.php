<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		class Book{
			var $title;
			var $author;
			var $pages;

			//constructor
			function __construct($aTitle, $aAuthor, $aPages) {
				$this->title = $aTitle;
				$this->author = $aAuthor;
				$this->pages = $aPages;
			}
		}

		//objects
		$book1 = new Book("Harry Poteer", "JK Rowling", 400 );
		$book2 = new Book("Lord of the Rings", "Tolkeiin", 474);
		echo $book1->author, "<br>";
		echo $book2->author;
	 ?>
</body>
</html>