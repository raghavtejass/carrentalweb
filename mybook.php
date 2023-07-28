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
		<link rel="stylesheet" href="css/a.css"
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
                                    <li class="current"><a href="mybook.php">My Bookings</a></li>
									<li><a href="contact.php">Contacts</a></li>
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

<div id = "frm">
        <h3>Enter Details</h3>
        <form name="f1" action = "login.php" method = "POST">
            <p>
                <label> Name: </label>
                <input type = "text" id ="user" name  = "user" />
            </p>
            <p>
                <label> Phone: </label>
                <input type = "password" id ="pass" name  = "pass" />
            </p>
            <p>
                <input type =  "submit" id = "btn" value = "View" />
            </p>
        </form>
    </div>
    // validation for empty field
    <script>
            function validation()
            {
                var id=document.f1.user.value;
                var ps=document.f1.pass.value;
                if(id.length=="" && ps.length=="") {
                    alert("User Name and Password fields are empty");
                    return false;
                }
                else
                {
                    if(id.length=="") {
                        alert("User Name is empty");
                        return false;
                    }
                    if (ps.length=="") {
                    alert("Password field is empty");
                    return false;
                    }
                }
            }
        </script>


<!--==============================footer=================================-->
<footer style='background:black;'>
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
