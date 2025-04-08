<?php
session_start();

//unset the session and destroy the session
session_unset();
session_destroy();

// unset the cookie
setcookie('remember_user', $user['username'], time() - 3600);

// Redirecting the user to login
header("Location: login.php");
exit;

?>