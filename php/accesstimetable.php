<?php
      $a=$_GET['date'];
	  $b=$_GET['dep'];
      $d=$_GET['time'];
	  $e=$_GET['examtype'];
	  $f=$_GET['passkey'];	  
      $con = mysql_connect("localhost","root","");
      mysql_select_db("test",$con); 
	  $sql = mysql_query("INSERT INTO
                    	 `exams_timetable` (`date`, `department`, `year`, `time`, `examtype`, `passkey`, `status`)
                                    VALUES ('$a', '$b', '4', '$d', '$e', '$f', '')");
	  if($sql)
          echo "Schedule is Created Sucessfully..<a href='http://localhost/start/php/view_schedule.php' target='_blank'>View Here</a>";       
	  else
          echo "Please Ensure That you Entered Details Correctly ! !";
	  
  ?>
