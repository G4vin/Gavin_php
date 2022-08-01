<?php

$miaka = array("Gavin"=>"50", "Lewis"=>"30", "Ken"=>"60", "Max"=>"32", "Dave"=>"22");
echo "Gavin is ".$miaka['Gavin']." years old";
echo "<br>";

$names=array("Gavin","Edna","Maksy","Jim");
$num=array(23,33,58,23,45);

//unset
unset ($num[2]);
$num = array_values($num);
echo '';
var_dump($num);

//sort
sort($num);
$numlength = count($num);
for($x= 0; $x <$numlength; $x++){
    echo $num[$x];
    echo "<br>";
}

//rsort
echo "<br>";
rsort($names);
$namearr = count($names);
for($y = 0; $y <$namearr; $y++){
    echo $names[$y];
    echo "<br>";
}

//unset2
unset ($names[3]);
$names = array_values($names);
echo '';
var_dump($names);

