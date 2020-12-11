<?php
class First
{
	protected $x; //data member
	
	function getdata($y)  //member function/method
	{
	 $this->x=$y;	
	}
	
	function display() //member function/method
	{
		echo "The given value is ".$this->x."<br>";
	}	
	
}
$obj=new First(); //object declaration
$obj->getdata(10); //function call
$obj->display(); //function call
echo "x=".$obj->x;
?>	