<?php

$age = 20;

if ($age >= 18) {
    var_dump("You are an adult."); // Output:
}


$age = 16;
if ($age >= 18) {
    var_dump("You are an adult.");
} else {
    var_dump("You are a minor."); // Output:
}


$marks = 55;
if ($marks >= 90) {
    var_dump("Grade: A");
} elseif ($marks >= 75) {
    var_dump("Grade: B"); // Output: 
} elseif ($marks >= 50) {
    var_dump("Grade: C");
} else {
    var_dump("Grade: F");
}


$age = 20;
$hasID = false;

if ($age >= 18) {
    if ($hasID) {
        var_dump("You can enter."); // Output: 
    } else {
        var_dump("Please bring your ID.");
    }
} else {
    var_dump("You are not old enough to enter.");
}


$day = "Monday";

switch ($day) {
    case "Monday":
        var_dump("Start of the week!"); // Output: string(17) "Start of the week!"
        break;
    case "Friday":
        var_dump("Weekend is near!");
        break;
    case "Sunday":
        var_dump("It's the weekend!");
        break;
    default:
        var_dump("Just another day.");
}


$name = "Jhon";
$result = $name ?? "Guest"; //(exression true) ? statement_1 : statement_2; 
var_dump($result); // Output:
// $name !=null ? $name ? "Guest" ===> $name ?? "Guest"

$output = $name !=null ? $name : "Guest";
var_dump($output); // Output:

$age = 20;
$hasID = false;

if ($age >= 18 && $hasID) {
    var_dump("You can enter.");
} else {
    var_dump("You cannot enter."); // Output: string(15) "You cannot enter."
}
