<?php
include('crud.php');
$sql="DELETE FROM userinfo WHERE id=".$_GET['id'];
$obj=new Crud();
if($obj->del($sql))
	header("Location:fetch.php");
else
	echo "Error in deletion";
?>