<?php
class DumperFactory {
    public static function getDumperName() {
        return PHP_SAPI === 'cli' 
        ? new ConsoleDumper() 
        : new WebDumper();
    }
}
?>