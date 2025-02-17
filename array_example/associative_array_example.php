<?php
// Create an associative array of students
$students = [
    "101" => ["name" => "Alice", "age" => 22, "course" => "Computer Science"],
    "102" => ["name" => "Bob", "age" => 24, "course" => "Mechanical Engineering"],
    "103" => ["name" => "Charlie", "age" => 23, "course" => "Electrical Engineering"]
];

// Function to display all students
function displayStudents($students) {
    echo "Student List:\n";
    foreach ($students as $id => $details) {
        echo "ID: $id | Name: {$details['name']} | Age: {$details['age']} | Course: {$details['course']}\n";
    }
    echo "<br> <br>";
}

// Function to add a new student
function addStudent(&$students, $id, $name, $age, $course) {
    if (!isset($students[$id])) {
        $students[$id] = ["name" => $name, "age" => $age, "course" => $course];
        echo "Student $name added successfully!<br> <br>";
    } else {
        echo "Student ID $id already exists!<br> <br>";
    }
}

// Function to remove a student
function removeStudent(&$students, $id) {
    if (isset($students[$id])) {
        unset($students[$id]);
        echo "Student with ID $id removed successfully!\n\n <br>";
    } else {
        echo "Student ID $id not found!\n\n <br>";
    }
}

// Function to update a student's details
function updateStudent(&$students, $id, $name = null, $age = null, $course = null) {
    if (isset($students[$id])) {
        if ($name !== null) {
            $students[$id]['name'] = $name;
        }

        if ($age !== null) {
            $students[$id]['age'] = $age;
        }

        if ($course !== null) {
            $students[$id]['course'] = $course;
        }
        echo "Student with ID $id updated successfully!\n\n <br>";
    } else {
        echo "Student ID $id not found!\n\n";
    }
}

// Display the initial list of students
displayStudents($students);

// Add a new student
addStudent($students, "104", "David", 21, "Civil Engineering");
addStudent($students, "102", "David", 21, "Civil Engineering");
displayStudents($students);

// Update a student’s details
updateStudent($students, "102", age: 25, course: "Aerospace Engineering"); // named argument/params introduced in php 8.0+
//updateStudent($students, "102", null, 25, "Aerospace Engineering"); // normally to call, php version < 8.0

// Remove a student
removeStudent($students, "103");

// Display the final list of students
displayStudents($students);
?>
