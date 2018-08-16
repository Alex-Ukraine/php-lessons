<?php

class Car {
   public static $engine=2;
   const WHEELS = 3;
   public $color='white';
   public $speed;
   public $fuel;
   public $brand;

   public function __construct($brand='Mercedes',$speed='300',$fuel='6',$color='black') {
   	$this->brand=$brand;
   	$this->speed=$speed;
   	$this->fuel=$fuel;
   	$this->color=$color;
   	echo self::$engine;
   	/*echo '<br>New object of class '.__CLASS__.' created';
   	echo '<br>New Method of class '.__METHOD__.' called';*/
   }
   /*public function __destruct() {
    echo '<br>Method '.__METHOD__.' called';
   	echo '<br>object deleted';
   }*/

   public function tripTime($distance){
   	$time=$distance / $this->speed;
   	return $time;
   }
   public function test(){
   	echo Car::WHEELS;
   	echo self::WHEELS;
   }
}

$car1= new Car('Audi', 110, 12, 'Yellow');
$car2= new Car('BMW', 130, 10, 'White');
$car3= new Car;

/*$car2= new Car;
$car2->brand='Mercedes';
$car2->speed='130';
$car2->fuel='14';
$car2->color='black';*/

//$car3= new Car; 
//*

echo "<br><br>";
print_r($car1);
//print_r($car2);
echo "<br><br>";

// метод вызывается из контекста обьекта
echo '<br>Car1 time: '.$car1->tripTime(1000);
echo '<br>Car2 time: '.$car2->tripTime(1000);
echo '<br>Car3 time: '.$car3->tripTime(1000);
echo "<br><br>";
echo Car::WHEELS;
$car1->test();
