<?php
include("connection/connect.php");
error_reporting(0);
$book = $_GET['book'];

$sql="select price from admin where v_id='$book'";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_array($result);
$price =  $row['price'];


if(isset($_POST['submit']))                  //if submit button is pressed
{   
	$fname =$_POST['fname'];
	$lname =$_POST['lname'];
	$phone =$_POST['phone'];
	$code =$_POST['code'];
	$address =$_POST['address'];
	$pickup =$_POST['pickup'];
	$date =$_POST['date'];
	$days= $_POST['days'];
	$c_id=$book;
	$p_id=$book+100;
	$cost=$price;
	
	/*echo $p_id;
	echo $c_id;
	echo $fname;
	echo $lname;
	echo $phone;
	echo $code;
	echo $address;
	echo $pickup;
	echo $date;
	echo $days;
	echo $cost;*/
	
	
	if($fname==' '&&$lname==' '&&$phone==' '&&$code==' '&&$address==' '&&$pickup==' '&&$date==' '&&$days==' '&&$c_id==' '&&$p_id==' '&&$cost==' '&&$total==' ')
	{
	
	               echo '<div class="alert alert-dismissable fade in">';
                    echo	'<a href="#"  data-dismiss="alert" ></a>';				
				    echo ' All Text Fields must be required!';
					echo  	'</div>';	
	
	}
	else
	{
	  		
	$sql =  "INSERT INTO personal VALUES('$p_id','$c_id','$fname','$lname','$phone','$code','$address','$pickup','$date','$days','$cost')";
	mysqli_query($db,$sql);
	$sql =  "INSERT INTO booking(book_id,cost,days) VALUES('$p_id','$cost','$days')";
	mysqli_query($db,$sql);

	
	
	header("refresh:1;url=success.php");
	
  echo '<div class="alert alert-success alert-dismissable fade in">';
 echo	'<a href="#" data-dismiss="alert" ></a>';
 echo 'Your Booking details are successful. Here are the details';
echo  	'</div>';
	}
}

$sql="select * from admin where v_id='$book'";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_array($result);
						$id =  $row['v_id'];
						$cimage =  $row['cimage'];
						$cname =  $row['cname'];
						$seat =  $row['seat'];
						$price =  $row['price'];
						$comfort = $row['comfort']; 
						$fuel =  $row['fuel'];
						$gps =  $row['gps'];
						$km =  $row['km'];
						
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Booking</title>
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
<div class="content">
<div class="container_12">
<div class="grid_12">
		<h3 color="red">Book Now!</h3>
<?php												
echo '<div class="map">';
echo '<figure>';
echo "<div class='' ><a href='admin/images/".$cimage." ' class='gal'><img src='admin/images/".$cimage." ' style='height:400px;width:1900px;'></a></div>";
echo '</figure>';
echo '</div>';
echo '</div>';
					
echo '<div class="grid_5">';
echo '<h3>Car Info</h3>';
echo '<div class="map">';
echo '<div class="text1 color2"><span style="font-size:40px;">'.$cname.'</span></div>';
echo '<div class="text1 color2">Price: <span style="color:red">'.$price.'/-</span></div>';
echo '<address>';
echo '<dl>';
	echo '<dd><span  style="font-size:20px;">Car Type : </span><span style="color: black;font-size:18px;margin-left:60px;">'.$comfort.'</span></dd>';
	echo '<dd><span  style="font-size:20px;">No.of Seats : </span><span style="color: black;font-size:18px;margin-left:50px;">'.$seat.'</span></dd>';
	echo '<dd><span  style="font-size:20px;">Fuel Type : </span><span style="color: black;font-size:18px;margin-left:48px;">'.$fuel.'</span> </dd>';
	echo '<dd><span  style="font-size:20px;">GPS : </span><span style="color: black;font-size:18px;margin-left:115px;"> '.$gps.'</span></dd>';
	echo '<dd><span  style="font-size:20px;">Rs/km : </span><span style="color: black;font-size:18px;margin-left:95px;">'.$km.'</span></dd>';
echo '</dl>';
echo '</address>';
echo '</div>';
echo '</div>';
?>	

<div class="grid_6 prefix_1">
	<h3>Enter Details</h3>
	<form id="bookingform" action=" " method="POST">	
		<label class="name">
			<input type="text" placeholder=" First Name"    name='fname'/>					
		</label>
		<br>
		<br>
		<label class="name">
			<input type="text" placeholder="Last Name"    name='lname'/>					
		</label>
		<br>
		<br>
		<label class="name">
			<input type="text" placeholder="Pincode"  name='code'/>
		</label>
		<br>
		<br>
		<label class="name">
			<input type="text" placeholder="Address"  name='address'/>
		</label>
		<br>
		<br>
		<label class="name">
			<input type="numeric" placeholder="Phone:"  name='phone'/>
		</label>
		<br>
		<br>
		<label class="name" >
		<select name="pickup" style='height:30px;width:170px;border:1px solid #fff;' >
			<option selected="selected" disabled="disabled">Pickup location</option>
			<option value='aces layout'>aces layout</option>
			<option value='kundalahalli'>kundalahalli</option>
			<option value='spice garden'>spice garden</option>
			<option value='Marathalli'>Marathalli</option>						      
		</select>           
		</label>
		<br>
		<br>
		<label class="name">
			Rent Date:<input  name="date" type="date"/>
		</label>
		<br>
		<br>
		<br>
		<label class="name">
			No.of Days:<input  name="days" type="numeric" />
		</label>	
			
		<input type="submit" name="submit" class="btn" data-type="submit" value="BOOK"/>
</form>
</form>
</div>


<!--
				
<div class="grid_5 prefix_1">
	<h3>User details</h3>
	<form id="bookingform" action=" "  method="post">
		<label class="name">	
			First name:  <input  name='fname'  type="text" />
		</label>
		<br>
		<label class="name">
			Last name:   <input  name='lname' type="text"/>
		</label>
		<div class="clear"></div>
		<div class="clear"></div>
		<label class="name">
			Pincode:       <input  name="code" type="numeric" />
		</label>
		<div class="clear"></div>
		<label class="name">
			Address:       <input   name='address' type="text" />
		</label>
		<div class="clear"></div>
		<label class="phone">
			Phone:       <input    name="phone" type="numeric" />
		</label>						
		<div class="clear"></div>
		<h3>Pickup Details</h3>
		<label class="name" >
		<select name="pickup" style='height:30px;width:170px;border:1px solid #fff;' >
			<option selected="selected" disabled="disabled">Pickup location</option>
			<option value='aces layout'>aces layout</option>
			<option value='kundalahalli'>kundalahalli</option>
			<option value='spice garden'>spice garden</option>
			<option value='Marathalli'>Marathalli</option>						      
		</select>           
		</label>
		<div class="clear"></div>								
		<div class="clear"></div>
		<label class="name">
			Rent Date:<input  name="date" type="date"/>
		</label>

		<div class="clear"></div>
		<label class="name">
			No.of Days:<input  name="days" type="numeric" />
		</label>

		</div>					
		<input type="submit" name="submit" class="btn" data-type="submit" value="Submit"/>
</form>
-->			
	
					<div class="clear"></div>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
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
