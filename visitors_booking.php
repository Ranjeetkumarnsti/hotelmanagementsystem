<?php 
    include("dashboard_part1.php");
    // include() used for get the content from another PHP Page to current PHP Page.
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>

  <body>

<font face="Harlow Solid" color="red"><h1>Welcome Rajhans Hotel</h1></font>
    
                    <form method="post">
                   Check-in Date:
                   <input type="date" name="txtchkindt">
                   <br>
                   Check-out Date:
                   <input type="date" name="txtchkoutdt">
                   <br>
                   <input type="submit" name="btn" value="BOOKING">
               </form>
                <?php

                if(isset($_POST["btn"]))
                {
                 $con=mysqli_connect("localhost","root","","hoteldb");
                 $dt=$_POST["txtchkindt"];
                 $det=$_POST["txtchkoutdt"];
                 $em=$_SESSION["un"];
                 $q="INSERT INTO `managers` (`memail`, `mname`, `roomno`, `vemail`, `checkindate`, `checkoutdate`, `chargeperday`, `totalcharges`, `mpassword`) VALUES ('null', 'null', '', '$em', '$dt', '$det', '', '', 'null');";
                 $r=mysqli_query($con,$q);

                 if($r)
                 {
                  echo "Booking Sucessfully";
                 }
                 else
                 {
                  echo "Worksheet not added";
                 }
                }
    ?>
<?php            
    include("dashboard_part2.php");
?>
</body>
</html>