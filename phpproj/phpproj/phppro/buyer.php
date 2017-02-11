<?php
session_start();
include 'pquery.php';
$a=new c();
$d=$_SESSION['bid'];
$b=$a->buy($d);
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="seller.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#t1").keyup(function(){
var p=$("#t1").val();
if(p=="")
{
$("#t123").html("Put Title of any product");	
}
else
{
	
$.ajax({url:"buyer1.php",
method:"get",
data:{d2:p},
success:function(data,success){
$("#v2").html(data);
}
});
}
});
});
</script>
</head>


<body>



	<div class="div0001">
		<div class="div0011"></div>
		<div class="bdiv0012">
			<div class="bdiv0121a"><a href="oview.php">Your Ordered Products</a></div>
			<div class="bdiv0121a"><a href="delstat.php">Delivery Status</a></div>
			<div class="bdiv0121b"><a href="buy_out.php">Logout</a></div>
		</div>
	</div>
	
	<div class="div0002">
		<div class="div0021">
				<?php
					$r=mysql_fetch_array($b);
					 echo "<p>Hello"." <b>".ucfirst($r['name'])."</b>,"."Welcome to your profile"."</p>";
				?>
		</div>
		<?php
echo "<h4> Logged in as : <font style='font-family:cambria; color:black;'>".$r['email']."</h4>";
?>
		<h1>MOST POPULAR PRODUCTS</h1>
		<div class="bdiv0001">
			<?php
				$o=$a->view();
				while($j=mysql_fetch_array($o))
				{
					echo "<div class='bdiv0011'><div class='bdiv0111'><img src='".$j['image']."' height=100%; width=100%;></img></div><div class='bdiv0112'><p>".$j['title']."</p></div></div>";
				} 
			?>
			
			
	
		</div>
		
		
		<div class="bdiv0002">
		<strong><img src="search_icon.png"/></strong><input type="text" class="bdiv0021" id="t1" placeholder="Search in All Departments"></input>
		<p class="bdiv0022" id="t123">Put Title of any product</p>
		</div>
		
		<div class="bdiv0003" id="v2">
			<!--<div class="div12345"><div class="div123451"><div class="div123453"><p>TITLE:SHIRT<p></div></div><div class="div123451"><div class="div123453"><p>DESCRIPTION:BIG BAZAR<p></div></div><div class="div123451"><div class="div123452" style="width:100%; margin-top:40%; margin-left:0%; font-family:verdana; font-size:15px;"><p>Price: 20,000<p></div></div><div class="div123451"><img src="8.jpg" height=100%; width=100%;></div><div class="div123451"><div class="div123452"><a href="#">Order Now</a></div></div></div>-->
		</div>
		
	
		
	</div>
	

</body>



</html>