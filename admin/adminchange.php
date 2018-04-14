<!DOCTYPE html>
<html>
<head>
<script>
  var xmldeldepuser;
  var xmldeluser;
  var xmlexamschedule;
  var xmlaanalyzedepttest;
</script>
<link rel='stylesheet' href='http://localhost/start/css/table_style.css' type='text/css' />
<link rel='stylesheet' href='form.css' type='text/css' />
<link rel="stylesheet" href="http://localhost/start/css/style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="jquery-ui.css">
<script src="http://localhost/start/js/examschedule.js"></script>
<script src="http://localhost/start/js/deletingusr.js"></script>
<script src="http://localhost/start/js/deletingdep.js"></script>
<script src="http://localhost/start/js/analyzedepttest.js"></script>
<script src="http://localhost/start/js/right_disable.js"></script>
<script src="jquery-1.9.1.js"></script>
<script src="jquery-ui.js"></script>
<script language="javascript" type="text/javascript">
         window.history.forward();
	
</script>
<script>
$(function() {
$( "#datepicker" ).datepicker({ dateFormat: "yy-mm-dd" });
});
</script>

<script>
               
        function one11()
		{
	    
			var p=document.getElementById("SCHEDULE");
            var  q=document.getElementById("usrdel");
	        var r=document.getElementById("yeardel");	
		    var s=document.getElementById("analysis_id");	
		    var welmsg=document.getElementById("welcome_msg");	
			welmsg.style.display="none";
		    p.style.display="block";
			q.style.display="none";
		    r.style.display="none";
		    s.style.display="none";
		    welmsg.style.display="none";
			
		}   

		function two11()
		{

		    var p=document.getElementById("SCHEDULE");
            var  q=document.getElementById("usrdel");
	        var r=document.getElementById("yeardel");	
		    var s=document.getElementById("analysis_id");
			var welmsg=document.getElementById("welcome_msg");	
			welmsg.style.display="none";			
		    p.style.display="none";
			q.style.display="block";
		    r.style.display="none";
		    s.style.display="none";
	
		}
		
		function three11()
		{

		    var p=document.getElementById("SCHEDULE");
            var  q=document.getElementById("usrdel");
	        var r=document.getElementById("yeardel");
            var s=document.getElementById("analysis_id");						
		    var welmsg=document.getElementById("welcome_msg");	
			welmsg.style.display="none";
			p.style.display="none";
			q.style.display="none";
		    r.style.display="block";	
		    s.style.display="none";	
		
		}
		function analysis()
		{
		   
		    var p=document.getElementById("SCHEDULE");
            var  q=document.getElementById("usrdel");
	        var r=document.getElementById("yeardel");			
	        var s=document.getElementById("analysis_id");			
		    var welmsg=document.getElementById("welcome_msg");	
			welmsg.style.display="none";
			p.style.display="none";
			q.style.display="none";
		    r.style.display="none";	
		    s.style.display="block";	
		}
		
		
</script>
</head>
<body>
        <!--header to navigate -->
	<nav id="menu">
    <ul>
      <li><a href="http://localhost/start/index.php">Home</a></li>
      <li><a href="#SCHEDULE" id="s" onclick="one11()">Schedule</a></li>
      <li><a href="#usrdel" id="d" onclick="two11()">Del Students</a></li>
      <li><a href="#yeardel" id="db" onclick="three11()">Del Batch</a></li>
      <li><a href="#analysis_id" id="ana" onclick="analysis()">Analyze</a></li>
    </ul>
	</nav>
	</br></br></br>
	<h1 id='welcome_msg'><center>Welcome To Admin Page</center></h1>
