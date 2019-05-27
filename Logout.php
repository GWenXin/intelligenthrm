<?php 
  session_start();  
 
  	unset($_SESSION['name']);	
    unset($_SESSION["password"]);
  	header("location: Login.php");
  
?>