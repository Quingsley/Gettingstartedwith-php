<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="getvspost.php" method="post">
		<label>Enter Password:</label><br><input type="password" name="passwd"><br>
		<input type="submit" name="">
	</form>
	<?php
	echo $_POST['passwd'];
	 ?>
</body>
</html>