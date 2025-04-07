<?php
    declare(strict_types=1);
     
    function add(int $a, int $b): int {
        return $a + $b;
    }

    // Without strict mode
    //echo add(4, 5) . "<br>";
    //echo add("4", 6);

    //strict mode
    //echo add("4", 6) . "</br>"; // This will work on losely mode but not in strict mode


    function eligibleToVote(int $age): bool {
        if($age >= 18) {
            return true;
        }
 
        return "No you can not vote";
    }

    var_dump(eligibleToVote(11));

?>