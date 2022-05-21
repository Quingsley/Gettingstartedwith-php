<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	
	 <form action="userinput.php" method="get">
	 <label>Name:</label><br><input type="text" name="username"> <br>
	 <label>Age:</label><br><input type="number" name="age"> <br>
	 <input type="submit" name="">
	 </form>
	 <br>
	 Your name is <?php echo $_GET['username']; ?> <br>
	 Your are <?php echo $_GET['age']; ?> year's old.
</body>
</html>