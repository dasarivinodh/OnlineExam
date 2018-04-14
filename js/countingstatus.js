function countstatus1()
{
//var i;
  //alert("count");
           var cstat1=0,cstat2=0,cstat3=0,j=1500;
       for(j=1500;j<1540;j++){
    var disco=document.getElementById(j);
	var di=disco.style.backgroundColor;
	
	//alert(di);
      if(disco.style.backgroundColor=='springgreen' || di=='rgb(152,251,152)')
	  {
             cstat1++;//alert("green");
      }

	  else if(disco.style.backgroundColor=='violet' || di=='rgb(238,130,238)')
	  {
	          cstat2++;	 
	  }
	  
	  else
	           cstat3++;
			  // j++;
 }

    disco=document.getElementById("answered");
              disco.innerHTML=cstat1;
			  //alert("answered");
    disco=document.getElementById("review");
              disco.innerHTML=cstat2; 
    disco=document.getElementById("notanswered");
              disco.innerHTML=cstat3;
    
 
 
}