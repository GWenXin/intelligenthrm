<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "intelligenthrm");
$query = "SELECT * FROM employee WHERE name='".$_SESSION["user"]."'";

 $result=mysqli_query($connection,$query);
 $row=mysqli_fetch_array($result);
 
 function number()
{
    global $connection;
    $num = "SELECT COUNT(*) FROM employee";
    if ($result=mysqli_query($connection, $num)){
        $row= mysqli_fetch_array($result);
        $rowcount = $row[0];
        mysqli_free_result($result);
    }
    return $rowcount;
}

 function attendance()
{
    global $connection;
    $attend = "SELECT COUNT(*) as count_today FROM attendance WHERE time_in >= curdate()";
    if ($result1=mysqli_query($connection, $attend)){
        $row1= mysqli_fetch_array($result1);
        $rowcount1 = $row1[0];
        mysqli_free_result($result1);
    }
    return $rowcount1;
}

?> 
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Dashboard
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
          <li class="nav-item active">
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
          <li class="nav-item ">
           <a class="nav-link" href="attendance.php" target="_blank">
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
            <a class="nav-link" href="tracktask.php">
              <i class="material-icons">dvr</i>
              <p>Track Tasks</p>
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="main_report.php">
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
           <a class="navbar-brand" href="#pablo"> Welcome, <?php echo $_SESSION['user'];?></a>	
          </div>               
          <div class="collapse navbar-collapse justify-content-end">      
          <?php include 'clock.php'; ?>		  
            <ul class="navbar-nav">        
              <li class="nav-item">
			  <a class="nav-link" href="Logout.php">
                  <i class="material-icons">exit_to_app</i>
                  <p class="d-lg-none d-md-block">
                    Logout
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
		 <div class="col-md-4">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">accessibility_new</i>
                  </div>
                  <p class="card-category">Number Of Employees</p>
                  <h3 class="card-title"><?php echo number(); ?> Employees</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                     <i class="material-icons">update</i><?php echo date("F j , Y-m-d");?>
                  </div>
                </div>
              </div>
            </div>
			 <div class="col-md-4">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">event_seat</i>
                  </div>
                  <p class="card-category">Employees Daily Attendance</p>
                  <h3 class="card-title"><?php echo attendance(); ?> Employees</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i>Just Updated <?php echo date("F j , Y-m-d");?>
                  </div>
                </div>
              </div>
            </div>
		</div>
		<div class="row">
           <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Announcement</h4>
                  <p class="card-category"> Here is public notification.</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          No.
                        </th>
                        <th>
                          Statement
                        </th>
                        <th>
                          Date
                        </th>                        
                      </thead>
                      <tbody>
                      <?php 
		$connection = mysqli_connect("localhost", "root", "", "intelligenthrm");	
		$sql = "SELECT * FROM announcement WHERE enddate >= now()";
		$result=mysqli_query($connection,$sql);
		
		while($row = mysqli_fetch_array($result))	
		{
			$rows[] = $row;	          
          
		?> 			  
                        <tr>
						<form method="post" action="admin_dashboard.php">
                          <td><?php echo$row['id']; ?></td>
                          <td><?php echo $row['statement']; ?></td>                       
                          <td class="text-primary"><?php echo $row['date']; ?></td>
                        </tr>
  <?php } ?>
                       </form>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           </div> 
		<div class="row">
    <!--<div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Leave Available</h4>
                  <p class="card-category">Here to check how many leave available.</p>
                </div>
                <div class="card-body table-responsive">
                 <?php include 'dashboard_leave_pie.php';?>
                </div>
              </div>
            </div>  --> 
    <!--    <div class="col-lg-6 col-md-12">-->
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
				  <h4 class="card-title ">Comparison of leave by months</h4>
                  <p class="card-category"> Here is the Comparison of leave taken by months.</p>                  
                </div>
                <div class="card-body table-responsive">
				 <?php include 'gender_leave_month.php';?>
                 
                </div>
              </div>
            </div>			
         </div>
         <div class="row">
           <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Difference Between Department And Leave Taken</h4>
                  <p class="card-category"> Here is difference between department and leave taken.</p>
                </div>
                <div class="card-body">
                  <?php include 'combo.php';?>
                </div>
              </div>
            </div>
           </div> 
	       <div class="row">
           <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Comparison Of Reason Employee Late Sign In For Work</h4>
                  <p class="card-category"> Here is population of latecomer shown by reasons.</p>
                </div>
                <div class="card-body">
                  <?php include 'late.php';?>
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
<link href="https://snatchbot.me/sdk/webchat.css" rel="stylesheet" type="text/css"><script src="https://snatchbot.me/sdk/webchat.min.js"></script><script> Init('?botID=41660&appID=webchat', 600, 600, 'https://dvgpba5hywmpo.cloudfront.net/media/image/FcqymJTsC3WzYwtb6nWrV1Qef', 'rounded', '#00AFF0', 120, 62, 43.4, '', '1', '#FFFFFF', '#FFFFFF', 1); /* for authentication of its users, you can define your userID (add &userID={login}) */ </script>
                        
</html>