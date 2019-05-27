<!DOCTYPE html>
<?php //session_start(); 
     $error = array();
    //connect
	$conn = mysqli_connect('localhost', 'root', '', 'intelligenthrm'); 

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	//timezone
	function getDatetimeNow() {
       $timezone = new DateTimeZone('Asia/Hong_Kong');
       $datetime = new DateTime();
       $datetime->setTimezone($timezone);
       return $datetime->format('Y\-m\-d\ h:i:s');
       }
	   $currentTime = getDatetimeNow();

	  $timezone = 'Asia/Hong_Kong';
	  date_default_timezone_set($timezone);

	  if (isset($_REQUEST['status'])) {
	      $status = $_REQUEST['status'];
	  } else {
		  $status = 'unknown';
	  }  
		
		$sql = "SELECT * FROM employee WHERE id = ".$_SESSION['id'];
		$query = $conn->query($sql);

		if($query->num_rows > 0){
			$row = $query->fetch_assoc();
			$id = $row['id'];
 
			
		   // $now = new DateTime($status ="time_in");	
			$late = new DateTime('10:00:00');
			$date_now = intval(date('H'));
					if ($date_now > 10) {	
					    if(isset($_REQUEST['reason'])){
						$sql1 = "SELECT id FROM attendance WHERE employee_id = ".$_SESSION['id']. " ORDER BY time_in DESC LIMIT 1";
						$result = $conn->query($sql1);
						if ($result->num_rows > 0) {
						$row1 = $result->fetch_assoc();
						
						$reason=$_REQUEST['reason'];	
                        $reason1 = "UPDATE attendance SET reason ='$reason' WHERE id = '".$row1['id']."'"; 
						//echo $reason1;
					    mysqli_query($conn,$reason1);
						}
						}
					}
			if($status == 'time_in'){
				$sql = "INSERT INTO attendance (time_in, employee_id) value (NOW(), ".$_SESSION['id'].")";
				$query = $conn->query($sql);
//				if($query->num_rows > 0){
					$today = date('Y-m-d');
					$sql1 ="SELECT leave_id FROM leaveapplication WHERE employee_id =".$_SESSION['id']." AND startdate <= NOW() AND enddate >= NOW() AND status='Approved'"; 
					$query1 = $conn->query($sql1);
				
					if($query1->num_rows > 0){
						echo '<script language="javascript">';
					    echo 'alert("Error! You are on leave today.")';
					    echo '</script>';
					}
					if ($date_now > 10) {	
					    					
                      	?>	
					   <div class="form-style-5">					
					   <form action="attendance.php" method="post">					   
					    <label>Reason : </label>
	                    <select name="reason" id="reason" placeholder="Reason">
						 <option value="Bad Weather">Bad Weather</option> 
						 <option value="Forgotten">Forgotten</option>
						 <option value="Car Broke Down">Car Broke Down</option>
						 <option value="Oversleeping">Oversleeping</option>	
                         <option value="Traffic Jam">Traffic Jam</option>                        						
                        </select>
					   <input style="background:#4682B4;" type="submit" name="signin" value="Sign In">     
      		           </form>	
					   </div>
						<?php 
										
					 } else {
					echo '<script language="javascript">';
					echo 'alert("You have successfully sign in timed in")';
					echo '</script>';
					 }			      					 
//			    }
			
			}elseif($status == 'time_out'){						
						$sql1 = "SELECT id FROM attendance WHERE employee_id = ".$_SESSION['id']. " ORDER BY time_in DESC LIMIT 1";
						$result = $conn->query($sql1);
						if ($result->num_rows > 0) {

					$row = $result->fetch_assoc();
						}
					$sql = "UPDATE attendance SET time_out = NOW() WHERE id = '".$row['id']."'";
					if($conn->query($sql)){	
                    echo '<script language="javascript">';
					echo 'alert("You have successfully sign in timed out")';
					echo '</script>';					
					}
			}else{
				$sql = "SELECT id,time_in FROM attendance WHERE employee_id = ".$_SESSION['id']. " AND total_hour=0 ORDER BY time_in DESC";
				$query = $conn->query($sql);
				if($query->num_rows < 1){
					$output['error'] = true;
					$output['message'] = 'Cannot Timeout. Do not have time in.';
				}
			}
		
		}else{
			$output['error'] = true;
			$output['message'] = 'Employee ID not found';
		}		
