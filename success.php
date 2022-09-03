<?php
include("connection/connect.php");
error_reporting(0);

$sql="CALL book_detail";                              //stored procedure
$result=mysqli_query($db,$sql);

while($row=mysqli_fetch_array($result))
{
$bookid =  $row['p_id'];
$carid =  $row['c_id'];
$cname =  $row['cname'];
$date =  $row['date'];
$pickup =  $row['pickup'];
$total =  $row['total'];
}
	

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Booking details</title>
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
									<li ><a href="contact.php">Contacts</a></li>
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
						
                                        
                                        
<?php
echo '<h1><style="color: green">Your Booking is Successfull!!!</h1>';
                                   
echo '<h3><u>Booking ID:</u>   '.$bookid.'</h3>';
echo '<div class="clear"><div/>';
echo '<div class="clear"><div/>';
echo '<h3><u>Car ID:</u>   '.$carid.'</h3>';

echo '<div class="clear"><div/>';
echo '<div class="clear"><div/>';
echo '<h3><u>Car Name:</u>   '.$cname.'</h3>';

echo '<div class="clear"><div/>';
echo '<div class="clear"><div/>';
echo '<h3><u>Pickup Date:</u>   '.$date.'</h3>';

echo '<div class="clear"><div/>';
echo '<div class="clear"><div/>';
echo '<h3><u>Pickup Location:</u>   '.$pickup.'</h3>';


echo '<div class="clear"><div/>';
echo '<div class="clear"><div/>';
echo '<h3><u>Total Cost:</u>     Rs.<style="color: red">'.$total.'</style>/-</h3>';
?>

<!--==============================footer=================================-->
		
        <footer style='background:black;'>
			<div class="container_12">
				<div class="grid_12">
					<div class="f_phone"><span>Contact Us:</span> + 1800 1800 1800</div>
					<div class="socials">
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-google-plus"></a>
					</div>
					<div class="copy">
						<div class="st1">
						<div class="brand">Car<span class="color1">Rental</span></div>
						&copy; 2020	| <a href="#">Privacy Policy</a> </div> Website designed by Raghav, Pavan and Neeraj
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</footer>
	</body>
</html>















						
						
						
						
						
						
						

