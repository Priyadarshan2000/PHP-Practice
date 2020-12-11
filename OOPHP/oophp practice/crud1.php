<?php
include('config1.php');
class Crud extends DbConfig
{
 function __construct()
 {
  parent::__construct();//scope resulation operator
 }  	 
 function insert($sql)
 {
	if($this->con->query($sql))
		return true; 	
 } 
 function fetch($sql)
 {
	$result=$this->con->query($sql);
		 return $result;
 }
 function del($sql)
 {
	 if($this->con->query($sql))
		 return true;
 }
 function update($sql)
 {
	 if($this->con->query($sql))
		 return true;
 }
}
?>