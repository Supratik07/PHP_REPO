<?php
include 'pquery.php';
$a=new c();
$a1=$_REQUEST['t'];
$a2=$_REQUEST['g'];
$a3=$_REQUEST['t2'];
$a4=md5($_REQUEST['t4']);
$a5=$_REQUEST['l'];
$a6=$_REQUEST['t6'];
$a7=$_REQUEST['t9'];
$r=$a->email_chk($a3);
$z=mysql_num_rows($r);
if($z==0){
	$i=$a->insert($a1,$a2,$a3,$a4,$a5,$a6,$a7);
	if($i)
	{
		//echo '<script>alert("successfully inserted")</script>';
		echo'<script>window.location.href="projectlog1.php"</script>';
	}
	else{
		echo '<script>alert("try again")</script>';
	echo '<script>window.location.href="pregistration.php"</script>';
}
}
else
{
	echo '<script>alert("email already exist")</script>';
	echo '<script>window.location.href="pregistration.php"</script>';
}
?>