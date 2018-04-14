<?php
  
     $sname1 = $_SESSION[$sname];
     $con = mysql_connect('localhost');
	 mysql_select_db('test');
	 $sql = mysql_query("UPDATE marks 
	         SET exam1 = 0000
			 where userid = '$sname1'",$con);
	 
		if($sql)
	    header('Location: http://localhost/start/student_login.php');
	    else
		 echo sry;
	 
  
?>