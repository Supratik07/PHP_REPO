<?php
session_start();
include 'pquery.php';
$a=new c();
$d=$_SESSION['sid'];
$s=$a->sell($d);
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="seller.css" /
</head>
<body>



	<div class="div0001">
		<div class="div0011"></div>
		<div class="div0012">
			<div class="div0121"><a href="out.php">Logout</a></div>
			
		</div>
	</div>
	
	<div class="div0002">
		<div class="div0021">
				<?php
					$r=mysql_fetch_array($s);
					 echo "<p>Hello"." <b>".ucfirst($r['name'])."</b>,"."Welcome to your profile"."</p>";
				?>
				
		</div>
		
		<div class="div0022">
			<h2 style="margin-left:5px; margin-bottom:1px;"><u>Your Profile Details:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></h2>
			<div class="div0221"><font style="color:#22252a; font-size:25px;">Name&nbsp;:&nbsp;&nbsp;</font><?php echo ucfirst($r['name'])?></div>
			<div class="div0221"><font style="color:#22252a; font-size:25px;">E-Mail&nbsp;:&nbsp;&nbsp;</font><?php echo $r['email']?></div>
			<div class="div0221"><font style="color:#22252a; font-size:25px;">Phone No.&nbsp;:&nbsp;&nbsp;</font><?php echo $r['phn_no']?></div>
			<div class="div0221"><font style="color:#22252a; font-size:20px;"><a href="viewup.php" style="color:black;">Total Products</font></a></div>
			<div class="div0221"><font style="color:#22252a; font-size:20px;"><a href="sell.php" style="color:black;">View Orders</font></a></div>
		</div>
		
		<div class="div0023">
			<h3><u>Upload Product&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></h3>
			<form action="sellup.php" method="post" enctype="multipart/form-data">
			<div class="div0231">
				<strong>Title:</strong> <input type="text" class="box0001" name="t"></input>
			</div><br><br>
			<div class="div0231">
				<input type="file" class="box0002" name="pic">
			</div><br><br>
			<div class="div0231">
				<strong>Price:</strong> <input type="text" class="box0001" style="width:20%;" name="p"></input>&nbsp;INR
			</div>
			
			<div class="div0232">
				<strong>Description:</strong><br>
				<textarea name="d" rows="4" class="box0003"></textarea>
			</div>
			<div class="div0233">
				<div class="div2331"><input type="submit" class="button001" value="UPLOAD"></div>
				<div class="div2331"><input type="reset" class="button001" value="RESET"></div>
			
			</div>
			
			</form>
			
		</div>
		
		<div class="div0024">
			<?php
			$f=$a->productview($d);
			echo "<center>"."<h2>"."Uploaded Product Info"."</h2>"."</center>";
			?>
			
			<?php
			while($r=mysql_fetch_array($f))
			{?>
			<?php echo "<div class='div0241'><div class='div2411'><div class='div24110'><strong>Title:</strong>&nbsp;".ucfirst(strtolower($r['title']))."</div></div><div class='div2411'><div class='div24110'><strong>Detail:</strong>&nbsp;".ucfirst(strtolower($r['descript']))."</div></div><div class='div2413'><div class='div24110' style='font-size:14px;'><strong>Price:</strong>&nbsp;".ucfirst(strtolower($r['price']))."</div></div><div class='div2412'><img src=".$r['path']." height='132px' width='199px'></img></div></div>";?>
			<?php }?>
			
		</div>
		
	</div>
	

</body>



</html>