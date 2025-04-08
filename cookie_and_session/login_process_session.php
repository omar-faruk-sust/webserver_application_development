<?php
session_start();

const EMAIL = "jhon@gmail.com";
const PASS = "123456";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if($email == EMAIL && $password == PASS) {
        $_SESSION['name'] = $email;
    }

    header("Location: session_welcome.php");
}

?>
