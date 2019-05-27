<!DOCTYPE html>
<html lang="en">
<?php 
$connection = mysqli_connect("localhost", "root", "", "intelligenthrm");
$query = mysqli_query($connection, "SELECT count(id) FROM attendance WHERE reason ='Forgotten'"); 
$row = mysqli_fetch_array($query);
$forgot = $row[0];

$query1 = mysqli_query($connection, "SELECT count(id) FROM attendance WHERE reason ='Traffic Jam'"); 
$row1 = mysqli_fetch_array($query1);
$traffic = $row1[0];

$query2 = mysqli_query($connection, "SELECT count(id) FROM attendance WHERE reason ='Bad Weather'"); 
$row2 = mysqli_fetch_array($query2);
$bad = $row2[0];

$query3 = mysqli_query($connection, "SELECT count(id) FROM attendance WHERE reason ='Oversleeping'"); 
$row3 = mysqli_fetch_array($query3);
$over = $row3[0];

$query4 = mysqli_query($connection, "SELECT count(id) FROM attendance WHERE reason ='Car Broke Down'"); 
$row4 = mysqli_fetch_array($query4);
$car = $row4[0];
?>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
           ['Reason late to work', 'Number Of Latecomer'],
           ["Bad Weather", <?php echo $bad; ?>],
           ["Car Broke Down", <?php echo $car; ?>],
           ["Forgotten", <?php echo $forgot; ?>],
           ["Oversleeping", <?php echo $over; ?>],
           ['Traffic Jam', <?php echo $traffic; ?>]
        ]);

        var options = {
          title: 'Number Of Employee Sign In Late',
          width: 900,
          legend: { position: 'none' },
          chart: { title: 'Number Of Employee Sign In Late',
                   subtitle: 'Population Of Latecomer Shown By Reason' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Number Of Latecomer'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
  </head>
  <body>
    <div id="top_x_div" style="width: 1000px; height: 500px;"></div>
  </body>
</html>