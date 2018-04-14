var xmltablerowdel;
function delete_table_row(rid)
{
        xmltablerowdel=new XMLHttpRequest();
		var urlsrch="http://localhost/start/php/ajaxdelrow.php?delid="+rid;
		xmltablerowdel.onreadystatechange=del_row_with_id;
		xmltablerowdel.open("GET",urlsrch,true);
		xmltablerowdel.send(null);
		
		
}
function del_row_with_id()
{    
	if(xmltablerowdel.readyState==4)
	{
		document.getElementById("schedule").innerHTML=xmltablerowdel.responseText;
	}
}