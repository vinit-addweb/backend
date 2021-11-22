<?php
class Person{
    public $name;
    public $city;

   function myname($name){
       return $this->name= $name;
   } 

   function mynam(){
       return $this->name;
   }

   function mycity($city){
       return $this->city = $city;

   }
   function myciti(){
      
    return $this->city;
}
}

$nam = new Person();

$nam->myname('vinit');

echo "My name is ",$nam->mynam(),"<br>";

$city = new person();

$city-> mycity('sikar');

echo "City is ",$city-> myciti();



?>