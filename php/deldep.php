<html>
<head>
<link rel='stylesheet' href='http://localhost/start/css/table_style.css' type='text/css' />
<script src="http://localhost/start/js/del_dep_single.js"></script>
<style>
body 
{
  font:16px/1.5em "Segoe UI", Arial, Helvetica, sans-serif;
  background: #bfe8f6;
}
#deldeprt
{
   margin-left:15%;
   margin-right:15%;
}
</style>
</head>
<body>
<?php
   session_start();
   $adm=$_SESSION['admin'];
   if($adm==1)
   {
	if($_GET)
	{
    if($_GET['sdept'])
	{
	  $dpt=$_GET['sdept'];
	  $con=mysql_connect('localhost','root','');
      mysql_select_db('test',$con);	
      $sql=mysql_query("SELECT * FROM registration WHERE dept='$dpt'");
      
	  echo "<div id='deldeprt'><table>
	  <tr>
	  <th>userid</th>
	  <th>name</th>
	  <th>department</th>
	  <th>delete</th>
	  </tr>";  
	  while($res=mysql_fetch_row($sql))
	  { 
	        $id=$res[0];
			echo "<tr>";
			echo "<td>".$res[2]."</td>";
			echo "<td>".$res[1]."</td>";
			echo "<td>".$res[3]."</td>";
            echo "<td><img id='".$id."' src='http://localhost/start/img/cross.png' onclick='del_selected_dept(".$id.")' height='20' width='25'></td></tr>";
	
	  
	  }
	  echo "</table></div>";
	}
  }
  }
  else
  {
	     echo " You are not Authorized to Do This please login <a href='http://localhost/start/admin/adminhome.php'>here</a>";
  }
?>
</body>
</html>