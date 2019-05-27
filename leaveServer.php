<?php
session_start();
$msg="";
$connection = mysqli_connect("localhost", "root", "", "intelligenthrm");

if(isset( $_REQUEST ['apply'])){
$startdate=$_REQUEST['startdate']; // Fetching Values from URL.
$enddate=$_REQUEST['enddate'];
$duration=$_REQUEST['duration'];
$leavetype=$_REQUEST['leavetype'];
$comment=$_REQUEST['comment'];

/*echo $startdate."<br>";
echo $enddate."<br>";
echo $duration."<br>";
echo $leavetype."<br>";
echo $comment."<br>";
echo $_SESSION["uid"]."<br>";*/


$sql = "INSERT INTO leaveapplication(startdate, enddate, duration, leavetype, comment, employee_id, status)
VALUES ('".$_POST["startdate"]."','".$_POST["enddate"]."','".$_POST["duration"]."','".$_POST["leavetype"]."','".$_POST["comment"]."')";
$query1 = mysqli_query($connection,$sql); // Insert query
 if($query1){
    $msg = '<script type="text/javascript">alert("You have Successfully Apply.")</script>';

}else
  {
    $msg = '<script type="text/javascript">alert("Error! Try to apply again.")</script>';
  }
}
?>