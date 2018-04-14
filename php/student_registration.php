<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://localhost/start/css/style.css" media="screen" type="text/css" />
<link rel='stylesheet' href='form.css' type='text/css' />
<script type="text/javascript">
function checkname()
 {
    var name=document.forms[0].sname.value;
	if(name.length<=20)
	  document.getElementById('checkname').innerHTML="<b style='color:green;'>Valid </b>";
	if(name.length>20||name.length==0)
	 document.getElementById('checkname').innerHTML="<b style='color:red;'>Not Valid</b>";
 }
 function idcheck()
 {
   var name=document.forms[0].sregd.value;
   //alert(name);
	if(name.length==10)
	  document.getElementById('checkid').innerHTML="<b style='color:green;'>Valid </b>";
	if(name.length==0||name.length>10||name.length<10)
	  document.getElementById('checkid').innerHTML=" <b style='color:red;'>Not Valid</b>";
	
 }
</script>
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
	$sname= $_POST['sname'];
	$sregd= $_POST['sregd'];
	$sdept= $_POST['sdept'];
	$semail= $_POST['semail'];
	$sphone= $_POST['sphone'];
	$pwd= $_POST['pwd'];
	
		mysql_connect('localhost');
		mysql_select_db('test');
		$sql = "INSERT INTO `registration` (`name`, `userid`, `dept`, `mail`, `phno`, `pwd`, `ye`) VALUES ('$sname', '$sregd', '$sdept', '$semail', $sphone, '$pwd', 4);";

		if(mysql_query("$sql"))
		{
		    $create_stu_id=mysql_query( "INSERT INTO stu_performance(id,dept)
			                             VALUES('$sregd','$sdept') ");
			if($create_stu_id)
			{
			    session_start();
		        $_SESSION['login_warning'] = "Registration Sucessfull . .";
				header('Location: http://localhost/start/php/student_login.php');
				
			}
		}
		else 
		{
		   session_start();
		   $_SESSION['reg_warning'] = "Sorry Some thing Went Wrong Fill the Details Carefully";
		   header('Location: http://localhost/start/php/student_registration.php');
		 
		}
}
	else 
	{
		echo "
		 <div class=''>
		 <form id='student' class='register' method='post' action='student_registration.php'>
		 <div class='element-text' ><h2 class='title'>Student Registration Form</h2></div><br>
		 <div class='error'>";
		 session_start();
		 echo $_SESSION['reg_warning'];
		 echo "</div>
		 <div class='element-input' ><label class='title'>Name<span class='required'>*</span></label><input type='text' name='sname' placeholder='Below 20 characters' onkeyup='checkname()' pattern='^[a-z,A-Z][a-z,A-Z,0-9-_\.]{1,20}$' required='required'/><span id='checkname'></span></div>
		 <div class='element-input' ><label class='title'>Registration No.<span class='required'>*</span></label><input type='text' placeholder='Your 10 digit ID' pattern='[1-3][0-9][5][0][1/5][A/a][0-9]{4}' name='sregd' onkeyup='idcheck()' required='required'/><span id='checkid'></span></div>
	     <div class='element-select' ><label class='title'>Department<span class='required'>*</span></label>
		 <select name='sdept' required='required'>
			<option value='default'>Select</option>
			<option value='ECM'>ECM</option>
			<option value='ECE'>ECE</option>
			<option value='EEE'>EEE</option>
			<option value='CSE'>CSE</option>
			<option value='IT'>IT</option>
			<option value='MECH'>MECH</option>
			<option value='AE'>AE</option>
			<option value='CIVIL'>CIVIL</option>
		</select>
		</div>
			
		<div class='element-email' ><label class='title'>Email<span class='required'>*</span></label><input type='email' name='semail' value='' placeholder='mail@mail.com' required='required'/></div>
		<div class='element-input' ><label class='title'>Phone No.<span class='required'>*</span></label><input type='text' name='sphone' value='' required='required' placeholder='9876541230' pattern='[7-9][0-9]{9}'/></div>
		<div class='element-password' ><label class='title'>Password<span class='required'>*</span></label><input type='password' id='p1' name='pwd' placeholder='*********' value='' required='required'/></div>
		<div class='element-submit' ><input type='submit' value='Submit'/></div>
        <a href='http://localhost/start/php/student_login.php'>Already Registered..</a>
		</form>
				
		</div>";
		
	}
?>
</body>
</html>