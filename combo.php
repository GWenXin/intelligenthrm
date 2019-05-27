<html>
<?php 
$connection = mysqli_connect("localhost", "root", "", "intelligenthrm");
$query = mysqli_query($connection, "SELECT count(id) FROM employee WHERE department = 'Human Resource' AND gender = 'Female'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row = mysqli_fetch_array($query);
$HRF = $row[0];

$query1 = mysqli_query($connection, "SELECT count(id) FROM employee WHERE department = 'Human Resource' AND gender = 'Male'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row1 = mysqli_fetch_array($query1);
$HRM = $row1[0]; 

$query2 = mysqli_query($connection, "SELECT count(id) FROM employee WHERE department = 'Accounting & Finance' AND gender = 'Female'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row2 = mysqli_fetch_array($query2);
$ACCF = $row2[0]; 

$query3 = mysqli_query($connection, "SELECT count(id) FROM employee WHERE department = 'Accounting & Finance' AND gender = 'Male'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row3 = mysqli_fetch_array($query3);
$ACCM= $row3[0]; 

$query4 = mysqli_query($connection, "SELECT count(id) FROM employee WHERE department = 'Customer Service' AND gender = 'Female'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row4 = mysqli_fetch_array($query4);
$CSF = $row4[0]; 

$query5 = mysqli_query($connection, "SELECT count(id) FROM employee WHERE department = 'Customer Service' AND gender = 'Male'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row5 = mysqli_fetch_array($query5);
$CSM = $row5[0];

$query6 = mysqli_query($connection, "SELECT count(id) FROM employee WHERE department = 'Design' AND gender = 'Female'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row6 = mysqli_fetch_array($query6);
$DF = $row6[0];

$query7 = mysqli_query($connection, "SELECT count(id) FROM employee WHERE department = 'Design' AND gender = 'Male'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row7 = mysqli_fetch_array($query7);
$DM = $row7[0];

$query8 = mysqli_query($connection, "SELECT count(id) FROM employee WHERE department = 'IT' AND gender = 'Female'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row8 = mysqli_fetch_array($query8);
$ITF = $row8[0];

$query9 = mysqli_query($connection, "SELECT count(id) FROM employee WHERE department = 'IT' AND gender = 'Male'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row9 = mysqli_fetch_array($query9);
$ITM = $row9[0];

$query10 = mysqli_query($connection, "SELECT count(id) FROM employee WHERE department = 'Marketing' AND gender = 'Female'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row10 = mysqli_fetch_array($query10);
$MarF = $row10[0];

$query11 = mysqli_query($connection, "SELECT count(id) FROM employee WHERE department = 'Marketing' AND gender = 'Male'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row11 = mysqli_fetch_array($query11);
$MarM = $row11[0];

$query12 = mysqli_query($connection, "SELECT count(id) FROM employee WHERE department = 'Management' AND gender = 'Female'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row12 = mysqli_fetch_array($query12);
$ManF = $row12[0];

$query13 = mysqli_query($connection, "SELECT count(id) FROM employee WHERE department = 'Management' AND gender = 'Male'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row13 = mysqli_fetch_array($query13);
$ManM = $row13[0];

$query14 = mysqli_query($connection, "SELECT count(id) FROM employee WHERE department = 'Operation' AND gender = 'Female'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row14 = mysqli_fetch_array($query14);
$OF = $row14[0];

$query15 = mysqli_query($connection, "SELECT count(id) FROM employee WHERE department = 'Operation' AND gender = 'Male'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row15 = mysqli_fetch_array($query15);
$OM = $row15[0];

$query16 = mysqli_query($connection, "SELECT count(id) FROM employee WHERE department = 'Sales' AND gender = 'Female'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row16 = mysqli_fetch_array($query16);
$SF = $row16[0];

$query17 = mysqli_query($connection, "SELECT count(id) FROM employee WHERE department = 'Sales' AND gender = 'Male'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row17 = mysqli_fetch_array($query17);
$SM = $row17[0];

$query18 = mysqli_query($connection, "SELECT count(leaveapplication.employee_id),employee.department FROM leaveapplication INNER JOIN employee ON leaveapplication.employee_id = employee.id WHERE employee.department = 'Accounting & Finance'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row18 = mysqli_fetch_array($query18);
$AccLeave = $row18[0];

$query19 = mysqli_query($connection, "SELECT count(leaveapplication.employee_id),employee.department FROM leaveapplication INNER JOIN employee ON leaveapplication.employee_id = employee.id WHERE employee.department = 'Customer Service'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row19 = mysqli_fetch_array($query19);
$CSLeave = $row19[0];

$query20 = mysqli_query($connection, "SELECT count(leaveapplication.employee_id),employee.department FROM leaveapplication INNER JOIN employee ON leaveapplication.employee_id = employee.id WHERE employee.department = 'Design'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row20 = mysqli_fetch_array($query20);
$DLeave = $row20[0];

$query21 = mysqli_query($connection, "SELECT count(leaveapplication.employee_id),employee.department FROM leaveapplication INNER JOIN employee ON leaveapplication.employee_id = employee.id WHERE employee.department = 'Human Resource'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row21 = mysqli_fetch_array($query21);
$HRLeave = $row21[0];

$query22 = mysqli_query($connection, "SELECT count(leaveapplication.employee_id),employee.department FROM leaveapplication INNER JOIN employee ON leaveapplication.employee_id = employee.id WHERE employee.department = 'IT'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row22 = mysqli_fetch_array($query22);
$ITLeave = $row22[0];

$query23 = mysqli_query($connection, "SELECT count(leaveapplication.employee_id),employee.department FROM leaveapplication INNER JOIN employee ON leaveapplication.employee_id = employee.id WHERE employee.department = 'Marketing'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row23 = mysqli_fetch_array($query23);
$MarLeave = $row23[0];

$query24 = mysqli_query($connection, "SELECT count(leaveapplication.employee_id),employee.department FROM leaveapplication INNER JOIN employee ON leaveapplication.employee_id = employee.id WHERE employee.department = 'Management'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row24 = mysqli_fetch_array($query24);
$ManLeave = $row24[0];

$query25 = mysqli_query($connection, "SELECT count(leaveapplication.employee_id),employee.department FROM leaveapplication INNER JOIN employee ON leaveapplication.employee_id = employee.id WHERE employee.department = 'Operation'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row25 = mysqli_fetch_array($query25);
$OLeave = $row25[0];

$query26 = mysqli_query($connection, "SELECT count(leaveapplication.employee_id),employee.department FROM leaveapplication INNER JOIN employee ON leaveapplication.employee_id = employee.id WHERE employee.department = 'Sales'"); // and Startdate>='2016-01-01' and Startdate<='2016-01-31'");
$row26 = mysqli_fetch_array($query26);
$SLeave = $row26[0];
?>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Department', 'Female', 'Male', 'Leave'],
          ['Human Resource', <?php echo $HRF; ?> , <?php echo $HRM; ?>,<?php echo $HRLeave; ?>,],
          ['Accounting & Finance',<?php echo $ACCF; ?>, <?php echo $ACCM; ?>,<?php echo $AccLeave; ?>],
          ['Customer Service',<?php echo $CSF; ?>,<?php echo $CSM; ?>,<?php echo $CSLeave; ?>],
          ['Design',<?php echo $DF; ?>,<?php echo $DM; ?>,<?php echo $DLeave; ?>],
          ['Marketing',<?php echo $MarF; ?>,<?php echo $MarM; ?>,<?php echo $MarLeave; ?>],
          ['Management',<?php echo $ManF; ?>,<?php echo $ManM; ?>,<?php echo $ManLeave; ?>],
          ['Operation',<?php echo $OF; ?>,<?php echo $OM; ?>,<?php echo $OLeave; ?>],
          ['Sales',<?php echo $SF; ?>,<?php echo $SM; ?>,<?php echo $SLeave; ?>]
        ]);

        var options = {
          title : 'Difference Between Department And Leave Taken',
          vAxis: {title: 'Number Of Employee'},
          hAxis: {title: 'Department'},
          seriesType: 'bars',
          series: {2: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 1100px; height: 500px;"></div>
  </body>
</html>