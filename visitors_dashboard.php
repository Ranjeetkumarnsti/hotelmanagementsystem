<?php
    session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    body{
  margin: 0;
  padding: 0;
  font-family: "Roboto",sans-serif;
}
header{
  position: fixed;
  background: #22242a;
  padding: 20px;
  width: 100%;
  height:30px;
}
.left_area h3{
  color:green;
  margin: 0;
  text-transform: uppercase;
  font-size: 22px;
  font-weight: 900;
}
.left_area span{
  color: purple;
}
.logout_btn{
  padding: 5px;
  background: #198303;
  text-decoration: none;
  float: right;
  margin-top: -30px;
  margin-right: 40px;
  border-radius: 2px;
  font-size: 15px;
  font-weight: 600;
  color: #fff;
  transition: 0.5s;
  transition-property: background;
}
.logout_btn:hover{
  background:lightgrey;
}
.sidebar{
  background: #2f323a;
  margin-top: 70px;
  padding-top: 30px;
  position: fixed;
  left:0;
  width: 250px;
  height: 100%;
  transition: 0.5s;
  transition-property: left;
}
.sidebar .profile_image{
  width: 100px;
  height: 100px;
  border-radius: 100px;
  margin-bottom: 10px;
}
.sidebar h4{
  color:#ccc;
  margin-top: 0;
  margin-bottom: 20px;
}
.sidebar a{
  color:#fff;
  display:block;
  width:100%;
  line-height: 60px;
  text-decoration: none;
  padding-left: 40px;
  box-sizing: border-box;
  transition: 0.5px;
  transition-property: background;
}
.sidebar a:hover{
  background: #19b3d3;
}
.sidebar i{
 padding-right: 10px;
}
label #sidebar_btn{
  z-index: 1;
  color: #fff;
  position: fixed;
  cursor: pointer;
  left:300px;
  font-size: 20px;
  margin:5px 0;
  transition: 0.5s;
  transition-property: color;
}
label #sidebar_btn:hover{
  color: #19B3D3;
}
#check:checked ~ .sidebar{
  left: -190px;
}
#check:checked ~ .sidebar a span{
  display: none;
}
#check:checked ~.sidebar a{
  font-size: 20px;
  margin-left: 170px;
  width: 80px;
}
.content{
  margin-left: 250px;
  background: url(2.png) no-repeat;
  background-position: center;
  background-size: cover;
  height: 100vh;
  transition: 0.5s;
}
#check:checked ~ .content{
  margin-left:60px;
}
#check{
  display: none;
}

  </style>
  <title>Visitors Dashboard</title>
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <input type="checkbox" id="check">
  <header>
    <label for="check">
      <i class="fa fa-bars" id="sidebar_btn"></i>
     
    </label>
    <div class="left_area">
      <h3>Hotel<span>Rajhans</span></h3>
    </div>
    <div class="right_area">

     
      <a href="index.php" class="logout_btn">Logout</a>
    </div>
   
  </header>
  <div class="sidebar">
    <center>
      <img src="visitors_photo/<?php
                    echo $_SESSION['photo'];
                ?>" height="50px" width="50px"></img>
                <br>
                <h4><?php
                       
                        echo $_SESSION["un"];

                    ?>  </h4>                

     
    </center>
<a href="visitors_dashboard.php"><i class="fa fa-desktop"></i><span>Dashboard</span></a>
<a href="visitors_booking.php"><i class="fa fa-cogs"></i><span>Booking</span></a>
<a href="#"><i class="fa fa-table"></i><span>Edit Profile</span></a>
<a href="ChangePassword.php"><i class="fa fa-table"></i><span>Change Password</span></a>




</div>
<div class="content">
  </div>


</body>
</html>