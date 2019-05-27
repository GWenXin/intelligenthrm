<!DOCTYPE html>
<html lang="en">
<?php
session_start();

$connection = mysqli_connect("localhost", "root", "", "intelligenthrm"); // Establishing connection with server..
 if(isset($_REQUEST['Approved']))
 {
	 $status="Approved";
	 $update="Update leaveapplication SET status='$status' where leave_id=".$_REQUEST['leave_id'];	
	 $result=mysqli_query($connection,$update);
	 
	 //count annual leave
     $countleave = "SELECT sum(duration) FROM leaveapplication WHERE employee_id=".$_REQUEST['staff_id']." AND leave_type='Annual Leave'";
	 $result1=mysqli_query($connection,$countleave);
	 $row = mysqli_fetch_row($result1);
	 
	 $leaveupdate = "UPDATE employee SET balance_annual_leave = 20-".$row[0]." where id=".$_REQUEST['staff_id'];
echo $leaveupdate;
	 $result1=mysqli_query($connection,$leaveupdate);
	 
	 //count sick leave
	 $countleave = "SELECT sum(duration) FROM leaveapplication WHERE employee_id=".$_REQUEST['staff_id']." AND leave_type='Sick Leave'";
	 $result1=mysqli_query($connection,$countleave);
	 $row = mysqli_fetch_row($result1);
	 $leaveupdate = "UPDATE employee SET balance_sick_leave = 12-".$row[0]." where id=".$_REQUEST['staff_id'];
	 $result1=mysqli_query($connection,$leaveupdate);
	
	 //count emergency leave
	 $countleave = "SELECT sum(duration) FROM leaveapplication WHERE employee_id=".$_REQUEST['staff_id']." AND leave_type='Emergency Leave'";
	 $result1=mysqli_query($connection,$countleave);
	 $row = mysqli_fetch_row($result1);
	 $leaveupdate = "UPDATE employee SET balance_emergency_leave = 18-".$row[0]." where id=".$_REQUEST['staff_id']."";
	 $result1=mysqli_query($connection,$leaveupdate);
	 
 } else if (isset($_REQUEST['Rejected']))
 {
	 $status="Rejected";
	 $update="Update leaveapplication SET status='$status' where leave_id=".$_REQUEST['leave_id'];	 
	 $result=mysqli_query($connection,$update);
 }
