<?php

// Creating a one-dimensional indexed array
$fruits = ["Apple", "Banana", "Cherry"];

// Accessing elements
echo $fruits[0] . "<br>"; // Output: Apple
echo $fruits[1] . "<br> </br>"; // Output: Banana

// Looping through the array
echo "Printing all the elements of array using foreach loop: </br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

// Looping through the array with for loop as it's numeric array
echo "<br> Printing all the elements of array using forloop: </br>";
for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . "<br>";
}

echo "<br>Example of Creating an associative array : <br>";
// Creating an associative array
$student = [
    "name" => "John Doe",
    "age" => 20,
    "course" => "Computer Science"
];

// Accessing elements
echo "Student Name: " . $student["name"] . "<br>";
echo "Age: " . $student["age"] . "<br>";
echo "Course: " . $student["course"] . "<br><br>";

// Looping through associative array
foreach ($student as $key => $value) {
    echo "$key: $value <br>";
}

// Creating a 2D array (array of arrays)
echo "<br>Example of 2D array with numeric index: <br>";
$students = [
    ["John", 20, "Computer Science"],
    ["Alice", 22, "Mathematics"],
    ["Bob", 21, "Physics"]
];

// Accessing elements
echo "Name: " . $students[0][0] . ", Age: " . $students[0][1] . ", Course: " . $students[0][2] . "<br>";

// Looping through a 2D array
foreach ($students as $student) {
    echo "Name: " . $student[0] . ", Age: " . $student[1] . ", Course: " . $student[2] . "<br>";
}


echo "<br>Example of 2D array with string index: <br>";
$twoDymentionalArray = [
    ["name" => "John Doe","age" => 20,"course" => "Computer Science"],
    ["name" => "James Boe","age" => 30,"course" => "Computer Engineering"],
    ["name" => "Jhon Roy","age" => 45,"course" => "Information Science"],
    ["name" => "Robin Doe","age" => 35,"course" => "Medical Science"]
];
var_dump($twoDymentionalArray[3]["name"]);

for ($i = 0; $i < count($twoDymentionalArray); $i++) {

    // echo "Name: " . $twoDymentionalArray[$i]['name'];
    // echo ", Age: " . $twoDymentionalArray[$i]['age'];
    // echo ", Course: ". $twoDymentionalArray[$i]['course'] . '<br>';

    //var_dump($twoDymentionalArray[$i]);

    foreach($twoDymentionalArray[$i] as $studentInfo) {
        echo $studentInfo . "<br>";
    }
}


