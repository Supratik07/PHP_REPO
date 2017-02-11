<?php
include 'pquery.php';
$a=new c();
$x=$_REQUEST['d2'];
$b1=$a->buyerview($x);
?>
<center>
<body style="background-color:#7e241c;">
<div align="right" id="v"><a href="buyer.php" style="color:white;">Back to Profile</a></div>
<?php echo "<h1 style='color:white;'>"."~:All Products:~"."</h1>" ?>
<div id="v2">
<table border="2" cellpadding="20px" style="background-color:">
<tr><th>TITLE</th><th>DESCRIPTION</th><th>PRICE</th><th>IMAGE</th><th>Your Choice</th></tr>
<?php
while($r1=mysql_fetch_array($b1))
{
?>
<tr><td><?php echo ucfirst($r1['title'])?></td><td><?php echo ucfirst($r1['descript'])?></td><td><?php echo $r1['price']?></td>
<td><img src="<?php echo $r1['path']?>" height="100px" width="100px"></td><td><a href="ordr.php?pi=<?php echo $r1['Id']?>&by=<?php echo $r1['s_id']?>">Order Now</a></td></tr>

<?php
}?>
</table>
</div>
</center>

