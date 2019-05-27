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
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Reason', 'Number Of Sign In Late'],
          ['Forgotten',<?php echo $forgot; ?>],
          ['Traffic Jam',<?php echo $traffic; ?>],
          ['Bad Weather',<?php echo $bad; ?>],
          ['Oversleeping',<?php echo $over; ?>],
          ['Car Broke Down',<?php echo $car; ?>]
        ]);

        var options = {
          title: 'Reason Of Latecomer ',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 900px; height: 500px;"></div>
  </body>
</html>