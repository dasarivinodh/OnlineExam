<html>
<head>
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
</head>
<body>
<?php
if($_POST)
{
	$sname= $_POST['sname'];
	$sregd= $_POST['sregd'];
	$sdept= $_POST['sdept'];
	$semail= $_POST['semail'];
	$sphone= $_POST['sphone'];
	$pwd= $_POST['pwd'];
	$p1= $_POST['pwd1'];
		mysql_connect('localhost');
		mysql_select_db('test');
		$sql = "INSERT INTO `registration` (`name`, `userid`, `dept`, `mail`, `phno`, `pwd`) VALUES ('$sname', '$sregd', '$sdept', '$semail', '$sphone', '$pwd');";

		if(mysql_query("$sql"))
		{
		    
			header('Location: http://localhost/start/php/student_login.php');
		}
		else echo mysql_error();
}
	else 
	{
		echo "<link rel='stylesheet' href='form.css' type='text/css' />
		      
		 <div class=''>
		 <form id='student' class='register' method='post' action='student_registration.php'>
		 <div class='element-text' ><h2 class='title'>Student Registration Form</h2></div><br>
		 <div class='element-input' ><label class='title'>Name<span class='required'>*</span></label><input type='text' name='sname' placeholder='Below 20 characters' onkeyup='checkname()' required='required'/><span id='checkname'></span></div>
		 <div class='element-input' ><label class='title'>Registration No.<span class='required'>*</span></label><input type='text' placeholder='Your ID' pattern='[1-3][0-9][5][0][1][A/a][0-9][0-9][0-9]{4
		 
		 
		 
		 
		 
		 
		 
		 
		 }' name='sregd' onkeyup='idcheck()' required='required'/><span id='checkid'></span></div>
	     <div class='element-select' ><label class='title'>Department<span class='required'>*</span></label>
		 <select name='sdept' required='required'>
			<option value='default'>Select</option>
			<option value='ECE'>ECE</option>
			<option value='EEE'>EEE</option>
			<option value='CSE'>CSE</option>
			<option value='IT'>IT</option>
			<option value='MECHANICAL'>MECHANICAL</option>
			<option value='AE'>AE</option>
			<option value='CIVIL'>CIVIL</option>
			<option value='ECM'>ECM</option>
			<option value='M.Tech'>M.Tech</option>
			<option value='M.B.A'>M.B.A</option>
			<option value='M.C.A'>M.C.A</option>
		</select>
		</div>
			
		<div class='element-email' ><label class='title'>Email<span class='required'>*</span></label><input type='email' name='semail' value='' required='required'/></div>
		<div class='element-input' ><label class='title'>Phone No.<span class='required'>*</span></label><input type='text' name='sphone' value='' required='required'  pattern='[7-9][0-9]{9}'/></div>
		<div class='element-password' ><label class='title'>Password<span class='required'>*</span></label><input type='password' id='p1' name='pwd' value='' required='required'/></div>
		<div class='element-password' ><label class='title'>Confirm Password<span class='required'>*</span></label><input type='password' id='p2' name='pwd1' value='' /></div>
		<div class='element-submit' ><input type='submit' value='Submit'/></div>

		</form>
				
			</div>";
	}
?>
</body>
</html>