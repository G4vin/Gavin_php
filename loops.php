<?php
$num = 10;

while($num<=100){   
    echo "Namabari yetu ni : $num<br>";
    $num +=5;
}
echo "<br>";
$t = 200;
while($t>=100){
    echo "Namabari yetu ni : $t<br>";
    $t-= 5;
}
echo "<br>";
$y = 400;
do{
    echo "Nambari yako ni : $y<br>";
    $y-=10;
}while($y>=50);

echo "<br>";
for ($nambari = 35;$nambari <= 50;$nambari++){
    echo "The number is $nambari <br>";
}