?>
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Employee Leaves
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="material-dashboard.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="demo.css" rel="stylesheet" />
</head>
<style>
form{
  width: 100%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
  font-size:18px;
}
.input-group input ,select, textarea{
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  font-family:Lucida Console;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  font-family:Lucida Console;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
a{
    color: #6699ff; 
    font-size:18px;
  }
.button {
    background-color: #008CBA; /* Blue */
    border: none;
    color: white;
    padding: 10px 25px;
	border-radius:12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="green" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a class="simple-text logo-normal">
          Intelligent HRMS
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="employee_profile.php">
              <i class="material-icons">folder_shared</i>
              <p>Employees Profile</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="applyleave.php">
              <i class="material-icons">card_travel</i>
              <p>Apply Leave</p>
            </a>
          </li>
	      <li class="nav-item ">
            <a class="nav-link" href="view_leave.php">
              <i class="material-icons">content_paste</i>
              <p>Leave History</p>
            </a>
          </li>
		   <li class="nav-item active">
            <a class="nav-link" href="employee_request.php">
              <i class="material-icons">how_to_reg</i>
              <p>Employee Leave</p>
            </a>
          </li>
          <li class="nav-item ">
             <a class="nav-link" href="./attendance/attendance.php" target="_blank">
              <i class="material-icons">explore</i>
              <p>Attendance</p>
            </a>
          </li>
		  <li class="nav-item ">
            <a class="nav-link" href="schedule.php">
              <i class="material-icons">calendar_today</i>
              <p>Schedule</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">dvr</i>
              <p>Track Tasks</p>
            </a>
          </li>  
		  <li class="nav-item">
            <a class="nav-link" href="AddAnnouncement.php">
              <i class="material-icons">announcement</i>
              <p>Add Announcement</p>
            </a>
          </li>
		  <li class="nav-item ">
            <a class="nav-link" href="MainReport.php">
              <i class="material-icons">assessment</i>
              <p>Report</p>
            </a>
         </li>    
		  <li class="nav-item ">
            <a class="nav-link" href="Logout.php">
              <i class="material-icons">exit_to_app</i>
              <p>Logout</p>
            </a>
         </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Employees Information</a>
          </div>
         
          <div class="collapse navbar-collapse justify-content-end">        
            <ul class="navbar-nav">        
              <li class="nav-item">
			  <a class="nav-link" href="Logout.php">
                  <i class="material-icons">exit_to_app</i>
                  <p class="d-lg-none d-md-block">
                    Logout
                  </p>
                </a>
				<li>
				</li>
          <!--  <a class="nav-link" href="#pablo">
                  <i class="material-icons">account_circle</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
              </li> 
            </ul>-->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
	  <div class="content">
        <div class="container-fluid">
          <div class="row">
           <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Sales Department Employee Leaves</h4>
                  <p class="card-category">Employees Leaves</p>
                </div> 
                <div class="card-body">
		
	       <div class="table-responsive">
           <table class="table" style="text-align:center; font-size=18px; ">
		   <thead>
		   <th>ID</th>
		   <th>Name</th>
		   <th>Type of Leave</th>
	       <th>Leave Date From</th>
	       <th>Leave Date To</th>
	       <th>Day(s)</th>
		   <th>Comment</th>
	       <th>Leave Status</th>
		   <th>Request</th>
		   </thead>
		   <tbody>
		      <?php 
		    $connect = mysqli_connect("localhost", "root", "", "intelligenthrm");
	        $result=mysqli_query($connect,"SELECT leave_id, employee.id, employee.name, leaveapplication.leave_type,leaveapplication.startdate, leaveapplication.enddate, leaveapplication.duration, leaveapplication.comment, leaveapplication.status FROM leaveapplication LEFT JOIN employee ON employee.id=leaveapplication.employee_id WHERE employee.department ='Sales'");
				
	        while ($row=mysqli_fetch_array($result))
	         {
		      $rows[] = $row;
		  
	       ?>
		   <tr>		   
		   <form action="leave_sales.php">
	       <td><?php echo $row['id']; ?></td>
	       <td><?php echo $row['name']; ?></td>
		   <td><?php echo $row['leave_type']; ?></td>
	       <td><?php echo $row['startdate']; ?></td>
		   <td><?php echo $row['enddate']; ?></td>
		   <td><?php echo $row['duration']; ?></td>
		   <td><?php echo $row['comment']; ?></td>
		   <?php if($row['status']=='Pending')
			            echo "<td style='color: #cc00ff; font-weight: bold;'>".$row['status']."</td>"; 
		             else if($row['status']=='Rejected')
		            	echo "<td style='color: #e60000; font-weight: bold;'>".$row['status']."</td>"; 
		             else if($row['status']=='Approved') 
		             	echo "<td style='color: #3366ff; font-weight: bold;'>".$row['status']."</td>"; ?>
			 <input type="hidden" name="staff_id" value="<?php echo $row['employee_id']; ?>">
             <input type="hidden" name="leave_id" value="<?php echo $row['leave_id']; ?>">	
		   	
		   <td><button name="Approved" class="button">Approve</button>
		       <button name="Rejected" class="button">Reject</button></td> 	
		   </form>
		   </tr>	
		   <?php 
		    }
	       ?> 	   
		   </tbody>
		   </table>
           </div>    
         
            </div>
           </div>
          </div>
         </div>          
        </div>
       </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="Dashboard.php">
                  Intelligent Human Resource Management
                </a>
              </li>           
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>