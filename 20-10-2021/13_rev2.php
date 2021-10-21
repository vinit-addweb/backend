<?php

$num = $_GET ['sum'];
$n;
$sum=0;
while($num >0){
    $n = ($num % 10);
   $n = (int)($n);
    $sum = $sum + 1;
    $num = $num / 10;
    $num = (int)($num);
    
}
echo "Sum of digits: ".$sum;
?>