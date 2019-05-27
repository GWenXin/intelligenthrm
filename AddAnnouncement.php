<!DOCTYPE html>
<?php session_start();

  $connection = mysqli_connect("localhost", "root", "", "intelligenthrm");
  if(isset($_POST['cancel']))
  {	  
    $id = $_REQUEST['id'];
    $delete = "DELETE FROM announcement WHERE id = $id";

    if(mysqli_query($connection,$delete))
     {
	  echo "<script type='text/javascript'>alert('You have deleted successfully');</script>";
     }else{
	  echo "<script type='text/javascript'>alert('Error! Please try again');</script>";

     }
  }  ?>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Add Announcement
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
form {
  width: 80%;
  margin: 0px auto;
  padding: 20px; 
  background: white;
  border-radius: 0px 0px 10px 10px;
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

input[type=radio]:checked ~ .check {
  border: 5px solid #0DFF92;
}

input[type=radio]:checked ~ .check::before{
  background: #0DFF92;
}

input[type=radio]:checked ~ label{
  color: #0DFF92;
}
.btn {
  padding: 13px;
  font-size: 16px;
  font-family:Lucida Console;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
input[type=range] {
  -webkit-appearance: none;
  width: 100%;
  margin: 13.8px 0;
}
input[type=range]:focus {
  outline: none;
}
input[type=range]::-webkit-slider-runnable-track {
  width: 100%;
  height: 8.4px;
  cursor: pointer;
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  background: #3071a9;
  border-radius: 1.3px;
  border: 0.2px solid #010101;
}
input[type=range]::-webkit-slider-thumb {
  box-shadow: 1px 1px 1px #410000, 0px 0px 1px #5a0000;
  border: 4.3px solid #000000;
  height: 36px;
  width: 16px;
  border-radius: 3px;
  background: #ebffff;
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -14px;
}
input[type=range]:focus::-webkit-slider-runnable-track {
  background: #5e9cd1;
}
input[type=range]::-moz-range-track {
  width: 100%;
  height: 8.4px;
  cursor: pointer;
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  background: #3071a9;
  border-radius: 1.3px;
  border: 0.2px solid #010101;
}
input[type=range]::-moz-range-thumb {
  box-shadow: 1px 1px 1px #410000, 0px 0px 1px #5a0000;
  border: 4.3px solid #000000;
  height: 36px;
  width: 16px;
  border-radius: 3px;
  background: #ebffff;
  cursor: pointer;
}
input[type=range]::-ms-track {
  width: 100%;
  height: 8.4px;
  cursor: pointer;
  background: transparent;
  border-color: transparent;
  color: transparent;
}
input[type=range]::-ms-fill-lower {
  background: #1d4465;
  border: 0.2px solid #010101;
  border-radius: 2.6px;
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
}
input[type=range]::-ms-fill-upper {
  background: #3071a9;
  border: 0.2px solid #010101;
  border-radius: 2.6px;
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
}
input[type=range]::-ms-thumb {
  box-shadow: 1px 1px 1px #410000, 0px 0px 1px #5a0000;
  border: 4.3px solid #000000;
  height: 36px;
  width: 16px;
  border-radius: 3px;
  background: #ebffff;
  cursor: pointer;
  height: 8.4px;
}
input[type=range]:focus::-ms-fill-lower {
  background: #3071a9;
}
input[type=range]:focus::-ms-fill-upper {
  background: #5e9cd1;
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
	      <li class="nav-item ">
            <a class="nav-link" href="admin_view_leave.php">
              <i class="material-icons">content_paste</i>
              <p>Leave History</p>
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
          <li class="nav-item ">
            <a class="nav-link" href="admin_tracktask.php">
              <i class="material-icons">dvr</i>
              <p>Track Tasks</p>
            </a>
          </li>
          <li class="nav-item active">
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
            <a class="navbar-brand" href="#pablo">Announcement</a>		
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
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
<?php 
//connect to the database	  
 $connection = mysqli_connect("localhost", "root", "", "intelligenthrm");
if(isset($_POST['post'])){

$sql = "INSERT INTO announcement (statement, date, enddate) VALUES ('".$_POST["statement"]."','".$_POST["date"]."','".$_POST["enddate"]."')"; 
$query = mysqli_query($connection,$sql); // Insert query
if($query){
    echo "<script type='text/javascript'>alert('You have post announcement successfully.')</script>";
}else
  {
    echo "<script type='text/javascript'>alert('Error! Try to apply again.')</script>";
  }

}
?>
  <div class="content">
        <div class="container-fluid">
          <div class="row">
           <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Post Announcement</h4>
                  <p class="card-category"> Here is to post announcement.</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                   <form method="post" action="AddAnnouncement.php">
                   <fieldset>
                   <p style="font-size:20px;">Announcement Statement : <textarea rows="8" cols="50" name="statement" id="statement" required></textarea></p>
                   <p style="font-size:20px;">Announcement Date : <input type="date" name="date" id="date" required></p>      
				   <p style="font-size:20px;">Announcement End Date : <input type="date" name="enddate" id="enddate" required></p>     
       
                   <button type="submit" name="post" class= "btn">Post</button> 
                   </fieldset>
                   </form>
                  </div>
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
                        <th>
                          Cancellation
                        </th>						
                      </thead>					  
                      <tbody>
		<?php 
		$connection = mysqli_connect("localhost", "root", "", "intelligenthrm");	
		$sql = "SELECT * FROM announcement";
		$result=mysqli_query($connection,$sql);
		
		while($row = mysqli_fetch_array($result))	
		{
			$rows[] = $row;	 

            foreach ($rows as $row){
            $id = $row["id"];
            $statement = $row["statement"];
            $date = $row["date"];
            } 			
          
		?> 			  
                        <tr>
						<form method="post" action="AddAnnouncement.php">
                          <td><?php echo $id; ?></td>
                          <td><?php echo $statement; ?></td>                       
                          <td class="text-primary"><?php echo $date; ?></td>						  	
						  <td>
						  <input type="hidden" name="id" value="<?php echo $id; ?>">
						  <button type="submit" name="cancel" value="Cancellation"  onclick="return confirm('Are you sure to delete?');" class= "btn">DELETE</button>
						  </td>
                        </tr>
						</form>
  <?php } ?>
                       
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
		</div>
		
      </div>
 
       <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="admin_dashboard.php">
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