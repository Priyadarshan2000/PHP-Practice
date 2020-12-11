<?php
$con=mysqli_connect("localhost","root","","mydb");
$sql="select * from userinfo";
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result))
{
 echo $row['id']." ".$row['name']." ".$row['email']." ".$row['phone']." ".$row['password']."<br>";
}

?>


