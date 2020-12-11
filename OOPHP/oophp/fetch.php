<?php
 include('crud.php');
 $obj=new Crud();
 $sql="SELECT * FROM userinfo";
 $res=$obj->fetch($sql);
 echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Delete</th><th>Update</th></tr>";
 while($row=mysqli_fetch_array($res))
 {
	 echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['phone']."</td><td><a href='delete.php?id=".$row['id']."'>DELETE</a></td><td><a href='update.php?id=".$row['id']."'>UPDATE</a></td></tr>";
 
 }
 echo "</table>";
 echo "<a href='insert.php'>ADD more...</a>";
?>