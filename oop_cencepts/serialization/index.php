<?php
require "User.php";

$user = new User("Puspak", "puspak@gmail.com", 24);
//$user->displayInfo();

// Put the serialized object into a file
$serializedUser = serialize($user);
file_put_contents('user.txt', $serializedUser);

// get the serialized obect from a file by unserialize method
$serializedUserFromFile = file_get_contents('user.txt');
$userObject = unserialize($serializedUserFromFile);
$userObject->displayInfo();