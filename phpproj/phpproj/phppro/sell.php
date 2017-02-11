<?php
session_start();
include 'pquery.php';
$a=new c();
$d=$_SESSION['sid'];
$z1=$a->sellview($d);
$s=$a->sell($d);
$r=mysql_fetch_array($s);
					 echo "<h2 style='color:white;'>Hello"." <b>".ucfirst($r['name'])."</b>,"."</h2>";
?>
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
<center>
<body style="background-color:#4d0712;">
<div class="b" align="right"><a href="seller.php" style="color:red;font-size:20px;">Back To Profile</a></div>
<h2 style="color:white;">VIEW ORDERS</h2>
<div id="dp">
<table border="2" cellpadding="15px" style="background-color:#87bdeb;">
<tr><th>ORDER_ID</th><th>BUYER_ID</th><th>CUSTOMER_NAME</th><th>TITLE</th><th>PRICE</th><th>IMAGE</th><th>ACTION</th></tr>
<?php
while($h1=mysql_fetch_array($z1))
{
?>
<tr><td><?php echo $h1['o_id']?></td><td><?php echo $h1['b_id']?></td><td><center><?php echo ucfirst($h1['name'])?></center></td><td><?php echo $h1['title']?></td><td><?php echo $h1['price']?></td>
<td><img src="<?php echo $h1['path']?>"height="100px"width="100px"></td><td><a href="" style="color:black;"rel="<?php echo $h1['o_id'] ?>">Deliver Product</a></td></tr>
<?php }?>
</table>
</div>
</center>