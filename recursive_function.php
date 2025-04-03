<?php

function factorialWithRecursiveFunction(int $number) {
    if($number == 0) { // Base Condition
        return 1;
    }

    return $number * factorialWithRecursiveFunction($number - 1);
}

$num = 10;
echo "Factorial of $num! is :". factorialWithRecursiveFunction($num);

echo "<br><br>";


//factorial -> 5! = 5 * 4 * 3 * 2 * 1; 120
//factorial -> 3! = 3 * 2 * 1; 6

// 0 1 1 2 3 5 8 13 21 .........
// 3rd = first + second

//onlyFibonacci(6, 0, 1) onlyFibonacci(6, 1, 0+1), onlyFibonacci(6, 1, 1+1) 
//onlyFibonacci(6, 2, 1+2) onlyFibonacci(6, 3, 2+3) , onlyFibonacci(6, 5, 3+5) 
// onlyFibonacci(6, 8, 5+8)
function onlyFibonacci($n, $first = 0, $second = 1) {
    if ($first > $n) { // Base condition: Stop when the number exceeds n
        return;
    }

    echo $first . " "; // Print the current number

    onlyFibonacci($n, $second, $first + $second); // Recursive call with next numbers
}
echo "Fev series only: ";
echo onlyFibonacci(15) . "<br>";

// Series plus the summation of them
function fibonacci($n, &$sum, $first = 0, $second = 1) {
    if ($first > $n) { // Base condition: Stop when the number exceeds n
        return;
    }

    echo $first . " "; // Print the current number
    $sum += $first;

    fibonacci($n, $sum, $second, $first + $second); // Recursive call with next numbers
}

echo "Fev series plus their summation : ";
$sum = 0;
echo fibonacci(15, $sum);
echo "<br>Total sum of the series is: $sum";