<?php
//$target = 30;
//$sortedArray = [1, 3, 5, 7, 9, 11, 13, 15, 30, 44];
function binarySearch(array $array, $target) {
    $low = 0;
    $high = count($array) - 1;
    
    //$Low = 0;
    //$high = 9

    // first itteration
    //$mid = 0 + 9 = 9/2 = floor(4.5) = 4
    //$low = $mid +1; 4+1 = 5;

    // 2nd itteration
    //$mid = 5 + 9 = 14/2 = floor(7.0) = 7
    //$low = 7 +1 = 8;

    // 3rd itteration
    //$mid = floor((8+9)/2) = floor(17/2) = floor(8.5) = 8;
    

    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);

        if ($array[$mid] == $target) {
            return $mid;
        } elseif ($array[$mid] < $target) {
            $low = $mid + 1;
        } else {
            $high = $mid - 1;
        }
    }

    return -1;
}


$sortedArray = [1, 3, 5, 7, 9, 11, 13, 15, 30, 44]; // Must be sorted
$target = 7;

$result = binarySearch($sortedArray, $target);

if ($result != -1) {
    echo "Element found at index: " . $result;
} else {
    echo "Element not found";
}
?>
