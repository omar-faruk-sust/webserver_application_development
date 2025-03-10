<?php

// Quention-1 ans: started
function ddd() {

}

ddd();

// End of question-1

// Question-2 ans started


//end of question-2

$x = 5;
$final = (++$x > 5 && $x < 10)? "Pass" : "Fail";

$string = "PHP is fun";
$parts = explode(" ", $string);
$word = $parts[1];


function factorial($n) {
    return $n= 0 ? 1 : $n * factorial($n -1);
}

$output = factorial(4);

for($i; $i <=2; $i++) {
    for($j = 1; $j <=3; $j++) {
        $product = $i * $j;
        echo "i = $i, j = $j: Product = $product\n";
    }
}