		
function optiondeselected(x){ 
  //alert("bye"); 
  var i;
  x=parseInt(x);
  var y=x;
  x=x+500; 
  var v=document.getElementById(x);  
   v.style.backgroundColor="#87cfe6";
   
  // alert("bye");
  var vv=document.getElementsByName(y);
  for(i=0;i<4;i++)
  {
  
     
     if(vv[i].checked)
	 {  
	   //alert("clr");
        vv[i].checked=false;
		vv[i].checked="";
        		
 	 }
  }
   countstatus1();
}