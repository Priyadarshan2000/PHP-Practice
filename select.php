<?php
$con=mysqli_connect("localhost","root","","mydb");
$sql="SELECT * FROM userinfo" ;
$result=mysqli_query($con,$sql);
?>
<tittle><h1> DATA </h1> </tittle>
<form>
email<select name="dropbox">
<?php
while($row=mysqli_fetch_array($result))
{
?>
<option value="<?php echo $row['email']; ?>"><?php echo $row['email']; ?></option>
<?php
}
?>
</select>
</form>