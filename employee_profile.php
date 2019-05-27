<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Employee Information
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
/* Customize the label (the container) */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 18px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  color: black;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
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
          <li class="nav-item active">
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
		  <li class="nav-item ">
            <a class="nav-link" href="admin_schedule.php">
              <i class="material-icons">calendar_today</i>
              <p>Schedule</p>
            </a>
          </li>
          <li class="nav-item">
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
	<!--  <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">chat</i>
              <p>ChatBot</p>
            </a>
          </li> -->
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
                  <h4 class="card-title ">Employees Profile</h4>
                  <p class="card-category">Select department search employees</p>
                </div>
        <div class="card-body">
				 <div class ="input-group">
	          	 <button name="register" class= "btn" onclick="window.location.href='register.php'">Register Employee</button>
	             </div>
	       <div class="table-responsive">
            <form name='checkboxform' method='post' action='employee_profile.php'>
		   <label class="container">
            <input type='checkbox' name="department[]" value="account">Account & Finance
			<span class="checkmark"></span>
		   </label>
		   <label class="container">
            <input type='checkbox' name="department[]" value='Customer Service'>Customer Service
			<span class="checkmark"></span>
		   </label>
		   <label class="container">
            <input type='checkbox' name="department[]" value='Design'>Design
			<span class="checkmark"></span>
		   </label>
		   <label class="container">
            <input type='checkbox' name="department[]" value='HR'>Human Resource
			<span class="checkmark"></span>
		   </label> 
		   <label class="container">
            <input type='checkbox' name="department[]" value='IT'>IT
			<span class="checkmark"></span>
		   </label>
		   <label class="container">
			<input type='checkbox' name="department[]" value='Marketing'>Marketing
			<span class="checkmark"></span>
		   </label>
		   <label class="container">
			<input type='checkbox' name="department[]" value='Management'>Management
			<span class="checkmark"></span>
		   </label>
		   <label class="container">
			<input type='checkbox' name="department[]" value='Operation'>Operation
			<span class="checkmark"></span>
		   </label>
		   <label class="container">
			<input type='checkbox' name="department[]" value='Sales'>Sales
			<span class="checkmark"></span>
		   </label>
		   <label class="container">
            <br>
			<button type="submit" name="filter" class= "btn">Filter</button>
		<?php
        $connection = mysqli_connect("localhost", "root", "", "intelligenthrm");		
	    if(isset($_POST['filter'])){
           if(!empty($_POST["department"])){            
            $query = "SELECT * FROM employee WHERE ";
            $count = 0;
			foreach($_POST['department'] as $department){
			if ($count > 0) { $query .= " OR "; }
			if($department == "account"){
				 $query .= "employee.department ='Accounting & Finance'";		 
			 }elseif($department == "Customer Service"){
				  $query .= "employee.department ='Customer Service'";
			 }elseif($department == "Design"){
				  $query .= "employee.department ='Design'";				 
			 }elseif($department == "HR"){
				 $query .= "employee.department ='Human Resource'";
			 }elseif($department == "IT"){
				 $query .= "employee.department ='IT'";
			 }elseif($department == "Marketing"){
				 $query .= "employee.department ='Marketing'";
			 }elseif($department =="Management"){
				$query .= "employee.department ='Management'";
			 }elseif($department == "Operation"){
				$query .= "employee.department ='Operation'";
			 }elseif($department == "Sales"){
				$query .= "employee.department ='Sales'";
		 	 }
			 $count++;
         }
		 }
		
           ?>
			<script type="text/javascript">
			$function(){
				$('.checkbox').on('change',function(){
					$('#form').submit();
				});
			});
			</script>
			<table class="table" style="text-align:center; font-size=18px; ">
		   <thead>
		   <th>ID</th>
		   <th>Name</th>
		   <th>Gender</th>
	       <th>Birthday</th>
	       <th>E-mail</th>
	       <th>Department</th>
		   <th>Position</th>
		   </thead>
		   <tbody>
		   <?php 
		$result = mysqli_query($connection,$query);
		$id = 0;   
		while ($row = mysqli_fetch_array($result))
	         {
				 $id++;
		      //$rows[] = $row;		  
	       ?>
		   <tr>		   
		   <form action="employee_profile.php">
	       <td><?php echo $row['id']; ?></td>
	       <td><?php echo $row['name']; ?></td>
		   <td><?php echo $row['gender']; ?></td>
	       <td><?php echo $row['birthday']; ?></td>
		   <td><?php echo $row['email']; ?></td>
		   <td><?php echo $row['department']; ?></td>
		   <td><?php echo $row['position']; ?></td>
		   </form>
		   </tr>	
		   <?php 
		    } 
		}
	       ?> 		   
		   </tbody>
		   </table>
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