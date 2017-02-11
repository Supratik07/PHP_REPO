<?php
session_start();
include 'pquery.php';
$a=new c();
$d=$_SESSION['sid'];
$a1=$_REQUEST['t'];
$a2=$_REQUEST['d'];
$a3=$_REQUEST['p'];
$a4=$_FILES["pic"];
$m=$_FILES["pic"]["name"];
$fol=time()."_".rand(0,99)."_".$m;
$path="upload/".$fol;
$tmp=$_FILES["pic"]["tmp_name"];
move_uploaded_file($tmp,$path);
$k=$a->picinsert($a1,$a2,$a3,$path,$d);
if($k)
{ 
	echo '<script>alert("successfully uploaded")</script>';
	echo '<script>window.location.href="seller.php"</script>';
}
else
{
	echo '<script>alert("try again")</script>';
	echo '<script>window.location.href="seller.php"</script>';
}
?>