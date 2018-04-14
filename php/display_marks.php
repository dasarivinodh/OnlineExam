<html>
<head>
 <link rel='stylesheet' href='http://localhost/start/css/table_style.css' type='text/css' />
 <style>
  body 
 {
  font:16px/1.5em "Segoe UI", Arial, Helvetica, sans-serif;
  background: #bfe8f6;
 }
#result
{
   margin-left:15%;
   margin-right:15%;
}
 </style>
 <script language="javascript" type="text/javascript">
         window.history.forward();
	
         </script>
		 <script src="http://localhost/start/js/right_disable.js"></script>
</head>
<body>
<h1> Your Score . . . . </h1>
<?php
  
  if($_GET)
  {
     session_start();
	 $_SESSION['user_id']= $_GET['user'];//echo $usr;
	 $_SESSION['apti_marks']= $_GET['aptitude'];//echo $apt;
     $_SESSION['reas_marks']= $_GET['reasoning'];//echo $rea;
     $_SESSION['verb_marks']= $_GET['verbal'];
	 echo "<div id='result'><table><tr><th>Aptitude</th><th>Reasoning</th><th>Verbal</th></tr><tr>";
	 echo "<td>".$_GET['aptitude']."</td>";
	 echo "<td>".$_GET['reasoning']."</td>";
	 echo "<td>".$_GET['verbal']."</td></tr></table></div>";
	 
  }
  //header("Refresh: 10;url=http://www.yourdestination.com/");
   header('Refresh: 10;url=http://localhost/start/php/updateperformance.php');

?>
<h1> All The Best ! ! ! </h1>
</body>
</html>