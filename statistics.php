<!DOCTYPE html>
<html>
<head>
	<title>Statistics</title>
	<?php include "header-script.php"; ?>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script>
    google.charts.load('current', {'packages':['bar', 'corechart']});
    // google.charts.setOnLoadCallback(drawChart);


     // google.charts.load('current', {'packages':['bar']});
     google.charts.setOnLoadCallback(drawStuff);

     function drawStuff() {


      console.log("vewikia");


   //         var data = google.visualization.arrayToDataTable([
   //['Superhero', 'No of movies']
   // <?php
   // $sql = "SELECT * FROM pinigai";
   // $result = mysqli_query($conn, $sql);
   // $string1 = ''; 
   // if (mysqli_num_rows($result) > 0){ 
   //   while($row = mysqli_fetch_assoc($result)) {
   //     $string1 .= '["'. $row["title"] . '",' . $row["spend"] . '],';
   //   } 
   // }; 

   // echo $string1;

   // ?> 
   // ]);

   //   var options = {
   //     title: 'TOP5 successful films'
   //   };
   
   // var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
   //   chart.draw(data, options);


     var data1 = google.visualization.arrayToDataTable([
          ['Superhero', 'No of movies'],
             <?php
   $sql = "SELECT * FROM topheroes";
   $result = mysqli_query($conn, $sql);
   $string1 = ''; 
   if (mysqli_num_rows($result) > 0){ 
     while($row = mysqli_fetch_assoc($result)) {
       $string1 .= '["'. $row["hero"] . '",' . $row["movies"] . '],';
     } 
   }; 

   echo $string1;

   ?> 
        ]);

        var options1 = {
          title: 'Most popular superheroes by movies'
        };

        var chart1 = new google.visualization.PieChart(document.getElementById('piechart1'));

        chart1.draw(data1, options1);

 var data1 = google.visualization.arrayToDataTable([
          ['Superhero', 'No of movies'],
             <?php
   $sql = "SELECT * FROM topheroes";
   $result = mysqli_query($conn, $sql);
   $string1 = ''; 
   if (mysqli_num_rows($result) > 0){ 
     while($row = mysqli_fetch_assoc($result)) {
       $string1 .= '["'. $row["company"] . '",' . $row["movies"] . '],';
     } 
   }; 
   echo $string1;
   ?> 
        ]);

        var options1 = {
          title: 'Most popular superheroes by company'
        };

        var chart1 = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart1.draw(data1, options1);






      var data2 = new google.visualization.arrayToDataTable([
        ['Title', 'budget (million $)', 'gross (million $)'],
        <?php
    $sql = "SELECT * FROM pinigai";
        $result = mysqli_query($conn, $sql);
        $string2 = '';
        if (mysqli_num_rows($result) > 0){ 
          while($row = mysqli_fetch_assoc($result)) {
            $string2 .= '["'. $row["title"] . '",' . $row["earn"] . ',' . $row["spend"] . '],';
          } 
        }
        echo $string2;
        ?>
        ]);

      var options2 = {
        width: 800,
        chart: {
          title: 'TOP5 films budgets and gross',
          subtitle: 'million $'
        },
          bars: 'horizontal', // Required for Material Bar Charts.
          series: {
            0: { axis: 'budget' }, // Bind series 0 to an axis named 'distance'.
            1: { axis: 'gross' } // Bind series 1 to an axis named 'brightness'.
          },
          axes: {
            x: {
              distance: {label: 'million $'}, // Bottom x-axis.
              brightness: {side: 'top', label: 'Movie'} // Top x-axis.
            }
          }
        };

        var chart = new google.charts.Bar(document.getElementById('dual_x_div'));
        chart.draw(data2, options2);
     
      };


       // google.charts.setOnLoadCallback(drawChart);
       //   function drawChart() {
       //   var data3 = google.visualization.arrayToDataTable([
       //     ['Title', 'budget (million $)', 'gross (million $)'],
       //     ['Avengers: Endgame', 365, 2796],
       //     ['Avengers: Infinity War', 400, 2048],
       //     ['The Avengers', 220, 1519],
       //     ['Avengers: Age of Ultron', 365, 1405],
       //     ['Black Panther', 200, 1347]
       //   ]);

       //   var options3 = {
       //     chart: {
       //       title: 'TOP5 superheroes movies budget and gross',
       //       subtitle: 'Movie, budget and gross (million $)',
       //     }
       //   };

       //   var chart3 = new google.charts.Bar(document.getElementById('columnchart_material'));

       //   chart3.draw(data3, google.charts.Bar.convertOptions(options3));
       // }


     //   var data = google.visualization.arrayToDataTable
     //   ([
     //     ['Title', 'Budget', 'Gross'];
     //     $sql = "SELECT * FROM pinigai";
     //     $result = mysqli_query($conn, $sql);  
     //     if (mysqli_num_rows($result) > 0){
     //       $php_data_array = Array(); 
     //       while($row = mysqli_fetch_assoc($result)) {
     //         echo "[". $row["title"] . "," . $row["earn"] . "," . $row["spend"] . "]";} 
     //         else {
     //           echo "0 results";
     //         }]);
     //   var options = {
     //     chart: {
     //       title: 'TOP5 films budgets and gross';
     //     }
     //   };

     //   var chart = new google.charts.Bar(document.getElementById('from_sql'));

     //   chart.draw(data, google.charts.Bar.convertOptions(options));
     // }
   </script>
 </head>
 <body>

  <?php include "header.php"; ?>


  <div class="container">
    <h1 class="cyan-text center-align">Superhero films statistics</h1>
    <div class="row">
      <div class="col s12 m8 l12">
        <div class="card-panel grey lighten-5 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col s2">
              <img src="images/avangers.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <span class="black-text">
               The top five highest-grossing superhero films and eight out of the top ten highest-grossing superhero films have been produced by Marvel Studios, within the Marvel Cinematic Universe (MCU). The four Avengers films (The Avengers, Age of Ultron, Infinity War, and Endgame) are the four highest-grossing superhero films of all time; Infinity War and Endgame are the only two superhero films to surpass a $2 billion worldwide gross, with Avengers: Endgame being the highest-grossing film of all time. Most of the films on this list are from either Marvel or DC Comics. Of the 23 MCU films only two are not in the top 50—Captain America: The First Avenger and The Incredible Hulk—even those two grossed more than $250 million.
             </span>
           </div>
         </div>
       </div>
     </div>
   </div>
