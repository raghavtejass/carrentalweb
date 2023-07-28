<?php
error_reporting(0);   
include("../connection/connect.php");
 $sql = "DELETE FROM personal WHERE p_id='$_GET[del]'";                //query to delete by 'id' which get from while loop
mysqli_query($db,$sql);



if(!empty($_POST["logout"]))   //when user press logout button!
	{
	    $_SESSION["user_id"] = "";    //empty the value of user_id variable
	 session_destroy();                //distroyed the session
	    header('location:index.php');  // after distroy redirected user to index page
	}

?>

<!DOCTYPE html>

<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
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
                        <!-- <img src="assets/img/logo.png" /> -->
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
                      <li class="active-link">
                        <a href="booking.php"><i class="fa fa-edit "></i>Bookings </a>
                    </li>


                    <li>
                        <a href="car.php"><i class="fa fa-qrcode "></i>Available Cars</a>
                    </li>
                    <li>
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
                     <h2>Bookings</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
       	   <!-- /. ROW  -->
		 	 <div class="row">
                    <div class="col-lg-6 col-md-6">   
		           <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Cust ID</th>
                                    <th>First Name</th>
                                    <th>Last name</th>
                                    <th>Phone</th>
                                    <th>Pincode</th>
                                    <th>Address</th>
                                    <th>Pickup</th>
									 <th>Date</th>
                                     <th>No.of Days</th>
									  <th>Car_id</th>
                                        <th>Option</th>
                                </tr>
                            </thead>
							 <tbody>
<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM personal";
	 $result = mysqli_query($db, $sql);
while($row = mysqli_fetch_array($result))
{

       $p_id =$row['p_id'];
	       $fname =$row['fname'];
			       $lname =$row['lname'];
					       $phone =$row['phone'];
						       $code =$row['code'];
							       $address =$row['address'];
								       $pickup =$row['pickup'];
									       $date =$row['date'];
                                           $days =$row['days'];
                                           $c_id=$row['c_id'];
                                                   
												   
							 echo         '<tr>';
                               echo     " <td>".$p_id."</td>";
                              echo    " <td>".$fname."</td>";
                             echo     " <td>".$lname."</td>";
							 echo	" <td>".$phone."</td>";
                              echo   " <td>".$code."</td>";
                            echo   " <td>".$address."</td>";
                           echo     " <td>".$pickup."</td>";
							 echo		" <td>".$date."</td>";
                              echo      " <td>".$days."</td>";
                             echo     " <td>".$c_id."</td>";
                             echo     " <td><a  style='float:left;font-weight:bold;margin-left:10px;margin-top:5px;color:#76787b;' href=booking.php?&del=".$row['p_id'].">Delete</a></td>";	
                       echo      '   </tr>';
	


}	

?>
		
								
                            </tbody>
                        </table>

                    </div>


				 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12" >
                    &copy;  2021
                </div>
        </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>

