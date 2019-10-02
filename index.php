<!DOCTYPE html>
<html>
<head>
	<title>DC or Marvel?</title>
	
	<?php include "header-script.php"; ?>

</head>

<body>


	<?php include "header.php";	?>

	
		
	<div class="parallax-container valign-wrapper virsus ">
		
		<div class="parallax"><img src="//cdn3.whatculture.com/images/2018/03/4ae00c037013c223-600x338.jpg"></div>
	</div>
	

	<div class="container">
		<h1 class = "teal darken-4 pink-text text-lighten-4">Celebrating 80 Years of who?</h1>

			
		<form action="/action_page.php">
		<div class="row">

			<div class="col s12 m12 l4 center-align">
				<img  class="materialboxed responsive-img"  src="images/superman.jpg" width=270px>
				
				<label>
				<input type="radio" name="superhero" value="superman"> 
				<span></span>
				</label>

				<h3 class = "center-align" >Superman</h3>
				<p class = "center-align">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore</p>
			</div>
			<div class="col s12 m6  l4 center-align">
				<img class = "materialboxed responsive-img" src="images/ironman.png" width=270px >
				<label>
				<input type="radio" name="superhero" value="ironman"> 
				<span></span>
				</label class = "poll-option">
				
				<h3 class = "center-align" >Ironman</h3>
				<p class = "center-align">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore</p>
			</div>
			<div class="col s12 m6 l4 center-align">
				<img class = "materialboxed responsive-img" src="images/batman.jpg" width=270px>
				<label>
				<input type="radio" name="superhero" value="batman"> 
				<span></span>
				</label>
				<h3 class = "center-align" >Batman</h3>
				<p class = "center-align">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore</p>
			</div>


			</form>


		</div>

		<div>

		<iframe width="840" height="315" src="https://www.youtube.com/embed/zAGVQLHvwOY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

		</div>
	
	<?php include "footer.php"; ?>

</body>
</html>