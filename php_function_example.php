<?php
$name = "Jhon";


function printBreak() {
    echo "<br>";
}

// Defining a function
//function function_name() {}
function greeting() {
    echo "hello world </br>";
}

// TO call a function in php just write the function_name and provide the required arg
greeting();

// argument/parameter
function greetingStudents($studentName) {
    echo "hello $studentName world </br>";
}

greetingStudents("Roy");
greetingStudents($name);

// Example with required params
function addition($a, $b) {
    return $a + $b;
}

// echo addition(12, 54);
$sum = addition(12, 54);
echo $sum . "<br>";

addition(2,3);

// Example with optional params, $number3 is optional param
function multiplication($number1, $number2, $number3 = 1) {
    return $number1 * $number2 * $number3; 
}

echo multiplication(2, 3); // 2 * 3 * 1
printBreak();
echo multiplication(2, 3, 5); // 2 * 3 * 5
printBreak();

// Example of dynamic arguments
function sum(...$numbers) {
    //var_dump($numbers);
    $result = 0;

    // foreach ($numbers as $number) {
    //     $result += $number;
    // }
    // return $result;

    for($i = 0 ; $i < count($numbers); $i++) {
        $result += $numbers[$i];
    }

    return $result;
}

echo "#### Example of multi arguments: ######## <br>";
echo sum(4,87,85); printBreak();
echo sum(4,4,2,7); printBreak();
echo sum(4,4,2,7,9); printBreak();
echo sum(4,4,2,7,9,56,5,52,40,50,5); printBreak();


function connectToDatabase($host = "localhost", $username = "root", $password = null) {
    if ($password === null) {
        echo "Password is required!"; 
        printBreak();
        return;
    }
    echo "Connecting to $host with username $username...";
    printBreak();
}
connectToDatabase(); // Output: Password is required!
connectToDatabase("localhost", "root", "secret"); // Output: Connecting to localhost with username root...


function calculateArea($length = 10, $width = 5) {
    return $length * $width;
}
echo calculateArea(); // Output: 50
printBreak();
echo calculateArea(7); // Output: 35
printBreak();
echo calculateArea(7, 3); // Output: 21
printBreak();



function sendEmail($recipient, $subject = "No Subject", $body = "No Content") {
    echo "Sending email to $recipient with subject: $subject";
}
sendEmail("user@example.com");
sendEmail("user@example.com", "Welcome", "Your account is active!");
?>