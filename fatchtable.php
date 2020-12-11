<?php
session_start();
if(isset($_SESSION['uid']))
{
?>
<html>
<head> 
<title> data from database </title>
</head>

<body>
<table aligin="center" border="1px">
<tr>
<th><h2>record</h2></th>
</tr>
<tr>
<th>id</th>
<th>name</th>
<th>email</th>
<th>phone</th>
<th>action</th>
</tr>
<?php
$con=mysqli_connect("localhost","root","","mydb");
$sql="select * from userinfo";
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td> <a href='update.php?id=<?php echo $row['id'];?>'>update</a> 
<a href='delete.php?id=<?php echo $row['id'];?>'>delete</a>  </td>
 </tr>

<?php 
}
?>
</table>
</body>
</html>
<?php
}
else
	{
	header("Location:login .html");
}
?>
