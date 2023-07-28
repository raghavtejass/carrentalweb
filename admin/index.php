<?php
include("../connection/connect.php");
error_reporting(0);
session_start();
if(isset($_POST['submit']))
{
	$username = $_POST['user_name'];
	$password = $_POST['password'];
	
	if(!empty($_POST["submit"])) 
     {
	$loginquery ="SELECT * FROM admin_dir WHERE username='$username' && password='$password' ";
	$result=mysqli_query($db, $loginquery);
	$row=mysqli_fetch_array($result);
	
	                        if(is_array($row))
								{
                                    	$_SESSION["a_id"] = $row['a_id'];
										 header("location:booking.php");
	                            } 
							else
							    {
                                      	$message = "Invalid Username or Password!";
                                }
	 }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>ADMIN LOGIN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">


<link href="assets/css/login.css" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic|Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,700,800' rel='stylesheet' type='text/css'>


</head>
<body>



 <!--SIGN IN-->
		<div class="login-form-1">
			<div class="close-2"> </div>
					<div class="head">
					</div>
					<div class="head-info">
						<h1>SIGN IN</h1>
						<h2>Adminstrator  Account</h2>
					</div>
				<form action=" " method="post">
					<li>
						<input type="text" class="text" placeholder="Email" name="user_name" ><a href="#" class=" icon mail"></a>
					</li>
					<li>
						<input type="password" placeholder="Password" name="password" ><a href="#" class=" icon lock"></a>
					</li>
					<div class="p-container">
								<input type="submit"  value="SIGN IN" name="submit">
							<center><?php echo  '<div style="color:red;"> '.$message.'</div>';?></center>
							<div class="clear"> </div>
					</div>
				</form>
				
			</div>
</body>
</html>