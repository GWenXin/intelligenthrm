<!DOCTYPE html>
<html lang="en">
 <?php 
//session_start();
$connection = mysqli_connect("localhost", "root", "", "intelligenthrm");
$query=mysqli_query($connection, "SELECT count(leave_id) FROM leaveapplication WHERE startdate >='2018-09-01' AND startdate <= '2018-09-30'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row=mysqli_fetch_array($query);
$sep = $row[0];
$query1=mysqli_query($connection, "SELECT count(leave_id) FROM leaveapplication WHERE startdate >='2018-10-01' AND startdate <= '2018-10-31'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row1=mysqli_fetch_array($query1);
$oct = $row1[0];
$query2=mysqli_query($connection, "SELECT count(leave_id) FROM leaveapplication WHERE startdate >='2018-11-01' AND startdate <= '2018-11-30'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row2=mysqli_fetch_array($query2);
$nov = $row2[0];
$query3=mysqli_query($connection, "SELECT count(leave_id) FROM leaveapplication WHERE startdate >='2018-12-01' AND startdate <= '2018-12-31'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row3=mysqli_fetch_array($query3);
$dec = $row3[0];
$query4=mysqli_query($connection, "SELECT count(leave_id) FROM leaveapplication WHERE startdate >='2019-01-01' AND startdate <= '2019-01-31'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row4=mysqli_fetch_array($query4);
$jan = $row4[0];
$query5=mysqli_query($connection, "SELECT count(leave_id) FROM leaveapplication WHERE startdate >='2019-02-01' AND startdate <= '2019-02-28'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row5=mysqli_fetch_array($query5);
$feb = $row5[0];
$query6=mysqli_query($connection, "SELECT count(leave_id) FROM leaveapplication WHERE startdate >='2019-03-01' AND startdate <= '2019-03-31'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row6=mysqli_fetch_array($query6);
$mar = $row6[0];
?>
  <head>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Months', 'days'],
		  ['September',<?php echo $sep; ?>],
          ['Octobet',<?php echo $oct; ?>],
          ['November',<?php echo $nov; ?>],
          ['December',<?php echo $dec; ?>],
          ['January',<?php echo $jan; ?>],
		  ['February',<?php echo $feb; ?>],
		  ['March',<?php echo $mar; ?>]
        ]);

        var options = {
          title: 'Comparison of leave by months',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script> 
  </head>
  <body>
    <div id="curve_chart" style="width: 1100px; height: 500px"></div>
  </body>
</html>


