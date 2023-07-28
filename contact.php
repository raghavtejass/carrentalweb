<?php

include("connection/connect.php");
error_reporting(0);

if(isset($_POST['submit']))                  //if submit button is pressed
{   
$name = $_POST['name'];   
$email = $_POST['email'];
$phone = $_POST['phone'];
$Message = $_POST['Message'];

                 

	if(!$name==' '||!$email==' '||!$phone==' '||!$Message==' ')
	{
	
	               echo '<div class="alert alert-dismissable fade in">';
                    echo	'<a href="#"  data-dismiss="alert" ></a>';				
				    echo ' All Text Fields must be entered!';
					echo  	'</div>';	
	
	}
	else
	{
	  
					
	$sql = "INSERT INTO contact(name,email,phone,Message) VALUES ('$name', '$email','$phone','$Message')";
	mysqli_query($db, $sql);
	
  echo '<div class="alert alert-success alert-dismissable fade in">';
 echo	'<a href="#" data-dismiss="alert" ></a>';
 echo 'Your contact details are submitted successfully!!!!. We will contact you soon.';
echo  	'</div>';
	}
	
	
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contacts</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/style.css">
	   <link rel="stylesheet" type="text/css" href="css/popup.php">

	</head>
	<body class="" id="top">
		<div class="main">
<!--==============================header=================================-->
			<header>
				<div class="menu_block ">
					<div class="container_12">
						<div class="grid_12">
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li><a href="index.php">Home</a></li>									
									<li><a href="result.php">Cars</a></li>
									<li><a href="mybook.php">My Bookings</a></li>
									<li class="current"><a href="contact.php">Contacts</a></li>
								</ul>
							</nav>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</header>
<!--==============================Content=================================-->
			<div class="content">
				<div class="container_12">
					<div class="grid_12">
						<h3>Find Us</h3>
						<div class="map">
							<figure>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.093309879338!2d77.70903971430438!3d12.965880718513182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1340eb439889%3A0x6d12e6d05f10f29f!2sCMRIT!5e0!3m2!1sen!2sin!4v1573537273901!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
							</figure>
						</div>
					</div>
					<div class="grid_5">
						<h3>Contact Us:</h3>
						<div class="map">
							<div class="text1 color2">Raghav Tejas</div>
							<div class="text1 color2">Pavan Rajkumar</div>
							<div class="text1 color2">Neeraj Kumar</div>
							<p><span class="color1">24/7 support is available  </span> </p>
						
							<address>
								<dl>
									<dt> 
										CMR Institute of Technology<br>
										ACES Layout,Bangalore.
									</dt>
									<dd><span>Telephone:</span> +1800 1800 1800</dd>
									<dd><span>FAX:</span> +1 800 889 9898</dd>
									<dd>E-mail: <a href="#" class="color1">carrental@gmail.com</a></dd>
								</dl>
							</address>
						</div>
					</div>
					<div class="grid_6 prefix_1">
						<h3>Contact Form</h3>
		<form id="form" action=" " method="post">
						
						<label class="name">
								<input type="text" placeholder="Name:"    name='name'/>
								
							</label>
							<label class="name">
								<input type="text" placeholder="E-mail:"  name='email'/>
								
							</label>
							<label class="name">
								<input type="text" placeholder="Phone:"  name='phone'/>
								
							</label>
							
							<label class="message">
								<textarea placeholder="Message:" name='Message'></textarea>
							
							</label>						
								<input  type='submit' name='submit'  value='submit'   />
						</form>
						</form>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="f_phone"><span>Call Us:</span> + 1800 1800 1800</div>
					<div class="socials">
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-google-plus"></a>
					</div>
					<div class="copy">
						<div class="st1">
						<div class="brand">Car<span class="color1">Rental</span></div>
						&copy; 2020| <a href="#">Privacy Policy</a> </div> Website created by <br>
						<ul>
							<li>Raghav</li>
							<li>Pavan</li>
							<li>Neeraj</li>
						</ul> 
						<br>All rights reserved.
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</footer>
	</body>
</html>