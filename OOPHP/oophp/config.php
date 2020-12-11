<?php
class DbConfig
{
 private $host="localhost";
 private $uid="root";
 private $pass="";
 private $database="mydb1";
  
 protected $con;
 
 public function __construct()
 {
  if(!($this->con=mysqli_connect($this->host,$this->uid,$this->pass,$this->database)))
	  echo "Error in establishing a database connection";
  return($this->con);
 }	 
	
}	
?>