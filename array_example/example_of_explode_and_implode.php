<?php
$text = "John|Doe|25|Engineer";
$person = explode("|", $text, 3); // Limit to 3 parts

echo "<pre>"; 
print_r($person);
echo "</pre>";

$sentence = "PHP is a popular scripting language";
$words = explode(" ", $sentence); // Split by space

echo "<pre>"; 
print_r($words);
echo "</pre>";

$text = "Apple,Orange,Banana,Grapes";
$fruits = explode(",", $text); // Split by comma

echo "<pre>"; 
print_r($fruits);
echo "</pre>";

$numbers = [5, 2, 9, 1, 8];
echo "Array: " . implode(", ", $numbers)."<br>";
