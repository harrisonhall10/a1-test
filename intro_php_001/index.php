<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"
		<title>PHP by Harrison Hall</title>
		<hr color= "white">
		<h1>welcome to my PHP webpage</h1>
		<hr color= "white">
	</head>
	<body>
		<p>
			In the 3 spaces below, input your first/middle/last name
		</p>
		<form method="get">
			<input type="text" name="firstName" />
			<input type="text" name="middleName" />
			<input type="text" name="lastName" />
			<button>
				Submit
			</button>
		</form>

		<?php
$firstName = $_GET['firstName'];
$middleName = $_GET['middleName'];
$lastName = $_GET['lastName'];
echo "The user's full name is " .$firstName .$middleName .$lastName
		?>
		<hr color= "white">
	</body>
</html>