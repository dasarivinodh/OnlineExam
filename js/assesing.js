var xmlassessusr;
function checkidlen()
{
       var uid=document.getElementById("user_id").value;
		if(uid.length==10)
		{
        xmlassessusr=new XMLHttpRequest();
		var urlsrch="http://localhost/start/php/analysis.php?assesid="+uid;
		xmlassessusr.onreadystatechange=assessusr;
		xmlassessusr.open("GET",urlsrch,true);
		xmlassessusr.send(null);
		}
		else
		{
		   alert("Check The ID");
		}
}
function assessusr()
{    
	if(xmlassessusr.readyState==4)
	{
		document.getElementById("assesment").innerHTML=xmlassessusr.responseText;
	}
}