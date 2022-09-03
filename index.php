<?php
include("connection/connect.php");

// If submit button is pressed																								   
if(isset($_POST['submit']))                  
{   
	$name = $_POST['Name'];      
	$email = $_POST['Email'];      
	$Dfrom = $_POST['From'];           
	$date = $_POST['Date'];      
	$time = $_POST['Time'];      
	$Adult = $_POST['Adults'];      
	$child = $_POST['Children'];      
	$text = $_POST['Message'];  
   	$pack = $_POST['Comfort'];    	
	
	// Checking if any field is empty
	if(!$name==' '||$email==' '||$Dfrom==' '||$date==' '||$time==' '||$Adult==' '||$child==' '||$text==' '||$pack==''){
	    echo '<div class="alert alert-dismissable fade in">';
        echo '<a href="#"  data-dismiss="alert" ></a>';				
		echo 'All Text Fields must be entered!';
		echo '</div>';	
	}

	// Else insert into Database
	else{			
		$sql = "INSERT INTO user_info(name,email,Dfrom,date,time,adult,child,text,pack) VALUES ('$name', '$email','$Dfrom','$date','$time','$Adult','$child','$text','$pack')";
		mysqli_query($db, $sql);
		header("refresh:1;url=result.php");
  		echo '<div class="alert alert-success alert-dismissable fade in">';
 		echo '<a href="#" data-dismiss="alert" ></a>';
 		echo 'Your Booking details are submitted Successfully. Details are sent to your Registered E-mail Address.';
		echo '</div>';
	}	
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="images/favicon.html">
	<link rel="shortcut icon" href="images/favicon.html" />
	<link rel="stylesheet" href="booking/css/booking.css">
	<link rel="stylesheet" href="css/camera.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.2.1.js"></script>
	<script src="js/script.js"></script>
	<script src="js/superfish.js"></script>
	<script src="js/jquery.ui.totop.js"></script>
	<script src="js/jquery.equalheights.js"></script>
	<script src="js/jquery.mobilemenu.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/camera.js"></script>
	<!--[if (gt IE 9)|!(IE)]><!-->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<!--<![endif]-->
	<script src="booking/js/booking.js"></script>
	<script>
		$(document).ready(function(){
			jQuery('#camera_wrap').camera({
				loader: false,
				pagination: false ,
				minHeight: '444',
				thumbnails: false,
				height: '28.28125%',
				caption: true,
				navigation: true,
				fx: 'mosaic'
			});
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
</head>
	<body class="page1" id="top">
		<div class="main">
<!--==============================header=================================-->
			<header>
				<div class="menu_block ">
					<div class="container_12">
						<div class="grid_12">
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li class="current"><a href="index.php">Home</a></li>
									<li><a href="result.php">Cars</a></li>									
									<li><a href="mybook.php">My Bookings</a></li>
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</nav>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				
				<div class="clear"></div>
			</header>
			
			<div class="c_phone">
				<!-- <div class="container_12"> -->
					<!-- <div class="grid_12"> -->
						 <b>CAR RENTAL FOR APARTMENT COMMUNITY</b>
						<span color="red">BOOK NOW!!!</span>
					<!-- </div> -->
					<div class="clear"></div>
				<!-- </div> -->
			</div>
			
			<div class="container_12">
				<div class="grid_4">
					<div class="banner">
						<div class="maxheight">
							<div class="banner_title">
								<img src="images/icon1.png" alt="">
								<div class="extra_wrapper">Easy
									<div class="color1">Rent</div>
								</div>
							</div>
							
							<a href="#" class="fa fa-share-square"></a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<div class="maxheight">
							<div class="banner_title">
								<img src="images/icon2.png" alt="">
								<div class="extra_wrapper">Best
									<div class="color1">Prices</div>
								</div>
							</div>
							<a href="#" class="fa fa-share-square"></a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<div class="maxheight">
							<div class="banner_title">
								<img src="images/icon3.png" alt="">
								<div class="extra_wrapper">Full
									<div class="color1">Insured</div>
								</div>
							</div>
							<a href="#" class="fa fa-share-square"></a>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>

<!--======================================footer===========================================-->			
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
							<li>Raghav Tejas</li>
							<li>Pavan Rajkumar</li>
							<li>Neeraj Kumar</li>
						</ul> 
						<br>All rights reserved.
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</footer>
	</body>
</html>