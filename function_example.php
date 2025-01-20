<?php

/**
 * This is a function to create a new line in a page
 */
function createABreak() {
    echo "<br>";
}

/**
 * This is a function to add two nunbers
 * @param $x 
 */
function addition($x, $y) {
    $result = $x + $y;

    return $result;
}

echo addition(11.0099, 35). PHP_EOL;
createABreak();
echo addition(10, 30.8888). PHP_EOL;
createABreak();
echo addition(10, 30). PHP_EOL;
createABreak();
echo addition(10, 30). PHP_EOL;
createABreak();
echo addition(10, 30). PHP_EOL;
createABreak();
echo addition(10, 30). PHP_EOL;

createABreak();


# abs(): Absolute value
$number = -25;
echo "Absolute value of -25: " . abs($number) . PHP_EOL;
createABreak();

// pow(): Exponentiation
$base = 2;
$exponent = 4;
echo "2 raised to the power of 4: " . pow($base, $exponent) . PHP_EOL;
createABreak();

// sqrt(): Square root
$value = 16;
echo "Square root of 16: " . sqrt($value) . PHP_EOL;
createABreak();

// round(): Round to nearest integer
$floatNumber = 3.56789;
echo "Rounded value of 3.56789: " . round($floatNumber, 3) . PHP_EOL;
createABreak();

// rand(): Generate random numbers
echo "Random number between 1 and 100: " . rand(1, 100) . PHP_EOL;
createABreak();


$value = 4.3;
echo "Ceiling of 4.3: " . ceil($value) . PHP_EOL; // Outputs 5
createABreak();

$value = 4.7;
echo "Floor of 4.7: " . floor($value) . PHP_EOL; // Outputs 4
createABreak();


echo "Maximum value: " . max(2, 4, 8, 1) . PHP_EOL; // Outputs 8
createABreak();

echo "Minimum value: " . min(2, 4, -8, 1) . PHP_EOL; // Outputs 1
createABreak();

echo "Remainder of 5.7 / 1.3: " . fmod(5.7, 1.3) . PHP_EOL; // Outputs 0.5
createABreak();

echo "e raised to the power of 2: " . exp(2) . PHP_EOL; // Outputs approximately 7.389056
createABreak();

$value = 3.1459;
echo "Rounded to 2 decimal places: " . round($value, 2) . PHP_EOL; // Outputs 3.15

?>
