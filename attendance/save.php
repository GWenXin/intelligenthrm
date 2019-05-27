<?php
$reason = mysql_escape_string($_POST['reason']);
mysql_query("INSERT INTO attendance (reason) VALUES ($reason))");



                        echo '<script language="javascript">'; 
					    echo 'function Reason(){';
						echo 'var reason = prompt("You are late for work. Please give a reason.", "");';
						echo 'if(reason!=null && reason!=""){';
						echo '$.post("save.php", { reason: reason});';
						        echo '}';
						echo '}';
					    echo '</script>';
?>

