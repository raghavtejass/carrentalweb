<?php
    include('connection/connect.php');
    $username = $_POST['user'];
    $password = $_POST['pass'];

        //to prevent from mysqli injection
        $username = stripcslashes($username);
        $password = stripcslashes($password);
        $username = mysqli_real_escape_string($db, $username);
        $password = mysqli_real_escape_string($db, $password);

        $sql = "select *from personal where fname = '$username' and phone = '$password'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count > 0){
            echo "<h1><center> Booking Details </center></h1>";
            $sql = "select p.p_id,p.c_id,p.fname,p.lname,p.phone,p.code,p.address,p.pickup,p.date,p.days,p.costperday,e.book_id,e.total, a.v_id,a.cimage,a.cname from personal as p inner join booking as e on p.p_id = e.book_id inner join admin as a on a.v_id = p.c_id where p.fname='$username'";
            $result = mysqli_query($db, $sql);
            $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
            //$count=mysqli_num_rows($result);
            $len=sizeof($row)-1;
            while($len>=0){
            echo  "<p><h3> First Name: ". $row[$len]['fname']."</h3></p>";
            echo  "<p><h3> Last Name: ". $row[$len]['lname']."</h3></p>";
            echo  "<p><h3> Booking ID: ". $row[$len]['p_id']."</h3></p>";
            echo  "<p><h3> Car ID: ". $row[$len]['c_id']."</h3></p>";

            echo  "<p><h3> Phone Number: ". $row[$len]['phone']."</h3></p>";
            echo  "<p><h3> Pin Code: ". $row[$len]['code']."</h3></p>";
            echo  "<p><h3> Address: ". $row[$len]['address']."</h3></p>";
            echo  "<p><h3> Pickup Location: ". $row[$len]['pickup']."</h3></p>";
            echo  "<p><h3> Date: ". $row[$len]['date']."</h3></p>";
            echo  "<p><h3> Number of Days: ". $row[$len]['days']."</h3></p>";
            echo  "<p><h3> Total Amount: ". $row[$len]['total']."</h3></p>";
            echo  "<p><h3> Car Name: ". $row[$len]['cname']."</h3></p>";
            echo "--------------------------------------------------------------------------------------";
            $len = $len - 1;
          }
        }
        else{
            echo "<h1> No details found!</h1>";
        }
?>
