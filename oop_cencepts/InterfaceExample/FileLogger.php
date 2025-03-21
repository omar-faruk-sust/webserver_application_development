<?php

class FileLogger implements Logger {

    private $handler;
    private $logFileName;

    public function __construct($logFileName , $mode = 'a')
    {
        $this->logFileName = $logFileName;
        try {
            // open the file and assign to the varible
            $this->handler = fopen($logFileName, $mode);
        } catch (Exception $e) {
            throw $e->getMessage();
        }
        
    }

    public function log($msg)
    {
        $message = date('F j, Y, g:i a') . ": " . $msg ."\n";
        // Write to the opened file
        fwrite($this->handler, $message);
    }

    public function __destruct()
    {
        // Close the file if it's opned
        if($this->handler) {
            fclose($this->handler);
        }
    }
}
?>