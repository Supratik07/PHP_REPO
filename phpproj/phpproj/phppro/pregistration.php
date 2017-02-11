<?php
?>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>

$(document).ready(function(){
	$(".div0045").hide();
	$("#refabout").click(function(){
		$("#img0001").hide();
		//$(".div006").html("<h1><u><center>About Us</center></u></h1><br><p>This Page is developed by Shilpa and Sainita. This Page is developed by Shilpa and Sainita. This Page is developed by Shilpa and Sainita. This Page is developed by Shilpa and Sainita. This Page is developed by Shilpa and Sainita. This Page is developed by Shilpa and Sainita. This Page is developed by Shilpa and sainita.</p>");
		$(".div006").html("<h1><u><center>About Us</center></u></h1><br><p>* Our project is Online Shopping. We launched with Books,  Electronics gadgets , Fashionable dress, jewelry and various products under different categories. Customers can now buy products from popular brands across categories such as Samsung mobiles, Dell laptops, Canon cameras, watches and many more at online shopping. Do not forget to check out the Most Popular Product.<br><br><u>Online shopping benefits:--</u>You choose your product, order it online, and we deliver it right at your doorstep anywhere in India. You just need to pay for the product.<br><br><u>24/7 Availability:</u> Online shopping stores are open round the clock of 24/7, 7 days a week and 365 days.<br><br><right><b> Developed by:</b></right><b> SAINITA MUKHERJEE,SHILPA PATRA,TANIA SARKAR</b> </p>");
		$(".divnavsignup").hide();
		$(".div0045").show();
	});
});

</script>
<link rel="stylesheet" type="text/css" href="registration.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#s").change(function(){
		var x=$("#s").val();
		
		if(x=="selectany")
		{
			$("#d1").hide();
		}
		else
		{
			$("#d1").show();
			if(x=="1")
				{
					$("#message1").html("You are Registering as <b>Buyer</b>");
				}
			else
				{
					$("#message1").html("You are Registering as <b>Seller</b>");
				}
				
		}
		
	});
	$("#t5").keyup(function(){
		var l=$("#t5").val();
		if((l.length)>=1&&(l.length)<=4){
			$("#sp").html("weak");
		}
		else
		{
			$("#sp").hide();
			
		}
		
		});
		$("#t3").keyup(function(){
		var w=$("#t3").val();
  var a=w.search("@");
  var b=w.indexOf(".");
  var c=w.substr(-4,4);
  var check1=w.split("@");
  var check2=w.split(".");
  if(a<=0 || b<=0 || w.indexOf('@')==w.indexOf('.')+1 || w.indexOf('.')==w.indexOf('@')+1
  || c!=".com" || check1.length>2 || check2.length>3 || w=="")
  {
	 $("#sp1").html("not valid"); 
  }
  else{
	  $("#sp1").hide();
  }
		
	});
	
	
	
	$("#bi").click(function(){
		var w=$("#t1").val();
		alert(w);
		var w1=$(".ge");
		alert(w1);
		var w2=$("#t3").val();
		alert(w2);
		var w3=$("#t5").val();
		var w4=$("#l2").val();
		var w5=$("#t7").val();
		var w6=$("#t8").val();
		
	
	
});
});
</script>
<body>

<div class="div0001">

<div class="div004">
<h2 style="margin-left:5px; text-decoration:underline;">Navigation</h2>
<div class="divnavlog"><a href="page.html" class="linklog">HOME</a></div>
<div class="divnavsignup"><a href="projectlog1.php" class="linksignup">LOGIN</a></div>
<div class="div0045"><a href="projectlog1.php" class="linksignup">LOGIN</a></div>
<div class="divnavabout"><a href="#" id="refabout" class="linkabout">ABOUT US</a></div>
</div>

</div>
<div class="div0002">
<div class="div005" style="background-image:url('banner.jpg'); width:95%; height:150px;"></div>
<div class="div006">

<div class="div00087">

<div class="div00088">
	<center>
	<h2 style="color:white; margin-top:1px; margin-bottom:-1px;">Wanna Sign up as : </h2>
	<select name="sm" id="s" style="height:30px; width:110px; border:2px solid black; border-radius:5px; font-family:verdana; font-weight:bolder; margin-top:3px; margin-bottom:-10px;">
	<option value="selectany">Select Any</option>
	<option value="1">BUYER</option>
	<option value="2">SELLER</option>
	</select>
	<br>
	<p id="message1" class="message1" name="message1" style="color:black;margin-top:10px; font-family:cambria; text-align:center; font-size:20px;"><strong></strong></p>
</center>
</div>
<form action="fetch.php" method="post" id="f">
<div class="div00089">
	<div id="d1" class="d1">
	<div class="e" 	align="right" style="padding-right:20px;"><font style="color:red">*</font><strong>Required Field</strong></div>
		<div class="d1001"><font style="color:red">*</font><strong>Name:</strong>&nbsp;<input type="text" class="box001" name="t" id="t1" required></div>
		<div class="d1001"><font style="color:red">*</font><strong>Gender:</strong>&nbsp;<input type="radio" class="ge" name="g" id="t10" value="M" required> &nbsp; Male <input type="radio" class="ge" name="g" id="t11" value="F"> &nbsp; Female</div>
		<div class="d1001"><font style="color:red">*</font><strong>Email:</strong>&nbsp;<input type="text" class="box001" name="t2" id="t3" required><span id="sp1" style="font-size:15px;color:red;"></span></div>
		<div class="d1001"><div class="ex" style="color:#222222">(enter an active email address)</div><div id="dv"></div></div>
		<div class="d1001"><font style="color:red">*</font><strong>Password:</strong>&nbsp;<input type="password" name="t4" id="t5" class="box001" required><span id="sp" style="font-size:15px;color:red;"></span></div>
		<div class="d1001"><div class="ex" style="color:#222222;font-size:15px;">(password must be atleast of 5 characters)</div></div>
		<div class="d1001"><font style="color:red">*</font><strong>Signing As:</strong>&nbsp;&nbsp;<select name="l" id="l2" class="box001" required></div>
		<div class="d1001"><option value="">Select any</option>
		<option value="1">Buyer</option>
		<option value="2">Seller</option>
		</select>
		</div>
		<div class="d1002"><font style="color:red">*</font><strong>Address:</strong>&nbsp;&nbsp;&nbsp;<textarea name="t6" class="box002"id="t7" rows="5" required></textarea></div>
		<div class="d1001"><font style="color:red">*</font><strong>Phone No:</strong>&nbsp;<input type="text" id="t8" name="t9" class="box001" required></div>
		<div class="d1001"><div class="ex"style="color:#222222">(enter your 10 digit mobile number)</div></div>

		<div class="d1003"><input type="submit" class="button001" value="register">
		<input type="reset" value="cancel" class="button001"></div>
	</div>
</div>
</form>
</div>

</div>

</div>
</div>

<div class="div0003">

<img src="gif1.gif" style="height:750px; width:60%; padding-left:70px; margin-top:30px;"></img>

</div>
</body>