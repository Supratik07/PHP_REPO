<!DOCTYPE HTML>
<html>
<head>
<title>The Home Page</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>

$(document).ready(function(){
	$(".div0045").hide();
	$("#refabout").click(function(){
		$("#img0001").hide();
		//$(".div006").html("<h1><center>About Us</center></h1><br><p>This Page is developed by Shilpa and Sainita. This Page is developed by Shilpa and Sainita. This Page is developed by Shilpa and Sainita. This Page is developed by Shilpa and Sainita. This Page is developed by Shilpa and Sainita. This Page is developed by Shilpa and Sainita. This Page is developed by Shilpa and sainita.</p>");
		$(".div006").html("<h1><u><center>About Us</center></u></h1><br><p style='font-size:20px'>* Our project is Online Shopping. We launched with Books,  Electronics gadgets , Fashionable dress, jewelry and  various products under different categories. Customers can now buy products from popular brands across categories such as Samsung mobiles, Dell laptops, Canon cameras, watches and many more at online shopping. Do not forget to check out the Most Popular Product.<br><br><u>Online shopping benefits:--</u>You choose your product, order it online, and we deliver it right at your doorstep anywhere in India. You just need to pay for the product.<br><br><u>24/7 Availability:</u> Online shopping stores are open round the clock of 24/7, 7 days a week and 365 days.<br><br><right><b> Developed by:</b></right><b> SAINITA MUKHERJEE,SHILPA PATRA,TANIA SARKAR</b> </p>");
		$(".divnavsignup").hide();
		$(".div0045").show();
	});
});

</script>
<style>

body{
	background-color:black;
	margin:0px;
}

.div0001{
		height: 680px;
		margin:0px;
		width: 18%;
		float:left;
		background-color:red;
}

.div0002{
		height: 680px;
		margin:0px;
		width: 60%;
		float:left;
		background-color:black;
}

.div0003{
		height: 680px;
		margin:0px;
		width: 22%;
		float:left;
		background-color:red;
}

.div004{
	height:170px;
	width: 85%;
	float:left;
	margin:12px;
	background-color:#A91B0D;
	border:3px solid #7A1712;
	color:white;
	font-family:cambria;
	text-align:center;
}

.div005{
	height:150px;
	width: 95%;
	float:left;
	margin:12px;
	
}

.div006{
	height:490px;
	width: 95%;
	float:left;
	margin:20px 12px;
	background-color:#33FFFF;
}

.div006 p{
	color:blue;
	font-family:cambria;
	padding:20px;
	font-size:25px;
	

}

.divnavlog{
	background-color:#BC544B;
	height: 30px;
	width: 100%;
	float:left;
	text-align:center;
	margin-top:4px;
}
.divnavsignup{
	background-color:#BC544B;
	height: 30px;
	width: 100%;
	float:left;
	text-align:center;margin-top:4px;
}
.divnavabout{
	background-color:#BC544B;
	height: 30px;
	width: 100%;
	float:left;
	text-align:center;margin-top:4px;
}

.linklog{
	font-family: verdana;
	color:white;
	font-size:25px;
	
}

.linklog:hover{
	color:#610C04;
}


.linksignup{
	font-family: verdana;
	color:white;
	font-size:25px;
	
}

.linksignup:hover{
	color:#610C04;
}

.linkabout{
	font-family: verdana;
	color:white;
	font-size:25px;
	
}

.linkabout:hover{
	color:#610C04;
}
.div0045{
	background-color:#BC544B;
	height: 30px;
	width: 100%;
	float:left;
	text-align:center;margin-top:4px;
}

.div00123{
	background-color:#B90E0A;
	border:4px solid black;float:right; height:250px;
	color:black;
	font-family:cambria;
	width: 92%;
	margin: 20px 5px;

}

.div00123 a{
	color:white;
}

.div00123 h4{
	color:white;
	border: 0px 0px -5px 0px;
}

.div00123 p{
	margin-top:-10px;
}


</style>
	
</head>
<body>

<div class="div0001">

<div class="div004">
<h2 style="margin-left:5px; text-decoration:underline;">Navigation</h2>
<div class="divnavlog"><a href="page.html" class="linklog">HOME</a></div>
<div class="divnavsignup"><a href="pregistration.php" class="linksignup">NewUser</a></div>
<div class="div0045"><a href="pregistration.php" class="linksignup">NewUser</a></div>
<div class="divnavabout"><a href="#" id="refabout" class="linkabout">ABOUT US</a></div>
</div>

</div>
<div class="div0002">

<div class="div005" style="background-image:url('banner.jpg');"></div>
<div class="div006"><img id="img0001" src="Shopping_004021.jpg" style="width:100%; height:auto;"></div>
</div>
<form action="laction.php" method="post">
<div class="div0003">
<div id="d" class="div00123">
<h4 style="color:white; text-decoration:underline;"> Sign in to your account</h4>
<strong>Username:</strong> <br><input type="text" name="u" placeholder="Enter your Email Address"><br>
<strong>Password:</strong> <br><input type="password" name="p" placeholder="Enter your Password"><br><br>
<input type="submit" value="SUBMIT"><input type="reset" value="cancel">
<br><br>
<p>No Account Yet? <a href="pregistration.php"> <strong>Sign Up for Free</strong> </a></p>
</div>
</div>
</form>
</body>
</html>