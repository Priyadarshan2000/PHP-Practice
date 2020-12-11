<?php
?>

<html>
 <body>
  <h1>Wrong emailid or password!</h1>
  <h1>Login Again</h1>
  <form action="<?php echo base_url();?>index.php/mycontroller/logindo" method="POST">
   
   Email:<input type="text" name="email"><br>
   
   Password:<input type="password" name="password"><br>
   <input type="submit" value="Signup">
  </form>
 </body>
</html> 
