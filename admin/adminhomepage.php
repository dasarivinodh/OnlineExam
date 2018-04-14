<html>
<head>
<script language="javascript" type="text/javascript">
         window.history.forward();
	
         </script>
</head>
<body>
  <?php
    if($_POST)
	{
        $b=$_POST["na"];  
        $c=$_POST["pwd"];
            
		$con = mysql_connect("localhost","root","");
		mysql_select_db("test",$con);

	if(($b == "tpo1") && ($c == "change"))
	{
	      session_start();
		  $_SESSION['admin']=1;
          header("Location:adminchange.php");      
	}  

  
	else
	{     
		session_start();
		$_SESSION['admin_warning'] = "Sorry !! you entered wrong details";
		header("Location:adminhome.php");  
	}
   }

mysql_close($con);

  ?>
</body>
</html>