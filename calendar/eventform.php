<html>
<head></head>
<style>
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
.btn {
  padding: 13px;
  font-size: 16px;
  font-family:Lucida Console;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
  
}
input[type=submit]{
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<body>
  <form name='eventform' method='POST' action="<?php $_SERVER['PHP_SELF']; ?>?month=<?php echo $month;?>&day=<?php echo $day;?>&year=<?php echo $year;?>&v=true&add=true">
  
    <p style="font-size:18px;">Title : <input type="text" name="title"></p>
	<p style="font-size:18px;">Detail : <textarea name="detail"></textarea></p>
	   
	<button type="submit" name="add" class= "btn">Add Event</button>	      
	   </tr>
	</table>
  </form>
</body>
</html>