<?php
foreach($records as $r)
{
?>

<html>
 <body>
  <h1>Register</h1>
  <form action="<?php echo base_url();?>index.php/mycontroller/updatedo" method="POST">
   Name:<input type="text" name="name" value="<?php echo $r->name ;?>"><br>
   Email:<input type="text" name="email" value="<?php echo $r->email ;?>"><br>
   Phone:<input type="text" name="phone" value="<?php echo $r->phone ;?>"><br>
   Password:<input type="password" name="password" value="<?php echo $r->password ;?>"><br>
   <input type="hidden" name="id" value="<?php echo $r->id;?>">
   <input type="submit" value="Signup">
  </form>
 </body>
</html> 
<?php
}
?>