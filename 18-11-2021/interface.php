<?php
interface Person {
  public function my();
}

interface Family{
    public function family();
}
class Vinit implements Person,Family {
  public function my() {
    echo "Hello";
  }
  public function family(){
      echo "This is family";
  }
}

$p = new Vinit();
$p->my();
echo "<br>";


$p->family(); 

?> 