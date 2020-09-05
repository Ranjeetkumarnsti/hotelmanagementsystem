<!DOCTYPE html>
<html>
<head>
<title>SIGN UP</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  
<div class="signup">
<div class="signupinner">
<h2>SIGN UP</h2>
<form method="post" enctype="multipart/form-data">
<div>
            <label>E-MAIL</label>
    <input type="email" name="txteml" class="inputfield"/>
   </div>
   <div>
            <label>NAME</label>
    <input type="text" name="txtun" class="inputfield"/>
   </div>
   <div>
            <label>ADDRESS</label>
    <textarea rows="5" name="txtadd" class="inputfield"></textarea>
   </div>
   <div>
            <label>GENDER</label>
    <ul>
    <li><input type="radio" value="MALE" name="txtgnd" />MALE </li>
    <li><input type="radio" value="FEMALE" name="txtgnd" />FEMALE </li>
    <li><input type="radio" value="OTHER" name="txtgnd" />OTHER </li>
    </ul>
   </div>
   <div>
            <label>PHONE NO</label>
    <input type="text" name="txtphn" class="inputfield"/>
   </div>
   <div>
            <label>PHOTO</label>
    <input type="file" name="visitorsphoto" class="inputfield"/>
   </div>
   <div>
            <label>PASSWORD</label>
    <input type="password" name="txtup" class="inputfield"/>
   </div>
<button type="submit" name="btn1" value="submit">SUBMIT</button>
<button type="submit" name="btn2" value="submit">Back</button>
</form>
</div>
<?php
if(isset($_POST["btn1"]))
{
$a=$_POST["txteml"];
$b=$_POST["txtun"];
$c=$_POST["txtadd"];
$d=$_POST["txtgnd"];
$e=$_POST["txtphn"];
$filename=$_FILES["visitorsphoto"]["name"];
// echo "<br>The file name=".$filename."<br>";
$tmp=$_FILES["visitorsphoto"]["tmp_name"];
move_uploaded_file($tmp, "visitors_photo/".$filename);
$f=$_POST["txtup"];
$con=mysqli_connect("localhost","root","","hoteldb");
// echo "a=".$a."<br>";
// echo "b=".$b."<br>";
if($con)
{
$q="INSERT INTO `visitors` (`vemail`, `vname`, `vaddress`, `vgender`, `vphone`, `vphoto`, `vpassword`) VALUES ('$a', '$b', '$c', '$d', '$e', '$filename', '$f');";
// ` backquote
$r=mysqli_query($con,$q);
if($r)
{
echo "New Visitors Added";
}
else
{
echo "Not Added";
}
}
else
{
echo "Not connect";
}
mysqli_close($con);
}
?>
<?php
if(isset($_POST["btn2"]))
{
header("Location:index.php");
}
?>


</body>
</html>
