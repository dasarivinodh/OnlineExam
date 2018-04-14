
function examschedule()
{      
        
        var dt=document.getElementById("datepicker").value;
        var dept1=document.getElementById("dept").value;
        var tm=document.getElementById("time").value;
        var te=document.getElementById("type").value;
        var pass=document.getElementById("passkey").value;
		//alert(dept1); alert(yr); alert(type);
		if(dt.length=!10||pass==""||tm=="" || dept1=="default" ||  te=="default")
		{
		  alert("please fill all fields !!!");		  
		}
		else if(tm >=21 || tm <09)
		 alert("Exam Can Be Held In Between 9 AM to 9PM ");
		else
		{
		    xmlexamschedule=new XMLHttpRequest();
			var urlsrch="http://localhost/start/php/accesstimetable.php?date="+dt+"&dep="+dept1+"&time="+tm+"&examtype="+te+"&passkey="+pass;
			xmlexamschedule.onreadystatechange=change;
			xmlexamschedule.open("GET",urlsrch,true);
			xmlexamschedule.send(null);
		}
		
}
function change()
{    
	if(xmlexamschedule.readyState==4)
	{
		document.getElementById("scheduled").innerHTML=xmlexamschedule.responseText;
	}
}