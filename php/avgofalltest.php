<?php

  //$userid='10501a1937';//$_POST['userid'];
  $dept='ecm';//$_POST['dept'];
  $con = mysql_connect("localhost","root","");
  mysql_select_db("test",$con);
 /* $sql=mysql_query("SELECT count
                    from stu_performance
					where id='10501a1915'");
  $row = mysql_fetch_array($sql);*/
	      $marks1=mysql_query("SELECT AVG(apti1+apti2) as Aptitude,AVG(reas1+raes2) as Reasoning,AVG(verb1+verb2) as Verbal,AVG(total1+total2) as Total
		                        from stu_performance
								where dept='ecm'");
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

	
	    
 


?>