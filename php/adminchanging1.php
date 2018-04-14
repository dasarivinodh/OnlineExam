
  <?php
  session_start();
   $adm=$_SESSION['admin'];
   if($adm==1)
   { 
  $a=$_GET["na"];        
  if($a)
  {
       		
       $con = mysql_connect("localhost","root","");
       mysql_select_db("test",$con);
	   
       $querry=mysql_query("SELECT userid FROM `test`.`registration` where `registration`.`userid`='$a'");
	   $res=mysql_fetch_array($querry);
       if($res['userid'])
	   {
	        $querry=mysql_query("DELETE FROM `test`.`registration` where `registration`.`userid`='$a'");
	        $stuperformance=mysql_query("DELETE FROM `test`.`stu_performance` where `stu_performance`.`id`='$a'");
			if($stuperformance)
				echo "User ".$a." is Sucessfully Deleted.";
       }
	   else
	   {
          echo "User ".$a." Doesnt Exist ";
	   }
   }
 else
 {    
     echo "enter id  to delete from database";   
 }
mysql_close($con);
}
else
  {
	     echo " You are not Authorized to Do This please login <a href='http://localhost/start/admin/adminhome.php'>here</a>";
  }

  ?>
