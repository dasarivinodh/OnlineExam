<html>
<head>
<script src="http://localhost/start/js/deletingrows.js"></script>
</head>
<body>
<?php
 
   $rdid=$_GET['delid'];
   $con = mysql_connect("localhost","root","");
   mysql_select_db("test",$con);
   $delsql=mysql_query("DELETE 
                        FROM exams_timetable
                        WHERE sno = '$rdid' ");
	if($delsql)
   {	
   $schedule_result=mysql_query("SELECT *
                                 FROM exams_timetable");
								 
	
	echo"<h1>Exams Scheduled As Following...</h1><table>";
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
	}
	mysql_close($con);
   
?>
</body>
</html>