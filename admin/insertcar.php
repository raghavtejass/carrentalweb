<?php

if(!empty($_POST["logout"]))   //when user press logout button!
	{
	    $_SESSION["user_id"] = "";    //empty the value of user_id variable
	 session_destroy();                //distroyed the session
	    header('location:index.php');  // after distroy redirected user to index page
	}

	
error_reporting(0);  
 include("../connection/connect.php");
if(isset($_POST['submit']))           //if upload btn is pressed
{
	
			$name = $_POST['name'];
			$seat = $_POST['seat'];
            $price = $_POST['price'];
            $comfort = $_POST['Comfort'];  
			$fuel = $_POST['fuel'];
		    $gps = $_POST['gps'];   
			$km = $_POST['km'];
			
			
   
  
   $fname = $_FILES['image']['name'];
   $temp = $_FILES['image']['tmp_name'];
   $fsize = $_FILES['image']['size'];
   $extension = explode('.',$fname);
   $extension = strtolower(end($extension));  
   $fnew = uniqid().'.'.$extension;
   
   $store = "images/".basename($fnew);                      // the path to store the upload image

  if($extension == 'jpg'||$extension == 'png'||$extension == 'gif' )
	{        
	if($fsize>=1000000)
	{
		echo "MAX size is 1MB";
	}		
	else
	{
		if(move_uploaded_file($temp, $store))
		{
		        $first= '<div class="row">';
                  $sec=    ' <div class="col-lg-12 ">';
                    $th=       '<div class="alert " style="background-color:#ebf8a4;border:1px solid #a2d246; color: #96af0c;">';
                        $four=      '  <strong>Image successfully Uploaded!</strong> ';
                      $six=   '  </div>';
                       
                  $sev=    ' </div>';
                     $eig=  '</div>';
		}
	}
	}
	else
	{
		echo "you can upoaded only specified extensions like jpg || png || gif only!";
	}

	

 
	if($fnew)
   {
	$sql = "INSERT INTO admin (cimage,cname,seat,price,comfort,fuel,gps,km) VALUES	('$fnew','$name ','$seat','$price','$comfort','$fuel','$gps','$km')";  // store the submited data ino the database :images
	mysqli_query($db, $sql); 
	 
	 $q= '<div class="row" >';
         $w=     ' <div class="col-lg-12 ">';
             $e=              '<div class="alert " style="background-color:#ebf8a4;border:1px solid #a2d246; color: #96af0c;">';
                 $r=             '  <strong>Record inserted successfully! </strong> ';
                   $t=      '  </div>';
                       
              $y=        ' </div>';
               $u=        '</div>';
	
   }
   else
   {
	echo "fill out empty fields firstly";
   }	

}
?>

<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <h1>Administrator</h1>
                    </a>
                </div>
              
                 <span class="logout-spn" >
                  <a href="#" style="color:black;"><form action="" method="post"><input type="submit" name="logout" value="Logout" /></form></a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    
                    <li>
                        <a href="booking.php"><i class="fa fa-edit "></i>Bookings </a>
                    </li>


                    <li>
                        <a href="car.php"><i class="fa fa-qrcode "></i>Available Cars</a>
                    </li>
                    <li class="active-link">
                        <a href="insertcar.php"><i class="fa fa-bar-chart-o"></i>Insert Car</a>
                    </li>

                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Insert Car</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
				  
				  <?php 
				    echo  $first;
					echo $sec;
					echo  $th;
                    echo    $four;
					echo    $six  ;  
					echo $sev;
					echo  $eig;
				   
					echo   $q;
					 echo$w;
					 echo$e;
					 echo	$r;
					echo  $t;
					 echo$y;
					echo	$u;
				  
				  ?>
              
              <form method="post" action="" enctype="multipart/form-data">
               
				<div class="row" style='float:right;'>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                          
                            <input  type='submit' value='Insert Record '  class="btn btn-info"  name='submit'/>
                          
                        </div>
                    </div>
                    
                </div>
				
					<div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label>Car Image</label>
                            <input class="form-control"   type='file'   name='image'/>
                            <p class="help-block">*Enter the desire Car Image </p>
                        </div>
                    </div>
                    
                </div>


				<div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label>Car Name</label>
                            <input class="form-control"   type='text'    name='name'/>
                            <p class="help-block">*Enter the car name</p>
                        </div>
                    </div>
                    
                </div>
				
						<div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label>No. of Passengers</label>
                            <input class="form-control"   type='text'  name='seat'/>
                            <p class="help-block">*Enter the Available seats</p>
                        </div>
                    </div>
                    
                </div>
				
				<div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label>Price Rs.</label>
                            <input class="form-control"   type='text'  name='price'/>
                            <p class="help-block">*Price of current car</p>
                        </div>
                    </div>
                    
                </div>	
				
                    
                
				
					<div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label>Car Type</label></br>
                            <input class="form-"   type='radio'  name='Comfort' value='Economy'/> Economy   
							<input class="form-"   type='radio' name='Comfort' value='Hatchback' /> Hatchback
							<input class="form-"   type='radio' name='Comfort' value='SUV'/>SUV
                            <p class="help-block">*Choose the desired Car Type</p>
                        </div>
                    </div>
                    
                </div>
				
				
				<div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label>Fuel:</label></br>
                            <input class="form-"   type='radio' name='fuel' value='Petrol'/>  Petrol
							
                            <input class="form-"   type='radio' name='fuel' value='Diesel'/> Diesel   
							
                        
                        </div>
                    </div>
                    
                </div>
				
					<div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label>GPS</label></br>
                            <input class="form-"   type='radio' name='gps' value='Yes'/> Yes   
							<input class="form-"   type='radio' name='gps' value='No'/>  No
							
                        
                        </div>
                    </div>
                    
                </div>
				
				
				<div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label>Rs/km</label></br>
                            <input class="form-"   type='text' name='km'/> 
                        </div>
                    </div>
                    
                </div>		  
			</form>  
					
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12" >
                    &copy;  2021</a>
                </div>
        </div>
        </div>
          
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
