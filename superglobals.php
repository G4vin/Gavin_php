<?php
$a = 45;
$t = 76;

function addition(){
    $GLOBALS['r']= $GLOBALS['a'] + $GLOBALS['t'];
}
addition();
echo $r;
echo "<br>";

echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
