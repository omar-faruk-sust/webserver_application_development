<?php

//1 . Write a function name isPrime() which will take a integer as it's input
// in php to check if a number is prime or not?
// input-1: 11, 
// input-2: 12,
// input-3: 89
// output: prime, not prime, prime
function isPrime(int $num) {

    /*for ($i=2; $i < $num; $i++) {
        if (($num % $i) == 0) {
            return "not prime";
        }
    }

    return "prime";*/
    if($num == 2) {
        return "prime";
    }

    if($num % 2 == 0) {
        return "not prime"; 
    }

    for ($i = 3; $i * $i < $num; $i+2) {
        if (($num % $i) == 0) {
            return "not prime";
        }
    }

    return "prime";
}

// 2, 3, 5, 7, 11, 13, 17, 19, 23 ......
//echo isPrime(99);

function getAllPrimeNumbers(int $start, int $end): array {

    $array = [];

    for ($num = $start; $num <= $end; $num++) {
        
        $isPrime = true;

        if($num == 2) {
            $array[] = $num;
            continue;
        }
    
        if($num % 2 == 0) {
            continue;
        }

        for ($i = 3; $i < $num; $i++) {
            if (($num % $i) == 0) {
                $isPrime = false;
                break;
            }
        }
    
        if ($isPrime) {
            $array[] = $num;
        }
    }

    return $array;
}

$allPrimeNumbers = getAllPrimeNumbers(3, 50);

echo implode(" ", $allPrimeNumbers);
//var_dump(getAllPrimeNumbers(3, 10));

$sum = 0;
foreach($allPrimeNumbers as $number) {
    $sum += $number;
}

echo "<br>" . $sum. "<br>";


// Write a php function which will revers a string 
function reverseString(string $string): string {
    $reversed = "";

    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $reversed .= $string[$i];
    }

    return $reversed;
}

$myString = "Hello World";
echo "Original string: $myString <br>";
echo "Reversed string: ". reverseString($myString) ."<br>";

//Write a PHP program to count positive, negative, and zero values in an array
$numbers = [10, -5, 0, 7, -2, 8, 0, -1];
$positiveCount = 0;
$negativeCount = 0;
$zeroCount = 0;

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] > 0) {
        $positiveCount++;
    } elseif ($numbers[$i] < 0) {
        $negativeCount++;
    } else {
        $zeroCount++;
    }
}

echo "Positive numbers: $positiveCount <br>";
echo "Negative numbers: $negativeCount <br>";
echo "Zeros: $zeroCount <br>";


// write a program in php to find the number of occurance of number 3 in an array
$array = [2, 4, 5, 68, 3, 4, 4, 3];
$checkedNumber=6;
$occurance = 0;
for ($i = 0; $i < count($array); $i++) {
    if($checkedNumber == $array[$i] ) {
        $occurance++;
    }
}

echo $occurance ."<br>";

// Write a progrm in php to find out only the vowel
$string = "Hello World I am here";
$vowelCounter = 0;
for($i = 0; $i < strlen($string); $i++) {

    // if($string[$i] == 'A' || $string[$i] == 'a') {
    //     $vowelCounter++;
    // } else if ($string[$i] == 'E' || $string[$i] == 'e') {
    //     $vowelCounter++;
    // }else if ($string[$i] == 'I' || $string[$i] == 'i') {
    //     $vowelCounter++;
    // }else if ($string[$i] == 'O' || $string[$i] == 'o') {
    //     $vowelCounter++;
    // }else if ($string[$i] == 'U' || $string[$i] == 'u') {
    //     $vowelCounter++;
    // }

    $vowel = ['a', 'e', 'i', 'o', 'u'];
   
    if (in_array(strtolower($string[$i]), $vowel) ) {
        $vowelCounter++;
    }

}

echo $vowelCounter;
121

