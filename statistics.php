<!DOCTYPE html>
<html>
<head>
	<title>Naujienos</title>
	<?php include "header-script.php"; ?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Title', 'Gross (million $)'],
          ['Avengers: Endgame',     2796],
          ['Avengers: Infinity War',    2048],
          ['The Avengers',  1519],
          ['Avengers: Age of Ultron', 1405],
          ['Black Panther',    1347]
        ]);

        var options = {
          title: 'TOP5 successful films'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

        chart.draw(data, options);


        var data1 = google.visualization.arrayToDataTable([
          ['Title', 'budget (million $)'],
          ['Avengers: Endgame',     356],
          ['Avengers: Infinity War', 400],
          ['The Avengers',  220],
          ['Avengers: Age of Ultron', 365],
          ['Black Panther',    200]
        ]);

        var options1 = {
          title: 'TOP5 successful films budgets'
        };

        var chart1 = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart1.draw(data1, options1);
      }
    </script>
</head>
<body>
	
  <?php include "header.php"; ?>


  <div class="container">
    <h1 class="cyan-text center-align">Superhero films statistics</h1>

<div id="piechart1" style="width: 900px; height: 500px;"></div><br>
<div id="piechart2" style="width: 900px; height: 500px;"></div>





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

<script type="text/javascript">
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
</script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="scripts/script.js"></script>

</body>
</html>