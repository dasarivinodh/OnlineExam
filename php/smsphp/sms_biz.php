<?php
$id=$_GET['uid'];
$emsg=$_GET['emsg'];
mysql_connect("localhost","root","");
mysql_select_db("test");
// getting phone number
/*$query="select phno from registration where userid=$id";
$sql=mysql_query($query);
$res=mysql_fetch_array($sql);*/
$phno="9989231140";//$res['phno'];
// getting student latest marks based on count value 
$querry="select MAX(count)as counts from stu_performance where id='$id'";
$sql=mysql_query($querry);
$res=mysql_fetch_array($sql);
if($sql)
{
	if($res['counts']==1)
	{
		$query="select apti1,reas1,verb1 from stu_performance where id='$id'";
		$sql=mysql_query($query);
		$res=mysql_fetch_array($sql);
		$aptitude=$res['apti1'];
		$reasoning=$res['reas1'];
		$verbal=$res['verb1'];
	
	}
	else if($res['counts']==2)
	{
		$query="select apti2,raes2,verb2 from stu_performance where id='$id'";
		$sql=mysql_query($query);
		$res=mysql_fetch_array($sql);
		$aptitude=$res['apti2'];
		$reasoning=$res['raes2'];
		$verbal=$res['verb2'];
	}
	else
	{
		header('Location: http://localhost/start/admin/adminchange.php');

	}
	//Template Assignment
	//$fullapiurl="http://smsc.biz/httpapi/send?username=udaygudivaka@gmail.com&password=10501a1915&sender_id=SMSIND&route=T&phonenumber=$phno&message=student%20$id%20scored%20marks%20aptitude%20$aptitude%20verbal%20$verbal%20reasoning%20$reasoning%20Thanks%20for%20choosing%20our%20service%20-%20smsc.biz";
	$fullapiurl="http://smsc.biz/httpapi/send?username=karthikmugada@gmail.com&password=10501a1915&sender_id=PROMOTIONAL&route=P&phonenumber=$phno&message=student%20$id%20scored%20marks%20aptitude%20$aptitude%20verbal%20$verbal%20reasoning%20$reasoning%20 for total of 40";
	// url_encode() Encoded message
	//Call API
	$ch = curl_init($fullapiurl);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); 
	//echo $result ; // For Report or Code Check
	curl_close($ch);
	echo "<br><p>SMS Sent....</p>";	
	header('Refresh: 5;url=http://localhost/start/admin/adminchange.php');

}

?>