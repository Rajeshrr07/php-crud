<?php
include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD OPERATION</title>
</head>
<body>
	<h1>CRUD OPERATION</h1>
	<form action="" method="POST">
		<label>firstname:</label>
		<input type="text" name="firstname">
		<label>lastname:</label>
		<input type="text" name="lastname">
		<label>email:</label>
		<input type="email" name="email">
		<label>passsword:</label>
		<input type="password" name="passsword">
		<label>gender:</label>
		<input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="Female">Female
		<input type="submit" name="submit" value="submit">
	</form>


</body>
</html>