<?php
class dbconfig
{
	private $host="localhost";
	private $uid="root";
	private $pass="";
	private $database="practice";
	
	protected $con;
	
	public function __construct()
	{
		if(!($this->con=mysqli_connect($this->host,$this->uid,$this->pass,$this->database)))
	    echo "Error to connect database";
		return($this->con);
	}
}
?>