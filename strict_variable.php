<?php
declare(strict_types=1);

// Warning, notice, fatal error
global $y;
$y = 440;

global $name;
$name = "jhon";

$number1 = 40;
$number2 = 50;

echo "number  is: ". $number1;

echo "<br>";

function additon(int $a, int $b) {
    //$x = 90;
    echo $GLOBALS["y"];

    var_dump($GLOBALS['name']);

    return $a + $b;
}

//echo additon(4, "7");

echo "My name is : ROy";
echo "<br>";

echo additon($number1, $number2);

// echo $x;