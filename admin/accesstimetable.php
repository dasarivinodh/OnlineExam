<html>
<head>
</head>
<body>
  <?php
          $a=$_GET["date"];
	  $b=$_GET["dep"];
	  $c=$_GET["year"];
          $d=$_GET["time"];
	  $e=$_GET["examtype"];
	  $f=$_GET["passkey"];
	  
	  
$con = mysql_connect("localhost","root","");
   mysql_select_db("test",$con);
	  
	  $sql = mysql_query("INSERT INTO `exams_timetable` (`date`, `department`, `year`, `time`, `examtype`, `passkey`, `status`)
                                                 VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '')");
	  
	  if($sql){
                   echo "query executed successfully";
          }
	  else{
                    echo "not executed";
          }
	  
	  
	  
	  

  ?>
</body>

</html>