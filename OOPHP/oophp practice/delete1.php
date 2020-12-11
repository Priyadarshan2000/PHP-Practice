<?php
include('crud1.php');
$sql="DELETE FROM userinfo WHERE id=".$_GET['id'];
$obj=new Crud();
if($obj->del($sql))
	header("Location:fetch1.php");
else
	echo "Error in deletion";
?>