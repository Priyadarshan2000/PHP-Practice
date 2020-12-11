<?php
$con=mysqli_connect("localhost","root","","mydb");
$sql="DELETE FROM userinfo WHERE id=".$_GET['id'];
mysqli_query($con,$sql);
header("Location:fatchtable.php");


?>