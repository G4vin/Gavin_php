<?php
//arithmetic operator
$num1 = 35;
$num2 = "60";
$num3 = -23;

echo  $num1 + $num2; //Addition operator
echo "<br>";
echo  $num1 - $num2; //Subtraction operator
echo "<br>";
echo  $num1 * $num2; //Multiplication operator
echo "<br>";
echo  $num1 / $num2; //Division operator
echo "<br>";
echo  $num1 % $num2; //Modulus operator
echo "<br>";

//comparison operator
echo "<br>";
var_dump($num1===$num2); //identical operator
echo "<br>";
var_dump($num1>$num2); //greater than
echo "<br>";
var_dump($num1<$num2); //less than
echo "<br>";
var_dump($num1>=$num2); //greater or equal to
echo "<br>";
var_dump($num1!=$num2); //not equal to
echo "<br>";

//logical operator
echo "<br>";
var_dump($num1==$num2 or $num2>$num3); //or
echo "<br>";
var_dump($num1==$num2 and $num2>$num3); //and
echo "<br>";
var_dump($num1==$num2 || $num2>$num3); //or symbol
echo "<br>";
var_dump($num3<=$num1 && $num2>$num1); //and symbol
echo "<br>";

$firstname = "Gavin";
$lastname = " Ochira";
echo $firstname.$lastname;

