<?php
class ConsoleDumper extends Dumper {
    public function dump($data)
    {
        var_dump($data);  
        die('On console Dumper');
    }
}
?>