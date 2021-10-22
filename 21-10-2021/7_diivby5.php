<?php


function div ($arr){
$sum = 0;


foreach($arr as $n){
    if($n % 5 == 0){
        $sum = $sum + 1;
    }
    else{
        continue;
    }
}

echo "<br>", "Total divisible by 5 is  ".$sum;
}
$ary = array(82,5,6,25,10,8,1,8);
div($ary)
?>