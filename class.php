<?php
class car{
	 public $Brand ="BMW";
	 
	 public function drive()
	 {
		 return " Object Oriented Programming  "
	 }
}


$Car1 = new Car();
$myData = $Car1 ->drive();

echo $myData;
?>