<div>
  <div class="container">
   <div class="row">
        <div id="piechart1" style="width: 45%;"></div>
        <div id="piechart2" style="width: 45%;"></div>
  </div>
  <div>
    <div id="dual_x_div" style="width: 900px; height: 500px;"></div>
  </div>
</div>
</div>


  <div class="row">
    <div class="col s12 m6">
      <div class="card cyan darken-4">
        <div class="card-content white-text">

          <img src="images/joker.jpg" width="70%">
          <span class="card-title">Joker</span>
          <p>Release Date: October 4, 2019</p>
          <p>
            Director: Todd Phillips
          </p>
          <p>
          Cast: Joaquin Phoenix, Zazie Beets, Robert De Niro, Marc Maron, Frances Conroy, Glenn Fleshler, Shea Whigham and Bill Camp.</p>
        </div>
        <div class="card-action">
          <a href="https://collider.com/upcoming-new-superhero-movies-2016-2020-release-dates/#joker">Read more</a>
        </div>
      </div>
    </div>
    <div class="col s12 m6">
      <div class="card cyan darken-4">
        <div class="card-content white-text">

          <img src="images/birds.png" width="80%">
          <span class="card-title">Birds of Prey</span>
          <p>Release Date: February 7, 2020</p>
          <P>
            Director: Cathy Yan
          </P>
          <p>
            Writer: Christina Hodson
          </p>
          <p>
          Cast: Margot Robbie, Mary Elizabeth Winstead, Jurnee Smollett-Bell, Rosie Perez, Chris Messina, and Ewan McGregor</p>
        </div>
        <div class="card-action">
          <a href="https://collider.com/upcoming-new-superhero-movies-2016-2020-release-dates/#birds-of-prey">Read more</a>
        </div>
      </div>
    </div>
  </div>
          <!-- <div id="from_sql" style="width: 900px; height: 500px;"></div>
          -->





<!-- <?php $sql = "SELECT * FROM pinigai";
  $result = mysqli_query($conn, $sql);  
  if (mysqli_num_rows($result) > 0){
    echo "<table border-size='2'>";  // output data of each row
    $php_data_array = Array(); 
      while($row = mysqli_fetch_assoc($result)) {
         // echo $row["name"] . " - " . $row["rating"];
          echo "<br>";
          echo "<tr>";
          echo "<td>". $row["id"] . "</td>";
          echo "<td>". $row["title"] . "</td>";
          echo "<td>". $row["earn"] . "</td>";
          echo "<td>". $row["spend"] . "</td>";
          echo "</tr>";

          
          $php_data_array[] = $row;
      }
      echo "</table>";
  } else {
      echo "0 results";
  }
  $php_data_array[] = $row;
  echo json_encode($php_data_array);
  echo "<script>
        var my_2d = ".json_encode($php_data_array)."</script>";

  // for(i = 0; i < my_2d.length; i++)
  //   data.addRow([my_2d[i][0], parseInt(my_2d[i][1])])
  // }

  echo "<div id='chart_div'></div>";
 

  mysqli_close($conn);
  ?>

-->


<?php include "footer.php"; ?>

<!-- <script type="text/javascript">
 google.charts.load('current', {'packages':['corechart']});
 google.charts.setOnLoadCallback(draw_my_chart);

 function draw_my_chart() {
  var data = new google.visualization.arrayToDataTable([
    ['film', 'million dollars'],
    ['spend', <?php echo $spend; ?>],
    ['earn', <?php echo $earn; ?>],
    ]);

  var options = {title:'Most successful superheroes films',
  width:600,
  height:500};

  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script> -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="scripts/script.js"></script>

</body>
</html>