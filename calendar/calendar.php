<?php
//session_start();
$connection = mysqli_connect("localhost", "root", "", "intelligenthrm");
?>
<html>
<head>
<script>
      function goLastMonth(month, year){
		  if(month == 1){
			  --year;
			  month = 13;
		  }
		  --month
		  var monthstring = ""+month+"";
		  var monthlength = monthstring.length;
		  if(monthlength <= 1){
		  monthstring = "0"+monthstring;
		  }
		  document.location.href = "<?php $_SERVER['PHP_SELF'];?>?month="+monthstring+"&year="+year;
	  } 
	  
	  function goNextMonth(month, year){
		   if(month == 12){  
			  ++year;
			  month = 0;
		  }
		  ++month
		  var monthstring = ""+month+"";
		  var monthlength = monthstring.length;
		  if(monthlength <= 1){
		  monthstring = "0"+monthstring;
		  }
		  document.location.href = "<?php $_SERVER['PHP_SELF'];?>?month="+monthstring+"&year="+year;
	  }
</script>
<style>
.today{
	background-color:#FA8072;
}
.event{
	background-color:#58D68D;
}
a {
  color: black;
  font-family: helvetica;
  text-decoration: none;
  text-transform: uppercase;
  font-size:16px;
}
table, td, th {
  border: 1px solid #ddd;
}
table {
  border-collapse: collapse;
  width: 100%;
}

th ,td{
  height: 80px;
  padding:15px;
}
input[type=button] {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
input[type=button]:hover {
    background-color: #45a049;
	width:100px;
}
.month {
  padding: 70px 25px;
  width: 100%;
  text-align: center;
  font-size: 18px;
}
/* Month list */
.month ul {
  margin: 0;
  padding: 0;
}

.month th td tr {
  color: white;  
  text-transform: uppercase;
  letter-spacing: 3px;
  text-align: center;
}
.month .prev {
  float: left;
  padding-top: 10px;
}

/* Next button */
.month .next {
  float: center;
  padding-top: 10px;
}
.btn {
  padding: 13px;
  font-size: 16px;
  font-family:Lucida Console;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
  text-align: center;
}
input, select ,textarea, range{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;  
  font-size: 18px;
  font-family: Arial;
  border-radius: 5px;
  border: 1px solid gray;
}
input[type=submit]{
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body>
<?php
  if(isset($_GET['day'])){
	  $day = $_GET['day'];
  }else{
	  $day = date("j");
  }
  if(isset($_GET['month'])){
	  $month = $_GET['month'];  
  }else{
	  $month = date("n");   
  }
  if(isset($_GET['year'])){
	  $year = $_GET['year'];  
  }else{
	  $year = date("Y");    
  }
      
  //echo $day."/".$month."/".$year;
  //calender variable
  $currentTimeStamp = strtotime("$year-$month-$day");
  //get current month name
  $monthName = date("F",$currentTimeStamp);
  //get how many days are there in the current month
  $numDays=date("t",$currentTimeStamp);
  //to set a variable to count cell in the loop later
  $counter=0;
?>
<?php
  if(isset($_GET['add'])){
	  $title = $_POST['title'];
	  $detail = $_POST['detail'];
	  
	  $eventdate = $month."/".$day."/".$year;
	  
	  $insert = "INSERT events (title, detail, eventDate, dateAdded, employee_id) VALUES ('".$title."','".$detail."','".$eventdate."',now(),'".$_SESSION['id']."')";
	  $resultinsert = mysqli_query($connection,$insert);
	  if($resultinsert){
		  echo "<script type='text/javascript'>alert('Event added successfully.');</script>";
	  }else{
		  echo "<script type='text/javascript'>alert('Error! Please try to apply again.');</script>";
	  }
  }
?>
  <table border='1'>
    <tr  class="month">
	 <td><input class="pev" type="button" value='&#10094;' name='previousbutton' onclick="goLastMonth(<?php echo $month.",".$year?>)"></td>
	 <td colspan='5'><h1><?php echo $monthName."&nbsp;&nbsp;".$year;?></h1></td> 
	 <td><input class="next" type="button" value='&#10095;' name='nextbutton' onclick="goNextMonth(<?php echo $month.",".$year?>)"></td>	 
	</tr>
	<tr style="text-align:center;">
	 <td style="width:18px;">Sunday</td>
	 <td style="width:26px;">Monday</td>
	 <td style="width:20px;">Tuesday</td>
	 <td style="width:18px;">Wednesday</td>
	 <td style="width:20px;">Thursday</td>
	 <td style="width:34px;">Friday</td>
	 <td style="width:20px;">Saturday</td>	 
	</tr>
	<?php 
	echo "<tr>";
	for($i = 1; $i < $numDays+1; $i++, $counter++){
		    $timeStamp = strtotime("$year-$month-$i");
		    if($i == 1){
				$firstDay = date("w",$timeStamp);
				for($j = 0; $j < $firstDay; $j++, $counter++){
					//blank space
					echo "<td>&nbsp;</td>";
				}
			}
			if($counter % 7 == 0){
				echo "</tr><tr>";
			}
			$monthstring = $month;
			$monthlength = strlen($monthstring);
			$daystring = $i;
			$daylength = strlen($daystring);
			if($monthlength <= 1){
				$monthstring = "0".$monthstring;
			}
            if($daylength <=1)
			{
				$daystring = "0".$daystring;
			}
            $todaysDate = date("m/d/Y");
            $dateToCompare = $monthstring.'/'.$daystring.'/'.$year;		
			echo"<td align='center' ";
			if($todaysDate == $dateToCompare){
				echo "class='today'";
			}else{
				$sqlCount = "SELECT * FROM events WHERE employee_id=".$_SESSION['id']." AND eventDate ='".$dateToCompare."'"; 
				$noOfEvent = mysqli_num_rows(mysqli_query($connection,$sqlCount));
				if($noOfEvent >= 1){
					echo "class='event'";
				}
			}
			echo "><a href='".$_SERVER['PHP_SELF']."?month=".$monthstring."&day=".$daystring."&year".$year."&v=true'>".$i." </a></td>";
	}
	echo "</tr>";
	?>
  </table>
  
  <?php 
     if(isset($_GET['v'])){	
         echo "<br>";	 
		 echo("<input type=\"submit\" onclick=\"location.href='".$_SERVER['PHP_SELF']."?month=".$month."&day=".$day."&year".$year."&v=true&f=true'\" value=\"Add Event\">");
		 echo "<br><br>";
		 if(isset($_GET['f'])){
			 include("eventform.php");
		 }
		 $sqlEvent ="SELECT * FROM events WHERE eventDate='".$month."/".$day."/".$year."'";
		 $resultEvents = mysqli_query($connection,$sqlEvent);
		 echo "<br>";
		 echo "<table style=\"text-align:center;\">";
		 echo"<tr>";
	     echo"<td><h4>Event Date</h4></td>";
	     echo"<td><h4>Event Title</h4></td>";
	     echo"<td><h4>Event Detail</h4></td>"; 
	     echo"</tr>";
		 while($events = mysqli_fetch_array($resultEvents)){
             echo "<tr>";
			 echo "<td><h4>".$events['eventDate']."</h4></td>";
			 echo "<td><h4>".$events['title']."</h4></td>";
			 echo "<td><h4>".$events['detail']."</h4></td>";
			 echo "</tr>";
			 
		 }
	 }
  ?>
 </table> 
</body>
</html>