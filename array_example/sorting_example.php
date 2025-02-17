<?php

$numbers = [5, 2, 9, 1, 8];
//var_dump($numbers);
sort($numbers); // Sorts in ascending order
echo "Sorted Array (Ascending): " . implode(", ", $numbers)."<br>";
//var_dump($numbers);


rsort($numbers); // Sorts in descending order
echo "Sorted Array (Descending): " . implode(", ", $numbers)."<br>";

$ages = [ "Roy" => 40, "Bob" => 22, "Jhon" => 35, "Alice" => 25];
asort($ages); // Sorts by values while preserving keys

echo "Sorted Associative Array (by Value):\n";
foreach ($ages as $key => $value) {
    echo "$key => $value\n";
}

ksort($ages); // Sorts the array by keys in ascending order (A-Z)
echo "<br>";
echo "Sorted Associative Array (by Key):\n";
foreach ($ages as $key => $value) {
    echo "$key => $value\n";
}


?>
