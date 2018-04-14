
function deluser()
{       //alert("delusr");
        var uid=document.getElementById("uid").value;
		if(uid.length==10)
		{
		  len=uid.substr(4,2);
		  if(len=='1a'||len=='1A'||len=='5a'||len=='5A')
		  {
			xmldeluser=new XMLHttpRequest();
			var urlsrch="http://localhost/start/php/adminchanging1.php?na="+uid;
			xmldeluser.onreadystatechange=changeusr;
			xmldeluser.open("GET",urlsrch,true);
			xmldeluser.send(null);
		  }
		  else
		      alert("Check The ID");
		}
		else
		{
		   alert("Check The ID");
		}
}
function changeusr()
{    
	if(xmldeluser.readyState==4)
	{
		document.getElementById("delusr").innerHTML=xmldeluser.responseText;
	}
}