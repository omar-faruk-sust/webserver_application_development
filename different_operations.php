<?php


#declare(strict_types=1);

function print_break()
{
    echo "</br>";
}

# Example Arithemitic operator  (+,-,*,/, %)
echo "# Example Arithemitic operator  (+,-,*,/, %)";
print_break();

$a = 10;
$b = "10";

// Arithemetic operator
var_dump("Addtion of a + b: " . $a + $b);
var_dump("Substruction of a - b: " . $a - $b);
var_dump("Multiplication of a * b: " . $a * $b);
var_dump("Divition of a / b: " . $a / $b);
var_dump("Modules of a % b: " . $a % $b);

# End of Arithemitic operator 

# Example Comparision operator (==, !=, >, <, >=, <=, <=>, ===)
echo "# Example Comparision operator (==, !=, >, <, >=, <=, <=>, ===)";
print_break();

//$d = $a == $b; // 20 == 10

var_dump($a == $b);  /// == check only values

$x = 10;
$y = "10";
var_dump($x === $y); // === checks variable type and value

var_dump($x > $y);
var_dump($x < $y);
var_dump($x >= $y);
var_dump($x <= $y);
var_dump($x != $y);


$a = 5;
$b = 10;

# Spaceship operator
echo $a <=> $b; // Output: -1 (because 5 is less than 10)
print_break();
echo $b <=> $a; // Output: 1 (because 10 is greater than 5)
print_break();
echo $a <=> $a; // Output: 0 (because both are equal)
print_break();

# This is the example for string comparision
$str1 = "apple";
$str2 = "banana";

echo $str1 <=> $str2; // Output: -1 (because "apple" comes before "banana") 
print_break();

echo $str2 <=> $str1; // Output: 1 (because "banana" comes after "apple")
print_break();

echo $str1 <=> $str1; // Output: 0 (because both strings are the same)
print_break();

# end of Comparision operator

# Example Logical operator (||, &&)
echo "Example Logical operator (||, &&)";
print_break();

$number1 = 90;
$number2 = 40;

// && conditon
var_dump(true && false);    // false
var_dump(true && true);     // true
var_dump(false && true);    // false
var_dump(false && false);   // false 


$myAge = 100;
$money = 1000;

var_dump($myAge == $number1 && $money > $number2); // 100 == 90 &&  1000 > 40 ==> false && true ==> false
// true, ariyan
// false, Poshyap, kapi, sujal, false


if ($myAge == $number1 && $money > $number2) {
    echo "You are on the true condition";
} else {
    echo "You are on the else conditon";
}

// Or condition
var_dump(true || false);    // true
var_dump(true || true);     // true
var_dump(false || true);    // true
var_dump(false || false);   // false

var_dump($myAge == $number1 || $money > $number2); // false || true ==> true

# end of Logical operation

echo "# Example Logical Operation (=, +=, -=, *=, /=, .=)";
print_break();
# Example assignment operators (=, +=, -=, *=, /=, .=)

$name = "Jhon";
var_dump($name);

$myAge = 10;
$myAge += 30;  // $myAge = $myAge+30;
var_dump($myAge); 

$balance = 100;
$widraw = 90;
$deposit = 200;

echo "The current balance is: " . $balance;
print_break();

$balance += $deposit; //300    //$balance = $balance + $deposit;
echo "The new balance after depositing ". $deposit . " the money is: " . $balance;
print_break();

$balance -= $widraw; // 10    // $balance = $balance - $widraw;
echo "The new balance after widraw ". $widraw . " the money is: " . $balance;

# end of Comparision operator

# Example incriement/decriment Operation (++$var, $var++, --$var, $var-- )"
echo "# Example incriement/decriment Operation (++$var, $var++, --$var, $var-- )";
print_break();

$counter = 5;

//$conter = $counter + 1 is equal to ++
//$conter = $counter - 1 is equal to --

// Pre-incriment
var_dump(++$counter); //  // Output: 6
var_dump($counter);   // Output: 6

// Post incriment

//$conter += $conter; 
//$conter =+ $conter;

$counter = 5;
var_dump($counter++); // Output: 5
var_dump($counter);   // Output: 6

$counter = 5;
var_dump(--$counter); // Output: 4
var_dump($counter);   // Output: 4

$counter = 5;
var_dump($counter--); // Output: 5
var_dump($counter);   // Output: 4

// Combine with other operators
$x = 10;
$y = ++$x + 5; // $x is incremented first, then added to 5.
var_dump($y);  // Output: 16
var_dump($x);  // Output: 11

# End of assignment operators