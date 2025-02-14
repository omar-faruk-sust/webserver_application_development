<?php

$array_name = array(); // one way array("jhon", "Kapi");
$array_roll = []; // another way  ["jhon", "Kapi"]

var_dump($array_name);


$array_name[] = "Jhon"; // this is how we add an item/value to an array
var_dump($array_name);

$array_name['myname'] = "Kapi";
var_dump($array_name);

$associtiveArray = [
    "name" => "Kapi",
    "age" => 23
];
var_dump($associtiveArray);

$indexArray = ["Kapi", 23]; // numeric / index array when the inde/key is numeric value
//$indexArray = [0 => "Kapi", 1 => 23];
var_dump($indexArray);

// Add an item/element to an existing array

//$associtiveArray += ['dob' => '1994-12-10'];
// [ "name" => "Kapi","age" => 23] + ['dob' => '1994-12-10']
$associtiveArray['dob'] = '1994-12-10';
$associtiveArray[] = "Hello";
var_dump($associtiveArray);

array_push($associtiveArray, '220020283', '312321321', '23132132');
var_dump($associtiveArray);


// Remove an item/element to an existing array
unset($associtiveArray[0]); // removing/unsetting en item/element from array
var_dump($associtiveArray);

array_pop($associtiveArray);  // removing/unsetting en item/element from array
var_dump($associtiveArray);


$arrayLength = count($associtiveArray);
echo "Array length is : $arrayLength <br>";


// Accessing the elements from array
echo "Date Of Birth is: " . $associtiveArray['dob'] . "<br>";
echo "Access the value of numeric index: ". $associtiveArray[1];

foreach($associtiveArray as $key => $value) {
    echo ' <br><p style="color:red">The key is: '.$key.' </p> and the value is : '.$value;
}

// Looping though an indexed/numeric array
echo "<br> Looping though an indexed/numeric array";
for($i=0; $i < count($indexArray); $i++) {
    echo "<br>" . $indexArray[$i];
}