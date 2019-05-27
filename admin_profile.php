<!DOCTYPE html>
<html lang="en">
<?php   session_start();  ?>
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Personal Information
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
a {
  color: #6699ff; 
  }
  #img_div{
	  width:80%;
	  padding:5px;
	  margin:15px auto;
	  border:1px solid #cbcbcb;
  }
  #img_div:after{
	  content:"";
	  display : block;
	  clear:both;
  }
  #img{
	  float:left;
	  margin: 5px;
	  width:300px;
	  height:140px;
  }

</style>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="green" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
         <!-- data-color= purple or azure or green or orange or danger
              add the picture use data-image tag
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
          <li class="nav-item active">
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
            <a class="nav-link" href="attendance.php" target="_blank">
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
            <a class="navbar-brand" href="#pablo">Personal Information</a>
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
              </li>
            </ul>
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
                  <h4 class="card-title ">Your Profile</h4>
                  <p class="card-category">Employee profile information</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
<?php 

  $connection = mysqli_connect("localhost", "root", "", "intelligenthrm");
  $sql = "SELECT * FROM employee WHERE name ='".$_SESSION["user"]."'";
  $result = mysqli_query($connection,$sql);
 if (mysqli_num_rows($result) > 0) 
  {
 if($row = mysqli_fetch_assoc($result))
 {
     $name = $row['name'];
     $id = $row['id'];
     $gender = $row['gender'];   
     $birthday = $row['birthday'];
     $email = $row['email'];   
     $phone = $row['phone'];
     $department = $row['department'];
     $position = $row['position'];
	 $_SESSION['user']=$name;	  
  }
 }
	 	 
    $email=$_SESSION['user'];
	
    $profile=mysqli_query($connection,"Select * from employee where email='$email'");
	if($row = mysqli_fetch_assoc($profile))
{

 ?>
    <form name="profile" class="profile"  method="POST">
      <table width="400" border="0" align="center" cellpadding="0">  
    
      <tr>       
        <td width="82" valign="top"><div align="left"><h4>Name : </h4></div></td>
        <td width="165" valign="top"><?php echo $row['name']; ?></td>  
      </tr>
      <tr>
        <td valign="top"><div align="left"><h4>ID :</h4></div></td>
        <td valign="top"><?php echo $row['id']; ?></td> 
      </tr>	  
	  <tr>
        <td valign="top"><div align="left"><h4>Gender : </h4></div></td>
        <td valign="top"><?php echo $row['gender']; ?></td> 
      </tr>
	  <tr>
        <td valign="top"><div align="left"><h4>Birthday :</h4></div></td>
        <td valign="top"><?php echo $row['birthday']; ?></td> 
      </tr>
	  <tr>
        <td valign="top"><div align="left"><h4>Email : </h4></div></td>
        <td valign="top"><?php echo $row['email']; ?></td> 
      </tr>
	  <tr>
        <td valign="top"><div align="left"><h4>Phone : </h4></div></td>
        <td valign="top"><?php echo $row['phone']; ?></td> 
      </tr>
      <tr>
        <td valign="top"><div align="left"><h4>Department : </h4></div></td>
        <td valign="top"><?php echo $row['department']; ?></td> 
      <tr>
        <td valign="top"><div align="left"><h4>Position : </h4></div></td>
        <td valign="top"><?php echo $row['position']; ?></td> 
      </tr>	  
	  <tr>
      <td><input type="button" name="editprofile" value="Edit Profile" class= "btn" onclick="location.href='admin_edit_profile.php'"/></td>     
	  <td><input type="button" name="changepassword" value="Change Password" class= "btn" onclick="location.href='admin_changePassword.php'"/></td>	
	</tr>
    </table>
	<br/>
<?php } ?>
</form> 
             </div>
            </div>
           </div>
          </div>
		  <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Leave Available</h4>
                  <p class="card-category">Here to check how many leaves available.</p>
                </div>
                <div class="card-body table-responsive">
                 <?php include 'dashboard_leave_pie.php';?>
				 
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