<?php
session_start();
include 'pquery.php';
$a=new c();
$b=$_REQUEST['pi'];
$b3=$_REQUEST['by'];
$b1=$_SESSION['bid'];

$y=$a->orderinsert($b,$b1,$b3);
if($y)
{
	echo '<script>window.location.href="buyer1.php"</script>';
}
else
{
	echo '<script>window.location.href="buyer1.php"</script>';
}

?>