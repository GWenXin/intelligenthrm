<!DOCTYPE html>
<html lang="en">
<?php 
//session_start();
$connection = mysqli_connect("localhost", "root", "", "intelligenthrm");
$query=mysqli_query($connection, "SELECT count(id) FROM employee WHERE department ='Accounting & Finance'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row=mysqli_fetch_array($query);
$account = $row[0];

$query1=mysqli_query($connection, "SELECT count(id) FROM employee WHERE department ='Customer Service'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row1=mysqli_fetch_array($query1);
$customer = $row1[0];

$query2=mysqli_query($connection, "SELECT count(id) FROM employee WHERE department ='Design'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row2=mysqli_fetch_array($query2);
$design = $row2[0];

$query3=mysqli_query($connection, "SELECT count(id) FROM employee WHERE department ='Human Resource'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row3=mysqli_fetch_array($query3);
$hr = $row3[0];

$query3=mysqli_query($connection, "SELECT count(id) FROM employee WHERE department ='IT'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row3=mysqli_fetch_array($query3);
$it = $row3[0];

$query4=mysqli_query($connection, "SELECT count(id) FROM employee WHERE department ='Marketing'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row4=mysqli_fetch_array($query4);
$marketing = $row4[0];
//echo $marketing;
$query5=mysqli_query($connection, "SELECT count(id) FROM employee WHERE department ='Management'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row5=mysqli_fetch_array($query5);
$management = $row5[0];

$query6=mysqli_query($connection, "SELECT count(id) FROM employee WHERE department ='Operation'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row6=mysqli_fetch_array($query6);
$operation = $row6[0];

$query7=mysqli_query($connection, "SELECT count(id) FROM employee WHERE department ='Sales'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row7=mysqli_fetch_array($query7);
$sales = $row7[0];
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Employee Department Chart</title>
</head>
<body>
  <div class="container">
    <canvas id="myChart"></canvas>
  </div>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 <script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Department", "Number of Employee", { role: "style" } ],
		["Accounting & Finance", <?php echo $account; ?>, "#4169E1"],
        ["Customer Service", <?php echo $customer; ?>, "#4169E1"],
        ["Design", <?php echo $design; ?>, "#4169E1"],
        ["Human Resource", <?php echo $hr; ?>, "#4169E1"],
        ["IT", <?php echo $it; ?>, "color: #4169E1"],
		["Marketing", <?php echo $marketing; ?>, "color: #4169E1"],
		["Management", <?php echo $management; ?>, "color: #4169E1"],
		["Operation", <?php echo $operation; ?>, "color: #4169E1"],
		["Sales", <?php echo $sales; ?>, "color: #4169E1"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Number Of Employees In Each Department",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="barchart_values" style="width: 800px; height: 500px;"></div>

</body>
</html>
