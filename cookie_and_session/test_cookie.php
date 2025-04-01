<?php
    //setcookie('username', 'test', time() + 3600);

    //echo "hello world";

    if(isset($_COOKIE['username'])) {
        echo "Hello cookie : ". $_COOKIE['username'];
    } else {
        echo "There was no cookie";
    }

    if(isset($_COOKIE['myName'])) {
        echo "Yes";
    } else {
        echo "No";
    }
?>