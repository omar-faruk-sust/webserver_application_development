<?php
session_start();

$_SESSION['name'] = "Miah";

if (isset($_SESSION['name'])) {
    echo "Before:";
    var_dump($_SESSION);

    //session_destroy();
    //$_SESSION = [];
    
   //unset($_SESSION['name']);

    echo "<br>After: ";
    var_dump($_SESSION); 
    header("Location: session_welcome.php");

} else {
    die("There is no data on session");
}

?>