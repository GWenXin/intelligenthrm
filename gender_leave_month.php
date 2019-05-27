<!DOCTYPE html>
<html lang="en">
<?php 
$connection = mysqli_connect("localhost", "root", "", "intelligenthrm");
$query=mysqli_query($connection, "SELECT count(leaveapplication.leave_id),employee.gender FROM leaveapplication INNER JOIN employee ON leaveapplication.employee_id = employee.id WHERE leaveapplication.startdate >='2018-09-01' AND leaveapplication.startdate <= '2018-09-30' AND employee.gender = 'Female'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row=mysqli_fetch_array($query);
$Fsep = $row[0];

$query1=mysqli_query($connection, "SELECT count(leaveapplication.leave_id),employee.gender FROM leaveapplication INNER JOIN employee ON leaveapplication.employee_id = employee.id WHERE leaveapplication.startdate >='2018-09-01' AND leaveapplication.startdate <= '2018-09-30' AND employee.gender = 'Male'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row1=mysqli_fetch_array($query1);
$Msep = $row1[0];

$query2=mysqli_query($connection, "SELECT count(leaveapplication.leave_id),employee.gender FROM leaveapplication INNER JOIN employee ON leaveapplication.employee_id = employee.id WHERE leaveapplication.startdate >='2018-10-01' AND leaveapplication.startdate <= '2018-10-31' AND employee.gender = 'Female'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row2=mysqli_fetch_array($query2);
$Foct = $row2[0];

$query3=mysqli_query($connection, "SELECT count(leaveapplication.leave_id),employee.gender FROM leaveapplication INNER JOIN employee ON leaveapplication.employee_id = employee.id WHERE leaveapplication.startdate >='2018-10-01' AND leaveapplication.startdate <= '2018-10-31' AND employee.gender = 'Male'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row3=mysqli_fetch_array($query3);
$Moct = $row3[0];

$query4=mysqli_query($connection, "SELECT count(leaveapplication.leave_id),employee.gender FROM leaveapplication INNER JOIN employee ON leaveapplication.employee_id = employee.id WHERE leaveapplication.startdate >='2018-11-01' AND leaveapplication.startdate <= '2018-11-30' AND employee.gender = 'Female'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row4=mysqli_fetch_array($query4);
$Fnov = $row4[0];

$query5=mysqli_query($connection, "SELECT count(leaveapplication.leave_id),employee.gender FROM leaveapplication INNER JOIN employee ON leaveapplication.employee_id = employee.id WHERE leaveapplication.startdate >='2018-11-01' AND leaveapplication.startdate <= '2018-11-30' AND employee.gender = 'Male'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row5=mysqli_fetch_array($query5);
$Mnov = $row5[0];

$query6=mysqli_query($connection, "SELECT count(leaveapplication.leave_id),employee.gender FROM leaveapplication INNER JOIN employee ON leaveapplication.employee_id = employee.id WHERE leaveapplication.startdate >='2018-12-01' AND leaveapplication.startdate <= '2018-12-31' AND employee.gender = 'Female'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row6=mysqli_fetch_array($query6);
$Fdec = $row6[0];

$query7=mysqli_query($connection, "SELECT count(leaveapplication.leave_id),employee.gender FROM leaveapplication INNER JOIN employee ON leaveapplication.employee_id = employee.id WHERE leaveapplication.startdate >='2018-12-01' AND leaveapplication.startdate <= '2018-12-31' AND employee.gender = 'Male'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row7=mysqli_fetch_array($query7);
$Mdec = $row7[0];

$query8=mysqli_query($connection, "SELECT count(leaveapplication.leave_id),employee.gender FROM leaveapplication INNER JOIN employee ON leaveapplication.employee_id = employee.id WHERE leaveapplication.startdate >='2019-01-01' AND leaveapplication.startdate <= '2019-01-31' AND employee.gender = 'Female'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row8=mysqli_fetch_array($query8);
$Fjan = $row8[0];

$query9=mysqli_query($connection, "SELECT count(leaveapplication.leave_id),employee.gender FROM leaveapplication INNER JOIN employee ON leaveapplication.employee_id = employee.id WHERE leaveapplication.startdate >='2019-01-01' AND leaveapplication.startdate <= '2019-01-31' AND employee.gender = 'Male'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row9=mysqli_fetch_array($query9);
$Mjan = $row9[0];

$query10=mysqli_query($connection, "SELECT count(leaveapplication.leave_id),employee.gender FROM leaveapplication INNER JOIN employee ON leaveapplication.employee_id = employee.id WHERE leaveapplication.startdate >='2019-02-01' AND leaveapplication.startdate <= '2019-02-28' AND employee.gender = 'Female'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row10=mysqli_fetch_array($query10);
$Ffeb = $row10[0];

$query11=mysqli_query($connection, "SELECT count(leaveapplication.leave_id),employee.gender FROM leaveapplication INNER JOIN employee ON leaveapplication.employee_id = employee.id WHERE leaveapplication.startdate >='2019-02-01' AND leaveapplication.startdate <= '2019-02-28' AND employee.gender = 'Male'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row11=mysqli_fetch_array($query11);
$Mfeb = $row11[0];

$query12=mysqli_query($connection, "SELECT count(leaveapplication.leave_id),employee.gender FROM leaveapplication INNER JOIN employee ON leaveapplication.employee_id = employee.id WHERE leaveapplication.startdate >='2019-03-01' AND leaveapplication.startdate <= '2019-03-31' AND employee.gender = 'Female'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row12=mysqli_fetch_array($query12);
$Fmar = $row12[0];

$query13=mysqli_query($connection, "SELECT count(leaveapplication.leave_id),employee.gender FROM leaveapplication INNER JOIN employee ON leaveapplication.employee_id = employee.id WHERE leaveapplication.startdate >='2019-03-01' AND leaveapplication.startdate <= '2019-03-31' AND employee.gender = 'Male'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row13=mysqli_fetch_array($query13);
$Mmar = $row13[0];

$query14 = mysqli_query($connection, "SELECT count(leaveapplication.leave_id),employee.gender FROM leaveapplication INNER JOIN employee ON leaveapplication.employee_id = employee.id WHERE leaveapplication.startdate >='2019-04-01' AND leaveapplication.startdate <= '2019-04-30' AND employee.gender = 'Female'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row14 = mysqli_fetch_array($query14);
$Fapr = $row14[0];

$query15 = mysqli_query($connection, "SELECT count(leaveapplication.leave_id),employee.gender FROM leaveapplication INNER JOIN employee ON leaveapplication.employee_id = employee.id WHERE leaveapplication.startdate >='2019-04-01' AND leaveapplication.startdate <= '2019-04-30' AND employee.gender = 'Male'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row15 = mysqli_fetch_array($query15);
$Mapr = $row15[0];

?>
 <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Female', 'Male'],
          ['September',<?php echo $Fsep; ?>, <?php echo $Msep; ?>],
          ['October',<?php echo $Foct; ?>,<?php echo $Moct; ?>],
          ['November',<?php echo $Fnov; ?>,<?php echo $Mnov; ?>],
          ['December',<?php echo $Fdec; ?>,<?php echo $Mdec; ?>],
          ['January',<?php echo $Fjan; ?>,<?php echo $Mjan; ?>],
          ['February',<?php echo $Ffeb; ?>,<?php echo $Mfeb; ?>],
          ['March',<?php echo $Fmar; ?>,<?php echo $Mmar; ?>],
          ['April',<?php echo $Fapr; ?>,<?php echo $Mapr; ?>],
        ]);

        var options = {
          title: 'Comparison Of Leave Taken By Month',
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