<!--Exam Schedule-->
<div class='box' id='SCHEDULE' style="display:none;">
		 <form  id='student' class='register' method='post' action=''>
		 <div class='element-text' ><h2 class='title'>Schedule Exam (<a href="http://localhost/start/php/view_schedule.php" target="_blank">View</a>)</h2></div><br>
		 <div class='element-input' ><label class='title'>Date<span class='required'>*</span></label><input type='text' id='datepicker' name='date' placeholder='yyyy-mm-dd' required='required'/><span id='checkname'></span></div>
	     <div class='element-select' ><label class='title'>Department<span class='required'>*</span></label>
		 <select name='sdept' id='dept' required='required'>
		 <option value='default'>Select</option>
			<option value='ECE'>ECE</option>
			<option value='EEE'>EEE</option>
			<option value='CSE'>CSE</option>
			<option value='IT'>IT</option>
			<option value='MECH'>MECH</option>
			<option value='AE'>AE</option>
			<option value='CIVIL'>CIVIL</option>
			<option value='ECM'>ECM</option>
		</select>
		</div>
		<div class='element-input' ><label class='title'>Time<span class='required'>*</span></label><input type='text' id='time' name='time' value='' placeholder='Enter hours(In 24hr format)'  required='required'/></div>
		<div class='element-input' ><label class='title'>Exam Type<span class='required'>*</span></label>
		<select name='examtype' id='type' required='required'>
			<option value='default'>Select</option>
			<option value='easy'>easy</option>
			<option value='hard'>hard</option>
		</select>
		</div>
		<div class='element-password' ><label class='title'>Passkey<span class='required'>*</span></label><input type='password' id='passkey' placeholder='Enter Pass Key' name='passkey' value='' required='required'/></div>
		<div class='element-submit' ><input type='button' onclick="examschedule()" value='Enter'/></div>
        <span id="scheduled">
		</span>	
		</form>
        			
</div>
<!--Delete individual student entries-->
<div  id="usrdel" style="display:none;">
<form  id='student' class='register'>
     <div class='element-text' ><h2 class='title'>Delete User's</h2></div><br>
     <div class='element-input' ><label class='title'>User Id<span class='required'>*</span></label><input type='text' id='uid' name='na' placeholder='Enter 10 digit User ID' required='required'/></div>
     <div class='element-submit' ><input type='button' onclick='deluser()' value='Submit'/></div>
     <div id="delusr"></div>
</form>
				
</div>


   
<!--Delete Year Department entries-->
<div  id='yeardel' style="display:none;">
   <form id='student' target="_blank" class='register'  action='http://localhost/start/php/deldep.php' method='GET'>
     <div class='element-text' ><h2 class='title'>Delete Students</h2></div><br>
     <div class='element-input' ><label class='title'>Dept.<span class='required'>*</span></label>
	 <select name='sdept' id='depdel' required='required'>
			<option value='ECE'>ECE</option>
			<option value='ECM'>ECM</option>
			<option value='EEE'>EEE</option>
			<option value='CSE'>CSE</option>
			<option value='IT'>IT</option>
			<option value='MECH'>MECH</option>
			<option value='AE'>AE</option>
			<option value='CIVIL'>CIVIL</option>
		</select>
	 </div></br></br>
     <div class='element-submit' ><input type='submit' value='Delete'/></div>
   <div id="deldepusr">				
   </div>
   </form>
 <!--Analysis of marks-->  
</div>
<div  id="analysis_id" style="display:none;">
<form  id='student' class='register'>
     <div class='element-text' ><h2 class='title'>Enter department and Test you want to analyze <br> <a href="http://localhost/start/sms/index.html" style='text-decoration:none;'>Send The Result As SMS</a></h2></div><br>
     <div class='element-input' ><label class='title'>Dept.<span class='required'>*</span></label>
	 <select name='sdept' id='select_dept' required='required'>
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
	 <div class='element-input' ><label class='title'>Test No.<span class='required'>*</span></label>
	 <select name='year' id='select_test' required='required'>
			<option value='1'>Test1</option>
			<option value='2'>Test2</option>
			<option value='3'>Both</option>
		</select>
	 </div>
     <div class='element-submit' ><input type='button' onclick='analyze_db()' value='Submit'/></div>
     <div id="result_test"></div>
</form>
 				
</div>






</body>
</html>