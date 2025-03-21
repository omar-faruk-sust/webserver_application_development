<?php

class DBLogger implements Logger {
    
    public function log($msg)
    {
        echo sprintf("Log the message into DBLogger %s \n", $msg);
    }
}