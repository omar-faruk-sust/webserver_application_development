<?php
session_start();

if(isset($_SESSION['name'])) {
    echo "Welcome back " . $_SESSION['name']; 
} else {
    echo "No session";
}

?>