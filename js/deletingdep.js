
function deldeptuser()
{      // alert("deldep");
        var deldep=document.getElementById("depdel").value;
		//alert(delyear);
        xmldeldepuser=new XMLHttpRequest();
		var urlsrch="http://localhost/start/php/adminchanging3.php?department="+deldep;
		xmldeldepuser.onreadystatechange=changedepuser;
		xmldeldepuser.open("GET",urlsrch,true);
		xmldeldepuser.send(null);
}
function changedepuser()
{    
	if(xmldeldepuser.readyState==4)
	{
		document.getElementById("deldepusr").innerHTML=xmldeldepuser.responseText;
	}
}