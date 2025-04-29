<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data using $_POST
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $age = (int) $_POST['age'];

    // Manipulate variables
    $uppercaseName = strtoupper($name);
    $welcomeMessage = "Welcome, $name!";
    $ageNextYear = $age + 1;

    // Display the processed data
    echo '<h2 style="color: red;">Form Data Processed</h2>';
    echo "<p>Name: $uppercaseName</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Age: $age</p>";
    echo "<p>Next Year, you will be $ageNextYear years old.</p>";
    echo "<p>$welcomeMessage</p>";
} else {
    echo "<h2>Please fill out the form below.</h2>";
}

