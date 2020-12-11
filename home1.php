
<?php
session_start();
if(isset($_SESSION['uid']))
{
	echo "Welcome ".$_SESSION['uid'];
}
else
{
	header("location:login .html");

}
?>