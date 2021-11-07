<?php

$num = $_GET ['rev'];

$t=0;
for($c = 3; $num>$c; $c++){
  if($num % $c ==0){
      echo "$num is not a prime number";
      $t=1;
      break;
  }   

}
if($t==0){
    echo"$num is prime Number";
}

?>