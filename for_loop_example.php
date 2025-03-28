<?php
function print_break()
{
    echo "<br>";
}

$number = 0;

// echo $number++;
// print_break();

// echo $number++;
// print_break();

// echo $number++;
// print_break();

// echo $number++;
// print_break();

// echo $number++;
// print_break();

// echo $number++;
// print_break();

// echo $number++;
// print_break();

// echo $number++;
// print_break();

// echo $number++;
// print_break();

// echo $number++;
// print_break();

// echo $number++;

/** for, do-while, while, foreach
 * for(initialization; condition; incriment/decriment) */

echo "Numbers from 0 to 10:<br>";
$start = 1;
$end = 10;

// 1 + 2 + 3 + 4 + 5 + ................+n;
$sum = 0;
for ($i = $start; $i <= $end; $i++) {
    
    // This is to print only even numbers from 1 to 10
    if ($i % 2 == 0) {
        echo "Number is : $i <br />";
    }

    $sum = $sum + $i;
}

echo "The summation of all numbers between $start to $end is: $sum </br>";

// 1st execution: //$i = 0, 0 <= 10; echo 0, $i++ ==> 0+1 = 1
// 2nd execution: //$i = 1, 1 <= 10; echo 1, $i++ ==> 1+1 = 2
// 3rd execution: //$i = 2, 2 <= 10; echo 2, $i++ ==> 2+1 = 3
// 4rd execution: //$i = 3, 3 <= 10; echo 3, $i++ ==> 3+1 = 4
// 5th execution: //$i = 4, 4 <= 10; echo 4, $i++ ==> 4+1 = 5
// 6rd execution: //$i = 5, 5 <= 10; echo 5, $i++ ==> 5+1 = 6
// 7rd execution: //$i = 6, 6 <= 10; echo 6, $i++ ==> 6+1 = 7
// 8rd execution: //$i = 7, 7 <= 10; echo 7, $i++ ==> 7+1 = 8
// 9rd execution: //$i = 8, 8 <= 10; echo 8, $i++ ==> 8+1 = 9
// 10th execution: //$i = 9, 9 <= 10; echo 9, $i++ ==> 9+1 = 10
// 11th execution: //$i = 10, 10 <= 10; echo 10, $i++ ==> 10+1 = 11
// 12th execution: //$i = 11, 11 <= 10; ---> this condition is false than loop will be break

$findANumber = 100;
$arrayOfNumbers = [ 00,20,67,40,33,89,66,88,34,89,65];
//echo $arrayOfNumbers[0];

$length = count($arrayOfNumbers);
echo "The length of our array is: $length </br>";

$sumOfAllElements = 0;
for ($i = 0; $i < $length; $i++) {
    //echo "Number is : $arrayOfNumbers[$i] <br />"; // each element print

    if($findANumber == $arrayOfNumbers[$i]) {
        echo "We found the number $findANumber in the array list </br>";
    }

    $sumOfAllElements = $arrayOfNumbers[$i] + $sumOfAllElements;
}

echo "The sum of all elements on the array is: $sumOfAllElements";

