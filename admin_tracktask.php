<!DOCTYPE html>
<html lang="en">
<?php session_start();

  $connection = mysqli_connect("localhost", "root", "", "intelligenthrm");
?>
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Track Tasks
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
input, select ,textarea{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;  
  font-size: 18px;
  font-family: Arial;
  border-radius: 5px;
  border: 1px solid gray;
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
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  border: 1px solid #000000;
  height: 36px;
  width: 16px;
  border-radius: 3px;
  background: #ffffff;
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -14px;
}
input[type=range]:focus::-webkit-slider-runnable-track {
  background: #3f89c8;
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
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  border: 1px solid #000000;
  height: 36px;
  width: 16px;
  border-radius: 3px;
  background: #ffffff;
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
  background: #265985;
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
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  border: 1px solid #000000;
  height: 36px;
  width: 16px;
  border-radius: 3px;
  background: #ffffff;
  cursor: pointer;
  height: 8.4px;
}
input[type=range]:focus::-ms-fill-lower {
  background: #3071a9;
}
input[type=range]:focus::-ms-fill-upper {
  background: #3f89c8;
}

</style>
<script>
function confirmation()
{
	answer= confirm("Are you sure to delete?");
	return answer;
	
}
</script>
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
          <li class="nav-item active">
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
            <a class="navbar-brand" href="#pablo">Track Tasks</a>
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
<script>
      function fetch()
      {
	    var get = document.getElementById("get").value;
	    document.getElementById("progress").value = get;
      }
</script>	  
  <div class="content">
        <div class="container-fluid">
          <div class="row">
           <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Tasks Tracking</h4>
                  <p class="card-category"> Here to track your works.</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">                  
                      <table class="table">
                      <thead class=" text-primary">
                        <th>
                        No.
                        </th>
                        <th>
                        Tasks
                        </th>
						<th>
						Description
						</th>
						<th>
						Begin Date
						</th>
                        <th>
                        Deadline
                        </th> 
                        <th>
                        Task member(s)
                        </th> 
                        <th>
                        Status
                        </th>
						<th>
                        Progress (%)
                        </th>
                        <th>
                        Edit
                        </th> 						
                      </thead>
                      <tbody>
					  <?php 
		            $connection = mysqli_connect("localhost", "root", "", "intelligenthrm");	
		            $sql = "SELECT * FROM task";
		            $result=mysqli_query($connection,$sql);
		
		            while($row = mysqli_fetch_array($result))	
		           {
		           	$rows[] = $row;	
                      
                        foreach ($rows as $row){
                          $id = $row["id"];
                          $addtask = $row["addtask"];
                          $description = $row["description"];
						  $begindate = $row["begindate"];
						  $deadline = $row["deadline"];
						  $member = $row["member"];
						  $status = $row["status"];
						  $progress = $row["progress"];
                        }					  
		            ?>
					  	 <tr>
						 <form action="admin_edit_tracktask.php">
                          <td>
                            <?php echo $id; ?>
                          </td>
                          <td>
                             <?php echo $addtask; ?>
                          </td>
						  <td>
                             <?php echo $description; ?>
                          </td>
						  <td>
                             <?php echo $begindate; ?>
                          </td>						  
                          <td>
                            <?php echo $deadline; ?>
                          </td>
						  <td>
                            <?php echo $member; ?>
                          </td>
						  <td class="text-primary">
                           <?php echo $status; ?>
                          </td>
						  <td class="text-primary">
                          <?php echo $progress; ?>
                          </td>
						  <td>
						    <input type="hidden" name="id" value="<?php echo $id; ?>">
					        <button type="submit" name="delete" onclick="return confirm('Are you sure to delete?');" class= "btn">Delete</button>
                            <button type="submit" name="edit1" class= "btn" onclick="location.href='admin_edit_tracktask.php'">Edit</button>
                          </td>						 
                        </tr> 
						</form>
				   <?php }?>
                      </tbody>
                    </table>					 
                  </div>
                </div>
              </div>
            </div>
           </div>  
          <div class="row">
           <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Add Tasks Tracking</h4>
                  <p class="card-category"> Here to add you tasks and projects.</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">                  
                      
			<?php                   
                $connection = mysqli_connect("localhost", "root", "", "intelligenthrm");
                if(isset($_REQUEST['add'])){

                $sql = "INSERT INTO task (addtask, description, begindate, deadline, member, status, progress) VALUES ('".$_POST["addtask"]."','".$_POST["description"]."','".$_POST["begindate"]."','".$_POST["deadline"]."','".$_POST["member"]."','".$_POST["status"]."','".$_POST["progress"]."')"; 

                $query = mysqli_query($connection,$sql); // Insert query
                if($query){
                    echo "<script type='text/javascript'>alert('You have added your task to track task module successfully.');window.location.href='admin_tracktask.php';</script>";
//					header("Refresh:0");
                }else{
                    echo "<script type='text/javascript'>alert('Error! Try to add your task again.')</script>";
                }
             }
            ?>
					<form method="post" action="admin_tracktask.php">
                      <p style="font-size:18px;">Add Task : <input type="text" name="addtask" id="addtask"required></p> 
					  <p style="font-size:18px;">Description : <textarea name='description' id='description' required></textarea></p>
					  <p style="font-size:18px;">Begin Date : <input type="date" name="begindate" id="begindate" required></p> 
                      <p style="font-size:18px;">Deadline : <input type="date" name="deadline" id="deadline" required></p>
                      <p style="font-size:18px;">Task Member(s) : <textarea name='member' id='member' required></textarea></p>
					  <p style="font-size:18px;">Status : <select name="status" id="status">
 					                                      <option value="Executing">Executing</option>
														  <option value="Paused">Paused</option>											  
														  <option value="Finished">Finished</option>   
														  </select></p>			
                      <p style="font-size:18px;">Progress (0% to 100%) : <input type="number" id="progress" name="progress" min="0" max="100"></p>
                      <button type="submit" name="add" class= "btn">Add</button>
                    </form>   
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