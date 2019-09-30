<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<?php 	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "rugsejis19";


	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	mysqli_set_charset($conn, "utf8");
	?>