<?php
// Function to add two numbers
function add($a, $b) {
    return $a + $b;
}

// Function to subtract two numbers
function subtract($a, $b) {
    return $a - $b;
}

// Function to multiply two numbers
function multiply($a, $b) {
    return $a * $b;
}

// Function to divide two numbers
function divide($a, $b) {
    if ($b == 0) {
        return "Error: Division by zero is not allowed.";
    }
    return $a / $b;
}

// Function to calculate the modulus of two numbers
function modulus($a, $b) {
    if ($b == 0) {
        return "Error: Division by zero is not allowed.";
    }
    return $a % $b;
}

// Example usage:
echo "Addition: " . add(10, 5) . "\n";         // Output: 15
echo "Subtraction: " . subtract(10, 5) . "\n"; // Output: 5
echo "Multiplication: " . multiply(10, 5) . "\n"; // Output: 50
echo "Division: " . divide(10, 5) . "\n";      // Output: 2
echo "Modulus: " . modulus(10, 5) . "\n";      // Output: 0
?>