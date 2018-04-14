<html>
<head>
<link rel='stylesheet' href='form.css' type='text/css' />
<link rel="stylesheet" href="http://localhost/start/css/style.css" media="screen" type="text/css" />
<style>
    .box
	{
	   margin-top:5%;
	 }
   </style>
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
<br>
 <div class='box'>
<form id='student' class='register' method='post' action='adminhomepage.php'>
     <div class='error'>
	 <?php
    	 session_start();
       	 echo $_SESSION['admin_warning']; 
	 ?>
	</div>
     <div class='element-text' ><h2 class='title'>Admin login</h2></div><br>
     <div class='element-input' ><label class='title'>User Id<span class='required'>*</span></label><input type='text' name='na' required='required'/></div>
     <div class='element-password' ><label class='title'>Password<span class='required'>*</span></label><input type='password' id='p1' name='pwd' value='' required='required'/></div>
     <div class='element-submit' ><input type='submit' value='Submit'/></div>
   </form>
   </div>
</body>
</html>