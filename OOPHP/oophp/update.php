<?php
include('crud.php');
$id=$_GET['id'];
$obj=new Crud();
$sql="SELECT * FROM userinfo WHERE id=".$_GET['id'];
$res=$obj->fetch($sql);
echo "<h2>Update</h2>";
while($row=mysqli_fetch_array($res))
{
?>
<form action="update1.php" method="POST">
     Name:<input type="text" value="<?php echo $row['name']; ?>" name="name"><br>
	 Email:<input type="text" value="<?php echo $row['email']; ?>" name="email"><br>
	 Phone:<input type="text" value="<?php echo $row['phone']; ?>" name="phone"><br>
	 Password:<input type="password" value="<?php echo $row['password']; ?>" name="password"><br>
	 <input type="hidden" value="<?php echo $id; ?>" name="id">
	 <input type="submit" name="submit" value="submit">
   </form>
<?php	
}	

?>