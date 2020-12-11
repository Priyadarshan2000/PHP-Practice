<?php
class prime
{
	private $num;
	
	function getdata($y)
	{
		$this->num=$y;
		
	}

	function checkprime()
	{
		$c=0;
		for($i=1;$i<=$this->num;$i++)
		{
			if($this->num%$i==0)
				$c++;
		}
         if($c==2)
			 return 1; //prime
		 else
			 return 0; //not prime
		
	}
}//end of class	
$x=$_POST["no"];
$obj=new prime();
$obj->getdata($x);
$v=$obj->checkprime();
if($v==0)
	echo "not prime";
else
	echo "prime";
	
	
	
	
	




















?>