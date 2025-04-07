<?php

    // Give the proper path from which the file you want to read/write
    $filename = '../files/sample.txt';

    /** This is the example of writing into a file */
    $writeFileHandler = fopen($filename, "w");
    if($writeFileHandler) {
        fwrite($writeFileHandler, "Hello world, I am coming from php! \n");

        fwrite($writeFileHandler, "I like PHP! \n");

        fclose($writeFileHandler);

        echo "<H2> Writing in the file was successful. </H2>";
    } else {
        echo "<H2> There was an issue to open the file in write mode. </H2>";
    }

    /** This is the example of reading from a file */
    $readFileHandler = fopen($filename, 'r');
    if($readFileHandler) {
        echo "<h3> File path: ". $filename . " </h3><pre>";
        
        while(!feof($readFileHandler)) {
            echo htmlspecialchars(fgets($readFileHandler));
        }

        fclose($readFileHandler);
        echo "</pre>";
    } else {
        echo "<H2> There was an issue to open the file in read mode. </H2>";
    }
?>