<?php

$p = 4000;
$rate = 8;
$tyears = 2;
$s_intrest = ($p * $rate * $tyears)/100;
$amount = $p * pow((1 + $rate/100),$tyears);
$c_interst = $amount - $p;

echo $s_intrest." is simple intrest";
echo"<br>";
echo $c_interst."is Compound intrest";

?>