<?php
   
  $userid=$_GET['assesid'];
  $con = mysql_connect("localhost","root","");
  mysql_select_db("test",$con);
  $sql=mysql_query("SELECT count
                    from stu_performance
					where id='$userid'");
  $row = mysql_fetch_array($sql);
  
  if($row['count']==1 || $row['count']==2)
  {
     //echo $row['count'];
     if($row['count']==1)
	 {
	      $marks1=mysql_query("SELECT apti1,reas1,verb1,total1
		                        from stu_performance
								where id='$userid'");
		  $performance1=mysql_fetch_array($marks1);
		  echo "<table border='0.5'>
		  <tr>
		  <th>Test No.</th>
		  <th>Aptitude</th>
		  <th>Reasoning</th>
		  <th>Verbal</th>
		  <th>Total</th></tr>
		  <tr>
		  <td>1).</td>
		  <td>".$performance1['apti1']."</td>
		  <td>".$performance1['reas1']."</td>
		  <td>".$performance1['verb1']."</td>
		  <td>".$performance1['total1']."</td>
		  </tr>"; 	  
		 echo "</table>";
	 }
	 else
	 {   //echo "in else";
	      $marks1=mysql_query("SELECT apti1,reas1,verb1,total1
		                        from stu_performance
								where id='$userid'");
		  $marks2=mysql_query("SELECT apti2,raes2,verb2,total2
		                      from stu_performance
						     where id='$userid'");
				//echo $marks2;
		  $performance1=mysql_fetch_array($marks1);
		  $performance2=mysql_fetch_array($marks2);
		  echo "<table border='0.5'>
		  <tr>
		  <th>Test No.</th>
		  <th>Aptitude</th>
		  <th>Reasoning</th>
		  <th>Verbal</th>
		  <th>Total</th></tr>
		  <tr>
		  <td>1).</td>
		  <td>".$performance1['apti1']."</td>
		  <td>".$performance1['reas1']."</td>
		  <td>".$performance1['verb1']."</td>
		  <td>".$performance1['total1']."</td>
		  </tr>
		  <tr>
		  <td>2).</td>
		  <td>".$performance2['apti2']."</td>
		  <td>".$performance2['raes2']."</td>
		  <td>".$performance2['verb2']."</td>
		  <td>".$performance2['total2']."</td>
		  </tr>"; 	  
		  
		 echo "</table>";
	 
	   
	  
	 }
  }
  else
  {
     echo "Not written any Exam";
  }


?>