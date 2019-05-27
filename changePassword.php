<!DOCTYPE html>
<html lang="en"> 
<?php
 session_start();
 $_SESSION["user"];
 $connection = mysqli_connect("localhost","root","","intelligenthrm");
 
 if (count($_POST) > 0) {
    $result = mysqli_query($connection, "SELECT * FROM employee WHERE email ='" . $_SESSION["user"] . "' AND password='".md5($_REQUEST["currentPassword"])."'");
 
     echo $_SESSION["user"]."<br>";
    $row = mysqli_fetch_array($result);

    if (mysqli_num_rows($result)>0) {
        mysqli_query($connection, "UPDATE employee set password='" . md5($_REQUEST["newpassword"]) . "' WHERE email='" . $_SESSION["user"] . "'");
        echo "<script type='text/javascript'>alert('Password Changed.');</script>";
    } else
        echo "<script type='text/javascript'>alert('Error! Please try agian.');</script>";
}
?>
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Change Password
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
.input-group input ,select{
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
* {
    box-sizing: border-box;
}

input[type=text],input[type=date], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
	font-family :"Lucida Sans Unicode";
	font-size:16px;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
	font-family :"Lucida Sans Unicode";
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
.btn {
  padding: 13px;
  font-size: 18px;
  font-family:"Lucida Console";
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
</style>
<script>
function validatePassword() {
var currentpassword,newpassword,cpassword,output = true;

currentpassword = document.frmChange.currentpassword;
newpassword = document.frmChange.newpassword;
cpassword = document.frmChange.cpassword;

if(!password.value) {
currentpassword.focus();
document.getElementById("currentpassword").innerHTML = "required";
output = false;
}
else if(!newpassword.value) {
newpassword.focus();
document.getElementById("newpassword").innerHTML = "required";
output = false;
}
else if(!cpassword.value) {
cpassword.focus();
document.getElementById("cpassword").innerHTML = "required";
output = false;
}
if(newpassword.value != cpassword.value) {
newpassword.value="";
cpassword.value="";
newpassword.focus();
document.getElementById("cpassword").innerHTML = "Password not same with the confirm password";
output = false;
} 	
return output;
}

</script>
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
            <a class="nav-link" href="dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="profile.php">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item ">
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
		  <li class="nav-item">
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
		  <li class="nav-item ">
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
<!--            <a class="nav-link" href="#pablo">
                  <i class="material-icons">account_circle</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a> -->
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
                  <h4 class="card-title ">Change Password</h4>
                  <p class="card-category">Employee change password</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
				   <form action="admin_changePassword.php" method="post" name="frmChange" onSubmit="return validatePassword()" align="center">				  
                   <div class="row">
                   <div class="col-25">
                     <label for="Startdate"><h4 style="color:black;">Current Password</h4></label>
                   </div>
                   <div class="col-75">        
		             <input type="password" name="currentPassword" class="txtField" required>
                   </div>
                   </div>
                   <div class="row">
                   <div class="col-25">
                     <label for="Enddate"><h4 style="color:black;">New Password</h4></label>
                   </div>
                   <div class="col-75">
                   <input type="password" name="newpassword" class="txtField" title="Password must contain at least 8 characters, including UPPER/lowercase and numbers"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title : '');  if(this.checkValidity()) form.cpassword.pattern = this.value;" required>
                   </div>
                   </div>
				   
                   <div class="row">
                   <div class="col-25">
                    <label for="country"><h4 style="color:black;">Confirm Password</h4></label>
                   </div>
                   <div class="col-75">
                    <input type="password" name="confirmPassword" class="txtField" title="Please enter the same Password as above" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
					onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title : '');" required>
                   </div>
                   </div>
   
    <div class="row">	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <input type="submit" name="submit" value="Submit">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <input type="submit" name="profile" value="Profile" onclick="location.href='admin_profile.php'"/>  
    </div>
  </form>
        
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