?>
<html>
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<title>Intelligent Attendance Management System</title>
  	<!-- Tell the browser to be responsive to screen width -->
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
<style type="text/css">

body{
	background:#B0C4DE;
}
.form-style-5{
	max-width: 550px;
	padding: 10px 30px;
	background: #f4f7f8;
	margin: 10px auto;
	padding: 100px 50px;
	background: #f4f7f8;
	border-radius: 35px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-5 fieldset{
	border: none;
}
.form-style-5 legend {
	font-size: 1.4em;
	margin-bottom: 10px;
}
.form-style-5 label {
	display: block;
	margin-bottom: 8px;
}
.form-style-5 input[type="text"],
.form-style-5 input[type="date"],
.form-style-5 input[type="datetime"],
.form-style-5 input[type="email"],
.form-style-5 input[type="number"],
.form-style-5 input[type="search"],
.form-style-5 input[type="time"],
.form-style-5 input[type="submit"],
.form-style-5 input[type="url"],
.form-style-5 textarea,
.form-style-5 select {
	font-family: Georgia, "Times New Roman", Times, serif;
	background: rgba(255,255,255,.1);
	border: none;
	border-radius: 4px;
	font-size: 18px;
	margin: 0;
	outline: 0;
	padding: 7px;
	width: 100%;
	box-sizing: border-box; 
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box; 
	background-color: #e8eeef;
	color:#8a97a0;
	-webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	margin-bottom: 30px;
}
.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 input[type="datetime"]:focus,
.form-style-5 input[type="email"]:focus,
.form-style-5 input[type="number"]:focus,
.form-style-5 input[type="search"]:focus,
.form-style-5 input[type="time"]:focus,
.form-style-5 input[type="url"]:focus,
.form-style-5 textarea:focus,
.form-style-5 select:focus{
	background: #d2d9dd;
}
.form-style-5 select{
	-webkit-appearance: menulist-button;
	height:35px;
}
.form-style-5 .number {
	background: #1abc9c;
	color: #fff;
	height: 30px;
	width: 30px;
	display: inline-block;
	font-size: 0.8em;
	margin-right: 4px;
	line-height: 30px;
	text-align: center;
	text-shadow: 0 1px 0 rgba(255,255,255,0.2);
	border-radius: 15px 15px 15px 0px;
}

.form-style-5 input[type="submit"],
.form-style-5 input[type="button"]
{
	position: relative;
	display: block;
	padding: 19px 39px 18px 39px;
	color: #FFF;
	margin: 0 auto;
	background: #1abc9c;
	font-size: 18px;
	text-align: center;
	font-style: normal;
	width: 100%;
	border: 1px solid #16a085;
	border-width: 1px 1px 3px;
	margin-bottom: 10px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="button"]:hover
{
	background: #109177;
}
</style>
</head>
<body>
	
<div class="form-style-5">
  
    <form id="attendance" action="attendance.php">
	<fieldset>
	      
	     <h1 style="text-align: center; font-family:Helvetica;">Intelligent Attendance Management</h1> 
		 <h3 style="text-align:center; font-family:Helvetica;"> <?php include 'clock.php'; ?>  </h3> 
          		
    	 <br><br>
         <div class="inner-wrap">		 
            <select class="field-style field-full align-none" name="status">
              <option value="time_in">Time In</option>
              <option value="time_out">Time Out</option>
            </select>
    </fieldset>      
      	   <input style="background:#4682B4;" type="submit" name="signin" value="Sign In">
        </div>	
    	</form>
        </div>
		<div class="alert alert-success alert-dismissible mt20 text-center" style="display:none;">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <span class="result"><i class="icon fa fa-check"></i> <span class="message"></span></span>
    </div>
		<div class="alert alert-danger alert-dismissible mt20 text-center" style="display:none;">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <span class="result"><i class="icon fa fa-warning"></i> <span class="message"></span></span>
    </div>
  		
</div>

</body>
</html>