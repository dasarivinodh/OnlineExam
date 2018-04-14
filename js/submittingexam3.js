function examsubmitted3()
{
       var j=0,m=0,i=0,i;		
       for(i=1000;i<1040;i++)
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
       for(i=0;i<40;i++)
		{
				 if(cans[i] == uans[i])
				 {
			         m++;
			     }
				 if(i == 19 || i == 29 || i == 39 )
				 {
                    if(i == 19)
					{
						   ap=m;m=0;
				    }
			        else if(i == 29)
					{
						    re=m;m=0;
				    }
                    else if(i == 39)
					{
					        vb=m;m=0;
				    }
                 }
            
	    }
		update();
     
}