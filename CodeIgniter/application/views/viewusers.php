<html>
 <body>
  <table border="1">
   <tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Actions</th></tr>
<?php
foreach($records as $r)
{
 echo "<tr><td>".$r->id."</td><td>".$r->name."</td><td>".$r->email."</td><td>".$r->phone."</td><td><a href='".base_url()."index.php/mycontroller/del/".$r->id."'>Delete</a>|<a href='".base_url()."index.php/mycontroller/update/".$r->id."'>Update</a></td></tr>"	;
}	
?>
   </table>
  </body>
 </html> 