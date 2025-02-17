<?php

function findMaxNumber(array $arrayNumbers): int{
    $maxNumber = $arrayNumbers[0];

    //TODO: Define your logic
    $length = count($arrayNumbers);
    for ($i=0; $i < $length; $i++) {
        if($arrayNumbers[$i] < $maxNumber) {
            $maxNumber = $arrayNumbers[$i];
        }
    }

    return $maxNumber;
}

$numbers = [34,9,78,33,2,89,12,20,77, 120];
var_dump(min($numbers));
$number = findMaxNumber($numbers);
echo "The max number of this array is: $number";