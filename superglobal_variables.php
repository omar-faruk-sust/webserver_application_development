<?php

    // Example of numerical array
    $myArray = [3, "Jhon", 6.8, 8, 9,33]; // 66 items in the array, so length is n = 6, index = n - 1
    $my =  array("dd"); // one item in the array, length = 1
    //echo $myArray[1];
    //var_dump($myArray);

    // example of associative array
    $associativeArray = ["student_name" => "Michelle", "registration_number" => "20098778", "dob" => "1999-12-02"];
    // var_dump($associativeArray);
    // echo $associativeArray["registration_number"];
    // echo "<br>";
    // echo $associativeArray['dob'];
 

    $numberOne = 20;
    $numberTwo = 90;

    /*function multipication($x, $y) {
        $result = $x * $y;

        return $result;
    }*/

    function multipication() {
        $result = $GLOBALS['numberOne'] * $GLOBALS['numberTwo'];

        return $result;
    }

    var_dump($GLOBALS);

    echo multipication($numberOne, $numberTwo);

   
?>