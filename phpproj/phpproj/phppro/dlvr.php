<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("a").click(function(){
		var e=$(this).attr("rel");
		$.get("dlvr.php",{oid:e},function(data,success){
			$("#dp").html(data);
		});
		
	});
	
}); 

</script>
<?php
include 'pquery.php';
$f1=$_REQUEST['oid'];
$a=new c();
$d4=$a->pdelivery($f1);
if($d4)
{   echo 'delivered';
	//echo '<script>window.location.href="sell.php"</script>';
}
else{ echo 'try again';
	//echo '<script>window.location.href="sell.php"</script>';
}
?>
<?php
$d=$_SESSION['sid'];
$z1=$a->sellview($d);
?>
<div id="dp">
<table border="2">
<tr><th>ORDER_ID</th><th>BUYER_ID</th><th>TITLE</th><th>PRICE</th><th>IMAGE</th><th>ACTION</th></tr>
<?php
while($h1=mysql_fetch_array($z1))
{
?>
<tr><td><?php echo $h1['o_id']?></td><td><?php echo $h1['b_id']?></td><td><?php echo $h1['title']?></td><td><?php echo $h1['price']?></td>
<td><img src="<?php echo $h1['path']?>"height="100px"width="100px"></td><td><a href=""rel="<?php echo $h1['o_id']?>">Deliver Product</a></td></tr>
<?php }?>
</table>
</div>