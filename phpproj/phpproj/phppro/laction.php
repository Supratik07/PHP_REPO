<?php
session_start();
include 'pquery.php';
$a=new c();
$b1=$_REQUEST['u'];
$b2=md5($_REQUEST['p']);
$l=$a->login($b1,$b2);
$r=mysql_num_rows($l);
if($r==1)
{
	$e=mysql_fetch_array($l);
	if($e['role']=='1'){
		$_SESSION['bid']=$e['ID'];
		//echo '<script>alert("login successful")</script>';
		echo '<script>window.location.href="buyer.php"</script>';
	}
	else{
	     $_SESSION['sid']=$e['ID'];
	//echo '<script> alert("login successful")</script>';
	echo '<script>window.location.href="seller.php"</script>';
}
}
else
{
	echo '<script>alert("wrng email or password")</script>';
	echo '<script>window.location.href="projectlog1.php"</script>';
}

?>