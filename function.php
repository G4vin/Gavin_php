<?php
function emobilis(){
    $num1 = 34;
    $num2 = 61;
    echo "The product of $num1 and $num2 is " . $num1*$num2;
    echo "<br>";

}
emobilis();

function studentname($fname, $lname,$age){
    echo "Student's name is $fname $lname, I am $age years old<br>";
}
studentname("Brad", "Pitt", 43);
studentname("Lewis", "Hamilton",31);
studentname("Ken", "Block", 60);
studentname("Sebastian", "Vettel" ,32);
