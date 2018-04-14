
<?php
    $b=4;;  
    $c=$_GET["department"];         
    $con = mysql_connect("localhost","root","");
    mysql_select_db("test",$con);
	//echo $b;
	//echo $c;
    if($b)
	{
       $querry=mysql_query("SELECT dept 
                          FROM registration 
                          where dept='$c'&&ye='$b'");
       $dpt=mysql_fetch_array($querry);
        if($dpt['dept'])
		{
           $querry=mysql_query("DELETE 
                          FROM registration 
                          where dept='$c'&&ye='$b'");
		   echo "Department Delted Sucessfully !!";
		   
        }
		else
          echo "Aww..!!!The  Department You Entered Doesnt Exist..";
  }  
 else
 {    
     echo "Be Sure You That Entered The Details Correctly..!!!";   
 }
mysql_close($con);

  ?>
