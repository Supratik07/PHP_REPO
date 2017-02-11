<?php
session_start();
include 'pquery.php';
$a=new c();
$w1=$_SESSION['bid'];
$z2=$a->deview($w1);
$ki=$a->prcount($w1);
$po=$a->payment($w1);
$ku=mysql_fetch_assoc($ki);
$pi=mysql_fetch_assoc($po);
$b=$a->buy($w1);
$r=mysql_fetch_array($b);
 echo "<center>"."<h1>"."Hello"." ".ucfirst($r['name'])." ,"."</h1>"."</center>";
?>

<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 60%;
}

th {
    text-align: left;
    padding: 8px;
	background-color:#c0c0c0;
	text-align:center;
}

td {
    text-align: left;
    padding: 8px;
	background-color:#dff0f8;
	font-family:cambria;
	text-align:center;
}

tr:nth-child(even){background-color: #f2f2f2}

body{
	background-color:#92a5df;
}
</style>
</head>
<body>
<div align="right"><a href="buyer.php" style="margin-right:40px; font-family:verdana; font-size:20px;">Back to Profile</a></div>
<center>
<?php

if($ku['count(o_id)']<=3)
{
	echo "<h2> <u>"."Your Products Will Be Delivered Within 7 days"."</u></h2>";
	echo "<br>";
}
else
{
	echo "<h2>"."Your Products Will Be Delivered Within 15 days"."</h2>";
	echo "<br>";
}
?>

<h1>Products To Be Delivered</h1>
<table border="2">
<tr><th>ORDER_ID</th><th>PRODUCT_ID</th><th>TITLE</th><th>PRICE</th><th>IMAGE</th></tr>
<?php
while($h2=mysql_fetch_array($z2))
{
?>
<tr><td><?php echo $h2['o_id']?></td><td><?php echo $h2['p_id']?></td><td><?php echo $h2['title']?></td><td><?php echo $h2['price']?></td><td><img src="<?php echo $h2['path']?>"height="100px"width="100px"></td></tr>
<?php }?>
</table>
</center>
<?php 
 echo "<h2>"."Your Total Bill Amount : "."</h2>"."<h1>"."Rs.".$pi['sum(b.price)']."</h1>";
 ?>
 </body>
 </html>