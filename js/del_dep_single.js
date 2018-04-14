var xmldeptdeletesingle;
function del_selected_dept(deptid)
{
        xmldeptdeletesingle=new XMLHttpRequest();
		var urlsrch="http://localhost/start/php/ajaxdeldept.php?deldept="+deptid;
		xmldeptdeletesingle.onreadystatechange=dept_del_basedon_dept;
		xmldeptdeletesingle.open("GET",urlsrch,true);
		xmldeptdeletesingle.send(null);
		
		
}
function dept_del_basedon_dept()
{    
	if(xmldeptdeletesingle.readyState==4)
	{
		document.getElementById("deldeprt").innerHTML=xmldeptdeletesingle.responseText;
	}
}