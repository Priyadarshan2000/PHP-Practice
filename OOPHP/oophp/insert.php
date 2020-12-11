<?php
include('crud.php');
if(isset($_REQUEST['submit']))
{
 $obj=new Crud();
 
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $pass=$_POST['password'];
 
 $sql="INSERT INTO userinfo(name,email,phone,password) VALUES('$name','$email','$phone','$pass')";
 
 if($obj->insert($sql))
 {
	 echo "Data added successfully";
	 echo "<a href='fetch.php'>VIEW</a>";
 }
 else
     echo "Error is adding user";	 
 

}
?>
<html>
 <body>
  <h1>Sign Up</h1>
   <form action="insert.php" method="POST">
     Name:<input type="text" name="name"><br>
	 Email:<input type="text" name="email"><br>
	 Phone:<input type="text" name="phone"><br>
	 Password:<input type="password" name="password"><br>
	 <input type="submit" name="submit" value="submit">
   </form>
  </body>
 </html> 
  