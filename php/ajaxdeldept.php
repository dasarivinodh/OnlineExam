<html>
 <head>
	<script src="http://localhost/start/js/del_dep_single.js"></script>
	<link rel='stylesheet' href='http://localhost/start/css/table_style.css' type='text/css' />
 </head>
<body>
<?php
   $rdid=$_GET['deldept'];
   $con = mysql_connect("localhost","root","");
   mysql_select_db("test",$con);
   $getid=mysql_query("SELECT userid,dept FROM registration WHERE sno= '$rdid'");
   $hasrow=mysql_fetch_array($getid);
   echo "done";
   if($getid)
   {
		$delsql=mysql_query("DELETE 
							FROM registration
							WHERE sno = '$rdid' ");
							echo "deletd";
		if($delsql)
		{	
			$uid=$hasrow['userid'];
			$dept_id=$hasrow['dept'];
			$delsql_dept=mysql_query("DELETE 
								FROM stu_performance
								WHERE id = '$uid' ");
			$dept_result=mysql_query("SELECT *
									FROM registration
									where dept='$dept_id'");
	//echo"<h1>Exams Scheduled As Following...</h1><table>";
	//echo "<tr><th>Date</th><th>Time</th><th>year</th><th>branch</th><th>Exam Type</th><th>Pass Key</th><th>Delete</th></tr>";
	echo "<table>
	  <tr>
	  <th>userid</th>
	  <th>name</th>
	  <th>department</th>
	  <th>delete</th>
	  </tr>";  
	while($res=mysql_fetch_row($dept_result))
	{
			$id=$res[0];
			echo "<tr>";
			echo "<td>".$res[2]."</td>";
			echo "<td>".$res[1]."</td>";
			echo "<td>".$res[3]."</td>";
            echo "<td><img id='".$id."' src='http://localhost/start/img/cross.png' onclick='del_selected_dept(".$id.")' height='20' width='25'></td></tr>";
	}
	echo "</table>";
	}
	}
	mysql_close($con);
   
?>
</body>
</html>