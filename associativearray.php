<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="associativearray.php" method="post">
		<label>Student's Name:</label><input type="text" name="student"><br>
		<input type="submit" name="">
	</form>
	<?php
		$grades = array("Jim" => "A+", "Pam" => "B", "Oscar" => "C");
		echo $grades[$_POST['student']];
	 ?>
</body>
</html>