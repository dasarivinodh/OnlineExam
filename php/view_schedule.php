<html>
<head>
<script src="http://localhost/start/js/deletingrows.js"></script>
<link rel='stylesheet' href='http://localhost/start/css/table_style.css' type='text/css' />
<style>
body 
{
  font:16px/1.5em "Segoe UI", Arial, Helvetica, sans-serif;
  background: #bfe8f6;
}

#schedule
{
   margin-left:15%;
   margin-right:15%;
}
table
{
  margin-top:10%;
}
</style>
<script language="javascript" type="text/javascript">
         window.history.forward();
	
</script>
</head>
<body>
<?php
   session_start();
   $adm=$_SESSION['admin'];
   if($adm==1)
   {
   $con = mysql_connect("localhost","root","");
   mysql_select_db("test",$con);
   $schedule_result=mysql_query("SELECT *
                                 FROM exams_timetable");
								 
	echo"<div id='schedule'><h1>Exams Scheduled As Following...</h1><table>";
	
	echo "<tr><th>Date</th><th>Time</th><th>year</th><th>branch</th><th>Exam Type</th><th>Pass Key</th><th>Delete</th></tr>";
	while($res=mysql_fetch_row($schedule_result))
	{
	  $id=$res[0];
	  echo "<tr><td>".$res[1]."</td>";
	  echo "<td>".$res[4]."</td>";
	  echo "<td>".$res[3]."</td>";
	  echo "<td>".$res[2]."</td>";
	  echo "<td>".$res[5]."</td>";
	  echo "<td>".$res[6]."</td>";
	  echo "<td><img id='".$id."' src='http://localhost/start/img/cross.png' height='20' width='25' onclick='delete_table_row(".$id.")'></td>";
	}
	echo"</table></br></br><h3><b>click <img src='http://localhost/start/img/cross.png' height='20' width='25'> For Deleting Schedule</b></h3></div>";
	
	mysql_close($con);
	}
	else
	{
	     echo " You are not Authorized person If You are ADMIN please login <a href='http://localhost/start/admin/adminhome.php'>here</a>";
	}
   
?>
</body>
</html>