<?php

require_once("Logger.php");
require_once("FileLogger.php");

require_once("DBLogger.php");

// $logger = new FileLogger('log.txt', 'w');
// $logger->log("Hello world!");

// $dbLogger = new DBLogger();
// $dbLogger->log("I am using DB logger!");

$loggers = [
    new FileLogger('log.txt', 'w'),
    new DBLogger()
];

foreach ($loggers as $logger) {
    $logger->log("I am writing logs into different ways!");
}