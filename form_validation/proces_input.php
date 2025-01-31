<?php
    
    /*if ($_SERVER["REQUEST_METHOD"] == "POST") {

        ////?name=<script>alert('Hacked!');</script>
        $name = htmlspecialchars(trim($_POST['name']));
        if(!empty($name) && strlen($name) > 2 && strlen($name) < 11
         ) {
            echo 'Your name is : '.$name .'<br>';
        } else {
            echo "Your name does not fit with our rule <br>";
        }

        //$email = "test<script>alert('XSS');</script>@example.com";
        $email = trim($_POST['email']);
        if (empty($email)) {
            echo "Email is required.<br>";
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format.<br>";
        } else {
            echo "Your email is: ".  $email . "<br>";
        }

        $username = trim($_POST['username']);
        if (preg_match("/^[a-zA-Z0-9_]{5,15}$/", $username)) {
            echo "Your username is : $username <br>";
        } else {
            echo "Invalid username! <br>";
        }

        $password = $_POST['password'];
        if (empty($password)) {
            echo "Password is required.<br>";
        } elseif (strlen($password) < 8) {
            echo "Password must be at least 8 characters long.<br>";
        } else {
            echo "Your password is valid <br>";
        }

        $gender = $_POST['gender'];
        echo "Gender: $gender <br>";

        $country = $_POST['country'];
        echo "Country: $country <br>";
    
    }*/


     //empty() // "", 0, false, null
        // isset() // to check if an index is exist in an array
// Example of isset and empty
// $array = ["name", "age" => 34 , "phone" => false, "1998-09-33"];
//     var_dump($array);
//     if(isset($array['phone']) && !empty($array['phone'])) {
//         echo "Yes this index is set and value is not empty";
//     } else {
//         echo "The value is empty";
//     }

    $errors = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        ////?name=<script>alert('Hacked!');</script>
        $name = htmlspecialchars(trim($_POST['name']));
        if(!empty($name) && strlen($name) > 2 && strlen($name) < 11
         ) {
            echo 'Your name is : '.$name .'<br>';
        } else {
            $errors[] = "Your name does not fit with our rule";
        }

        //$email = "test<script>alert('XSS');</script>@example.com";
        $email = trim($_POST['email']);
        if (empty($email)) {
            $errors[] = "Email is required";
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format";
        } else {
            echo "Your email is: ".  $email . "<br>";
        }

        $username = trim($_POST['username']);
        if (preg_match("/^[a-zA-Z0-9_]{5,15}$/", $username)) {
            echo "Your username is : $username <br>";
        } else {
            $errors[] = "Invalid username!";
        }

        $password = $_POST['password'];
        if (empty($password)) {
            $errors[] = "Password is required";
        } elseif (strlen($password) < 8) {
            $errors[] = "Password must be at least 8 characters long.";
        } else {
            echo "Your password is valid <br>";
        }

        $gender = $_POST['gender'];
        echo "Gender: $gender <br>";

        $country = $_POST['country'];
        echo "Country: $country <br>";
    }

    var_dump($errors);

    if(empty($errors)) {
        echo "You passed your from validation and sucessfully submited your from";
    } else {
        // foreach($errors as $key => $error) {
        //     var_dump($key);
        //     var_dump($error);
        //     echo "<p style='color:red;'> $error </p>";
        // }

        $length = count($errors);
        for ($i = 0; $i < $length; $i++) {
            echo "<p style='color:red;'> $errors[$i] </p>";
        }
    }
?>