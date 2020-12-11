<?php
include('crud1.php');
$obj=new Crud;
$sql="SELECT * FROM userinfo";
$abc=$obj->fetch($sql);
echo "<table border='2'><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>password</th><th>Delete</th></tr>";

 while($row=mysqli_fetch_array($abc))
 {
	 echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['phone']."</td><td>".$row['password']."</td><td><a href='delete1.php?id=$row[id]'>DELETE</a></td><td><a href='update.php?id=".$row['id']."'>UPDATE</a></tr>";
	
}
echo "</table>";
    
?>