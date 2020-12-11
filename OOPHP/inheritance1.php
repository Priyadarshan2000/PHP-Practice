
 <?php 
 class Person
 {      
 var $name="ABC DEF";      
 var $age=20;      
 function display()     
 {       
 echo "$this->name"."  is "."$this->age"." years old<br/>";      
 }
 } 
 
class Student extends Person
{      
	var $clas=12;    
	var $roll=1;     
	function display()     
    { 
		echo "reads in class "."$this->clas"." and roll no ". "$this->roll";     
    } 
  }   
 
   $obj1=new Person();     
   $obj2=new student();    
   $obj1->display();    
   $obj2->display(); 
 
?>  