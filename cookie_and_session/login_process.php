<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    if (isset($_POST["remember_me"])) {
        setcookie("remember_user", $email, time() + 86400 * 30, "/");
        echo "cookie set! </br>";
    }

    echo "Welcome, $email";
}
?>
