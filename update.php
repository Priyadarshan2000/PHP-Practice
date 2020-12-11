<?php
$con=mysqli_connect("localhost","root","","mydb");
$sql="SELECT * FROM userinfo WHERE id=".$_GET['id'];
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
?>
<html>
<head>
<title>form</title>
</head>
<body>
<form action="doupdate.php" method=POST>
<!First Name>
<tr>
<td>NAME</td>
<td><input type="text" name="name" value="<?php echo $row['name']; ?>">
</td>
</tr>
<!Email Id>
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="number" name="phone" value="<?php echo $row['phone']; ?>" />
</td>
</tr> 
<td>EMAIL ID</td>
<td><input type="email" name="email" value="<?php echo $row['email']; ?>" />
</td> </td>
</tr>
<tr>
<td><Password></td>
</tr>
Password: <input type="password" name="password"value="<?php echo $row['password']; ?>" />
</td>
<!Submit and Reset>
<tr>
<td colspan="2" align="center"><input type="hidden"  name="id" value="<?php echo $row['id']; ?>">
<input type="submit" value="Submit">
</form>
</td>
</tr>
</table>
</body>
</html>