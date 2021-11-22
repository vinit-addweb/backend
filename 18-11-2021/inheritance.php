<?php

class Person{
    public $name;
    public $age;

    public function __construct($name,$age){
        $this-> name = $name;
        $this-> age = $age;
     }   
        function my(){
            return "My name is {$this->name} and my age is {$this->age} <br>";

        }
    
}

class child extends Person
{
    function city(){
        echo " Hi iam {$this->name} from sikar "; 
    }
}
$name = new child("vinit",24);

echo $name->my();

$name->city(); 


?>