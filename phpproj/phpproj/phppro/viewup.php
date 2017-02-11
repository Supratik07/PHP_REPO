<?php
session_start();
include 'pquery.php';
$a=new c();
$d1=$_SESSION['sid'];
$t=$a->totalview($d1);
$s=$a->sell($d1);
$r=mysql_fetch_array($s);
					 echo "<h2 style='color:white;'>Hello"." <b>".ucfirst($r['name'])."</b>,"."</h2>";
echo "<center>"."<h2 style='color:white'>"."Uploaded Product Info"."</h2>"."</center>";
?>
<center>
<body style="background-color:#4d0712;">
 <a href="seller.php" style="float:right;font-size:20px;color:white;">Back To Profile</a>
<table border="1" cellpadding="20px" style="background-color:#4e884e;">
<tr><th>TITLE</th><th>DESCRIPTION</th><th>PRICE</th><th>IMAGE</th></tr>
<?php
while($r=mysql_fetch_array($t))
{?>
<tr><td><?php echo $r['title']?></td><td><?php echo $r['descript']?></td><td><?php echo $r['price']?></td><td><img src="<?php echo $r['path']?>" height="120px" width="120px"></td>
</tr>
<?php }?>
</table>
</center>
 