<?php
   session_start();
   $adm=$_SESSION['admin'];
   if($adm==1)
   { 
  $dept=$_GET['department1'];
  $test=$_GET['testno1'];// take from user
  $con = mysql_connect("localhost","root","");
  mysql_select_db("test",$con);
 /* $sql=mysql_query("SELECT count
                    from stu_performance
					where id='10501a1915'");
  $row = mysql_fetch_array($sql);*/
  $sql_test_no=mysql_query("SELECT max(count) as count1
                    from stu_performance
					where dept='$dept'");
  $test_no= mysql_fetch_array($sql_test_no);
  $no_of_tests=$test_no['count1'];
  if($no_of_tests==0)
  {
    echo "the test name you entered is not yet done";
  }
  else if($test==1)
  {
     //echo $row['count'];
     
	 
	      $marks1=mysql_query("SELECT AVG(apti1) as Aptitude,AVG(reas1) as Reasoning,AVG(verb1) as Verbal,AVG(total1) as Total
		                        from stu_performance
								where dept='$dept'");
		  $performance1=mysql_fetch_array($marks1);
		  echo "<table>
		  <tr>
		  <th>Aptitude Avg</th>
		  <th>Reasoning Avg</th>
		  <th>Verbal Avg</th>
		  <th>Total Avg</th></tr>
		  <tr>
		  <td>".$performance1['Aptitude']."</td>
		  <td>".$performance1['Reasoning']."</td>
		  <td>".$performance1['Verbal']."</td>
		  <td>".$performance1['Total']."</td>
		  </tr>"; 	  
		 echo "</table>";
	 }
	 else if($test==2)
	 {   //echo "in else";
	     
		  $marks2=mysql_query("SELECT AVG(apti2) as Aptitude,AVG(raes2) as Reasoning,AVG(verb2) as Verbal,AVG(total2) as Total
		                      from stu_performance
						     where dept='$dept'");		 
		  $performance2=mysql_fetch_array($marks2);
		  echo "<table>
		  <tr>
		   <th>Aptitude Avg</th>
		  <th>Reasoning Avg</th>
		  <th>Verbal Avg</th>
		  <th>Total Avg</th></tr>
		  <tr>
		   <td>".$performance2['Aptitude']."</td>
		  <td>".$performance2['Reasoning']."</td>
		  <td>".$performance2['Verbal']."</td>
		  <td>".$performance2['Total']."</td>
		  </tr>"; 	  
		  
		 echo "</table>";
	 
	   
	  
	 }
	 else if($test==3 && $no_of_tests==2)
	 {   //echo "in else";
	     
		 $marks1=mysql_query("SELECT AVG(apti1+apti2) as Aptitude,AVG(reas1+raes2) as Reasoning,AVG(verb1+verb2) as Verbal,AVG(total1+total2) as Total
		                        from stu_performance
								where dept='$dept'");
		  $performance2=mysql_fetch_array($marks1);
		  echo "<table>
		  <tr>
		   <th>Aptitude Avg</th>
		  <th>Reasoning Avg</th>
		  <th>Verbal Avg</th>
		  <th>Total Avg</th></tr>
		  <tr>
		   <td>".$performance2['Aptitude']."</td>
		  <td>".$performance2['Reasoning']."</td>
		  <td>".$performance2['Verbal']."</td>
		  <td>".$performance2['Total']."</td>
		  </tr>"; 	  
		  
		 echo "</table>"; 
	  
	 }
	 else
	 {
	    echo "the test name you entered is not yet done";
	 }
 
  }
  else
  {
	     echo " You are not Authorized to Do This please login <a href='http://localhost/start/admin/adminhome.php'>here</a>";
  }


?>