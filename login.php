<?php
session_start();
$con=mysqli_connect("localhost","root","","mydb");
$sql="select * from userinfo where email='$_POST[email]'and password='$_POST[password]'";
$result=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($result))
{
//echo "data is added successfully";

$_SESSION['uid']=$_POST['email'];
header("Location:home1.php");
}
else
{
	header("Location:error.html");
}
  
?>