<?php

if(isset($_FILES['my_file']) && !empty($_FILES['my_file'])) {
    $file = $_FILES['my_file'];

    $uploaddirectory = "uploads/";
    /** Create the directory when there is no such folder exist */
    if(!file_exists($uploaddirectory)) {
        // Create the directory with appropriate read/write permission
        mkdir($uploaddirectory, 0777, true);
    }

    $destination = $uploaddirectory . basename($file['name']);
    if(move_uploaded_file($file['tmp_name'], $destination)) {
        echo "<p> The file upload is successfull";
    } else {
        echo "<H2> There was an issue on file uploder and we were not able to move the file. </H2>";
    }
} else {
    echo "<H2> There was an issue on file uploader. </H2>";
}