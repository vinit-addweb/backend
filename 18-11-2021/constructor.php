<?php

class Vinit {
    public $name;

    public function __construct($name){
        $this-> name = $name;

        echo "my name is {$this->name}";
    }
}
$name = new vinit("Vinit");


?>