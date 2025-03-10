<?php
// Example of array_merge
$array1 = ["apple", "banana"];
$array2 = ["cherry", "date"];

$result = array_merge($array1, $array2);
echo "With php function array_merge: ";
echo "<pre/>"; print_r($result);

// array_merge without using the php array_merge function
$arrayResult = $array1;
$count = count($array2);
for($i = 0; $i < $count; $i++) {
    $arrayResult[] = $array2[$i];
}
echo "Without php function array_merge: ";
print_r($arrayResult);


// Example of array_combine
$keys = ["name", "age", "city"];
$values = ["Alice", 25, "New York"];
echo "With php function array_combine: ";
$result = array_combine($keys, $values);
print_r($result);

// array_merge without using the php array_merge function
$combinedArray = [];
$countArray1 = count($keys);
$countArray2 = count($values);

if ($countArray1 == $countArray2) {
    for($i = 0; $i < $countArray1; $i++) {
       $combinedArray[$keys[$i]] = $values[$i];
    }
}
echo "Without php function array_combine: ";
print_r($combinedArray);

// Example of array_keys
$data = ["name" => "John", "age" => 30, "city" => "London"];
echo "Without php function array_keys: ";
$keys = array_keys($data);
print_r($keys);


echo "Without php function array_keys: ";
$arrayKeys = [];
foreach($data as $key => $value) {
    $arrayKeys[] = $key;
}
print_r($arrayKeys);

// Example of array_value
$data = ["name" => "John", "age" => 30, "city" => "London"];
echo "With php function array_value: ";
$values = array_values($data);
print_r($values);

// Array_key_exist
var_dump(array_key_exists("name", $data));
var_dump(array_key_exists("county", $data));

// Example of array_map
$numbers = [1,2,3,4,5,6];
$squared = array_map(function($num) {
    return $num * $num;
}, $numbers);

print_r($squared);

// Example of array_map
// Define the callback function
function square($number) {
    return $number * $number;
}

// Array of numbers
$numbers = [1, 2, 3, 4, 5];

// Pass the 'square' function as a callback
$squaredNumbers = array_map('square', $numbers);

print_r($squaredNumbers);

