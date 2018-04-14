	
	function timer()
	{
		xmlreqtime=new XMLHttpRequest();
		urlsrch="http://localhost/start/php/startexam_timer.php";
		xmlreqtime.onreadystatechange=change;
		xmlreqtime.open("GET",urlsrch,true);
		xmlreqtime.send(null);
	}
	function change()
	{    
		if(xmlreqtime.readyState==4)
		{
		    tt=xmlreqtime.responseText;
			runtimer();
		}
	}