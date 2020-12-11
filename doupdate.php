<?php
$con=mysqli_connect("localhost","root","","mydb");

$sql="update userinfo set name='$_POST[name]',email='$_POST[email]',phone='$_POST[phone]',password='$_POST[password]' where id=".$_POST['id'];
mysqli_query($con,$sql);
//echo "done";
header("Location:fatchtable.php");
?>