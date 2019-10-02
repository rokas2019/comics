<!DOCTYPE html>
<html>
<head>
  <title>Companies</title>

  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="styles/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <?php   $servername = "localhost";
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
  <div class="parallax-container nav-wrapper red">
     <a href="#!" class="brand-logo center"><img src="images/logo.png" width=50px></a>
     <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">Menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="index.html">Main Page</a></li>
      <li><a href="naujienos.html">News</a></li>
      <li><a href="roko.html">Premieres</a></li>
      <li><a href="bendras.html">Statistics</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="index4.php" data-target="dropdown1">Companies<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>

  <ul class="sidenav cyan" id="mobile-demo">
    <li><a href="index.php">Main Page</a></li>
    <li><a href="naujienos.php">News</a></li>
    <li><a href="roko.php">Premieres</a></li>
    <li><a href="index4.php">Companies</a></li>
  </ul>

</head>
<body>


<div class="container">

  <ul class="tabs">
    <li class="tab-link current" data-tab="tab-1">Marvel comics</li>
    <li class="tab-link" data-tab="tab-2">Universal pictures</li>
    <li class="tab-link" data-tab="tab-3">DC comics</li>
    <li class="tab-link" data-tab="tab-4">Image Comics</li>
  </ul>

            
  <div id="tab-1" class="tab-content current center-align">
    <img class="center-align" src="images/marvelcompany.jpg">
    <p></p>
    Marvel Comics is the brand name and primary imprint of Marvel Worldwide Inc., formerly Marvel Publishing, Inc. and Marvel Comics Group, a publisher of American comic books and related media. In 2009, The Walt Disney Company acquired Marvel Entertainment, Marvel Worldwide's parent company.
  </div>
  <div id="tab-2" class="tab-content center-align">
    <img class="center-align" src="images/universalpic.jpg">
    <p></p>
     Universal Pictures is an American film studio owned by Comcast through the Universal Filmed Entertainment Group division of its wholly owned subsidiary NBCUniversal.Founded in 1912 by Carl Laemmle, Mark Dintenfass, Charles O. Baumann, Adam Kessel, Pat Powers, William Swanson, David Horsley, Robert H. Cochrane, and Jules Brulatour, it is the oldest surviving film studio in the United States, the world's fifth oldest after Gaumont, Pathé, Titanus, and Nordisk Film, and the oldest member of Hollywood's "Big Five" studios in terms of the overall film market. 
  </div>
  <div id="tab-3" class="tab-content center-align">
    <img class="center-align" src="images/dccompany.jpg">
    <p></p>
    DC Comics, Inc. is an American comic book publisher. It is the publishing unit of DC Entertainment, a subsidiary of Warner Bros. since 1967.
  </div>
  <div id="tab-4" class="tab-content center-align">
    <img class="center-align" src="images/ic.jpg">
    <p></p>
    Image Comics lands number three on the list with a 12.64% unit share. The company was founded in 1992 and honed in on the superhero genre. Later, however, many independent writers lent their work to the company. Todd McFarlane, Jim Lee, Whilce Portacio, Marc Silvestri, Erik Larsen, Jim Valentino, and Rob Liefeld are the founders of the company.
  </div>

</div>

<div class="container"> 
<div class="row">
<div class="col center" >
<h5>You can find us!</h5>

<iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7340.41169628702!2d25.307466365188738!3d54.7187421531782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96c745be5e5b%3A0xc557e2db7ba55179!2sVilniaus%20universitetin%C4%97%20Antakalnio%20ligonin%C4%97!5e0!3m2!1slt!2slt!4v1569947541877!5m2!1slt!2slt" width="300" height="300" frameborder="0" allowfullscreen="">
</iframe>

</div>
<div class="col">
<h5 class="center">Contact Us!</h5>
  <ul>
    <li>Name: Best Team!</li>
    <li>Adress: Ulonu Street</li>
    <li>City: Vilnius</li>
    <li>Country: Lithuania</li>
    <li>Mobile: 666 777</li>
    <li>Email: bestteam@marvel.com</li>
  </ul>

</div>
</div>
</div> 

<!-- cia jau musu footeris -->
<footer class="page-footer green">

          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Comic heroes news!</h5>
                <p class="white-text text-lighten-4">Check out new comic books by visiting this page:</p>
                <a href=" http://www.comiclist.com" target="_blank"><img src="images/comic.jpg"></a>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="index.php">Main Page</a></li>
                  <li><a class="grey-text text-lighten-3" href="naujienos.php">News</a></li>
                  <li><a class="grey-text text-lighten-3" href="roko.php">Premieres</a></li>
             <li><a class="grey-text text-lighten-3" href="index4.php">Companies</a></li>

                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright cyan">
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