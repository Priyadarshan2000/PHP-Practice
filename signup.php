<?php
$con=mysqli_connect("localhost","root","","mydb");
$sql="insert into userinfo(name,email,phone,password) values('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[password]')";
mysqli_query($con,$sql);
echo "data is added successfully";



?>


