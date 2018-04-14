function examsubmitted()
{
     var j=0,m=0;
     for(i=1000;i<1012;i++)
	 {
          var grp=document.getElementsByName(i);
          for(k=0;k<4;k++)
		  {
		        if(grp[k].checked)
				{
				    uans[j]=grp[k].value;
					break;
				}				 
		  }
          j++;	 
     }
     for(i=0;i<12;i++)
	 {	       
		if(cans[i] == uans[i])
		{
		   m++;
		}
	 }
	 //window.location = "http://localhost/start/php/student_login.php";
	 tt = 0;
	 window.location = "http://localhost/start/php/submittimer.php";
}