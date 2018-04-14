<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://localhost/start/css/style.css" media="screen" type="text/css" />
<link rel='stylesheet' href='form.css' type='text/css' />
<script language="javascript" type="text/javascript">
    window.history.forward();
	
</script>
</head>
<body>
<!-- Navigation bar-->
<nav id="menu">
    <ul>
      <li><a href="http://localhost/start/index.php">Home</a></li>
      <li><a href="http://localhost/start/php/student_registration.php">Register</a>
       
      </li>
      <li><a href="http://localhost/start/php/student_login.php">Login</a>
       
      </li>
      <li><a href="http://localhost/start/admin/adminhome.php">Admin</a></li>
      <li><a href="http://localhost/start/php/analysisbyid.php">Student Assess</a></li>
    </ul>
</nav>
<?php

    if($_POST)
    {
     
         date_default_timezone_set('Asia/Calcutta');
	     $sname = $_POST['sname'];
         $pwd = $_POST['pwd'];
         $daet = date("Y-m-d");
		 $time = date('G');
         $key = $_POST['passkey'];
		 
		 $dep_check=substr($sname,6,2);
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
		 //echo $dpt;
         $con = mysql_connect('localhost');
	     mysql_select_db('test');
		 
         $query=mysql_query("select examtype 
		                     from exams_timetable 
							  where department='$dpt'&&time='$time'&&date='$daet'&&passkey='$key'");
		
                    					
         if($query)
		 {            
           $sql = mysql_query("select pwd 
			                   from registration 
							   where userid = '$sname'");
           $row = mysql_fetch_array($sql);
		   
           if($row["pwd"] == $pwd)
           {
                $col = mysql_fetch_array($query);
                      if($col["examtype"] == "easy")
					  {
					     session_start();
						 $_SESSION['uname']=$sname;
						 header('Location: http://localhost/start/exam with submission and update database.php');
                      }      
                      else if($col["examtype"] == "hard")
					  {
					     session_start();
						 $_SESSION['uname']=$sname;
                         header('Location: http://localhost/start/exam with submission and update database.php');
                      }
					  else
					  {
					      session_start();
		                  $_SESSION['login_warning'] = "u are not having exam now";
				          header('Location: http://localhost/start/php/student_login.php');
					  }
					  
	    
	        }
            else
			{
	             session_start();
		         $_SESSION['login_warning'] = "wrong usr name/pwd";
				 header('Location: http://localhost/start/php/student_login.php');
				 
            }
         }
		 
    }
  else
  {
   echo "
   <style>
    .box
	{
	   margin-top:5%;
	}
   </style>
   <div class='box'>
   <form id='student' class='register' method='post' action='student_login.php'>
     <div class='element-text' ><h2 class='title'>Student Login</h2></div><br><div class='error'>";
	     session_start();
		 echo $_SESSION['login_warning'];
		 echo "</div><div class='element-input' ><label class='title'>User Id<span class='required'>*</span></label><input type='text' placeholder='Your 10 digit ID' name='sname' required='required'/></div>
     <div class='element-password' ><label class='title'>Password<span class='required'>*</span></label><input type='password' id='p1' name='pwd' placeholder='********' value='' required='required'/></div>
     <div class='element-password' ><label class='title'>PassKey!!<span class='required'>*</span></label><input type='password' id='p1' name='passkey' placeholder='Pass key (ask admin)' value='' required='required'/></div>
     <div class='element-submit' ><input type='submit' value='Submit'/></div>
	 <a href='http://localhost/start/php/student_registration.php'>Register Here !!!</a>
   </form>
   </div>";
  }

 ?>
</body>
</html>