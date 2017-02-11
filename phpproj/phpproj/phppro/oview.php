<?php
session_start();
include 'pquery.php';
$a=new c();
$w=$_SESSION['bid'];
$z=$a->orview($w);
$b=$a->buy($w);
$r=mysql_fetch_array($b);
 echo "<center>"."<h1>"."Hello"." ".ucfirst($r['name'])." ,"."</h1>"."</center>";
?>
<html>
<head>
<style>
body{
	background-color:#d5b59e;
}

table {
    border-collapse: collapse;
    width: 60%;
	border-radius:4px;
}

th {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
	background-color:#572fa1;
	text-align:center;
}

td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
	text-align:center;
}

tr{background-color:#e8ecf6;}

tr:hover{background-color:#1e6b89;}
</style>
</head>
<body>
<div align="right"><a href="buyer.php" style="margin-right:40px; font-family:verdana; font-size:20px;">Back to Profile</a></div>
<center>
<h1>ORDERED PRODUCTS</h1>
<table border="2">
<tr><th>ORDER_ID</th><th>PRODUCT_ID</th><th>TITLE</th><th>PRICE</th><th>IMAGE</th></tr>
<?php
while($h=mysql_fetch_array($z))
{
?>
<tr><td><?php echo $h['o_id']?></td><td><?php echo $h['p_id']?></td><td><?php echo $h['title']?></td><td><?php echo $h['price']?></td><td><img src="<?php echo $h['path']?>"height="100px"width="100px"></td></tr>
<?php }?>
</table>
</center>
</body>
</html>