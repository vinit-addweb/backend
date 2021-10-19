<php

$amt = 500;
$n_100 = 0;
$n_50 = 0;
$n_20 = 0;
$n_10 = 0;
$n_5 = 0;
$n_2 = 0;
if $amt >=100;
$n_100 = $amt / 100;
$amt = $amt- $n_100*100;
if $amt >50;
$amt= $amt - $n_50 * 50;
if $amt >20;
$amt= $amt - $n_20 * 20;
if $amt >10;
$amt= $amt - $n_10 * 10;
if $amt >5;
$amt= $amt - $n_5 * 5;
if $amt >2;
$amt= $amt - $n_2 * 2;

echo "100 = ".$n_100;




?>