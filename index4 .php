<!DOCTYPE html>
<html>
<head>
	<title>4 page</title>

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

	<ul id="dropdown1" class="dropdown-content">
  <li><a href="marvel.php">Marvel</a></li>
  <li><a href="dc.php">DC</a></li>
  <li class="divider"></li>
    </ul>
<nav>
  <div class="parallax-container nav-wrapper cyan">
     <a href="#!" class="brand-logo center"><img src="images/logo.png" width=50px></a>
     <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">Menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="index.html">Main Page</a></li>
      <li><a href="naujienos.html">News</a></li>
      <li><a href="roko.html">Premieres</a></li>
      <li><a href="bendras.html">Statistics</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="brigitos.php" data-target="dropdown1">Companies<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>
<ul class="sidenav cyan" id="mobile-demo">
    <li><a href="index.php">Main Page</a></li>
    <li><a href="naujienos.php">News</a></li>
    <li><a href="roko.php">Premieres</a></li>
    <li><a href="brigitos.php">Companies</a></li>
  </ul>

</head>
<body>

<!-- <h1>cia mano body visas</h1> -->
<div>
<h3>About us</h3>
<p>Link Picture</p>

<!-- <iframe src="demo_iframe.htm" height="200" width="300"></iframe> -->

<img class="materialboxed" width="1050" src="images/universalpic.jpg">
<!-- <img src="img/universalpic.jpg"></a> -->

<!-- TRY TABS MATERIALIZE -->

<p>Text under picture</p>
<p>Universal Pictures (also known as Universal Studios, formerly Universal Film Manufacturing Company) is an American film studio owned by Comcast through the Universal Filmed Entertainment Group division of its wholly owned subsidiary NBCUniversal.Founded in 1912 by Carl Laemmle, Mark Dintenfass, Charles O. Baumann, Adam Kessel, Pat Powers, William Swanson, David Horsley, Robert H. Cochrane, and Jules Brulatour, it is the oldest surviving film studio in the United States, the world's fifth oldest after Gaumont, Pathé, Titanus, and Nordisk Film, and the oldest member of Hollywood's "Big Five" studios in terms of the overall film market. Its studios are located in Universal City, California, and its corporate offices are located in New York City.</p>
</div>

<!-- <div class="mapouter">
	<div class="gmap_canvas">
	<iframe width="250" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
	</iframe>
	<a href="https://www.embedgooglemap.net/blog/best-wordpress-themes/">magazine word press</a>
    </div>
    <style>.mapouter{position:relative;text-align:right;height:250px;width:250px;}.gmap_canvas {overflow:hidden;backgroun:none!important;height:250px;width:250px;}</style>
</div> -->

<!-- <div>
	<h2>Contacts</h2>
	<ul>
		<li>Name</li>
		<li>Adress</li>
		<li>City</li>
		<li>Country</li>
		<li>Mobile</li>
		<li>Landline</li>
		<li>Email</li>
	</ul>

</div> -->

 <div class="row">
      <div class="col s7 push-s5"><span class="flow-text"><div class="mapouter">
  <div class="gmap_canvas">
  <iframe width="250" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
  </iframe>
  <a href="https://www.embedgooglemap.net/blog/best-wordpress-themes/">magazine word press</a>
    </div>
    <style>.mapouter{position:relative;text-align:right;height:250px;width:250px;}.gmap_canvas {overflow:hidden;backgroun:none!important;height:250px;width:250px;}</style>
</div></span></div>
      <div class="col s5 pull-s7"><span class="flow-text">
        <div>
  <h2>Contacts</h2>
  <ul>
    
    <li>Name</li>
    <li>Adress</li>
    <li>City</li>
    <li>Country</li>
    <li>Mobile</li>
    <li>Landline</li>
    <li>Email</li>
  </ul>

</div>  
      </span></div>
    </div>

<!-- cia jau musu footeris -->
<footer class="page-footer cyan">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Comic heroes news!</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="index.php">Main Page</a></li>
                  <li><a class="grey-text text-lighten-3" href="naujienos.php">News</a></li>
                  <li><a class="grey-text text-lighten-3" href="roko.php">Premieres</a></li>
             <li><a class="grey-text text-lighten-3" href="brigitos.php">Companies</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2019 All rights reserved
            <a class="grey-text text-lighten-4 right" href="#!">More links</a>
            </div>
          </div>
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script type="text/javascript" src="scripts/script.js"></script>

</body>
</html>