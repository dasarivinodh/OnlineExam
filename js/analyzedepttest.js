
function analyze_db()
{       //alert("analyzedb");
        var depdel=document.getElementById("select_dept").value;
        var testdel=document.getElementById("select_test").value;
		//alert(delyear);
        xmlaanalyzedepttest=new XMLHttpRequest();
		var urlsrch="http://localhost/start/php/depanalysis.php?department1="+depdel+"&testno1="+testdel;
		xmlaanalyzedepttest.onreadystatechange=changeanalyzedb;
		xmlaanalyzedepttest.open("GET",urlsrch,true);
		xmlaanalyzedepttest.send(null);
}
function changeanalyzedb()
{    
	if(xmlaanalyzedepttest.readyState==4)
	{
		document.getElementById("result_test").innerHTML=xmlaanalyzedepttest.responseText;
	}
}