<?php

  if($_POST)
  {
     
         $sname = $_POST['sname'];
	     $pwd = $_POST['pwd'];
         $c = $_POST['date'];
         $d = $_POST['department'];
         $e = $_POST['year'];
         $f = $_POST['passkey'];
         

     $con = mysql_connect('localhost');
	 mysql_select_db('test');

         $query=mysql_query("select examtype from exams_timetable where department='$d'&&year='$e'&&date='$c'&&passkey='$f'");
         if($query){
                     
               $sql = mysql_query("select pwd 
			                       from registration 
								   where userid = '$sname'");

                      $row = mysql_fetch_array($sql);
	                      if($row["pwd"] == $pwd)
	                        {
                                 $col = mysql_fetch_array($query);
                                 if($col["examtype"] == "easy")
								 {
	                            
	                            header('Location: http://localhost/invigilator pages/phase 2/online_exameasy.html');
                                 }

                                else if($col["examtype"] == "hard"){
                                     header('Location: http://localhost/invigilator pages/phase 2/online_examtough.html');
                                 }
								 else
								   echo $col["examtype"];
	    
	                        }
                          else
	                        echo "enter correct password";

         }
         else{
                         echo "you dont have exam now";
         }



	 
	 
	 
  }
  else
  {
   echo "<link rel='stylesheet' href='form.css' type='text/css' />
   <style>
    .box
	{
	   margin-top:15%;
	}
   </style>
   <div class='box'>
   <form id='student' class='register' method='post' action='student_login_now.php'>
     <div class='element-input' ><label class='title'>User Id<span class='required'>*</span></label><input type='text' name='sname' required='required'/></div>
     <div class='element-password' ><label class='title'>Password<span class='required'>*</span></label><input type='password' id='p1' name='pwd' value='' required='required'/></div>
     <div class='element-date' ><label class='title'>date<span class='required'>*</span></label><input type='text' id='p1' name='date' value='' required='required'/></div>
     <div class='element-department' ><label class='title'>department<span class='required'>*</span></label><input type='text' id='p1' name='department' value='' required='required'/></div>
     <div class='element-year' ><label class='title'>year<span class='required'>*</span></label><select required='required'  name='year' ><option>1</option><option>2</option><option>3</option><option>4</option></select></div>
     <div class='element-passkey' ><label class='title'>passkey<span class='required'>*</span></label><input type='text' id='p1' name='passkey' value='' required='required'/></div>
     <div class='element-submit' ><input type='submit' value='Submit'/></div>
   </form>
   </div>";
  }

 ?>
