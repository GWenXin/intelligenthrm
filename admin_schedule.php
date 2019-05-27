<!DOCTYPE html>
<html lang="en">
<?php   
  session_start();  
  $connection = mysqli_connect("localhost", "root", "", "intelligenthrm");
  ?>
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
<!--  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>
    Schedule
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
  th{
	  height : 10px;
	  text-align : center;
	  font-weight: 700;
  }
  td{
	  height: 10px;
  }
  .today{
	  background : orange;
  }  
</style>
<!-- 
  th:nth-of-type(7),td:nth-of-type(7){
	  color : blue;
  }
  th:nth-of-type(1),td:nth-of-type(1){
	  color : red;
  }
  -->
<body>
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
          <li class="nav-item">
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
	      <li class="nav-item ">
            <a class="nav-link" href="admin_view_leave.php">
              <i class="material-icons">content_paste</i>
              <p>Leave History</p>
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="leave_HR.php">
              <i class="material-icons">face</i>
              <p>HR Employee Leave</p>
            </a>
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="employee_request.php">
              <i class="material-icons">how_to_reg</i>
              <p>Employee Leave</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="admin_attendance.php" target="_blank">
              <i class="material-icons">explore</i>
              <p>Attendance</p>
            </a>
          </li>
		  <li class="nav-item active">
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
		  <li class="nav-item ">
            <a class="nav-link" href="admin_main_report.php">
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
            <a class="navbar-brand" href="#pablo">Scheduling</a>
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
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">account_circle</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
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
                  <h4 class="card-title ">Scheduling</h4>
                  <p class="card-category"> Here is to schedule your timetable.</p>
                </div>
                <div class="card-body">
				<?php include 'calendar/calendar.php';?>
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