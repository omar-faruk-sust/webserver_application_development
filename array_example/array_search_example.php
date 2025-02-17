<?php

$fruits = ["Apple", "Banana", "Orange"];
echo $fruits[0]. "<br>"; // Output: Apple

$person = [
    "name" => "John",
    "age" => 25,
    "city" => "New York"
];
echo $person["name"]. "<br>"; // Output: John


$cars = ["Toyota", "Ford", "BMW"];
echo count($cars). "<br>"; // Output: 3

$colors = ["red", "green", "blue"];
$key = array_search("green", $colors);
echo "Array search for value green :". $key . "<br>"; // Output: 1
$blackKey = array_search("black", $colors);
var_dump($blackKey);
echo "Array search for value black :". $blackKey . "<br>"; // Output: 0/false

# Example of array reset
echo "Example of array reset <br>";
$animals = ["cat", "dog", "elephant"];
foreach ($animals as $key => $animal) {
    echo $animal . "<br>";

    if($animal == 'dog') {
        var_dump(reset($animals));
    }
}

echo reset($animals). "</br>"; // Output: cat

//Alternative way to declare an indexed array
$numbers = array(88, 7, 34, 10, 20, 30, 40, 99); // n-1 = 8-1 = 7 (last index)
echo array_search(7, $numbers) ."<br>";



$lengthOfNumbersArray = count($numbers); // 8
$searchedNumber = 990;
for($i=0; $i < $lengthOfNumbersArray; $i++) {

    // If the value of i=7 that means, 
    // $numbers[7] is the last element of the array we traversing
    // if($i == $lengthOfNumbersArray) {
    //     echo "The number $searchedNumber exist not in this array <br>";
    //     break;
    // }

    // $numbers[0], $numbers[1], $numbers[2], $numbers[3],
    // $numbers[4], $numbers[5], $numbers[6], $numbers[7],
    if ($searchedNumber == $numbers[$i]) {
        echo "The number $searchedNumber exist in this array <br>";
        break;
    } else if($i == $lengthOfNumbersArray - 1) {
        echo "The number $searchedNumber exist not in this array <br>";
    }

    // Example of reset() function

}