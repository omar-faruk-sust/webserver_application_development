<?php
echo "Odd numbers from 1 to 10:<br>";
$i = 1;
do {
    if ($i % 2 != 0) {
        echo $i . "<br>";
    }
    $i++;
} while ($i <= 10);


// The difference between while and do-while
echo "Print from 10 to 1: with while loop: <br>";
$i = 10; // Initialization
while (false) { // Condition
    echo $i . "<br>";
    $i--; // incriment/decriment
}

echo "Print from 10 to 1: with do-while loop:<br>";
$i = 10; // Initialization
do {
    echo $i . "<br>";
    $i--; // incriment/decriment
} while (false);

?>
