<?php

function print_break()
{
    echo "</br>";
}

$firstName = "John";
$lastName = "Doe";

$fullName = $firstName . " " . $lastName;
echo $fullName; // Output: John Doe
print_break();

$age = 29;
echo "fsdfsssssss" . " sdsdfsds" . "skgksjdfksd" . "sdfsdfsdfsd   " . (string) $age;
print_break();

$text = "Hello, PHP!";
echo strlen($text); // Output: 11
print_break();

$message = "Welcome to PHP!";
echo substr($message, 0, 9); // Output: Welcome t
print_break();

echo substr($message, 0, 2); // Output: we
print_break();

$text = "I love Java.";
$newText = str_replace("Java", "PHP", $text);
echo $newText; // Output: I love PHP.
print_break();

$text = "Hello World!";
echo strtoupper($text); // Output: HELLO WORLD!
print_break();

echo strtolower($text); // Output: hello world!
print_break();

$text = "I am learning PHP!";
$position = strpos($text, "PHP");
echo $position; // Output: 14
print_break();

$text = "Hello World";
echo strrev($text); // Output: dlroW olleH
print_break();

$text = "   Hello, PHP!   ";
echo trim($text); // Output: Hello, PHP!
print_break();

$text = "PHP is fun. PHP is popular.";
echo substr_count($text, "PHP"); // Output: 2
print_break();

$text = "apple,banana,cherry";
$array = explode(",", $text);
print_r($array);
// Output: Array ( [0] => apple [1] => banana [2] => cherry )
print_break();

$array = ["apple", "banana", "cherry"];
$text = implode(", ", $array);
echo $text; // Output: apple, banana, cherry
print_break();

$text = implode(": ", $array);
echo $text; // Output: apple: banana: cherry
print_break();

$string1 = "Hello";
$string2 = "hello";

$result = strcmp($string1, $string2);
if ($result === 0) {
    echo "The strings are equal.";
} else {
    echo "The strings are not equal.";
}
// Output: The strings are not equal.
