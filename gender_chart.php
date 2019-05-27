<!DOCTYPE html>
<html lang="en">
<?php 
//session_start();
$connection = mysqli_connect("localhost", "root", "", "intelligenthrm");
$query=mysqli_query($connection, "SELECT count(id) FROM employee WHERE gender ='Female'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row=mysqli_fetch_array($query);
$female = $row[0];
$query1=mysqli_query($connection, "SELECT count(id) FROM employee WHERE gender ='Male'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row1=mysqli_fetch_array($query1);
$male = $row1[0];


?>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Gender', 'Number of person'],
          ['Female', <?php echo $female; ?>],
          ['Male', <?php echo $male; ?>]
        ]);

        var options = {
          title: 'Employee Structure',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 550px; height: 340px;"></div>
  </body>
</html>