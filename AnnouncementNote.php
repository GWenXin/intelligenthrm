  <?php 
  // initializing variables
      $statement = "";
	  $date = "";
      $msg = "";     

$connection = mysqli_connect("localhost", "root", "", "intelligenthrm");
$statement=$_POST['statement'];
$date=$_POST['date'];
//if(isset( $_REQUEST ['post'])){
  //$statement = mysqli_real_escape_string($connection, $_REQUEST['statement']);
  //$date = mysqli_real_escape_string($connection, $_REQUEST['date']);
 
  //receive all input values from the form
  //$statement = mysqli_real_escape_string($connection, $_POST['statement']);
  //$date = mysqli_real_escape_string($connection, $_POST['date']);  

$sql = "INSERT INTO announcement (statement, date) VALUES ('".$statement."','".$date."')"; 
$query1 = mysqli_query($connection,$sql); // Insert query
if($query1){
    $msg = '<script type="text/javascript">alert("You have successfully post announcement.")</script>';
}else
  {
    $msg = '<script type="text/javascript">alert("Error! Try to apply again.")</script>';
  }
/*}*/
?>



To all department manager, We will conduct a meeting about "something important". All department manager attendance is compulsory.

Date : 20 Dec 2018 Thursday
Time : 10:30 a.m
Venue : Meeting Room 3