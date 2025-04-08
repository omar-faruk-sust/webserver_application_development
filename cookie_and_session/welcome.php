<?php

if (isset($_COOKIE["remember_user"])) {
    echo "Welcome back, " . $_COOKIE["remember_user"];

    // unset/ delete the cookie
    setcookie("remember_user", "", time() - 3600, "/");
} else {
    echo "Welcome, new user!";
}
?>
