<?php
class Car{
    public $color;
    public $model;
    public function  __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }
    public function message(){
        return "My car is a " . $this->color . " " .$this->model . ".";
    }
}

$myCar = new Car("blue","WRX");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red","Mercedes");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("black","Toyota");
echo $myCar -> message();
echo "<br>";

//string
$one = "Mr. Morale";
$two = " & the big steppers";
$three = "by Kendrick Lamar";

echo "<br>";
echo $one;
echo $two;
echo "<br>";
echo $three;
echo "<br>";

//Integer
echo "<br>";
$int = 23543;
var_dump($int);

//Boolean
echo "<br>";
$x = true;
$y = false;

//array
echo "<br>";
$cars = array("Benz","BMW","Audi","WRX","Toyota","GTR");
var_dump($cars);
echo "<br>";

echo strrev("HELLO WORLD");


?>
