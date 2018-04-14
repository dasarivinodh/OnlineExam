<html>
<head>
<link rel='stylesheet' href='form.css' type='text/css' />
<link rel='stylesheet' href='http://localhost/start/css/table_style.css' type='text/css' />
<link rel="stylesheet" href="http://localhost/start/css/style.css" media="screen" type="text/css" />
<script src="http://localhost/start/js/assesing.js"></script>

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

<div  id="usrassess" >
<form  id='student' class='register'>
     <div class='element-text' ><h2 class='title'>Asses By Id</h2></div><br>
     <div class='element-input' ><label class='title'>User Id<span class='required'>*</span></label><input type='text' id='user_id' name='na' /></div>
     <div class='element-submit' ><input type='button' onclick='checkidlen()' value='Go!!'/></div>
     <span id="assesment"></span>
</form>
				
</div>

  
</body>
</html>