<html>
 <head>
  <!--<style>
    a
	{
	   display:block;
	   text-align:center;
	   height:25px;
	   width:90px;
	   border:5px solid #500008;
	   border-radius:20px;
	   text-decoration:none;
	   background-color:#87cfe6;
	}
	.home
	{
	   margin:20% 20% 0% 40%;
	   overflow:hidden;
	}
  </style>-->
  <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

 <script language="javascript" type="text/javascript">
    window.history.forward();
	
</script>  
 </head>
 <body>
 <span>
	     <?php 
		 session_start();
		 $_SESSION['reg_warning'] = " ";
		 $_SESSION['login_warning'] = " ";
		 $_SESSION['admin_warning'] = " ";
		
		 ?>
	</span>
     <nav id="menu">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="http://localhost/start/php/student_registration.php">Register</a>
       
      </li>
      <li><a href="http://localhost/start/php/student_login.php">Login</a>
       
      </li>
      <li><a href="http://localhost/start/admin/adminhome.php">Admin</a></li>
      <li><a href="http://localhost/start/php/analysisbyid.php">Student Assess</a></li>
    </ul>
</nav>
     </br></br></br></br>
	<h1><center>Welcome To Online Exam</center></h1>
       
	
   </div>
  
 </body>
</html>