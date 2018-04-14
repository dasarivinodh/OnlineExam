<!DOCTYPE html>
<html>
<head>
<script language="javascript" type="text/javascript">
</script>
</head>
<body>
<?php

         session_start();
         $sql=0;
         $usr= $_SESSION['user_id'];//echo $usr;
	     $apt= $_SESSION['apti_marks'];//echo $apt;
         $rea= $_SESSION['reas_marks'];//echo $rea;
         $ver= $_SESSION['verb_marks'];//echo $ver;
		 $tot=$apt+$rea+$ver;//echo $total;
		 $dep_check=substr($usr,6,2);
		                  if($dep_check == '01')
		                          $dpt='CIVIL';
	                      else if($dep_check == '02')
		                          $dpt='EEE';
	                      else if($dep_check == '03')
		                          $dpt='MECH';
	                      else if($dep_check == '04')
		                          $dpt='ECE';
	                      else if($dep_check == '05')
		                          $dpt='CSE';
	                      else if($dep_check == '12')
		                          $dpt='IT';
	                      else if($dep_check == '19')
		                          $dpt='ECM';	
	                      else if($dep_check == '21')
		                          $dpt='AE';			
			              $daet = date("Y-m-d");
         $con = mysql_connect('localhost','root','');
	     mysql_select_db('test');
		 $chkcnt=mysql_query("select MAX(count) as cont from stu_performance where dept='$dpt'");
		 $chnt=mysql_fetch_array($chkcnt);
		 //echo $chnt['cont'];
		 if($chnt['cont']==0)
		 {
		 $querry="UPDATE `test`.`stu_performance` SET `apti1` = '$apt',
`reas1` = '$rea',
`verb1` = '$ver',
`total1` = '$tot' WHERE `stu_performance`.`id` = '$usr'";
	     $sql=mysql_query($querry);
		}
		else if($chnt['cont']==1)
		{
		  $querry="UPDATE `test`.`stu_performance` SET `apti2` = '$apt',
`raes2` = '$rea',
`verb2` = '$ver',
`total2` = '$tot' WHERE `stu_performance`.`id` = '$usr'";
	     $sql=mysql_query($querry);
		}
		else if($chnt['cont']==2)
		{
		   
		    header('Location: http://localhost/start/index.php');
		}
           //echo $aa;			   
	     if($sql)
	     {
              $cntup=mysql_query("update `test`.`stu_performance` SET count = count + 1 where `stu_performance`.`id` = '$usr'");
			  if($cntup)
			  {                 
			        
						  $state="yes";
			         $vinu=mysql_query("update `test`.`exams_timetable` 
					                    SET status = '$state' 
										where `exams_timetable`.`department` = '$dpt'&&`exams_timetable`.`date` = '$daet'");
				    if($vinu)
					{
					      header('Location: http://localhost/start/index.php');
				    }
					else
					{
					     header('Location: http://localhost/start/index.php');
					}
			  }
         }
	     else
		 {
                echo mysql_error();
         }  
		 mysql_close($con);
	
  

  ?>
</body>
</html>