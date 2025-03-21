<?php
require "Dumper.php";
require "WebDumper.php";
require "DumperFactory.php";

// $webDumper = new WebDumper();
// $webDumper->dump(['name' => 'test', 'age' => 23]);

$dumper = DumperFactory::getDumperName();
$dumper->dump([['name' => 'test', 'age' => 23]]);

