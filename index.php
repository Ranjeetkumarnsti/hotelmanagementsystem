<!DOCTYPE html>
<html>
<head>
<style type="text/css">
body
	{
	    margin: 0;
		padding: 0;
		background: url();
		background-size: cover;
		background-position: center;
		font-family: sans-serif;
	}
.loginbox
{
	width:320px;
	height: 420px;
	background: #000;
	color:#fff;
	top:50%;
	left:50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 10px 30px;
}
.avtar img
{
    width: 100px;
	height: 100px
	border-radius:50%;
	position: absolute;
	top:-50%;
	left:calc(50%-50px);
}

h1
{
	margin: 0;
	padding: 0 0 20px;
	font-size: 22px;
}
.loginbox p
{
	margin: 0;
	padding: 0;
	font-weight: bold;
}
.loginbox input
{
	width: 100%;
	margin-bottom: 20px;
}
.loginbox input[type="text"],input[type="password"]
{
	border:none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
}
.loginbox input[type="submit"]
{
	border: none;
	outline: none;
	height: 40px;
	background: #fb2525;
	color:#fff;
	font-size: 18px;
	border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
	cursor:pointer;
	background: #ffc107;
	color:#000;
}
.loginbox a
{
	text-decoration: none;
	font-size: 12px;
	line-height: 20px;

}
.loginbox a:hover
{
	color:#ffc107;
}
</style>	
	
<title></title>
<link rel="stylesheet" href="stylesocialmedia.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body onload="autoslide()" >
	<img src="logo.jpg">
	<div class="loginbox">
		<img src="avtar.png" class="avtar">
		<h1>Login here</h1>
<form method="post">
<form method="post" action="visitors_dashboard.php" name="f1"  onsubmit="return xyz()">
			<p>user name</p>
<input type="text" name="txtun" placeholder="Enter E-mail id">
<p>Password</p>
<input type="Password" name="txtup" placeholder="Enter Password">
<input type="submit" name="btn1" value="Login">
If you are not registered ? Please sign up<br>
<input type="submit" name="btn2" value="Sign up">

		</form>
		</div>

<?php
if(isset($_POST["btn1"]))
{
$un=$_POST['txtun'];
$up=$_POST['txtup'];
$con=mysqli_connect("localhost","root","","hoteldb");

if($con)
{
$q="select * from visitors where vemail='$un' and vpassword='$up'";
$r=mysqli_query($con,$q);
$c=mysqli_num_rows($r);

if($c>0)
{
session_start();
$_SESSION["un"]=$un;

while($f=mysqli_fetch_array($r))
{
$_SESSION["photo"]=$f[5];
}
header("Location:visitors_dashboard.php");

}
else
{
echo "Not ok";
}
}
else
{
echo "Not connected";
}
}
?>
<?php
if(isset($_POST["btn2"]))
{
header("Location:visitors_signup.php");
}
?>

<h1>WELCOME TO RAJHANS</h1>
<a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
<a href="#"><i class="fab fa-twitter"></i></a>
<a href="#"><i class="fab fa-whatsapp"></i></a>
<a href="#"><i class="fab fa-instagram"></i></a>
<a href="#"><i class="fab fa-youtube"></i></a>
<a href="https://www.google.com/maps/place/Rajhans+International+Hotel/@25.2505826,86.9862954,17z/data=!3m1!4b1!4m8!3m7!1s0x39f049fdb60d89f3:0x75aff8b59676e485!5m2!4m1!1i2!8m2!3d25.2505778!4d86.9884841"><i class="fab fa-GoogleMaps">Google Maps</i></a>


<!-- onload used for execute javascript function when the webpage loaded -->
<img src="1.png" id="pic" height="400px" width="1350px"></img>
<br>

<script>
var a=1;
function nextpic()
{
if(a>=7)
{
a=1;
}
else
{
a=a+1;
}

document.getElementById("pic").src=a+".png";
}

function autoslide()
{
setInterval(nextpic,3000);
}
</script> 
<script>
function xyz()
{
if(document.f1.txtun.value=="")
{
alert("user name should not be blank");
return false; // to stay in the form, not to submit
}
else if(document.f1.txtup.value=="")
{
alert("password should not be blank");
return false; // to stay in the form, not to submit
}
else
{
	return true;
	alert("successfully login")
}
}
</script> 
</body>
</html>