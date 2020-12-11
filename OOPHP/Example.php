<?php
class Example
{
	protected $data;
	
	function __construct($y) //constructor function
	{
		$this->data=$y;
	}
	function display()
	{
		echo "within class example and Value is ".$this->data;
	}	
}//end of class 1
class Second extends Example
{
	private $mydata;
	
	function __construct($x,$y)
	{
		parent::__construct($y);
		$this->mydata=$x;
	}
	function show()
	{
		//echo "<br>within class second and Value is ".$this->mydata;
		echo "SUM=".($this->data+$this->mydata);
	}

}//end of class
$obj=new Second(10,20);  // constructor function call statement
//$obj->display();
$obj->show();




?>