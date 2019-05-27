<!DOCTYPE html>
<html lang="en">
<?php
session_start();
 //if(isset($_REQUEST['dept'])) $_SESSION['dept'] = $_REQUEST['dept'];

$connection = mysqli_connect("localhost", "root", "", "intelligenthrm"); // Establishing connection with server..
 if(isset($_REQUEST['Approved']))
 {
	 $status="Approved";
	 $update="Update leaveapplication SET status='$status' where leave_id=".$_REQUEST['leave_id'];
	 echo $update;
	 $result=mysqli_query($connection,$update);
 } else if (isset($_REQUEST['Reject']))
 {
	 $status="Rejected";
	 $update="Update leaveapplication SET status='$status' where leave_id=".$_REQUEST['leave_id'];
	 echo $update;
	 $result=mysqli_query($connection,$update);

 }

?>
<head>
<?php
$sql = "SELECT * FROM leaveapplication LEFT JOIN employee ON leaveapplication.employee_id=employee.id";

 $result = mysqli_query($connection,$sql);
 if (mysqli_num_rows($result) > 0) 
  {
	  
?>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Leave Management
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
a {
  color: #6699ff; 
  }
input[type=submit] {
  padding: 12px;
  font-size: 14px;
  font-family:"Lucida Console";
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 8px;
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
<script>
function confirmation()
{
	answer= confirm("Are you sure to delete?");
	return answer;
	
}
</script>
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
          <li class="nav-item">
            <a class="nav-link" href="admin_dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="admin_profile.php">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="employee_profile.php">
              <i class="material-icons">folder_shared</i>
              <p>Employees Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="admin_applyleave.php">
              <i class="material-icons">card_travel</i>
              <p>Apply Leave</p>
            </a>
          </li>
	      <li class="nav-item">
            <a class="nav-link" href="admin_view_leave.php">
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
            <a class="nav-link" href="admin_schedule.php">
              <i class="material-icons">calendar_today</i>
              <p>Schedule</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="admin_tracktask.php">
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
<!--	  <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">chat</i>
              <p>ChatBot</p>
            </a>
          </li> -->
		  <li class="nav-item ">
            <a class="nav-link" href="admin_MainReport.php">
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
            <a class="navbar-brand" href="#pablo">Leave Management</a>	
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
		<!--	
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">account_circle</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a> -->
              </li>
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
                  <h4 class="card-title ">Leave Request Statement</h4>
                  <p class="card-category"> Here to view employee leave statement.</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table"style="font-size:16px;">
                      <thead class=" text-primary">  
					   <th>Name</th>
					   <th>Departmant</th>
                       <th>ID</th>                   
                       <th>Type of Leave</th>
	                   <th>Leave Date From</th>
	                   <th>Leave Date To</th>
	                   <th>Day(s)</th>
	                   <th>Leave Status</th>
	                   <th>Cancellation</th>        
                       <th>Statement</th>					   
                      </thead>
                      <tbody>
		
	 <?php
        if($row = mysqli_fetch_array($result))
         {
			  
	           $rows[] = $row;
			   
	           foreach($rows as $row){
               $name=$row['name'];
               $department=$row['department'];
               $leavetype=$row['leave_type'];
               $startdate=$row['startdate'];
               $enddate=$row['enddate'];
               $comment=$row['comment'];
	           $status=$row['status'];
               }
         }
         ?>
                       <tr>
					    <td><?php echo $row['name']; ?></td>  
					    <td><?php echo $row['department']; ?></td>  
                        <td><?php echo $row["leave_id"]; ?></td>                             
                        <td><?php echo $row['leave_type']; ?></td>
	                    <td><?php echo $row["startdate"];?></td>
                     	<td><?php echo $row['enddate'];?></td>
	                    <td><?php echo $row['duration'];?></td>
						<td><?php echo $row['comment'];?></td>
						<?php 		
		if($row['status']=='Pending')
			echo "<td style='color: #cc00ff; font-weight: bold;'>".$row['status']."</td>"; 
		else if($row['status']=='Rejected')
			echo "<td style='color: #e60000; font-weight: bold;'>".$row['status']."</td>"; 
		else if($row['status']=='Approved') 
			echo "<td style='color: #3366ff; font-weight: bold;'>".$row['status']."</td>"; 
		
		?>	
        <input type="hidden" name="staff_id" value="<?php echo $row['employee_id']; ?>">
        <input type="hidden" name="leave_id" value="<?php echo $row['leave_id']; ?>">		
		<td> 
        <button class="button">Approve</button>
		<button class="button">Reject</button>
 <?php /*    <input type="submit" name="Approved" value="Approve"/> 
             <input type="submit" name="Reject" value="Reject" />	 */	?>
		</td>
     </tr>
  <?php }?>  
                      </tbody>
                    </table> 				
                  </div>
                </div>
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