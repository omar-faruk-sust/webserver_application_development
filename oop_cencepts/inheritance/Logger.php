
<?php

trait Logger {
    public function log($msg) {
        echo "<pre>";
        echo date('F j, Y, g:i a') . ": (". __CLASS__ .") ". $msg ."\n";
        echo "</pre>";
    }
}