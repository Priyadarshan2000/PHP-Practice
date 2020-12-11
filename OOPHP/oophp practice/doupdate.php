<?php
include('crud1.php');
$obj=new Crud();
if(isset($_REQUEST['submit']))
{
 $sql="UPDATE userinfo SET name='".$_POST['name']."',email='".$_POST['email']."',phone='".$_POST['phone']."',password='".$_POST['password']."' WHERE id=".$_POST['id'];
 if($obj->update($sql))
	 header("Location:fetch1.php");
else
	echo "Error in deletion";
}

?>