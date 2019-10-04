<!DOCTYPE html>
<html>
<head>
	<title>DC or Marvel?</title>
	
	<?php include "header-script.php"; ?>

</head>

<body bgcolor= "#33d6ff">


	<?php include "header.php";	?>

	
		
	<div class="parallax-container valign-wrapper virsus ">
		
		<div class="parallax"><img src="images/dcmarvel.png"></div>
	</div>
	

	<div class="container">
		<h1 class = "glow">Celebrating 80 Years of who?</h1>

			
		<form action="/action_page.php">
		<div class="row">

			<div class="col s12 m12 l4 center-align heros">
				<img  class="materialboxed responsive-img"  src="images/superman.jpg" width=270px>
				
				<label>
				<input type="radio" name="superhero" value="superman"> 
				<span></span>
				</label>

				<div class = "answer-block">

					<p> Not quite right, take a look at the "News" section </p>
					
				</div>


				<h3 class = "center-align" >Superman</h3>
				<p class = "center-align">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore</p>
			</div>
			<div class="col s12 m6  l4 center-align heros">
				<img class = "materialboxed responsive-img" src="images/ironman.png" width=270px >
				<label>
				<input type="radio" name="superhero" value="ironman"> 
				<span></span>
				</label class = "poll-option">

				<div class = "answer-block">

					<p> Not quite right, take a look at the "News" section </p>
					
				</div>
				
				<h3 class = "center-align" >Ironman</h3>
				<p class = "center-align">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore</p>
			</div>
			<div class="col s12 m6 l4 center-align heros">
				<img class = "materialboxed responsive-img" src="images/batman.jpg" width=270px>
				<label>
				<input type="radio" name="superhero" value="batman"> 
				<span></span>
				</label>

				<div class = "answer-block">
					<br>
					<br>

					<p> You're right! </p>


				</div>
				<h3 class = "center-align" >Batman</h3>
				<p class = "center-align">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore</p>
			</div>


			</form>


		</div>

		<div>

		<iframe width="800" height="315" src="https://www.youtube.com/embed/zAGVQLHvwOY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

		</div>
	
	<?php include "footer.php"; ?>

</body>
</html>