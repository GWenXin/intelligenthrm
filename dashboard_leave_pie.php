<!DOCTYPE html>
<html>
<?php 
//session_start();
$connection = mysqli_connect("localhost", "root", "", "intelligenthrm");
$query = "SELECT * FROM employee WHERE email='".$_SESSION["user"]."'";
$result = mysqli_query($connection, $query);
//$chart_data = '';
$annual = '';
$sick = '';
$emergency = '';
while($row = mysqli_fetch_array($result))
{
 #$chart_data .= "{ balance_annual_leave:".$row["balance_annual_leave"].", balance_sick_leave:".$row["balance_sick_leave"].", balance_emergency_leave:".$row["balance_emergency_leave"]."} ";
  $annual = $row['balance_annual_leave'];
  $sick = $row['balance_sick_leave'];
  $emergency = $row['balance_emergency_leave'];
// $_SESSION['user']=$name;
}
//$chart_data = substr($chart_data, 0, -2);
//echo "xxxxx".$annual;
//echo "xxxxx".$sick;
//echo "xxxxx".$emergency;
?>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Leave Balance', 'Day(s)'],
          ['Annual Leave',<?php echo $annual; ?>],
		  ['Sick Leave',<?php echo $sick; ?>],
		  ['Emergency Leave',<?php echo $emergency; ?>],
        ]);

        var options = {
          title: 'Balance Leave Avialable'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 800px; height: 500px;"></div>
  </body>
</html>