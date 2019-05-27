<?php include ('server1.php') ?>
<!DOCTYPE html>
<html>

<head>
<title>Intelligent Human Resoource Management System</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<style type="text/css">
body{
	background:#b3ffcc;
}
.form-style-5{
    max-width: 500px;   
    background: #f4f7f8;
    margin: 100px auto;
    padding: 50px 50px;
    background: #f4f7f8;
    border-radius: 30px;
    font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-5 fieldset{
    border: none;
}
.form-style-5 legend {
    font-size: 1.4em;
    margin-bottom: 10px;
}
.form-style-5 label {
    display: block;
    margin-bottom: 8px;
}
.form-style-5 input[type="text"],
.form-style-5 input[type="tel"],
.form-style-5 input[type="date"],
.form-style-5 input[type="password"],
.form-style-5 input[type="datetime"],
.form-style-5 input[type="email"],
.form-style-5 input[type="number"],
.form-style-5 input[type="search"],
.form-style-5 input[type="time"],
.form-style-5 input[type="url"],
.form-style-5 textarea,
.form-style-5 select {
    font-family: Georgia, "Times New Roman", Times, serif;
    background: rgba(255,255,255,.1);
    border: none;
    border-radius: 4px;
    font-size: 16px;
    margin: 0;
    outline: 0;
    padding: 7px;
    width: 100%;
    box-sizing: border-box; 
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box; 
    background-color: #e8eeef;
    color:#8a97a0;
    -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    margin-bottom: 30px;
    
}
.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 input[type="tel"]:focus,
.form-style-5 input[type="password"]:focus,
.form-style-5 input[type="datetime"]:focus,
.form-style-5 input[type="email"]:focus,
.form-style-5 input[type="number"]:focus,
.form-style-5 input[type="search"]:focus,
.form-style-5 input[type="time"]:focus,
.form-style-5 input[type="url"]:focus,
.form-style-5 textarea:focus,
.form-style-5 select:focus{
    background: #d2d9dd;
}
.form-style-5 select{
    -webkit-appearance: menulist-button;
    height:35px;
}
.form-style-5 .number {
    background: #1abc9c;
    color: #fff;
    height: 30px;
    width: 30px;
    display: inline-block;
    font-size: 0.8em;
    margin-right: 4px;
    line-height: 30px;
    text-align: center;
    text-shadow: 0 1px 0 rgba(255,255,255,0.2);
    border-radius: 15px 15px 15px 0px;
}

.form-style-5 input[type="submit"],
.form-style-5 input[type="button"]
{
    position: relative;
    display: block;
    padding: 10px 25px 10px 25px;
    color: #FFF;
    margin: 0 auto;
    background: #1abc9c;
    font-size: 16px;
    text-align: center;
    font-style: normal;
    width: 100%;
    border: 1px solid #16a085;
    border-width: 1px 1px 2px;
	border-radius: 5px;
    margin-bottom: 10px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="button"]:hover
{
    background: #109177;
}
.btn {
  padding: 10px;
  font-size: 18px;
  font-family:Helvetica;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}

</style>
</style>
</head>

<body>
  <div class="form-style-5">
<h2 style="text-align: center; font-family:Helvetica;">Intelligent Human Resource Management System</h2>
   <form method="post" action="login.php"">   
    <fieldset>
    <legend><span class="number">1</span>Login</legend>
    
    <input type="email" name="email" placeholder="Email">
	<input type="password" name="password" placeholder="Password">
</fieldset>
<button type="submit" name="login" class= "btn">Login</button> </br> </br>

<!--<input type="button" value="If you need help click HERE to the IntelligentBot." onclick="window.location.href='https://snatchbot.me/webchat/?botID=41660&appID=ynTbobYWc1Kk0cZHZSQa'" /> -->

	 <?php
   if ( isset($error) ) {
       ?>
     <div style = "font-size:11px; color:#cc0000; margin-top:10px"> <?php echo $error; ?> </div>
<?php } ?>
<!--<input type="submit" name="register" value="Register" />-->
</form>
</div>
</body>
</html>