<?php
//Indexed arrays
$fruits = array("Banana", "Apples", "Watermelon", "Oranges", "Mangoes");
$fruits[2]="Avocado";

echo "I like eating ".$fruits[4];
echo "<br>";
echo "I hate eating ".$fruits[2];
echo "<br>";


function bmi($weight, $height){
    echo "Your weight is $weight kilograms <br>";
    echo "Your height is $height metres <br>";
    echo "Your BMI is " .$weight/($height*$height);
}
bmi(70,2);