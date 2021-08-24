<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">	
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<title>Home page | Domi card</title>
	
</head>
<body>
		<div class="navbar">
			  <a href="#home">HOME</a>
			  <div class="subnav">
			  	<b><a style="background-color: #D2B72B" class="subnavbtn" href="#goshopping">PHONE CARD</a></b>
			  </div>
			  <div class="subnav">
			    <button class="subnavbtn">HELP <i class="fa fa-caret-down"></i></button>
			    <div class="subnav-content">
			      <a href="#spbc"><p><h3>Instructions for online recharge</h3> You pay via Momo: 0938.52.7375 or ACB: 10547407 <br> Attached is the phone number to top up the card.</p></a>
			      <a href="#"></a>
			      <a href="#"></a>
			      <a href="#"></a>
			      <a href="#"></a>
			      <a style="font-size: 15px;" href="#about"><h3>Payment instructions to buy a scratch card code full series</h3><p>Card code and serial number will be sent to your email or phone number.<br> You pay via <br> Momo: 0938.52.7375 or ACB: 10547407 <br> Attached is the phone number or email to receive the recharge card code.</p></a>
			    </div>
			  </div> 
			  <a href="tel:+0583488879">CONTACT</a>
			  
			</div>
			
 
    <div class="#home" id="home">	
		<div class="title">
			<div class="khoi-1">
				<h2 style="color: #C0C0C0">Welcome To <br> Domico Company </h2>
				<h3 style="color: #C8BDBC;">A place to buy goods with competitive prices suitable for customers selling shops and cafes<br><br>CUSTOMER SATISFACTION IS OUR GOAL.<br> </h3>
			

			</div>		
		</div>
     </div>   
     	<div class="#goshopping" id="goshopping">	

		<?php
			session_start();
			include("admincp/config/config.php");
			include("pages/menu.php");
			include("pages/main.php");
			include("pages/footer.php");
		?>

	 
        
 
        
</body>
</html>