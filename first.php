<!DOCTYPE html>
<html>
<head>
	<title>DC or Marvel?</title>
	
	<?php inlcude "header-script.php"; ?>

</head>

<body>


	<?php include "header.php";	?>

	

	<div class="parallax-container valign-wrapper virsus ">
		<div>
			<h1 class = "center-align" > Welcome to NewYork!</h1>
			<p class = "blue-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

		</div>
		<div class="parallax"><img src="https://picsum.photos/1920/1080"></div>
	</div>


	<div class="container">
		<h1 class = "teal darken-4 pink-text text-lighten-4">Antraštė</h1>

			<?php


	$sql = "SELECT * FROM barai";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
    // output data of each row

		echo "<table border='1'>";

		while($row = mysqli_fetch_assoc($result)) {
			
			//print_r($row);

			//echo $row["name"] . " - " . $row["rating"];

			//echo "<br>";

			echo "<tr>";
				echo "<td>" . $row["id"] . "</td>";
   				echo "<td>" . $row["name"] . "</td>";
   				echo "<td>" . $row["address"] . "</td>";
   				echo "<td>" . $row["rating"] . "</td>";
   			echo "</tr>";

		} 

		echo "</table>";

	} else {
		echo "0 results";
	}

	mysqli_close($conn);
	?> 

		<div class="row">

			<div class="col s12 m12 l4 center-align">
				<img class = "responsive-img" src="https://picsum.photos/200">
				<h3 class = "center-align" >Block title</h3>
				<p class = "center-align">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore</p>
			</div>
			<div class="col s12 m6  l4 center-align">
				<img class = "responsive-img" src="https://picsum.photos/200">
				<h3 class = "center-align" >Block title</h3>
				<p class = "center-align">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore</p>
			</div>
			<div class="col s12 m6 l4 center-align">
				<img class = "responsive-img" src="https://picsum.photos/200">
				<h3 class = "center-align" >Block title</h3>
				<p class = "center-align">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore</p>
			</div>


		</div>


		<img class="materialboxed responsive-img" src="https://picsum.photos/2000/600">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo	</p>
	</div>

	<footer class="page-footer blue">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">Footer Content</h5>
					<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text">Links</h5>
					<ul>
						<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
						<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
						<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
						<li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				© 2014 Copyright Text
				<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
			</div>
		</div>
	</footer>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script type="text/javascript" src="scripts/script.js"></script>
</body>
</html>