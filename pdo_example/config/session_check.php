<?php
session_start();

if(!isset($_SESSION['username'])) {
    header("Location: ../../auth/public/login.php");
    exit;
}
?>