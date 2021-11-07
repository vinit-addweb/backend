<?php

$num = $_POST ['sum'];
$n;
$sum=0;
while($num >0){
    $n = ($num % 10);
   $n = (int)($n);
    $sum = $sum + $n;
    $num = $num / 10;
    $num = (int)($num);
    
}
echo "Sum of digits: ".$sum;
?>