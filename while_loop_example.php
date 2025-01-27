<?php
echo "Odd numbers from 1 to 10:<br>";
$i = 1; // Initialization
while ($i <= 10) { // Condition
    if ($i % 2 != 0) {
        echo $i . "<br>";
    }
    $i++; // incriment/decriment
}


// Print From 10 to 1

echo "Print from 10 to 1:<br>";
$i = 10; // Initialization
while ($i >= 1) { // Condition
    echo $i . "<br>";
    $i--; // incriment/decriment
}

