<?php
$fruits = "Passion";


switch ($fruits){
    case "Oranges":
        echo "I sell oranges";
        echo "<br>";
        echo "Nauza machungwa";
        break;
    case "Banana":
        echo "I like bananas";
        echo "<br>";
        echo "Napenda ndizi";
        break;
    case "Watermelon":
        echo "I sell watermelons";
        echo "<br>";
        echo "nauza tikitimaji";
        break;

    case "Apples":
        echo "I like apples";
        echo "<br>";
        echo "Napenda tufaha";
        break;
    case "Passion":
        echo "I like passionfruit";
        echo "<br>";
        echo "Passionfruit by Drake";
        break;
    case "Kiwi":
        echo "I recommend kiwis";
        echo "<br>";
        echo "Buy a kiwi";
        break;
    default:
        echo "It ain't on the list";
}
$marks = 90;
switch  ($marks){
    case $marks >=0 && $marks<=30:
        echo "<br>";
        echo "Fail";
        echo "<br>";
        echo "Repeat";
        break;
    case $marks >=41 && $marks<=60:
        echo "<br>";
        echo "Poor";
        echo "<br>";
        echo "Improve";
        break;
    case $marks >=61 && $marks<=80:
        echo "<br>";
        echo "Good trial";
        echo "<br>";
        echo "You have passed";
        break;
    case $marks >=81 && $marks<=100:
        echo "<br>";
        echo "Excellent";
        echo "<br>";
        echo "Pick your award";
        break;
    default:
        echo "Invalid value";
}