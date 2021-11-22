<?php

abstract class Person{

    public $name;
    public function __construct($name){
        $this->name = $name; 
    }
    abstract public function abc():string;
}

class vinit extends Person{
    public function abc():string{
        echo "My name is {$this->name} ";
    }
}

class Aman extends Person {
    public function abc():string{
        echo "Hi, i am {$this->name}";
    }
}

$obj= new vinit("vinit");
$obj->abc();

$obj1 = new Aman("Aman" );
$obj1->abc();
?>