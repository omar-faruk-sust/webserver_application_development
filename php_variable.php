<?php

    $name = "Kashyap";  // variable
    ; // this is valid statement in php

    echo $name;    
    echo "</br>"; // To create new new line or break in the page

    $_age = 20;  // variable

    var_dump($_age);

    $Name = "Ishan";
 
    print($Name);

    $isNumber = true;

    var_dump($isNumber); // with var_dump() you can see the data type and values

    print($name);

    $langArea = 2.09; //float
    $calculated_area = 9.999999999999999999332222; # float/double

    $sentence = 'Hello, i am a student of lasalle college.';
    
    echo $sentence;

    $name = "Jhon"; // overwritting the value of name variable here

    echo $name;

    $myNames = ["Kashyp", "Jhon", 56, "Guzman"]; // $myArray = []; $myArray = array(); 
    var_dump($myNames);
    echo $myNames[2];

    $myArray = array("Omar", "teacher");
    var_dump($myArray);

    $isPayment = NULL;
    $isOwn ='';

    var_dump($isPayment);

    var_dump($isOwn);
    

    $myBalance = - 239944;
    var_dump($myBalance);

    if(is_int($calculated_area)) {
        echo "yes, it's float";
    } else {
        echo "No, It's not";
    }

    //PHP is a losely type of language.

    echo phpinfo();

?>